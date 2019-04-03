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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Guest\HomeController@getHome')->name('home');
Route::get('ve-chung-toi','Guest\AboutController@getAbout')->name('about');
Route::get('san-pham/{slug}', 'Guest\HomeController@getDetailProduct')->name('detail_product');
Route::get('tat-ca-san-pham', 'Guest\HomeController@getAllProduct')->name('all_product');
Route::get('danh-muc/{slug}', 'Guest\HomeController@getProductByCate')->name('cate_product');
Route::get('gio-hang','Guest\CartController@getListCart')->name('cart');
Route::post('add-to-cart','Guest\CartController@postCart')->name('add_to_cart');
Route::post('add-to-cart-ajax', 'Guest\CartController@addToCartAjax')->name('cartAjax');
Route::get('delete', 'Guest\CartController@getDeleteCart')->name('xoa_gio_hang');
Route::get('lien-he','Guest\HomeController@getContact')->name('contact');
Route::post('lien-he', 'Guest\HomeController@postContact')->name('lien_he');
Route::post('login', 'Guest\LoginRegisterController@guestLogin')->name('login_guest');


Route::post('descease-cart-{id}', 'Guest\CartController@postMinusCart')->name('minus_cart_ajax');
Route::post('increase-cart-{id}', 'Guest\CartController@postPlusCart')->name('plus_cart_ajax');
Route::delete('del-product-cart-{id}', 'Guest\CartController@getDeleteSingleProduct')->name('xoa_san_pham');

Route::get('check-out','Guest\CheckoutController@checkOut')->name('check_out');
Route::post('check-out', 'Guest\CheckOutController@postCheckOut@postCheckOut')->name('thanh_toan');

Route::get('admin','Admin\LoginController@getLogin')->name('login');
Route::post('admin', 'Admin\LoginController@postLogin')->name('post_login');
Route::get('logout', 'Admin\LoginController@getLogout')->name('logout');
/*                                      ADMIN                                        */
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'Admin']], function () {
    Route::get('drash', 'Admin\AdminController@drash')->name('drash');
    Route::resource('users', 'Admin\UserController')->names('admin_users');
    Route::resource('products', 'Admin\AdminController')->names('admin_products');
    Route::resource('categories', 'Admin\CategoryController')->names('admin_category');
    Route::resource('contacts', 'Admin\ContactController')->names('admin_contact');
    Route::resource('products/{product_slug}/variant', 'Admin\ProductVariantController')->names('admin_product_variant');
    Route::resource('slides', 'Admin\SlideController')->names('admin_slide');
    Route::resource('orders','Admin\OrderController')->names('admin_order');
    Route::post('update-order/{id}', 'Admin\OrderController@postUpdateOrder')->name('update_order');
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    Route::get('search-admin-product', 'Admin\AdminSearchController@getProduct')->name('search_products');
    Route::get('search-admin-category', 'Admin\AdminSearchController@getCategory')->name('search_categories');
    Route::get('search-admin-slide', 'Admin\AdminSearchController@getSlide')->name('search_slides');
    Route::get('search-admin-order', 'Admin\AdminSearchController@getOrder')->name('search_orders');
});
