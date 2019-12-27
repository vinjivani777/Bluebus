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

    //Agent  Details
    Route::get('agent-detail','Admin\AgentController@index')->name('agent-detail');
    Route::get('agent-detail/add','Admin\AgentController@create')->name('agent-detail.add');
    Route::post('agent-detail/store','Admin\AgentController@store')->name('agent-detail.store');
    Route::get('agent-detail/edit/{id}','Admin\AgentController@edit')->name('agent-detail.edit');
    Route::post('agent-detail/update/{id}','Admin\AgentController@update')->name('agent-detail.update');
    Route::get('agent-detail/destroy','Admin\AgentController@destroy')->name('agent-detail.destroy');

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
    //  Route::get('seat-layout/add','Admin\SeatLayoutController@create')->name('seat-layout.add');
    //  Route::post('seat-layout/store','Admin\SeatLayoutController@store')->name('seat-layout.store');
    //  Route::get('seat-layout/edit/{id}','Admin\SeatLayoutController@edit')->name('seat-layout.edit');
    //  Route::put('seat-layout/update/{?id}','Admin\SeatLayoutController@update')->name('seat-layout.update');
    //  Route::delete('seat-layout/destory/{id}','Admin\SeatLayoutController@destory')->name('seat-layout.destory');


     //Rating
     Route::get('rating','Admin\RatingController@index')->name('rating');


    // Route::get('route-details','Admin')

});


//Vendor
Route::get('vendor','Vendor\VendorController@index')->name('vender');
Route::post('admin/login','Admin\LoginController@login')->name('admin.login');




Route::get('/', function () {
    return view('web.index');
})->name('web.index');

Route::get('/offer', function () {
    return view('web.offer');
})->name('offers');
