<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Admin
Route::get('admin_','Admin\LoginController@index')->name('admin');
Route::post('admin/login','Admin\LoginController@login')->name('admin.login');

Route::group(['prefix' => 'admin','middleware' =>'adminauth'], function() {

    //dashboard
    Route::get('index','Admin\AdminController@index')->name('index');
    Route::get('admin-detail','Admin\OtherAdminController@admin')->name('admin-detail');

    //profile management
    Route::get('profile','Admin\AdminController@profile')->name('profile');
    Route::post('profile/update','Admin\AdminController@profileupdate')->name('profile.update');
    Route::post('profile/password/update','Admin\AdminController@adminpassword')->name('profile.passwor.update');

    //Bus Amentities
    Route::get('amenities','Admin\AmenitiesController@index')->name('amenities');
    Route::post('amenities/store','Admin\AmenitiesController@store')->name('amenities.store');
    Route::get('amenities/edit/{id}','Admin\AmenitiesController@edit')->name('amenities.edit');
    Route::post('amenities/update','Admin\AmenitiesController@update')->name('amenities.update');
    Route::get('amenities/destroy','Admin\AmenitiesController@amenitiesdestroy')->name('amenities.destroy');

    // admin logout
    Route::get('logout','Admin\LoginController@logout')->name('admin.logout');

    //commen status change route
    Route::post('status-change','Admin\AdminController@statuschange')->name('status.change');

    //bus management
    Route::get('bus-detail','Admin\BusController@index')->name('bus-detail');
    Route::get('bus-detail/add','Admin\BusController@create')->name('bus-detail.add');
    Route::post('bus-detail/store','Admin\BusController@store')->name('bus-detail.store');
    Route::get('bus-detail/edit/{id}','Admin\BusController@edit')->name('bus-detail.edit');
    Route::post('bus-detail/update/{id}','Admin\BusController@update')->name('bus-detail.update');
    Route::get('bus-detail/destroy','Admin\BusController@busdestroy')->name('bus-detail.destroy');

    //bus type
    Route::get('bus-detail/bus-type','Admin\BusController@bustype')->name('bus-type');
    Route::post('bus-detail/bus-type/add','Admin\BusController@bustypeadd')->name('bus-type.add');
    Route::get('bus-detail/bus-type/edit/{id}','Admin\BusController@bustypeedit')->name('bus-type.edit');
    Route::post('bus-detail/bus-type/update/{id}','Admin\BusController@bustypeupdate')->name('bus-type.update');
    Route::get('bus-detail/bus-type/destroy','Admin\BusController@bustypedestroy')->name('bus-type.destroy');


    //route details
    Route::get('route-detail','Admin\RouteController@index')->name('route-detail');
    Route::get('route-detail/add','Admin\RouteController@create')->name('route-detail.add');
    Route::post('route-detail/store','Admin\RouteController@store')->name('route-detail.store');
    Route::get('route-detail/edit/{id}','Admin\RouteController@edit')->name('route-detail.edit');
    Route::post('route-detail/update/{id}','Admin\RouteController@update')->name('route-detail.update');
    Route::get('route-detail/destroy','Admin\RouteController@routedestroy')->name('route-detail.destroy');

    Route::get('bus-route-detail','Admin\RouteController@busroute')->name('bus-route-detail.get');


    //Board point details
    Route::get('board-point','Admin\BoardPointController@index')->name('board-point');
    Route::get('board-point/add','Admin\BoardPointController@create')->name('board-point.add');
    Route::post('board-point/store','Admin\BoardPointController@store')->name('board-point.store');
    Route::get('board-point/edit/{id}','Admin\BoardPointController@edit')->name('board-point.edit');
    Route::post('board-point/update/{id}','Admin\BoardPointController@update')->name('board-point.update');
    Route::get('board-point/destroy','Admin\BoardPointController@boarddestroy')->name('board-point.destroy');

    //Drop point details
    Route::get('drop-point','Admin\DropPointController@index')->name('drop-point');
    Route::get('drop-point/add','Admin\DropPointController@create')->name('drop-point.add');
    Route::post('drop-point/store','Admin\DropPointController@store')->name('drop-point.store');
    Route::get('drop-point/edit/{id}','Admin\DropPointController@edit')->name('drop-point.edit');
    Route::post('drop-point/update/{id}','Admin\DropPointController@update')->name('drop-point.update');
    Route::get('drop-point/destroy','Admin\DropPointController@dropdestroy')->name('drop-point.destroy');

    //Promo Management details
    Route::get('promo-detail','Admin\PromoController@index')->name('promo-detail');
    Route::get('promo-detail/add','Admin\PromoController@create')->name('promo-detail.add');
    Route::post('promo-detail/store','Admin\PromoController@store')->name('promo-detail.store');
    Route::get('promo-detail/edit/{id}','Admin\PromoController@edit')->name('promo-detail.edit');
    Route::post('promo-detail/update/{id}','Admin\PromoController@update')->name('promo-detail.update');
    Route::get('promo-detail/destroy','Admin\PromoController@destroy')->name('promo-detail.destroy');

    //BusImage Gallery
    Route::get('img_gallery','Admin\ImageGalleryController@index')->name('img_gallery');
    Route::get('img_gallery/add','Admin\ImageGalleryController@create')->name('img_gallery.add');
    Route::post('img_gallery/store','Admin\ImageGalleryController@store')->name('img_gallery.store');
    Route::get('img_gallery/edit/{id}','Admin\ImageGalleryController@edit')->name('img_gallery.edit');
    Route::post('img_gallery/update/{id}','Admin\ImageGalleryController@update')->name('img_gallery.update');
    Route::get('img_gallery/destroy','Admin\ImageGalleryController@destroy')->name('img_gallery.destroy');

    //Other Admins  Details
    Route::get('otheradmin-detail','Admin\OtherAdminController@index')->name('otheradmin-detail');
    Route::get('user/add','Admin\OtherAdminController@create')->name('otheradmin-detail.add');
    Route::post('otheradmin-detail/store','Admin\OtherAdminController@store')->name('otheradmin-detail.store');
    Route::get('otheradmin-detail/edit/{id}','Admin\OtherAdminController@edit')->name('otheradmin-detail.edit');
    Route::post('otheradmin-detail/update/{id}','Admin\OtherAdminController@update')->name('otheradmin-detail.update');
    Route::get('otheradmin-detail/destroy','Admin\OtherAdminController@destroy')->name('otheradmin-detail.destroy');

     //vendor  Details
     Route::get('vendor-detail','Admin\VendorContrller@index')->name('vendor-detail');
     Route::get('vendor-detail/add','Admin\VendorContrller@create')->name('vendor-detail.add');
     Route::post('vendor-detail/store','Admin\VendorContrller@store')->name('vendor-detail.store');
     Route::get('vendor-detail/edit/{id}','Admin\VendorContrller@edit')->name('vendor-detail.edit');
     Route::post('vendor-detail/update/{id}','Admin\VendorContrller@update')->name('vendor-detail.update');
     Route::get('vendor-detail/destroy','Admin\VendorContrller@destroy')->name('vendor-detail.destroy');


    //Customer  Details
    Route::get('customer-detail','Admin\CustomerController@index')->name('customer-detail');
    // Route::get('customer-detail/add','Admin\CustomerController@create')->name('customer-detail.add');
    // Route::post('customer-detail/store','Admin\CustomerController@store')->name('customer-detail.store');
    // Route::get('customer-detail/edit/{id}','Admin\CustomerController@edit')->name('customer-detail.edit');
    // Route::put('customer-detail/update/{?id}','Admin\CustomerController@update')->name('customer-detail.update');
    // Route::delete('customer-detail/destroy/{id}','Admin\CustomerController@destroy')->name('customer-detail.destroy');

    //Booking  Details
    Route::get('booking-detail','Admin\BookingController@index')->name('booking-detail');
    Route::get('booking-detail/show','Admin\BookingController@show')->name('booking-detail.show');
    Route::get('booking-detail/add','Admin\BookingController@add')->name('booking-detail.add');
    Route::post('booking-detail/store','Admin\BookingController@store')->name('booking-detail.store');
    Route::get('booking-detail/edit/{id}','Admin\BookingController@edit')->name('booking-detail.edit');
    Route::put('booking-detail/update/{?id}','Admin\BookingController@update')->name('booking-detail.update');
    Route::delete('booking-detail/destroy/{id}','Admin\BookingController@destroy')->name('booking-detail.destroy');

    //Routes
    Route::get('bus-routes','Admin\BookingController@bookingroute')->name('booking-busroutes.get');
    Route::get('bus-boardpoint','Admin\BookingController@bookingboardpoint')->name('booking-bookingboardpoint.get');
    Route::get('bus-droppoint','Admin\BookingController@bookingdroppoint')->name('booking-bookingdroppoint.get');
    Route::get('bus-boardpointdetails','Admin\BookingController@bookingboardpointdetails')->name('booking-bookingboardpointdetails.get');
    Route::get('bus-droppointdetails','Admin\BookingController@bookingdroppointdetails')->name('booking-bookingdroppointdetails.get');
    Route::get('booking/destroy','Admin\BookingController@destroy')->name('booking.destroy');

    //Cancellation
    Route::get('cancellation-detail','Admin\CancellationController@index')->name('cancellation-detail');
    Route::get('cancellation-detail/add','Admin\CancellationController@create')->name('cancellation-detail.add');
    Route::post('cancellation-detail/store','Admin\CancellationController@store')->name('cancellation-detail.store');
    Route::get('cancellation-detail/edit/{id}','Admin\CancellationController@edit')->name('cancellation-detail.edit');
    Route::post('cancellation-detail/update/{id}','Admin\CancellationController@update')->name('cancellation-detail.update');
    Route::get('cancellation-detail/destroy','Admin\CancellationController@destroy')->name('cancellation-detail.destroy');

    //Setting
    Route::get('setting/generalsetting','Admin\SettingController@generalsetting')->name('generalsetting');
    Route::put('setting/generalsetting/store','Admin\SettingController@generalsettingstore')->name('generalsetting.store');
    Route::get('setting/emailsetting','Admin\SettingController@emailsetting')->name('emailsetting');
    Route::put('setting/emailsetting/store','Admin\SettingController@emailsettingstore')->name('emailsetting.store');
    Route::get('setting/smssetting','Admin\SettingController@smssetting')->name('smssetting');
    Route::put('setting/smssetting/store','Admin\SettingController@smssettingstore')->name('smssetting.store');
    Route::get('setting/contactsetting','Admin\SettingController@contactsetting')->name('contactsetting');
    Route::put('setting/contactsetting/store','Admin\SettingController@contactsettingstore')->name('contactsetting.store');

     //Seat Layout
    Route::get('seat-layout','Admin\SeatLayoutController@index')->name('seat-layout');
    Route::get('seat-layout/add','Admin\SeatLayoutController@create')->name('seat-layout.add');
    Route::post('seat-layout/view','Admin\SeatLayoutController@view')->name('seat-layout.view');
    //  Route::get('seat-layout/edit/{id}','Admin\SeatLayoutController@edit')->name('seat-layout.edit');
    //  Route::put('seat-layout/update/{?id}','Admin\SeatLayoutController@update')->name('seat-layout.update');
    //  Route::delete('seat-layout/destroy/{id}','Admin\SeatLayoutController@destroy')->name('seat-layout.destroy');


        //  Menus Setting
        Route::get('menus','Admin\MenuController@index')->name('menus');
        Route::get('menus/create','Admin\MenuController@create')->name('menus.add');
        Route::post('menus/store','Admin\MenuController@store')->name('menus.store');
        Route::get('menus/edit/{id}','Admin\MenuController@edit')->name('menus.edit');
        Route::post('menus/update/{id}','Admin\MenuController@update')->name('menus.update');
        Route::get('menus/destroy','Admin\MenuController@destroy')->name('menus.destroy');


     //Rating
     Route::get('rating','Admin\RatingController@index')->name('rating');

    // Route::get('route-details','Admin')

});



//Vendor
Route::get('vendor_','Vendor\LoginController@index')->name('vendor');
Route::post('vendor/login','Vendor\LoginController@login')->name('vendor.login');
//vendor register
Route::get('vendor/register','Vendor\VendorController@register')->name('vendor.register');
Route::get('vendor/forgetpage','Vendor\VendorController@showforgetpage')->name('vendor.showforgetpage');
Route::post('vendor/register/new','Vendor\VendorController@registernew')->name('vendor.register.new');
//Vendor Password Reset
Route::post('vendor/forgetpassword','Vendor\ForgetpasswordController@forgetpassword')->name('vendor.forgetpassword');
Route::post('vendor/passwordresetsms','Vendor\ForgetpasswordController@passwordresetsms')->name('vendor.passwordresetsms');
Route::post('vendor/passwordresetmail','Vendor\MailController@sendmail')->name('vendor.passwordresetmail');
Route::get('vendor/resetpassword/email/{token}','Vendor\ForgetpasswordController@updatepasswordmail')->name('vendor.updatepasswordmail');
Route::post('vendor/updatepassword/email','Vendor\ForgetpasswordController@savepasswordmail')->name('vendor.savepasswordmail');
Route::get('vendor/resetpassword/sms/{phone}','Vendor\ForgetpasswordController@updatepasswordsms')->name('vendor.updatepasswordsms');
Route::post('vendor/updatepassword/sms','Vendor\ForgetpasswordController@savepasswordsms')->name('vendor.savepasswordsms');


Route::group(['prefix' => 'vendor','middleware'=>'vendorauth'], function () {

    //dashboard
    Route::get('index','Vendor\VendorController@index')->name('vendor.index');

    //Vendor API
    Route::get('api/{id}','Vendor\ApiController@data')->name('vendor.apidata');


    //Send Register Mail
    Route::post('emailthanks','SendMailController@sendmail')->name('emailthanks');
    Route::get('sendmail','SendMailController@index')->name('sendmail');

    //profile management
    Route::get('profile','Vendor\VendorController@profile')->name('vendor.profile');
    Route::post('profile/update','Vendor\VendorController@profileupdate')->name('vendor.profile.update');
    Route::post('profile/password/update','Vendor\VendorController@vendorpassword')->name('vendor.profile.passwor.update');

    //vendor logout
    Route::get('logout','Vendor\LoginController@logout')->name('vendor.logout');

    //commen status change route
    Route::post('status-change','Vendor\VendorController@statuschange')->name('vendor.status.change');

    //bus management
    Route::get('bus-detail','Vendor\BusController@index')->name('vendor.bus-detail');
    Route::get('bus-detail/add','Vendor\BusController@create')->name('vendor.bus-detail.add');
    Route::post('bus-detail/store','Vendor\BusController@store')->name('vendor.bus-detail.store');
    Route::get('bus-detail/edit/{id}','Vendor\BusController@edit')->name('vendor.bus-detail.edit');
    Route::post('bus-detail/update/{id}','Vendor\BusController@update')->name('vendor.bus-detail.update');
    Route::get('bus-detail/destroy','Vendor\BusController@busdestroy')->name('vendor.bus-detail.destroy');

    //bus type
    Route::get('bus-detail/bus-type','Vendor\BusController@bustype')->name('vendor.bus-type');
    Route::post('bus-detail/bus-type/add','Vendor\BusController@bustypeadd')->name('vendor.bus-type.add');
    Route::get('bus-detail/bus-type/edit/{id}','Vendor\BusController@bustypeedit')->name('vendor.bus-type.edit');
    Route::post('bus-detail/bus-type/update/{id}','Vendor\BusController@bustypeupdate')->name('vendor.bus-type.update');
    Route::get('bus-detail/bus-type/destroy','Vendor\BusController@bustypedestroy')->name('vendor.bus-type.destroy');

    //route details
    Route::get('route-detail','Vendor\RouteController@index')->name('vendor.route-detail');
    Route::get('route-detail/add','Vendor\RouteController@create')->name('vendor.route-detail.add');
    Route::post('route-detail/store','Vendor\RouteController@store')->name('vendor.route-detail.store');
    Route::get('route-detail/edit/{id}','Vendor\RouteController@edit')->name('vendor.route-detail.edit');
    Route::post('route-detail/update/{id}','Vendor\RouteController@update')->name('vendor.route-detail.update');
    Route::get('route-detail/destroy','Vendor\RouteController@routedestroy')->name('vendor.route-detail.destroy');

    Route::get('bus-route-detail','Vendor\RouteController@busroute')->name('vendor.bus-route-detail.get');

    //Board point details
    Route::get('board-point','Vendor\BoardPointController@index')->name('vendor.board-point');
    Route::get('board-point/add','Vendor\BoardPointController@create')->name('vendor.board-point.add');
    Route::post('board-point/store','Vendor\BoardPointController@store')->name('vendor.board-point.store');
    Route::get('board-point/edit/{id}','Vendor\BoardPointController@edit')->name('vendor.board-point.edit');
    Route::post('board-point/update/{id}','Vendor\BoardPointController@update')->name('vendor.board-point.update');
    Route::get('board-point/destroy','Vendor\BoardPointController@boarddestroy')->name('vendor.board-point.destroy');

    //Drop point details
    Route::get('drop-point','Vendor\DropPointController@index')->name('vendor.drop-point');
    Route::get('drop-point/add','Vendor\DropPointController@create')->name('vendor.drop-point.add');
    Route::post('drop-point/store','Vendor\DropPointController@store')->name('vendor.drop-point.store');
    Route::get('drop-point/edit/{id}','Vendor\DropPointController@edit')->name('vendor.drop-point.edit');
    Route::post('drop-point/update/{id}','Vendor\DropPointController@update')->name('vendor.drop-point.update');
    Route::get('drop-point/destroy','Vendor\DropPointController@dropdestroy')->name('vendor.drop-point.destroy');

    //Promo Management details
    Route::get('promo-detail','Vendor\PromoController@index')->name('vendor.promo-detail');
    Route::get('promo-detail/add','Vendor\PromoController@create')->name('vendor.promo-detail.add');
    Route::post('promo-detail/store','Vendor\PromoController@store')->name('vendor.promo-detail.store');
    Route::get('promo-detail/edit/{id}','Vendor\PromoController@edit')->name('vendor.promo-detail.edit');
    Route::post('promo-detail/update/{id}','Vendor\PromoController@update')->name('vendor.promo-detail.update');
    Route::get('promo-detail/destroy','Vendor\PromoController@destroy')->name('vendor.promo-detail.destroy');

    //BusImage Gallery
    Route::get('img_gallery','Vendor\ImageGalleryController@index')->name('vendor.img_gallery');
    Route::get('img_gallery/add','Vendor\ImageGalleryController@create')->name('vendor.img_gallery.add');
    Route::post('img_gallery/store','Vendor\ImageGalleryController@store')->name('vendor.img_gallery.store');
    Route::get('img_gallery/edit/{id}','Vendor\ImageGalleryController@edit')->name('vendor.img_gallery.edit');
    Route::post('img_gallery/update/{id}','Vendor\ImageGalleryController@update')->name('vendor.img_gallery.update');
    Route::get('img_gallery/destroy','Vendor\ImageGalleryController@destroy')->name('vendor.img_gallery.destroy');


    //Customer  Details
    Route::get('customer-detail','Vendor\CustomerController@index')->name('vendor.customer-detail');
    // Route::get('customer-detail/add','Vendor\CustomerController@create')->name('vendor.customer-detail.add');
    // Route::post('customer-detail/store','Vendor\CustomerController@store')->name('vendor.customer-detail.store');
    // Route::get('customer-detail/edit/{id}','Vendor\CustomerController@edit')->name('vendor.customer-detail.edit');
    // Route::put('customer-detail/update/{?id}','Vendor\CustomerController@update')->name('vendor.customer-detail.update');
    // Route::delete('customer-detail/destroy/{id}','Vendor\CustomerController@destroy')->name('vendor.customer-detail.destroy');

    //Booking  Details
    Route::get('booking-detail','Vendor\BookingController@index')->name('vendor.booking-detail');
    Route::get('booking-detail/add','Vendor\BookingController@add')->name('vendor.booking-detail.add');
    Route::post('booking-detail/store','Vendor\BookingController@store')->name('vendor.booking-detail.store');
    Route::get('booking-detail/edit/{id}','Vendor\BookingController@edit')->name('vendor.booking-detail.edit');
    Route::put('booking-detail/update/{?id}','Vendor\BookingController@update')->name('vendor.booking-detail.update');
    Route::delete('booking-detail/destroy/{id}','Vendor\BookingController@destroy')->name('vendor.booking-detail.destroy');

     //Cancellation
     Route::get('cancellation-detail','Vendor\CancellationController@index')->name('vendor.cancellation-detail');
     Route::get('cancellation-detail/add','Vendor\CancellationController@create')->name('vendor.cancellation-detail.add');
     Route::post('cancellation-detail/store','Vendor\CancellationController@store')->name('vendor.cancellation-detail.store');
     Route::get('cancellation-detail/edit/{id}','Vendor\CancellationController@edit')->name('vendor.cancellation-detail.edit');
     Route::post('cancellation-detail/update/{id}','Vendor\CancellationController@update')->name('vendor.cancellation-detail.update');
     Route::get('cancellation-detail/destroy','Vendor\CancellationController@destroy')->name('vendor.cancellation-detail.destroy');



    //Rating
    Route::get('rating','Vendor\RatingController@index')->name('vendor.rating');



});



Route::get('errors', function () {
    return view('errors.401')->withMessage('they are simple yet pretty');;
})->name('errors');


Route::get('/','Web\HomeController@index')->name('web.index');

    Route::get('/offer','Web\OfferController@index')->name('offer');
    Route::get('/source','Web\SearchController@source')->name('source');
    Route::get('/dest','Web\SearchController@dest')->name('dest');

    Route::post('/search','Web\SearchController@search')->name('search');

    // manage booking
    Route::get('Cancellation','Web\ManageBookingController@cancellation')->name('cancellation');
    Route::get('PrintTicket','Web\ManageBookingController@printticket')->name('printticket');
    Route::get('SmsAndEmailTicket','Web\ManageBookingController@smsandemailticket')->name('smsandemailticket');

    // blue helpcenter
    Route::get('bluecare','Web\Indexcontroller@bluecare')->name('bluecare');

    //user Profile
    Route::get('UserProfile','Web\ProfileController@index')->name('user.profile');
    // findbus
    Route::get('/bus-image','Web\BusFindController@busimage')->name('bus-image');

    Route::post('/LoginVaiOTP','Web\HomeController@LoginVaiOTP')->name('mobileno.login');
    Route::post('/OTPVarify','Web\HomeController@optvarify')->name('opt.varify');
    Route::get('/logout','Web\HomeController@logout')->name('user.logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
