<?php

use Spatie\Sitemap\SitemapGenerator;

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
Route::group(['middleware' => ['revalidate']], function () {
    Auth::routes();
});

//
Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');

//test Cybersource
Route::get('/test/payment', 'User\\PaymentsController@testPayment');
Route::post('/test/do-payment', 'User\\PaymentsController@testDoPayment');

//User verify
Route::get('/user/verify/{code}', 'Auth\\RegisterController@verify');
//Home page
Route::get('/', 'User\\HomeController@index');
Route::get('/change-localization/{language}', 'User\\HomeController@changeLocalization');
Route::get('logout','User\\UsersController@logout');
//Home How it works
Route::get('how-it-works', 'User\\HowItWorksController@index');
//Product detail
Route::get('shoes-style-detail/{shoes_type_slug}/{shoes_style_slug}', 'User\\ShoesStyleDetailController@index');
//Shoes style
Route::get('shoes-style', 'User\\ShoesStyleController@getOverview'); // overview of shoesstyle
Route::get('shoes-style/{name}', 'User\\ShoesStyleController@index');
Route::get('user/shoeStyle/{id}', 'User\\ShoesStyleController@getShoeStyles');

// Product Features
Route::get('product-feature/{id}', 'User\\ProductFeatureController@index');
Route::get('product-feature-detail/{slug}', 'User\\ProductFeatureController@showProductFeatureDetail');

//Contact
Route::get('contact', 'User\\ContactController@index');

//About Us
Route::get('about-us', 'User\\AboutUsController@index');

// Indiegogo Landing Page
Route::get('donggiay4.0', 'User\\IndiegogoController@index');

// Ajax to save pre-order
Route::get('donggiay4.0/thank-you' , 'User\\IndiegogoController@thankYou');
Route::post('indiegogo/pre-order', 'User\\IndiegogoController@preOrder');

// Ajax to add to cart
Route::get('shopping/cart', 'User\\ShoppingCartController@index');
Route::get('shopping/user-cart', 'User\\ShoppingCartController@userCart');
Route::post('shopping/add-to-cart', 'User\\ShoppingCartController@addToCart');
Route::post('shopping/remove-from-cart/', 'User\\ShoppingCartController@removeFromCart');
Route::post('shopping/change-quantity/', 'User\\ShoppingCartController@changeQuantity');
Route::get('shopping/shipping-info', 'User\\ShoppingCartController@shippingInfo');
Route::post('shopping/save-shipping-info', 'User\\ShoppingCartController@saveShippingInfo');
Route::post('shopping/update-card-items-quantity', 'User\\ShoppingCartController@updateCardItemsQuantity');
Route::get('shopping/checkout', 'User\\ShoppingCartController@checkOut');
Route::post('shopping/get-states-or-cities', 'User\\ShoppingCartController@getStatesOrCities');
Route::get('shopping/get-countries', 'User\\ShoppingCartController@getCountries');
Route::post('shopping/get-states-in-country', 'User\\ShoppingCartController@getStatesInCountry');
Route::post('shopping/get-cities-in-state', 'User\\ShoppingCartController@getCitiesInState');
Route::post('shopping/get-cities-in-country', 'User\\ShoppingCartController@getCitiesInCountry');
Route::get('shopping/get-quantity-items', 'User\\ShoppingCartController@getQuantityItems');
// static page
Route::get('pages/{name}', 'User\\PageController@index');

//Order
Route::get('order/{code}', 'User\\OrderController@index');

//Store
Route::post('order', 'User\\OrderController@store');

Route::group(['middleware' => ['user', 'revalidate']], function () {
    Route::get('user/my-profile', 'User\\UsersController@myProfile');
    Route::get('user/my-profile/edit', 'User\\UsersController@editMyProfile');
    Route::patch('user/my-profile', 'User\\UsersController@updateProfile');
    Route::post('user/change-profile-image', 'User\\UsersController@changeProfileImage');

    //change password
    Route::get('user/my-profile/change-password', 'User\\UsersController@changeMyPassword');
    Route::post('user/my-profile/change-password', 'User\\UsersController@updatePassword');

    //
    Route::get('shopping/payments', 'User\\PaymentsController@index');
    Route::post('shopping/payments', 'User\\PaymentsController@store');
    Route::get('shopping/thank-you/{orderId}', 'User\\PaymentsController@thankYou');
    Route::get('shopping/payment-pending', 'User\\PaymentsController@paymentPending');
    Route::get('shopping/payment-failed', 'User\\PaymentsController@paymentFailed');
    Route::get('user/shipping-information', 'User\\UsersController@shippingInformation');
    Route::post('user/change-shipping-info', 'User\\UsersController@changeShippingInfo');    
    Route::get('user/feet-profile', 'User\\UsersController@feetProfile');
    Route::post('user/change-feet-profile', 'User\\UsersController@changeFeetProfile');    
    
    Route::get('user/my-orders', 'User\\UsersController@myOrders');
    Route::get('user/orders/{id}', 'User\\UsersController@orderDetail');

    
    
});

Route::group(['middleware' => ['admin', 'revalidate']], function () {
    // Home page
    Route::get('admin', 'Admin\\AdminsController@index');

    //my profile without any permission
    Route::post('admin/users/{id}/change-profile-image', 'Admin\\UsersController@changeUserProfileImage');
    Route::get('admin/my-profile', 'Admin\\UsersController@myProfile');
    Route::get('admin/my-profile/edit', 'Admin\\UsersController@editMyProfile');
    Route::patch('admin/my-profile', 'Admin\\UsersController@updateProfile');
    Route::post('admin/change-profile-image', 'Admin\\UsersController@changeProfileImage');

    // Manage users, user profile
    Route::resource('admin/users', 'Admin\\UsersController', ['except' => ['destroy']]);

    // Manage Facebook leads
    Route::get('admin/facebook-leads/export-to-excel', 'Admin\\FacebookLeadsController@exportExcel');
    Route::post('admin/facebook-leads/import-from-excel', 'Admin\\FacebookLeadsController@importExcel');
    Route::resource('admin/facebook-leads', 'Admin\\FacebookLeadsController', ['only' => ['index']]);

    //Roles
    Route::resource('admin/roles', 'Admin\\RolesController');

    // Manage product packages
    Route::resource('admin/product-packages', 'Admin\\ProductPackagesController');
    Route::get('admin/package-details/{id}', 'Admin\\ProductPackagesController@getPackageDetails');

    // Manage shoe types
    Route::resource('admin/shoe-types', 'Admin\\ShoeTypesController');
    Route::post('admin/shoe-types/{id}/change-image', 'Admin\\ShoeTypesController@changeImage');

    //Manage shoe styles
    Route::resource('admin/shoe-styles', 'Admin\\ShoeStylesController');
    Route::post('admin/shoe-styles/{id}/change-image', 'Admin\\ShoeStylesController@changeImage');

    // Product Feature
    Route::resource('admin/product-feature', 'Admin\\ProductFeatureController');
    Route::post('admin/product-feature/{id}/change-image', 'Admin\\ProductFeatureController@changeImage');

    // Manage toe shapes
    Route::resource('admin/toe-shapes', 'Admin\\ToeShapesController');
    Route::post('admin/toe-shapes/{id}/change-image', 'Admin\\ToeShapesController@changeImage');

    // Manage leather
    Route::resource('admin/leather', 'Admin\\LeatherController');
    Route::post('admin/leather/{id}/change-image', 'Admin\\LeatherController@changeImage');

    //Page How It Work
    Route::resource('admin/page-how-it-works', 'Admin\\HowItWorkController');
    Route::post('admin/page-how-it-works/{id}/change-image', 'Admin\\HowItWorkController@changeImage');

    // Home How It WorkT
    Route::resource('admin/home-how-it-works', 'Admin\\HomeHowItWorkController');
    Route::post('admin/home-how-it-works/{id}/change-image', 'Admin\\HomeHowItWorkController@changeImage');

    // Manage outsole types
    Route::resource('admin/outsole-types', 'Admin\\OutsoleTypesController');
    Route::post('admin/outsole-types/{id}/change-image', 'Admin\\OutsoleTypesController@changeImage');

    // Manage Shoe Sizes
    Route::resource('admin/shoe-sizes', 'Admin\\ShoeSizesController');

    // Manage ordersorders
    Route::resource('admin/orders', 'Admin\\OrdersController', ['except' => ['destroy']]);
    Route::post('admin/orders/change-status', 'Admin\\OrdersController@changeStatus');


    // Download Measurement info to zip file
    Route::get('/admin/measurements/{code}/download-to-zip', 'Admin\\MeasurementsController@downloadToZip');

    // Ajax to get measurement info
    Route::get('admin/measurements/get-measurement-info-by-order-id', 'Admin\\MeasurementsController@getByOrderId');
    Route::get('admin/measurements/get-measurement-info-by-id', 'Admin\\MeasurementsController@getById');

    // Manage preordersorders
    Route::resource('admin/pre-orders', 'Admin\\PreOrdersController', ['only' => ['index']]);
    Route::get('admin/pre-orders/export-to-excel', 'Admin\\PreOrdersController@exportExcel');

    //Manage Shoe Category
    Route::resource('admin/shoe-categories', 'Admin\\ShoeCategoryController');

    // Slider
    Route::resource('admin/slider', 'Admin\\SliderController');
    Route::post('admin/slider/{id}/change-image', 'Admin\\SliderController@changeImage');

    // Settings
    Route::resource('admin/settings/emails', 'Admin\\EmailController', ['except' => ['create', 'destroy']]);

    // Settings Management
    Route::get('admin/settings/index', 'Admin\\SettingController@settings');
    Route::post('admin/settings', 'Admin\\SettingController@storeOrUpdateSettings');

    //Setting currency
    Route::get('admin/settings/currency', 'Admin\\SettingController@currency');
    Route::get('admin/settings/currency/{id}/edit', 'Admin\\SettingController@editCurrency');
    Route::patch('admin/settings/currency/{id}', 'Admin\\SettingController@changeCurrency');
    Route::get('admin/settings/currency/{id}', 'Admin\\SettingController@changeCurrency');
    Route::get('admin/settings/currency-add', 'Admin\\SettingController@addCurrency');
    Route::post('admin/settings/currency/add', 'Admin\\SettingController@saveCurrency');
    
    

    // Manage flagship styles
    Route::resource('admin/flagship-styles', 'Admin\\FlagshipStylesController');
    Route::post('admin/flagship-styles/{id}/change-image', 'Admin\\FlagshipStylesController@changeImage');

    // Blog Management - Post Management
    Route::resource('admin/pf-details', 'Admin\\ProductFeatureDetailController');

    // Video
    Route::resource('admin/video', 'Admin\\VideoController');

    // About us image
    Route::resource('admin/about-us-image', 'Admin\\AboutUsController');
    Route::post('admin/about-us-image/{id}/change-image', 'Admin\\AboutUsController@changeImage');

    // About us description
    Route::resource('admin/about-us-description', 'Admin\\AboutUsDescriptionController');


    // Page Indiegogo Setting
    Route::get('admin/pages/indiegogo', 'Admin\\PageController@indiegogo');
    Route::post('admin/pages/indiegogo', 'Admin\\PageController@indiegogoStoreOrUpdate');
    Route::get('admin/pages/indiegogo/create', 'Admin\\PageController@createDetail');
    Route::post('admin/pages/indiegogo/create', 'Admin\\PageController@storeDetail');
    Route::get('admin/pages/indiegogo/detail/{id}/edit', 'Admin\\PageController@editDetail');
    Route::patch('admin/pages/indiegogo/detail/{id}', 'Admin\\PageController@updateDetail');
    Route::delete('admin/pages/indiegogo/detail/{id}', 'Admin\\PageController@deleteDetail');

    Route::get('admin/pages/{name}', 'Admin\\PageController@otherPages');
    Route::post('admin/pages/{name}', 'Admin\\PageController@otherPagesStoreOrUpdate');
});


