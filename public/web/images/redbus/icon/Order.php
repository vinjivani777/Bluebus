<?php

namespace App\Models\Web;

use App\Http\Controllers\Web\AlertController;
use App\Models\Web\Cart;
use App\Models\Web\Currency;
use App\Models\Web\Index;
use App\Models\Web\Products;
use Auth;
use Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Lang;
use Session;

class Order extends Model
{

    //place_order
    public function place_order($request)
    {
        $cart = new Cart();
        $result = array();
        $result['cart'] = $cart->myCart($result);
        if (count($result['cart']) > 0) {
            foreach ($result['cart'] as $products) {
                $req = array();
                $attr = array();
                $req['products_id'] = $products->products_id;
                if (isset($products->attributes)) {
                    foreach ($products->attributes as $key => $value) {
                        $attr[$key] = $value->products_attributes_id;
                    }
                    $req['attributes'] = $attr;

                }
                $check = Products::getquantity($req);
                if ($products->customers_basket_quantity > $check['stock']) {
                    session(['out_of_stock' => 1]);
                    session(['out_of_stock_product' => $products->products_id]);
                    return redirect('viewcart');
                }
            }
        }

        $date_added = date('Y-m-d h:i:s');
        if (Session::get('guest_checkout') == 1) {
            $email = session('shipping_address')->email;
            $check = DB::table('users')->where('role_id', 2)->where('email', $email)->first();
            if ($check == null) {
                $customers_id = DB::table('users')
                    ->insertGetId([
                        'role_id' => 2,
                        'email' => $email = session('shipping_address')->email,
                        'password' => Hash::make('123456dfdfdf'),
                        'first_name' => session('shipping_address')->firstname,
                        'last_name' => session('shipping_address')->lastname,
                        'phone' => session('billing_address')->billing_phone,
                    ]);
                session(['customers_id' => $customers_id]);
            } else {
                $customers_id = $check->id;
                $email = $check->email;
                session(['customers_id' => $customers_id]);
            }
        } else {
            $customers_id = auth()->guard('customer')->user()->id;
            $email = auth()->guard('customer')->user()->email;
        }
        $delivery_company = session('shipping_address')->company;
        $delivery_firstname = session('shipping_address')->firstname;

        $delivery_lastname = session('shipping_address')->lastname;
        $delivery_street_address = session('shipping_address')->street;
        $delivery_suburb = '';
        $delivery_city = session('shipping_address')->city;
        $delivery_postcode = session('shipping_address')->postcode;
        $delivery_phone = session('shipping_address')->delivery_phone;

        $delivery = DB::table('zones')->where('zone_id', '=', session('shipping_address')->zone_id)->get();

        if (count($delivery) > 0) {
            $delivery_state = $delivery[0]->zone_code;
        } else {
            $delivery_state = 'other';
        }

        $country = DB::table('countries')->where('countries_id', '=', session('shipping_address')->countries_id)->get();

        $delivery_country = $country[0]->countries_name;

        $billing_firstname = session('billing_address')->billing_firstname;
        $billing_lastname = session('billing_address')->billing_lastname;
        $billing_street_address = session('billing_address')->billing_street;
        $billing_suburb = '';
        $billing_city = session('billing_address')->billing_city;
        $billing_postcode = session('billing_address')->billing_zip;
        $billing_phone = session('billing_address')->billing_phone;

        if (!empty(session('billing_company')->company)) {
            $billing_company = session('billing_address')->company;
        }

        $billing = DB::table('zones')->where('zone_id', '=', session('billing_address')->billing_zone_id)->get();

        if (count($billing) > 0) {
            $billing_state = $billing[0]->zone_code;
        } else {
            $billing_state = 'other';
        }

        $country = DB::table('countries')->where('countries_id', '=', session('billing_address')->billing_countries_id)->get();

        $billing_country = $country[0]->countries_name;

        $payment_method = session('payment_method');
        $order_information = array();

        if (!empty($request->cc_type)) {
            $cc_type = $request->cc_type;
            $cc_owner = $request->cc_owner;
            $cc_number = $request->cc_number;
            $cc_expires = $request->cc_expires;
        } else {
            $cc_type = '';
            $cc_owner = '';
            $cc_number = '';
            $cc_expires = '';
        }

        $last_modified = date('Y-m-d H:i:s');
        $date_purchased = date('Y-m-d H:i:s');

        //price
        if (!empty(session('shipping_detail'))) {
            $shipping_price = session('shipping_detail')->shipping_price;
        } else {
            $shipping_price = 0;
        }
        $tax_rate = number_format((float) session('tax_rate'), 2, '.', '');
        $coupon_discount = number_format((float) session('coupon_discount'), 2, '.', '');
        $order_price = (session('products_price') + $tax_rate + $shipping_price) - $coupon_discount;

        $shipping_cost = session('shipping_detail')->shipping_price;
        $shipping_method = session('shipping_detail')->mehtod_name;
        $orders_status = '1';
        //$orders_date_finished                =   $request->orders_date_finished;

        if (!empty(session('order_comments'))) {
            $comments = session('order_comments');
        } else {
            $comments = '';
        }

        $web_setting = DB::table('settings')->get();
        $currency = $web_setting[19]->value;
        $total_tax = number_format((float) session('tax_rate'), 2, '.', '');
        $products_tax = 1;

        $coupon_amount = 0;
        if (!empty(session('coupon')) and count(session('coupon')) > 0) {

            $code = array();
            $exclude_product_ids = array();
            $product_categories = array();
            $excluded_product_categories = array();
            $exclude_product_ids = array();

            $coupon_amount = number_format((float) session('coupon_discount'), 2, '.', '') + 0;

            foreach (session('coupon') as $coupons_data) {

                //update coupans
                $coupon_id = DB::statement("UPDATE `coupons` SET `used_by`= CONCAT(used_by,',$customers_id') WHERE `code` = '" . $coupons_data->code . "'");

            }
            $code = json_encode(session('coupon'));

        } else {
            $code = '';
            $coupon_amount = '';
        }

        //payment methods

        if ($payment_method == 'braintree') {
            $payments_setting = $this->payments_setting_for_brain_tree();

            //braintree transaction with nonce
            $is_transaction = '1'; # For payment through braintree
            $nonce = $request->payment_method_nonce;

            if ($payments_setting['merchant_id']->environment == '0') {
                $braintree_environment = 'sandbox';
            } else {
                $braintree_environment = 'production';
            }

            $braintree_merchant_id = $payments_setting['merchant_id']->value;
            $braintree_public_key = $payments_setting['public_key']->value;
            $braintree_private_key = $payments_setting['private_key']->value;

            //brain tree credential
            require_once app_path('braintree/Braintree.php');

            if ($result->success) {

                if ($result->transaction->id) {
                    $order_information = array(
                        'braintree_id' => $result->transaction->id,
                        'status' => $result->transaction->status,
                        'type' => $result->transaction->type,
                        'currencyIsoCode' => $result->transaction->currencyIsoCode,
                        'amount' => $result->transaction->amount,
                        'merchantAccountId' => $result->transaction->merchantAccountId,
                        'subMerchantAccountId' => $result->transaction->subMerchantAccountId,
                        'masterMerchantAccountId' => $result->transaction->masterMerchantAccountId,
                        //'orderId'=>$result->transaction->orderId,
                        'createdAt' => time(),
                        //                        'updatedAt'=>$result->transaction->updatedAt->date,
                        'token' => $result->transaction->creditCard['token'],
                        'bin' => $result->transaction->creditCard['bin'],
                        'last4' => $result->transaction->creditCard['last4'],
                        'cardType' => $result->transaction->creditCard['cardType'],
                        'expirationMonth' => $result->transaction->creditCard['expirationMonth'],
                        'expirationYear' => $result->transaction->creditCard['expirationYear'],
                        'customerLocation' => $result->transaction->creditCard['customerLocation'],
                        'cardholderName' => $result->transaction->creditCard['cardholderName'],
                    );

                    $payment_status = "success";
                }
            } else {
                $payment_status = "failed";
            }

        } else if ($payment_method == 'stripe') { #### stipe payment
            $payments_setting = $this->payments_setting_for_stripe();
            //require file
            require_once app_path('stripe/config.php');

            //get token from app
            $token = $request->token;

            $customer = \Stripe\Customer::create(array(
                'email' => $email,
                'source' => $token,
            ));

            $charge = \Stripe\Charge::create(array(
                'customer' => $customer->id,
                'amount' => 100 * $order_price,
                'currency' => 'usd',
            ));

            if ($charge->paid == true) {
                $order_information = array(
                    'paid' => 'true',
                    'transaction_id' => $charge->id,
                    'type' => $charge->outcome->type,
                    'balance_transaction' => $charge->balance_transaction,
                    'status' => $charge->status,
                    'currency' => $charge->currency,
                    'amount' => $charge->amount,
                    'created' => date('d M,Y', $charge->created),
                    'dispute' => $charge->dispute,
                    'customer' => $charge->customer,
                    'address_zip' => $charge->source->address_zip,
                    'seller_message' => $charge->outcome->seller_message,
                    'network_status' => $charge->outcome->network_status,
                    'expirationMonth' => $charge->outcome->type,
                );

                $payment_status = "success";

            } else {
                $payment_status = "failed";
            }

        } else if ($payment_method == 'cash_on_delivery') {
            $payments_setting = $this->payments_setting_for_cod();

            $payment_method = $payments_setting->name;
            $payment_status = 'success';

        } else if ($payment_method == 'paypal') {
            $paypal_description = $this->payments_setting_for_paypal();
            $payment_method = $payments_setting['id']->name;
            $payment_status = 'success';
            $order_information = json_decode($request->nonce, JSON_UNESCAPED_SLASHES);
        } else if ($payment_method == 'instamojo') {
            $instamojo = $this->payments_setting_for_instamojo();
            $payment_method = $instamojo['auth_token']->name;
            $payment_status = 'success';
            $order_information = $request->nonce;
        } else if ($payment_method == 'hyperpay') {
            $hyperpay = $this->payments_setting_for_hyperpay();
            $payment_method = $hyperpay['userid']->name;
            $payment_status = 'success';
            $order_information = session('paymentResponseData');
        } else if ($payment_method == 'razor_pay') {
            $payment_status = 'success';
            $order_information = session('paymentResponseData');
        } else if ($payment_method == 'pay_tm') {
            Session(['paytm' => 'sasa']);
            $payment_status = 'success';
            $order_information = session('paymentResponseData');
        }

        //check if order is verified
        if ($payment_status == 'success') {

            $orders_id = DB::table('orders')->insertGetId(
                ['customers_id' => $customers_id,
                    'customers_name' => $delivery_firstname . ' ' . $delivery_lastname,
                    'customers_street_address' => $delivery_street_address,
                    'customers_suburb' => $delivery_suburb,
                    'customers_city' => $delivery_city,
                    'customers_postcode' => $delivery_postcode,
                    'customers_state' => $delivery_state,
                    'customers_country' => $delivery_country,
                    //'customers_telephone' => $customers_telephone,
                    'email' => $email,
                    // 'customers_address_format_id' => $delivery_address_format_id,

                    'delivery_name' => $delivery_firstname . ' ' . $delivery_lastname,
                    'delivery_street_address' => $delivery_street_address,
                    'delivery_suburb' => $delivery_suburb,
                    'delivery_city' => $delivery_city,
                    'delivery_postcode' => $delivery_postcode,
                    'delivery_state' => $delivery_state,
                    'delivery_country' => $delivery_country,
                    // 'delivery_address_format_id' => $delivery_address_format_id,

                    'billing_name' => $billing_firstname . ' ' . $billing_lastname,
                    'billing_street_address' => $billing_street_address,
                    'billing_suburb' => $billing_suburb,
                    'billing_city' => $billing_city,
                    'billing_postcode' => $billing_postcode,
                    'billing_state' => $billing_state,
                    'billing_country' => $billing_country,
                    //'billing_address_format_id' => $billing_address_format_id,

                    'payment_method' => $payment_method,
                    'cc_type' => $cc_type,
                    'cc_owner' => $cc_owner,
                    'cc_number' => $cc_number,
                    'cc_expires' => $cc_expires,
                    'last_modified' => $last_modified,
                    'date_purchased' => $date_purchased,
                    'order_price' => $order_price,
                    'shipping_cost' => $shipping_cost,
                    'shipping_method' => $shipping_method,
                    // 'orders_status' => $orders_status,
                    //'orders_date_finished'  => $orders_date_finished,
                    'currency' => $currency,
                    'order_information' => json_encode($order_information),
                    'coupon_code' => $code,
                    'coupon_amount' => $coupon_amount,
                    'total_tax' => $total_tax,
                    'ordered_source' => '1',
                    'delivery_phone' => $delivery_phone,
                    'billing_phone' => $billing_phone,
                ]);

            //orders status history
            $orders_history_id = DB::table('orders_status_history')->insertGetId(
                ['orders_id' => $orders_id,
                    'orders_status_id' => $orders_status,
                    'date_added' => $date_added,
                    'customer_notified' => '1',
                    'comments' => $comments,
                ]);

            $cart = $cart->myCart(array());

            foreach ($cart as $products) {
                //get products info
                $orders_products_id = DB::table('orders_products')->insertGetId(
                    [
                        'orders_id' => $orders_id,
                        'products_id' => $products->products_id,
                        'products_name' => $products->products_name,
                        'products_price' => $products->price,
                        'final_price' => $products->final_price * $products->customers_basket_quantity,
                        'products_tax' => $products_tax,
                        'products_quantity' => $products->customers_basket_quantity,
                    ]);
                $inventory_ref_id = DB::table('inventory')->insertGetId([
                    'products_id' => $products->products_id,
                    'reference_code' => '',
                    'stock' => $products->customers_basket_quantity,
                    'admin_id' => 0,
                    'added_date' => time(),
                    'purchase_price' => 0,
                    'stock_type' => 'out',
                ]);

                if (Session::get('guest_checkout') == 1) {
                    DB::table('customers_basket')->where('session_id', Session::getId())->where('products_id', $products->products_id)->update(['is_order' => '1']);

                } else {
                    DB::table('customers_basket')->where('customers_id', $customers_id)->where('products_id', $products->products_id)->update(['is_order' => '1']);

                }

                if (!empty($products->attributes) and count($products->attributes)>0) {

                    foreach ($products->attributes as $attribute) {
                        DB::table('orders_products_attributes')->insert(
                            [
                                'orders_id' => $orders_id,
                                'products_id' => $products->products_id,
                                'orders_products_id' => $orders_products_id,
                                'products_options' => $attribute->attribute_name,
                                'products_options_values' => $attribute->attribute_value,
                                'options_values_price' => $attribute->values_price,
                                'price_prefix' => $attribute->prefix,
                            ]);

                        DB::table('inventory_detail')->insert([
                            'inventory_ref_id' => $inventory_ref_id,
                            'products_id' => $products->products_id,
                            'attribute_id' => $attribute->products_attributes_id,
                        ]);
                    }
                }

            }

            $responseData = array('success' => '1', 'data' => array(), 'message' => "Order has been placed successfully.");

            //send order email to user
            $order = DB::table('orders')
                ->LeftJoin('orders_status_history', 'orders_status_history.orders_id', '=', 'orders.orders_id')
                ->LeftJoin('orders_status', 'orders_status.orders_status_id', '=', 'orders_status_history.orders_status_id')
                ->where('orders.orders_id', '=', $orders_id)->orderby('orders_status_history.date_added', 'DESC')->get();

            //foreach
            foreach ($order as $data) {
                $orders_id = $data->orders_id;

                $orders_products = DB::table('orders_products')
                    ->join('products', 'products.products_id', '=', 'orders_products.products_id')
                    ->select('orders_products.*', 'products.products_image as image')
                    ->where('orders_products.orders_id', '=', $orders_id)->get();
                $i = 0;
                $total_price = 0;
                $product = array();
                $subtotal = 0;
                foreach ($orders_products as $orders_products_data) {
                    $product_attribute = DB::table('orders_products_attributes')
                        ->where([
                            ['orders_products_id', '=', $orders_products_data->orders_products_id],
                            ['orders_id', '=', $orders_products_data->orders_id],
                        ])
                        ->get();

                    $orders_products_data->attribute = $product_attribute;
                    $product[$i] = $orders_products_data;
                    //$total_tax     = $total_tax+$orders_products_data->products_tax;
                    $total_price = $total_price + $orders_products[$i]->final_price;
                    $subtotal += $orders_products[$i]->final_price;
                    $i++;
                }

                $data->data = $product;
                $orders_data[] = $data;
            }

            $orders_status_history = DB::table('orders_status_history')
                ->LeftJoin('orders_status', 'orders_status.orders_status_id', '=', 'orders_status_history.orders_status_id')
                ->orderBy('orders_status_history.date_added', 'desc')
                ->where('orders_id', '=', $orders_id)->get();

            $orders_status = DB::table('orders_status')->get();

            $ordersData['orders_data'] = $orders_data;
            $ordersData['total_price'] = $total_price;
            $ordersData['orders_status'] = $orders_status;
            $ordersData['orders_status_history'] = $orders_status_history;
            $ordersData['subtotal'] = $subtotal;

            //notification/email
            $myVar = new AlertController();
            $alertSetting = $myVar->orderAlert($ordersData);

            if (session('step') == '4') {
                session(['step' => array()]);
            }

                     $arr=array();
                                      $get_oreder=DB::table('orders_products')->where('orders_id',$orders_id)->get();

                                       foreach ($get_oreder as  $value) {
                                          $arr['name'] = $value->products_name;
                                          $arr['sku'] = "aa12";
                                          $arr['units'] = $value->products_quantity;
                                          $arr['selling_price'] =$value->products_price;
                                          $arr['discount'] = 0;
                                          $arr['tax'] = $value->products_tax;
                                          $arr['hsn'] = 0;
                                       }


                          $params = array();


                          $params['order_id'] = $orders_id+1;
                          $params['order_date']=$date_added;
                          $params['pickup_location'] = 'Primary';
                          $params['channel_id'] ='CUSTOM';
                          $params['comment'] = "";
                          $params['billing_customer_name'] =$billing_firstname;
                          $params['billing_last_name'] = $billing_lastname;
                          $params['billing_address'] = $billing_street_address;
                          $params['billing_address_2'] = '';
                          $params['billing_city'] =  $billing_city;
                          $params['billing_pincode'] = $billing_postcode;
                          $params['billing_state'] = $billing_state;
                          $params['billing_country'] = $billing_country;
                          $params['billing_email'] = $email;
                          $params['billing_phone'] = $billing_phone ;
                          $params['shipping_is_billing'] = true;
                          $params['shipping_customer_name'] = $delivery_firstname;
                          $params['shipping_last_name'] = $delivery_lastname;
                          $params['shipping_address'] = $delivery_street_address;
                          $params['shipping_city'] = $delivery_city;
                          $params['shipping_state'] = $delivery_state;
                          $params['shipping_country'] = $delivery_country;
                          $params['shipping_email'] = $email;
                          $params['order_items'] =[$arr];
                          $params['payment_method'] = $payment_method;
                          $params['shipping_charges'] = $shipping_cost;
                          $params['giftwrap_charges'] = $coupon_discount;
                          $params['transaction_charges'] = '0';
                          $params['total_discount'] = 0;
                          $params['sub_total'] = $order_price;
                          $params['total_discount'] = 0;
                          $params['length'] = 10;
                          $params['breadth'] = 10;
                          $params['height'] = 20;
                          $params['weight'] = 10;



                          // $params['updatedBy']=Auth::guard('web')->user()->name;
                           $data= json_encode($params);
                        //   dd($data);

                          $auth_token=array();
                          $auth['email']="shiprocket@everything2us.com";
                          $auth['password']="admin123";
                          $auth_data=json_encode($auth);

                          $curl = curl_init();

                          curl_setopt_array($curl, array(
                          CURLOPT_URL => "https://apiv2.shiprocket.in/v1/external/auth/login",
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => "",
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => "POST",
                          CURLOPT_POSTFIELDS =>$auth_data,
                          CURLOPT_HTTPHEADER => array(
                              "Content-Type: application/json"
                          ),
                          ));

                          $response = curl_exec($curl);

                          curl_close($curl);
                        //   dd($response);
                          $curl = curl_init();

                          $token="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjMyNzU1MCwiaXNzIjoiaHR0cHM6Ly9hcGl2Mi5zaGlwcm9ja2V0LmluL3YxL2V4dGVybmFsL2F1dGgvbG9naW4iLCJpYXQiOjE1Nzg4MjMwODcsImV4cCI6MTU3OTY4NzA4NywibmJmIjoxNTc4ODIzMDg3LCJqdGkiOiJZVXJGVXZpNG92WHlZTVNCIn0.uCCR5z2Ic2s_PzM5d6QHB36lbfrvEBdrUGkj7jD8ObM";
                          curl_setopt_array($curl, array(
                          CURLOPT_URL => "https://apiv2.shiprocket.in/v1/external/orders/create/adhoc",
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => "",
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => false,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => "POST",
                          CURLOPT_POSTFIELDS =>$data,
                          CURLOPT_HTTPHEADER => array(
                              "Content-Type: application/json",
                              "Authorization: Bearer  $token "
                          ),
                          ));

                          $response = curl_exec($curl);
                          $err = curl_error($curl);

                          curl_close($curl);
                        //   dd($response);
                          if ($err) {
                            "cURL Error #:" . $err;
                          } else {
                            $response;
                          }

            session(['paymentResponseData' => '']);
            session(['paymentResponse' => '']);

            //change status of cart products
            if (Session::get('guest_checkout') == 1) {
                DB::table('customers_basket')->where('session_id', Session::getId())->update(['customers_id' => Session::get('customers_id')]);
                DB::table('customers_basket')->where('session_id', Session::getId())->update(['is_order' => '1']);
            } else {
                DB::table('customers_basket')->where('customers_id', auth()->guard('customer')->user()->id)->update(['is_order' => '1']);
            }

            return $payment_status;
        } else if ($payment_status == "failed") {
            return $payment_status;
        }

    }

    public function orders($request)
    {
        $index = new Index();
        $result = array();

        $result['commonContent'] = $index->commonContent();

        //orders
        if (Session::get('guest_checkout') == 1) {
            $orders = DB::table('orders')->orderBy('date_purchased', 'DESC')->where('customers_id', '=', Session::get('customers_id'))->get();
        } else {
            $orders = DB::table('orders')->orderBy('date_purchased', 'DESC')->where('customers_id', '=', auth()->guard('customer')->user()->id)->get();
        }
        $index = 0;
        $total_price = array();

        foreach ($orders as $orders_data) {
            $orders_products = DB::table('orders_products')
                ->select('final_price', DB::raw('SUM(final_price) as total_price'))
                ->where('orders_id', '=', $orders_data->orders_id)
                ->get();

            $orders[$index]->total_price = $orders_products[0]->total_price;

            $orders_status_history = DB::table('orders_status_history')
                ->LeftJoin('orders_status', 'orders_status.orders_status_id', '=', 'orders_status_history.orders_status_id')
                ->LeftJoin('orders_status_description', 'orders_status_description.orders_status_id', '=', 'orders_status.orders_status_id')
                ->select('orders_status_description.orders_status_name', 'orders_status.orders_status_id')
                ->where('orders_id', '=', $orders_data->orders_id)->where('orders_status_description.language_id', session('language_id'))->orderby('orders_status_history.orders_status_history_id', 'DESC')->limit(1)->get();

            $orders[$index]->orders_status_id = $orders_status_history[0]->orders_status_id;
            $orders[$index]->orders_status = $orders_status_history[0]->orders_status_name;
            $index++;

        }

        $result['orders'] = $orders;
        return $result;
    }

    public function viewOrder($request, $id)
    {
        $index = new Index();

        $title = array('pageTitle' => Lang::get("website.View Order"));
        $result = array();
        $result['commonContent'] = $index->commonContent();

        //orders
        if (Session::get('guest_checkout') == 1) {
            $orders = DB::table('orders')
                ->orderBy('date_purchased', 'DESC')
                ->where('orders_id', '=', $id)->where('customers_id', '=', Session::get('customers_id'))->get();
        } else {
            $orders = DB::table('orders')
                ->orderBy('date_purchased', 'DESC')
                ->where('orders_id', '=', $id)->where('customers_id', auth()->guard('customer')->user()->id)->get();
        }
        if (count($orders) > 0) {
            $index = 0;
            foreach ($orders as $orders_data) {

                $orders_status_history = DB::table('orders_status_history')
                    ->LeftJoin('orders_status', 'orders_status.orders_status_id', '=', 'orders_status_history.orders_status_id')
                    ->LeftJoin('orders_status_description', 'orders_status_description.orders_status_id', '=', 'orders_status.orders_status_id')
                    ->select('orders_status_description.orders_status_name', 'orders_status.orders_status_id')
                    ->where('orders_id', '=', $orders_data->orders_id)->where('orders_status_description.language_id', session('language_id'))->orderby('orders_status_history.orders_status_history_id', 'DESC')->limit(1)->get();

                $products_array = array();
                $index2 = 0;
                $order_products = DB::table('orders_products')
                    ->join('products', 'products.products_id', '=', 'orders_products.products_id')
                    ->join('image_categories', 'products.products_image', '=', 'image_categories.image_id')
                    ->select('image_categories.path as image', 'products.products_model as model', 'orders_products.*')
                    ->where('orders_products.orders_id', $orders_data->orders_id)->groupBy('products.products_id')->get();

                foreach ($order_products as $products) {
                    array_push($products_array, $products);
                    $attributes = DB::table('orders_products_attributes')->where([['orders_id', $products->orders_id], ['orders_products_id', $products->orders_products_id]])->get();
                    if (count($attributes) == 0) {
                        $attributes = $attributes;
                    }

                    $products_array[$index2]->attributes = $attributes;
                    $index2++;

                }

                $orders_status_history = DB::table('orders_status_history')
                    ->LeftJoin('orders_status', 'orders_status.orders_status_id', '=', 'orders_status_history.orders_status_id')
                    ->LeftJoin('orders_status_description', 'orders_status_description.orders_status_id', '=', 'orders_status.orders_status_id')
                    ->select('orders_status_description.orders_status_name', 'orders_status.orders_status_id')
                    ->where('orders_id', '=', $orders_data->orders_id)->where('orders_status_description.language_id', session('language_id'))->orderby('orders_status_history.orders_status_history_id', 'DESC')->limit(1)->get();

                $orders[$index]->statusess = $orders_status_history;
                $orders[$index]->products = $products_array;
                $orders[$index]->orders_status_id = $orders_status_history[0]->orders_status_id;
                $orders[$index]->orders_status = $orders_status_history[0]->orders_status_name;
                $index++;

            }

            $result['orders'] = $orders;
            $result['res'] = "view-order";
            return $result;
        } else {
            $result['res'] = "order";
            return "order";
        }
    }

    public function calculateTax($tax_zone_id)
    {
        $cart = new Cart();

        $result = array();

        if ($tax_zone_id == -1) {
            $tax = 0;
        } else {

            $cart = $cart->myCart($result);

            $index = '0';
            $total_tax = '0';

            foreach ($cart as $products_data) {

                $final_price = $products_data->final_price;

                $products = DB::table('products')
                    ->LeftJoin('tax_rates', 'tax_rates.tax_class_id', '=', 'products.products_tax_class_id')
                    ->where('tax_rates.tax_zone_id', $tax_zone_id)
                    ->where('products_id', $products_data->products_id)->get();

                if (count($products) > 0) {
                    $tax_value = $products[0]->tax_rate / 100 * $final_price;
                    $total_tax = $total_tax + $tax_value;
                    $index++;
                }

            }

            if ($total_tax > 0) {
                $tax = $total_tax;
            } else {
                $tax = '0';
            }
        }

        return $tax;

    }

    public function getOrders()
    {
        $orders = DB::select(DB::raw('SELECT orders_id FROM orders WHERE YEARWEEK(CURDATE()) BETWEEN YEARWEEK(date_purchased) AND YEARWEEK(date_purchased)'));
        return $orders;
    }

    public function allOrders()
    {
        $allOrders = DB::table('orders')->get();
        return $allOrders;
    }

    public function mostOrders($orders_data)
    {
        $mostOrdered = DB::table('orders_products')
            ->select('orders_products.products_id')
            ->where('orders_id', $orders_data->orders_id)
            ->get();
        return $mostOrdered;
    }

    public function countCompare()
    {
        $count = DB::table('compare')->where('customer_id', auth()->guard('customer')->user()->id)->count();
        return $count;
    }

    public function getPages($request)
    {
        $pages = DB::table('pages')
            ->leftJoin('pages_description', 'pages_description.page_id', '=', 'pages.page_id')
            ->where([['pages.status', '1'], ['type', 2], ['pages_description.language_id', session('language_id')], ['pages.slug', $request->name]])
            ->orwhere([['pages.status', '1'], ['type', 2], ['pages_description.language_id', 1], ['pages.slug', $request->name]])
            ->get();
        return $pages;
    }

    public function payments_setting_for_brain_tree()
    {
        $payments_setting = DB::table('payment_methods_detail')
            ->leftjoin('payment_description', 'payment_description.payment_methods_id', '=', 'payment_methods_detail.payment_methods_id')
            ->leftjoin('payment_methods', 'payment_methods.payment_methods_id', '=', 'payment_methods_detail.payment_methods_id')
            ->select('payment_methods_detail.*', 'payment_description.name', 'payment_methods.environment', 'payment_methods.status', 'payment_methods.payment_method')
            ->where('language_id', session('language_id'))
            ->where('payment_description.payment_methods_id', 1)
            ->orwhere('language_id', 1)
            ->where('payment_description.payment_methods_id', 1)
            ->get()->keyBy('key');
        return $payments_setting;
    }

    public function payments_setting_for_stripe()
    {
        $payments_setting = DB::table('payment_methods_detail')
            ->leftjoin('payment_description', 'payment_description.payment_methods_id', '=', 'payment_methods_detail.payment_methods_id')
            ->leftjoin('payment_methods', 'payment_methods.payment_methods_id', '=', 'payment_methods_detail.payment_methods_id')
            ->select('payment_methods_detail.*', 'payment_description.name', 'payment_methods.environment', 'payment_methods.status', 'payment_methods.payment_method')
            ->where('language_id', session('language_id'))
            ->where('payment_description.payment_methods_id', 2)
            ->orwhere('language_id', 1)
            ->where('payment_description.payment_methods_id', 2)
            ->get()->keyBy('key');
        return $payments_setting;
    }

    public function payments_setting_for_cod()
    {
        $payments_setting = DB::table('payment_description')
            ->leftjoin('payment_methods', 'payment_methods.payment_methods_id', '=', 'payment_description.payment_methods_id')
            ->select('payment_description.name', 'payment_methods.environment', 'payment_methods.status', 'payment_methods.payment_method')
            ->where('language_id', session('language_id'))
            ->where('payment_description.payment_methods_id', 4)
            ->orwhere('language_id', 1)
            ->where('payment_description.payment_methods_id', 4)
            ->first();
        return $payments_setting;
    }

    public function payments_setting_for_paypal()
    {
        $payments_setting = DB::table('payment_methods_detail')
            ->leftjoin('payment_description', 'payment_description.payment_methods_id', '=', 'payment_methods_detail.payment_methods_id')
            ->leftjoin('payment_methods', 'payment_methods.payment_methods_id', '=', 'payment_methods_detail.payment_methods_id')
            ->select('payment_methods_detail.*', 'payment_description.name', 'payment_methods.environment', 'payment_methods.status', 'payment_methods.payment_method')
            ->where('language_id', session('language_id'))
            ->where('payment_description.payment_methods_id', 3)
            ->orwhere('language_id', 1)
            ->where('payment_description.payment_methods_id', 3)
            ->get()->keyBy('key');
        return $payments_setting;
    }

    public function payments_setting_for_instamojo()
    {
        $payments_setting = DB::table('payment_methods_detail')
            ->leftjoin('payment_description', 'payment_description.payment_methods_id', '=', 'payment_methods_detail.payment_methods_id')
            ->leftjoin('payment_methods', 'payment_methods.payment_methods_id', '=', 'payment_methods_detail.payment_methods_id')
            ->select('payment_methods_detail.*', 'payment_description.name', 'payment_methods.environment', 'payment_methods.status', 'payment_methods.payment_method')
            ->where('language_id', session('language_id'))
            ->where('payment_description.payment_methods_id', 5)
            ->orwhere('language_id', 1)
            ->where('payment_description.payment_methods_id', 5)
            ->get()->keyBy('key');
        return $payments_setting;
    }

    public function payments_setting_for_hyperpay()
    {
        $payments_setting = DB::table('payment_methods_detail')
            ->leftjoin('payment_description', 'payment_description.payment_methods_id', '=', 'payment_methods_detail.payment_methods_id')
            ->leftjoin('payment_methods', 'payment_methods.payment_methods_id', '=', 'payment_methods_detail.payment_methods_id')
            ->select('payment_methods_detail.*', 'payment_description.name', 'payment_methods.environment', 'payment_methods.status', 'payment_methods.payment_method')
            ->where('language_id', session('language_id'))
            ->where('payment_description.payment_methods_id', 6)
            ->orwhere('language_id', 1)
            ->where('payment_description.payment_methods_id', 6)
            ->get()->keyBy('key');
        return $payments_setting;
    }

    public function payments_setting_for_razorpay()
    {
        $payments_setting = DB::table('payment_methods_detail')
            ->leftjoin('payment_description', 'payment_description.payment_methods_id', '=', 'payment_methods_detail.payment_methods_id')
            ->leftjoin('payment_methods', 'payment_methods.payment_methods_id', '=', 'payment_methods_detail.payment_methods_id')
            ->select('payment_methods_detail.*', 'payment_description.name', 'payment_methods.environment', 'payment_methods.status', 'payment_methods.payment_method')
            ->where('language_id', session('language_id'))
            ->where('payment_description.payment_methods_id', 7)
            ->orwhere('language_id', 1)
            ->where('payment_description.payment_methods_id', 7)
            ->get()->keyBy('key');
        return $payments_setting;
    }

    public function payments_setting_for_paytm()
    {
        $payments_setting = DB::table('payment_methods_detail')
            ->leftjoin('payment_description', 'payment_description.payment_methods_id', '=', 'payment_methods_detail.payment_methods_id')
            ->leftjoin('payment_methods', 'payment_methods.payment_methods_id', '=', 'payment_methods_detail.payment_methods_id')
            ->select('payment_methods_detail.*', 'payment_description.name', 'payment_methods.environment', 'payment_methods.status', 'payment_methods.payment_method')
            ->where('language_id', session('language_id'))
            ->where('payment_description.payment_methods_id', 8)
            ->orwhere('language_id', 1)
            ->where('payment_description.payment_methods_id', 8)
            ->get()->keyBy('key');
        return $payments_setting;
    }

    public function getCountries($countries_id)
    {
        $countries = DB::table('countries')->where('countries_id', '=', $countries_id)->get();
        return $countries;
    }

    public function getZones($zone_id)
    {
        $zones = DB::table('zones')->where('zone_id', '=', $zone_id)->get();
        return $zones;
    }

    public function getShippingMethods()
    {
        $shippings = DB::table('shipping_methods')->get();
        return $shippings;
    }

    public function getShippingDetail($shipping_methods)
    {
        $shippings_detail = DB::table('shipping_description')->where('language_id', Session::get('language_id'))->where('table_name', $shipping_methods->table_name)
            ->orwhere('language_id', 1)->where('table_name', $shipping_methods->table_name)->get();
        return $shippings_detail;
    }

    public function getUpsShipping()
    {
        $ups_shipping = DB::table('ups_shipping')->where('ups_id', '=', '1')->get();
        return $ups_shipping;
    }

    public function getUpsShippingRate()
    {
        $ups_shipping = DB::table('flate_rate')->where('id', '=', '1')->get();
        return $ups_shipping;
    }

    public function priceByWeight($weight)
    {
        $priceByWeight = DB::table('products_shipping_rates')->where('weight_from', '<=', $weight)->where('weight_to', '>=', $weight)->get();
        return $priceByWeight;
    }

    public function braintreeDescription()
    {
        $braintree_description = DB::table('payment_description')->where([['payment_name', 'Braintree'], ['language_id', Session::get('language_id')]])
            ->orwhere([['payment_name', 'Braintree'], ['language_id', 1]])->get();
        return $braintree_description;
    }

    public function stripeDescription()
    {
        $stripe_description = DB::table('payment_description')->where([['payment_name', 'Stripe'], ['language_id', Session::get('language_id')]])
            ->orwhere([['payment_name', 'Stripe'], ['language_id', 1]])->get();
        return $stripe_description;
    }

    public function codDescription()
    {
        $cod_description = DB::table('payment_description')->where([['payment_name', 'Cash On Delivery'], ['language_id', Session::get('language_id')]])
            ->orwhere([['payment_name', 'Cash On Delivery'], ['language_id', 1]])->get();
        return $cod_description;
    }

    public function paypalDescription()
    {
        $paypal_description = DB::table('payment_description')->where([['payment_name', 'Paypal'], ['language_id', Session::get('language_id')]])
            ->orwhere([['payment_name', 'Paypal'], ['language_id', 1]])->get();
        return $paypal_description;
    }

    public function instamojoDescription()
    {
        $instamojo_description = DB::table('payment_description')->where([['payment_name', 'Instamojo'], ['language_id', Session::get('language_id')]])
            ->orwhere([['payment_name', 'Instamojo'], ['language_id', 1]])->get();
        return $instamojo_description;
    }

    public function hyperpayDescription()
    {
        $hyperpay_description = DB::table('payment_description')->where([['payment_name', 'hyperpay'], ['language_id', Session::get('language_id')]])
            ->orwhere([['payment_name', 'hyperpay'], ['language_id', 1]])->get();
        return $hyperpay_description;
    }

    public function ordersCheck($request)
    {
        if (Session::get('guest_checkout') == 1) {
            $ordersCheck = DB::table('orders')->where(['customers_id' => Session::get('customers_id')], ['orders_id' => $request->orders_id])->get();
        } else {
            $ordersCheck = DB::table('orders')->where(['customers_id' => auth()->guard('customer')->user()->id], ['orders_id' => $request->orders_id])->get();
        }
        return $ordersCheck;
    }

    public function InsertOrdersCheck($request, $date_added, $comments)
    {
        $orders_history_id = DB::table('orders_status_history')->insertGetId(
            ['orders_id' => $request->orders_id,
                'orders_status_id' => $request->orders_status_id,
                'date_added' => $date_added,
                'customer_notified' => '1',
                'comments' => $comments,
            ]);
        return $orders_history_id;
    }

}
