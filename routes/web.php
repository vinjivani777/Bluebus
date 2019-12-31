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

    //profile management
    Route::get('profile','Admin\AdminController@profile')->name('profile');
    Route::post('profile/update','Admin\AdminController@profileupdate')->name('profile.update');
    Route::post('profile/password/update','Admin\AdminController@adminpassword')->name('profile.passwor.update');

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
    Route::get('bus-detail/destory','Admin\BusController@busdestory')->name('bus-detail.destory');

    //bus type
    Route::get('bus-detail/bus-type','Admin\BusController@bustype')->name('bus-type');
    Route::post('bus-detail/bus-type/add','Admin\BusController@bustypeadd')->name('bus-type.add');
    Route::get('bus-detail/bus-type/edit/{id}','Admin\BusController@bustypeedit')->name('bus-type.edit');
    Route::post('bus-detail/bus-type/update/{id}','Admin\BusController@bustypeupdate')->name('bus-type.update');
    Route::get('bus-detail/bus-type/destory','Admin\BusController@bustypedestory')->name('bus-type.destory');


    //route details
    Route::get('route-detail','Admin\RouteController@index')->name('route-detail');
    Route::get('route-detail/add','Admin\RouteController@create')->name('route-detail.add');
    Route::post('route-detail/store','Admin\RouteController@store')->name('route-detail.store');
    Route::get('route-detail/edit/{id}','Admin\RouteController@edit')->name('route-detail.edit');
    Route::post('route-detail/update/{id}','Admin\RouteController@update')->name('route-detail.update');
    Route::get('route-detail/destory','Admin\RouteController@routedestroy')->name('route-detail.destory');

    Route::get('bus-route-detail','Admin\RouteController@busroute')->name('bus-route-detail.get');


    //Board point details
    Route::get('board-point','Admin\BoardPointController@index')->name('board-point');
    Route::get('board-point/add','Admin\BoardPointController@create')->name('board-point.add');
    Route::post('board-point/store','Admin\BoardPointController@store')->name('board-point.store');
    Route::get('board-point/edit/{id}','Admin\BoardPointController@edit')->name('board-point.edit');
    Route::post('board-point/update/{id}','Admin\BoardPointController@update')->name('board-point.update');
    Route::get('board-point/destory','Admin\BoardPointController@boarddestory')->name('board-point.destory');

    //Drop point details
    Route::get('drop-point','Admin\DropPointController@index')->name('drop-point');
    Route::get('drop-point/add','Admin\DropPointController@create')->name('drop-point.add');
    Route::post('drop-point/store','Admin\DropPointController@store')->name('drop-point.store');
    Route::get('drop-point/edit/{id}','Admin\DropPointController@edit')->name('drop-point.edit');
    Route::post('drop-point/update/{id}','Admin\DropPointController@update')->name('drop-point.update');
    Route::get('drop-point/destory','Admin\DropPointController@dropdestory')->name('drop-point.destory');

    //Promo Management details
    Route::get('promo-detail','Admin\PromoController@index')->name('promo-detail');
    Route::get('promo-detail/add','Admin\PromoController@create')->name('promo-detail.add');
    Route::post('promo-detail/store','Admin\PromoController@store')->name('promo-detail.store');
    Route::get('promo-detail/edit/{id}','Admin\PromoController@edit')->name('promo-detail.edit');
    Route::post('promo-detail/update/{id}','Admin\PromoController@update')->name('promo-detail.update');
    Route::get('promo-detail/destory','Admin\PromoController@destroy')->name('promo-detail.destory');

    //BusImage Gallery
    Route::get('img_gallery','Admin\ImageGalleryController@index')->name('img_gallery');
    Route::get('img_gallery/add','Admin\ImageGalleryController@create')->name('img_gallery.add');
    Route::post('img_gallery/store','Admin\ImageGalleryController@store')->name('img_gallery.store');
    Route::get('img_gallery/edit/{id}','Admin\ImageGalleryController@edit')->name('img_gallery.edit');
    Route::post('img_gallery/update/{id}','Admin\ImageGalleryController@update')->name('img_gallery.update');
    Route::get('img_gallery/destory','Admin\ImageGalleryController@destroy')->name('img_gallery.destory');

    //Other Admins  Details
    Route::get('otheradmin-detail','Admin\OtherAdminController@index')->name('otheradmin-detail');
    Route::get('otheradmin-detail/add','Admin\OtherAdminController@create')->name('otheradmin-detail.add');
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
    // Route::delete('customer-detail/destory/{id}','Admin\CustomerController@destory')->name('customer-detail.destory');

    //Booking  Details
    Route::get('booking-detail','Admin\BookingController@index')->name('booking-detail');
    Route::get('booking-detail/show','Admin\BookingController@show')->name('booking-detail.show');
    // Route::post('booking-detail/store','Admin\BookingController@store')->name('booking-detail.store');
    // Route::get('booking-detail/edit/{id}','Admin\BookingController@edit')->name('booking-detail.edit');
    // Route::put('booking-detail/update/{?id}','Admin\BookingController@update')->name('booking-detail.update');
    // Route::delete('booking-detail/destory/{id}','Admin\BookingController@destory')->name('booking-detail.destory');

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
    //  Route::post('seat-layout/store','Admin\SeatLayoutController@store')->name('seat-layout.store');
    //  Route::get('seat-layout/edit/{id}','Admin\SeatLayoutController@edit')->name('seat-layout.edit');
    //  Route::put('seat-layout/update/{?id}','Admin\SeatLayoutController@update')->name('seat-layout.update');
    //  Route::delete('seat-layout/destory/{id}','Admin\SeatLayoutController@destory')->name('seat-layout.destory');


     //Rating
     Route::get('rating','Admin\RatingController@index')->name('rating');

    // Route::get('route-details','Admin')

});



//Vendor
Route::get('vendor_','Vendor\LoginController@index')->name('vendor');
Route::post('vendor/login','Vendor\LoginController@login')->name('vendor.login');
//vendor register
Route::get('register','Vendor\VendorController@register')->name('vendor.register');
Route::post('register/new','Vendor\VendorController@registernew')->name('vendor.register.new');
Route::group(['prefix' => 'vendor','middleware'=>'vendorauth'], function () {

    //dashboard
    Route::get('index','Vendor\VendorController@index')->name('vendor.index');


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
    Route::get('bus-detail/destory','Vendor\BusController@busdestory')->name('vendor.bus-detail.destory');

    //bus type
    Route::get('bus-detail/bus-type','Vendor\BusController@bustype')->name('vendor.bus-type');
    Route::post('bus-detail/bus-type/add','Vendor\BusController@bustypeadd')->name('vendor.bus-type.add');
    Route::get('bus-detail/bus-type/edit/{id}','Vendor\BusController@bustypeedit')->name('vendor.bus-type.edit');
    Route::post('bus-detail/bus-type/update/{id}','Vendor\BusController@bustypeupdate')->name('vendor.bus-type.update');
    Route::get('bus-detail/bus-type/destory','Vendor\BusController@bustypedestory')->name('vendor.bus-type.destory');

    //route details
    Route::get('route-detail','Vendor\RouteController@index')->name('vendor.route-detail');
    Route::get('route-detail/add','Vendor\RouteController@create')->name('vendor.route-detail.add');
    Route::post('route-detail/store','Vendor\RouteController@store')->name('vendor.route-detail.store');
    Route::get('route-detail/edit/{id}','Vendor\RouteController@edit')->name('vendor.route-detail.edit');
    Route::post('route-detail/update/{id}','Vendor\RouteController@update')->name('vendor.route-detail.update');
    Route::get('route-detail/destory','Vendor\RouteController@routedestroy')->name('vendor.route-detail.destory');

    Route::get('bus-route-detail','Vendor\RouteController@busroute')->name('vendor.bus-route-detail.get');

    //Board point details
    Route::get('board-point','Vendor\BoardPointController@index')->name('vendor.board-point');
    Route::get('board-point/add','Vendor\BoardPointController@create')->name('vendor.board-point.add');
    Route::post('board-point/store','Vendor\BoardPointController@store')->name('vendor.board-point.store');
    Route::get('board-point/edit/{id}','Vendor\BoardPointController@edit')->name('vendor.board-point.edit');
    Route::post('board-point/update/{id}','Vendor\BoardPointController@update')->name('vendor.board-point.update');
    Route::get('board-point/destory','Vendor\BoardPointController@boarddestory')->name('vendor.board-point.destory');

    //Drop point details
    Route::get('drop-point','Vendor\DropPointController@index')->name('vendor.drop-point');
    Route::get('drop-point/add','Vendor\DropPointController@create')->name('vendor.drop-point.add');
    Route::post('drop-point/store','Vendor\DropPointController@store')->name('vendor.drop-point.store');
    Route::get('drop-point/edit/{id}','Vendor\DropPointController@edit')->name('vendor.drop-point.edit');
    Route::post('drop-point/update/{id}','Vendor\DropPointController@update')->name('vendor.drop-point.update');
    Route::get('drop-point/destory','Vendor\DropPointController@dropdestory')->name('vendor.drop-point.destory');

    //Promo Management details
    Route::get('promo-detail','Vendor\PromoController@index')->name('vendor.promo-detail');
    Route::get('promo-detail/add','Vendor\PromoController@create')->name('vendor.promo-detail.add');
    Route::post('promo-detail/store','Vendor\PromoController@store')->name('vendor.promo-detail.store');
    Route::get('promo-detail/edit/{id}','Vendor\PromoController@edit')->name('vendor.promo-detail.edit');
    Route::post('promo-detail/update/{id}','Vendor\PromoController@update')->name('vendor.promo-detail.update');
    Route::get('promo-detail/destory','Vendor\PromoController@destroy')->name('vendor.promo-detail.destory');

    //BusImage Gallery
    Route::get('img_gallery','Vendor\ImageGalleryController@index')->name('vendor.img_gallery');
    Route::get('img_gallery/add','Vendor\ImageGalleryController@create')->name('vendor.img_gallery.add');
    Route::post('img_gallery/store','Vendor\ImageGalleryController@store')->name('vendor.img_gallery.store');
    Route::get('img_gallery/edit/{id}','Vendor\ImageGalleryController@edit')->name('vendor.img_gallery.edit');
    Route::post('img_gallery/update/{id}','Vendor\ImageGalleryController@update')->name('vendor.img_gallery.update');
    Route::get('img_gallery/destory','Vendor\ImageGalleryController@destroy')->name('vendor.img_gallery.destory');


    //Customer  Details
    Route::get('customer-detail','Vendor\CustomerController@index')->name('vendor.customer-detail');
    // Route::get('customer-detail/add','Vendor\CustomerController@create')->name('vendor.customer-detail.add');
    // Route::post('customer-detail/store','Vendor\CustomerController@store')->name('vendor.customer-detail.store');
    // Route::get('customer-detail/edit/{id}','Vendor\CustomerController@edit')->name('vendor.customer-detail.edit');
    // Route::put('customer-detail/update/{?id}','Vendor\CustomerController@update')->name('vendor.customer-detail.update');
    // Route::delete('customer-detail/destory/{id}','Vendor\CustomerController@destory')->name('vendor.customer-detail.destory');

    //Booking  Details
    Route::get('booking-detail','Vendor\BookingController@index')->name('vendor.booking-detail');
    Route::get('booking-detail/show','Vendor\BookingController@show')->name('vendor.booking-detail.show');
    // Route::post('booking-detail/store','Vendor\BookingController@store')->name('vendor.booking-detail.store');
    // Route::get('booking-detail/edit/{id}','Vendor\BookingController@edit')->name('vendor.booking-detail.edit');
    // Route::put('booking-detail/update/{?id}','Vendor\BookingController@update')->name('vendor.booking-detail.update');
    // Route::delete('booking-detail/destory/{id}','Vendor\BookingController@destory')->name('vendor.booking-detail.destory');

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



//Agent
Route::get('agent_','Agent\LoginController@index')->name('agent');
Route::post('agent/login','Agent\LoginController@login')->name('agent.login');

//agent register
Route::get('register/agent','Agent\AgentController@register')->name('agent.register');
Route::post('register/agent/new','Agent\AgentController@registernew')->name('agent.register.new');

Route::group(['prefix' => 'agent','middleware'=>'agentauth'], function () {

    //dashboard
    Route::get('index','Agent\AgentController@index')->name('agent.index');

    //profile management
    Route::get('profile','Agent\AgentController@profile')->name('agent.profile');
    Route::post('profile/update','Agent\AgentController@profileupdate')->name('agent.profile.update');
    Route::post('profile/password/update','Agent\AgentController@agentpassword')->name('agent.password.update');

    //agent logout
    Route::get('logout','Agent\LoginController@logout')->name('agent.logout');

    //commen status change route
    Route::post('status-change','Agent\AgentController@statuschange')->name('agent.status.change');

    //bus management
    Route::get('bus-detail','Agent\BusController@index')->name('agent.bus-detail');
    Route::get('bus-detail/add','Agent\BusController@create')->name('agent.bus-detail.add');
    Route::post('bus-detail/store','Agent\BusController@store')->name('agent.bus-detail.store');
    Route::get('bus-detail/edit/{id}','Agent\BusController@edit')->name('agent.bus-detail.edit');
    Route::post('bus-detail/update/{id}','Agent\BusController@update')->name('agent.bus-detail.update');
    Route::get('bus-detail/destory','Agent\BusController@busdestory')->name('agent.bus-detail.destory');

    //bus type
    Route::get('bus-detail/bus-type','Agent\BusController@bustype')->name('agent.bus-type');
    Route::post('bus-detail/bus-type/add','Agent\BusController@bustypeadd')->name('agent.bus-type.add');
    Route::get('bus-detail/bus-type/edit/{id}','Agent\BusController@bustypeedit')->name('agent.bus-type.edit');
    Route::post('bus-detail/bus-type/update/{id}','Agent\BusController@bustypeupdate')->name('agent.bus-type.update');
    Route::get('bus-detail/bus-type/destory','Agent\BusController@bustypedestory')->name('agent.bus-type.destory');

    //route details
    Route::get('route-detail','Agent\RouteController@index')->name('agent.route-detail');
    Route::get('route-detail/add','Agent\RouteController@create')->name('agent.route-detail.add');
    Route::post('route-detail/store','Agent\RouteController@store')->name('agent.route-detail.store');
    Route::get('route-detail/edit/{id}','Agent\RouteController@edit')->name('agent.route-detail.edit');
    Route::post('route-detail/update/{id}','Agent\RouteController@update')->name('agent.route-detail.update');
    Route::get('route-detail/destory','Agent\RouteController@routedestroy')->name('agent.route-detail.destory');

    Route::get('bus-route-detail','Agent\RouteController@busroute')->name('agent.bus-route-detail.get');

    //Board point details
    Route::get('board-point','Agent\BoardPointController@index')->name('agent.board-point');
    Route::get('board-point/add','Agent\BoardPointController@create')->name('agent.board-point.add');
    Route::post('board-point/store','Agent\BoardPointController@store')->name('agent.board-point.store');
    Route::get('board-point/edit/{id}','Agent\BoardPointController@edit')->name('agent.board-point.edit');
    Route::post('board-point/update/{id}','Agent\BoardPointController@update')->name('agent.board-point.update');
    Route::get('board-point/destory','Agent\BoardPointController@boarddestory')->name('agent.board-point.destory');

    //Drop point details
    Route::get('drop-point','Agent\DropPointController@index')->name('agent.drop-point');
    Route::get('drop-point/add','Agent\DropPointController@create')->name('agent.drop-point.add');
    Route::post('drop-point/store','Agent\DropPointController@store')->name('agent.drop-point.store');
    Route::get('drop-point/edit/{id}','Agent\DropPointController@edit')->name('agent.drop-point.edit');
    Route::post('drop-point/update/{id}','Agent\DropPointController@update')->name('agent.drop-point.update');
    Route::get('drop-point/destory','Agent\DropPointController@dropdestory')->name('agent.drop-point.destory');

    //Promo Management details
    Route::get('promo-detail','Agent\PromoController@index')->name('agent.promo-detail');
    Route::get('promo-detail/add','Agent\PromoController@create')->name('agent.promo-detail.add');
    Route::post('promo-detail/store','Agent\PromoController@store')->name('agent.promo-detail.store');
    Route::get('promo-detail/edit/{id}','Agent\PromoController@edit')->name('agent.promo-detail.edit');
    Route::post('promo-detail/update/{id}','Agent\PromoController@update')->name('agent.promo-detail.update');
    Route::get('promo-detail/destory','Agent\PromoController@destroy')->name('agent.promo-detail.destory');

    //BusImage Gallery
    Route::get('img_gallery','Agent\ImageGalleryController@index')->name('agent.img_gallery');
    Route::get('img_gallery/add','Agent\ImageGalleryController@create')->name('agent.img_gallery.add');
    Route::post('img_gallery/store','Agent\ImageGalleryController@store')->name('agent.img_gallery.store');
    Route::get('img_gallery/edit/{id}','Agent\ImageGalleryController@edit')->name('agent.img_gallery.edit');
    Route::post('img_gallery/update/{id}','Agent\ImageGalleryController@update')->name('agent.img_gallery.update');
    Route::get('img_gallery/destory','Agent\ImageGalleryController@destroy')->name('agent.img_gallery.destory');


    //Customer  Details
    Route::get('customer-detail','Agent\CustomerController@index')->name('agent.customer-detail');
    // Route::get('customer-detail/add','Agent\CustomerController@create')->name('agent.customer-detail.add');
    // Route::post('customer-detail/store','Agent\CustomerController@store')->name('agent.customer-detail.store');
    // Route::get('customer-detail/edit/{id}','Agent\CustomerController@edit')->name('agent.customer-detail.edit');
    // Route::put('customer-detail/update/{?id}','Agent\CustomerController@update')->name('agent.customer-detail.update');
    // Route::delete('customer-detail/destory/{id}','Agent\CustomerController@destory')->name('agent.customer-detail.destory');

    //Booking  Details
    Route::get('booking-detail','Agent\BookingController@index')->name('agent.booking-detail');
    Route::get('booking-detail/show','Agent\BookingController@show')->name('agent.booking-detail.show');
    // Route::post('booking-detail/store','Agent\BookingController@store')->name('agent.booking-detail.store');
    // Route::get('booking-detail/edit/{id}','Agent\BookingController@edit')->name('agent.booking-detail.edit');
    // Route::put('booking-detail/update/{?id}','Agent\BookingController@update')->name('agent.booking-detail.update');
    // Route::delete('booking-detail/destory/{id}','Agent\BookingController@destory')->name('agent.booking-detail.destory');

     //Cancellation
     Route::get('cancellation-detail','Agent\CancellationController@index')->name('agent.cancellation-detail');
     Route::get('cancellation-detail/add','Agent\CancellationController@create')->name('agent.cancellation-detail.add');
     Route::post('cancellation-detail/store','Agent\CancellationController@store')->name('agent.cancellation-detail.store');
     Route::get('cancellation-detail/edit/{id}','Agent\CancellationController@edit')->name('agent.cancellation-detail.edit');
     Route::post('cancellation-detail/update/{id}','Agent\CancellationController@update')->name('agent.cancellation-detail.update');
     Route::get('cancellation-detail/destroy','Agent\CancellationController@destroy')->name('agent.cancellation-detail.destroy');

    //Rating
    Route::get('rating','Agent\RatingController@index')->name('agent.rating');
});



Route::get('/', function () {
    return view('web.index');
})->name('web.index');

Route::get('/offer', function () {
    return view('web.offer');
})->name('offers');
