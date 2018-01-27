<?php
Route::get('/', ['uses' =>'AboutController@index', 'as' => 'about.index']);
Route::get('/association', ['uses' =>'AssociaController@index', 'as' => 'association.index']);
Route::get('/emergency-information', ['uses' =>'EmergencyInfoController@index', 'as' => 'emergency.index']);
Route::get('/hotel-information', ['uses' =>'HotelInfoController@index', 'as' => 'hotelInfo.index']);
Route::get('/restaurant-information', ['uses' =>'RestaurantInfoController@index', 'as' => 'restaurantInfo.index']);
Route::get('/transportation', ['uses' =>'TransportController@index', 'as' => 'transport.index']);
Route::get('/guide', ['uses' =>'AboutController@aboutApp', 'as' => 'about.abouapp']);

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('transportations', 'Admin\TransportationsController');
    Route::post('transportations_mass_destroy', ['uses' => 'Admin\TransportationsController@massDestroy', 'as' => 'transportations.mass_destroy']);
    Route::post('transportations_restore/{id}', ['uses' => 'Admin\TransportationsController@restore', 'as' => 'transportations.restore']);
    Route::delete('transportations_perma_del/{id}', ['uses' => 'Admin\TransportationsController@perma_del', 'as' => 'transportations.perma_del']);
    Route::resource('associations', 'Admin\AssociationsController');
    Route::post('associations_mass_destroy', ['uses' => 'Admin\AssociationsController@massDestroy', 'as' => 'associations.mass_destroy']);
    Route::post('associations_restore/{id}', ['uses' => 'Admin\AssociationsController@restore', 'as' => 'associations.restore']);
    Route::delete('associations_perma_del/{id}', ['uses' => 'Admin\AssociationsController@perma_del', 'as' => 'associations.perma_del']);
    Route::resource('hotel_informations', 'Admin\HotelInformationsController');
    Route::post('hotel_informations_mass_destroy', ['uses' => 'Admin\HotelInformationsController@massDestroy', 'as' => 'hotel_informations.mass_destroy']);
    Route::post('hotel_informations_restore/{id}', ['uses' => 'Admin\HotelInformationsController@restore', 'as' => 'hotel_informations.restore']);
    Route::delete('hotel_informations_perma_del/{id}', ['uses' => 'Admin\HotelInformationsController@perma_del', 'as' => 'hotel_informations.perma_del']);
    Route::resource('restaurant_infomations', 'Admin\RestaurantInfomationsController');
    Route::post('restaurant_infomations_mass_destroy', ['uses' => 'Admin\RestaurantInfomationsController@massDestroy', 'as' => 'restaurant_infomations.mass_destroy']);
    Route::post('restaurant_infomations_restore/{id}', ['uses' => 'Admin\RestaurantInfomationsController@restore', 'as' => 'restaurant_infomations.restore']);
    Route::delete('restaurant_infomations_perma_del/{id}', ['uses' => 'Admin\RestaurantInfomationsController@perma_del', 'as' => 'restaurant_infomations.perma_del']);
    Route::resource('emergency_informations', 'Admin\EmergencyInformationsController');
    Route::post('emergency_informations_mass_destroy', ['uses' => 'Admin\EmergencyInformationsController@massDestroy', 'as' => 'emergency_informations.mass_destroy']);
    Route::post('emergency_informations_restore/{id}', ['uses' => 'Admin\EmergencyInformationsController@restore', 'as' => 'emergency_informations.restore']);
    Route::delete('emergency_informations_perma_del/{id}', ['uses' => 'Admin\EmergencyInformationsController@perma_del', 'as' => 'emergency_informations.perma_del']);



 
});
