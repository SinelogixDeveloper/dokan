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
//     return view('index');
// });

Auth::routes();

/* user route management  */

/* otp send  */

Route::post('/send_otp', 'Auth\RegisterController@send_otp');
Route::post('/reset_password', 'Auth\RegisterController@reset_password');
Route::post('/otp_verify', 'Auth\RegisterController@otp_verify');
/* end here   */

Route::get('/', 'HomeController@index');
Route::get('/myaccount', 'MyaccountController@index');
Route::PATCH('/myaccount/update/{id}', 'MyaccountController@update_profile');
Route::get('/product_listing/{id}', 'ProductListingController@index');
Route::get('/all_categories', 'ProductListingController@allCategories');
//Route::get('/home', 'HomeController@index')->name('home');


Route::get('/addToCart/{id}', 'ProductController@addToCart');
Route::post('addCart', 'ProductController@addCart');
Route::get('/view_cart', 'ProductController@viewCart');
Route::post('/updateCart', 'ProductController@updateCart');
Route::get('/removeCart/{id}', 'ProductController@removeCart');
Route::get('/cart/checkout', 'ProductController@checkout');
Route::post('/order/place', 'ProductController@placeOrder');
Route::get('order/success/{id}', 'ProductController@orderSuccess');

Route::get('product/view/{id}', 'ProductController@show');

Route::get('/cartt', function () {
    return view('cart1');
});

Route::get('testmail', 'ProductController@test');



/* end here  */

/* Redirect user to login if they type only admin in url */
Route::get('/admin', function() {
    return redirect()->to('admin/login');
});

Route::get('admin/locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

/* Admin */
Route::group(['prefix' => 'admin'], function() {

    // Login Routes...
    Route::get('login', ['as' => 'admin.login', 'uses' => 'AdminAuth\LoginController@showLoginForm']);
    Route::post('login', ['uses' => 'AdminAuth\LoginController@login']);
    Route::get('logout', ['as' => 'admin.logout', 'uses' => 'AdminAuth\LoginController@Adminlogout']);
    
    // Registration Routes...
    Route::get('register', ['as' => 'admin.register', 'uses' => 'AdminAuth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'admin.register.post', 'uses' => 'AdminAuth\RegisterController@register']);
    
    // Password Reset Routes...
    Route::get('password/reset', ['as' => 'admin.password.reset', 'uses' => 'AdminAuth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'admin.password.email', 'uses' => 'AdminAuth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'admin.password.reset.token', 'uses' => 'AdminAuth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'admin.password.reset.post', 'uses' => 'AdminAuth\ResetPasswordController@reset']);
    // Route::view('/home', 'admin.home')->middleware('admin');
    Route::get('dashboard', 'AdminController@adminDashboard');
    
    //product route added by kamlesh
    
    Route::get('product', 'Admin\ProductController@index');
    Route::get('addproduct', 'Admin\ProductController@create');
    Route::get('bulk-edit', 'Admin\ProductController@bulk_edit');
    Route::get('new-arrival', 'Admin\ProductController@new_arrival');
    Route::get('best_seller', 'Admin\ProductController@best_seller');
    Route::get('most_rating', 'Admin\ProductController@most_rating');


    //category route create by kamlesh
    Route::get('category', 'Admin\CategoryController@index');
    Route::get('addcategory', 'Admin\CategoryController@create');

    //usermanagement route create by kamlesh
    Route::get('user', 'Admin\UsermanagementController@index');
    Route::get('adduser', 'Admin\UsermanagementController@create');
    
    //vendor route create by kamlesh
    Route::get('vendor', 'Admin\VendorController@index');
    Route::get('vendor_report', 'Admin\VendorReportController@index');
    
    //order route created by kamlesh
    Route::get('order', 'Admin\OrderController@index');
    Route::get('addorder', function () {
    return view('admin/addorder');
    });

    Route::get('sendInvoice/{id}', 'Admin\OrderController@sendInvoice');
    Route::get('getInvoice/{id}', 'Admin\OrderController@getInvoice');
    
    //admin notification
    Route::get('notification', 'Admin\NotificationController@index');
    
    //  //admin business category
    // Route::get('business_category', 'Admin\BusinessCategoryController@index');
    // Route::get('add_business_category', 'Admin\BusinessCategoryController@create');
    
    // //admin business subcategory
    // Route::get('business_subcategory', 'Admin\BusinessSubCategoryController@index');
    // Route::get('add_business_subcategory', 'Admin\BusinessSubCategoryController@create');
    
    //business upload

    // Route::get('business_upload', 'Admin\BusinessCategoryController@index');
    
    //Comission Management
    Route::get('admin_comission', 'Admin\ComissionManagementController@index');
    Route::get('add_comission', 'Admin\ComissionManagementController@create');
    
    //admin profile changes
    Route::get('/update-password', 'AdminController@getProfile');
    Route::post('/update-password', 'AdminController@updateProfile');

    Route::get('/profile', 'AdminController@adminprofile');
    Route::PATCH('/profile/{id}', 'AdminController@adminupdateprofile');
    
    //attributes
    Route::get('/attribute', 'Admin\AttributesController@index');
    Route::get('/addattribute', 'Admin\AttributesController@create');
    
    //home banner
    Route::get('home-banner', 'Admin\HomebannerController@index');
    Route::get('addbanner', 'Admin\HomebannerController@create');
    
    //sub banner
    Route::get('sub-banner', 'Admin\HomebannerController@subbannerindex');
    Route::get('addsubbanner', 'Admin\HomebannerController@subbannercreate');
    
    //blog section
    Route::get('blog-section', 'Admin\BlogsectionController@index');
    Route::get('addblogsection', 'Admin\BlogsectionController@create');
    
    //promo banner section
    Route::get('promo-banner', 'Admin\PromobannerController@index');
    Route::get('addpromobanner', 'Admin\PromobannerController@create');
    
    //Client logo
    Route::get('client-logo', 'Admin\ClientlogoController@index');
    Route::get('addclientlogo', 'Admin\ClientlogoController@create');
    
    //Brand
    Route::get('add-brand', 'Admin\BrandController@getBrandPage');
    Route::post('add-brand', 'Admin\BrandController@addBrand');
    Route::get('show-brands', 'Admin\BrandController@showAllBrands');
    Route::get('edit-brands/{id}', 'Admin\BrandController@showEditBrand');
    Route::post('update-brand', 'Admin\BrandController@updateBrands');
    Route::get('delete-brand/{id}', 'Admin\BrandController@deleteBrand');
    
});

//product module
 Route::post('admin/addproduct','Admin\ProductController@store');
 Route::get('admin/product/edit/{id}', 'Admin\ProductController@show');
 Route::PATCH('admin/product/update/{id}','Admin\ProductController@update');
 Route::delete('admin/product/delete/{id}','Admin\ProductController@destroy');
 Route::delete('admin/product/DeleteAll', 'Admin\ProductController@deleteAll');
 Route::delete('admin/product/bulkDelete', 'ProductController@bulkDelete');
 Route::get('admin/product/new/{id}', 'Admin\ProductController@changenewarrial');
 
 Route::post('image/upload/store','Admin\ProductController@imageuploadstore');
 Route::post('admin/delete','Admin\ProductController@deleteImage');
 
 Route::post('admin/product/lowstock', 'ProductController@lowstock');
 
 Route::post('admin/product_filter','Admin\ProductController@filter');

 //category module
 Route::post('admin/addcategory','Admin\CategoryController@store');
 Route::get('admin/category/edit/{id}', 'Admin\CategoryController@show');
 Route::PATCH('admin/category/update/{id}','Admin\CategoryController@update');
 Route::delete('admin/category/delete/{id}','Admin\CategoryController@destroy');
 Route::any('admin/category_filter','Admin\CategoryController@filter');
 Route::any('admin/category/excelexport','Admin\CategoryController@excelexport');
 Route::any('admin/category/csvexport','Admin\CategoryController@csvexport');

 //UserManagemant module
 Route::post('admin/adduser','Admin\UsermanagementController@store');
 Route::get('admin/user/edit/{id}', 'Admin\UsermanagementController@show');
 Route::any('admin/user_filter','Admin\UsermanagementController@filter');
 Route::PATCH('admin/user/update/{id}','Admin\UsermanagementController@update');
 Route::delete('admin/user/delete/{id}','Admin\UsermanagementController@destroy');
 
 //admin vendor management
 Route::get('admin/vendor/active/{id}', 'Admin\VendorController@active');
 Route::get('admin/vendor/inactive/{id}', 'Admin\VendorController@inactive');
 Route::any('admin/vendor_filter','Admin\VendorController@filter');
 Route::get('admin/vendor/edit/{id}', 'Admin\VendorController@show');
 Route::PATCH('admin/vendor/update/{id}','Admin\VendorController@update');
 
 //admin notification
Route::get('admin/notification/read/{id}', 'Admin\NotificationController@read');
Route::get('admin/notification/remove/{id}', 'Admin\NotificationController@remove');

// //business category 

// Route::post('admin/add_business_category','Admin\BusinessCategoryController@store');
// Route::get('admin/business_category/edit/{id}', 'Admin\BusinessCategoryController@show');
// Route::PATCH('admin/update_business_category/{id}','Admin\BusinessCategoryController@update');

// //business Subcategory 

// Route::post('admin/add_business_subcategory','Admin\BusinessSubCategoryController@store');
// Route::get('admin/business_subcategory/edit/{id}', 'Admin\BusinessSubCategoryController@show');
// Route::PATCH('admin/update_business_subcategory/{id}','Admin\BusinessSubCategoryController@update');

//business upload verify

Route::get('admin/business_upload/active/{id}', 'Admin\BusinessCategoryController@active');
 Route::get('admin/business_upload/inactive/{id}', 'Admin\BusinessCategoryController@inactive');
 
 //business upload unlock
Route::get('admin/business_upload/unlock/{id}', 'Admin\BusinessCategoryController@unlock');

Route::get('admin/business_upload/{id}', 'Admin\BusinessCategoryController@index');
 
//order management
Route::get('admin/order/view/{id}', 'Admin\OrderController@show');
Route::post('admin/order/accept', 'Admin\OrderController@accept');
Route::post('admin/order/cancel', 'Admin\OrderController@cancel');
Route::post('admin/order/shipment', 'Admin\OrderController@shipment');
Route::post('admin/order/complete', 'Admin\OrderController@complete');
Route::post('admin/order/filterbystatus', 'Admin\OrderController@filterorder');

//Add comission
Route::post('admin/addcomission', 'Admin\ComissionManagementController@store');
Route::get('admin/comission/edit/{id}', 'Admin\ComissionManagementController@show');
Route::PATCH('admin/comission_update/{id}','Admin\ComissionManagementController@update');


//add attribute
Route::post('admin/addattribute', 'Admin\AttributesController@store');
Route::get('admin/attribute/edit/{id}', 'Admin\AttributesController@show');
Route::PATCH('admin/attribute/update/{id}','Admin\AttributesController@update');

//add banner
Route::post('admin/addbanner', 'Admin\HomebannerController@store');
Route::get('admin/banner/edit/{id}','Admin\HomebannerController@show');
Route::PATCH('admin/banner/update/{id}','Admin\HomebannerController@update');

//add sub banner
Route::post('admin/addsubbanner', 'Admin\HomebannerController@subbannerstore');
Route::get('admin/subbanner/edit/{id}','Admin\HomebannerController@subbannershow');
Route::PATCH('admin/subbanner/update/{id}','Admin\HomebannerController@subbannerupdate');

//add blog section
Route::post('admin/addblogsection', 'Admin\BlogsectionController@store');
Route::get('admin/blogsection/edit/{id}','Admin\BlogsectionController@show');
Route::PATCH('admin/blogsection/update/{id}','Admin\BlogsectionController@update');

//add promo banner
Route::post('admin/addpromo_banner', 'Admin\PromobannerController@store');
Route::get('admin/promobanner/edit/{id}','Admin\PromobannerController@show');
Route::PATCH('admin/promobanner/update/{id}','Admin\PromobannerController@update');

//add Client logo
Route::post('admin/addclientlogo', 'Admin\ClientlogoController@store');
Route::get('admin/clientlogo/edit/{id}','Admin\ClientlogoController@show');
Route::PATCH('admin/clientlogo/update/{id}','Admin\ClientlogoController@update');

//reports
Route::get('admin/vendor_report/list/{id}','Admin\VendorReportController@show');
Route::get('admin/vendor_report/details_view/{id}/{seg_id}','Admin\VendorReportController@detailsview');
Route::any('admin/vendor_report/excelexport/{id}','Admin\VendorReportController@excelexport');
Route::any('admin/vendor_report/csvexport/{id}','Admin\VendorReportController@csvexport');
 
 
 /*  Vendor Route Management  */

Route::group(['prefix' => 'vendor'], function() {
    
    
     //Route::view('register','vendor.register');
     //Route::view('login','vendor.login');
     
    Route::get('login', ['as' => 'vendor.login', 'uses' => 'VendorAuth\LoginController@showLoginForm']);
    Route::post('login', ['uses' => 'VendorAuth\LoginController@login']);
    Route::get('logout', ['as' => 'vendor.logout', 'uses' => 'VendorAuth\LoginController@Vendorlogout']);
     
    Route::get('register', ['as' => 'vendor.register', 'uses' => 'VendorAuth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'vendor.register.post', 'uses' => 'VendorAuth\RegisterController@register']);
     
     
    //Route::view('/dashboard', 'vendor.home');
    Route::get('/dashboard', 'Vendor\VendorController@getDashboard');
    //vendor product add
    Route::get('product', 'Vendor\ProductController@index');
    Route::get('addproduct', 'Vendor\ProductController@create');
     
    // Forgot Password Functionality created by jignesh 
    Route::get('verify-email/{email}', 'VendorAuth\RegisterController@showVerifyVendorMsg');
    Route::get('/reset/password', 'VendorAuth\RegisterController@showResetPasswordForm');
    
    Route::post('/reset/password/email', 'VendorAuth\RegisterController@sendResetPasswordEmail');
    Route::get('password/reset/{token}', 'VendorAuth\RegisterController@showPasswordResetForm');
    Route::post('/reset/password', 'VendorAuth\RegisterController@resetPassword');
    // Forgot Password Functionality End
    
    //vendor profile created by jignesh
    Route::get('/profile', 'Vendor\VendorController@getProfile');
    Route::post('/profile', 'Vendor\VendorController@updateProfile');
    
    //business upload
    Route::get('business_upload', 'Vendor\BusinessUploadController@index');
    Route::get('add_business_upload', 'Vendor\BusinessUploadController@create');
    
    //Order Request
    Route::get('order_request', 'Vendor\RequestOrderController@index');
    
    //My Order
    Route::get('my_order', 'Vendor\MyOrderController@index');
    
     //Payment
    Route::get('payment', 'Vendor\PaymentController@index');
    Route::get('add_payment', 'Vendor\PaymentController@create');
    
    //vendor notification
    Route::get('notification', 'Vendor\NotificationController@index');
    
    //vendor feedback
    Route::get('feedback', 'Vendor\FeedbackController@index');
    
    //update password
    Route::get('/change-password', 'Vendor\VendorController@getpassword');
    Route::post('/update-password', 'Vendor\VendorController@updatepassword');
    
});
//Route::post('vendor/register', 'Vendor\VendorRegistor@store');
//Route::post('vendor/login', 'Vendor\VendorRegistor@checklogin');

//vendor product add
 Route::post('vendor/addproduct','Vendor\ProductController@store');
 Route::get('vendor/product/edit/{id}', 'Vendor\ProductController@show');
 Route::PATCH('vendor/product/update/{id}','Vendor\ProductController@update');
 Route::delete('vendor/product/delete/{id}','Vendor\ProductController@destroy');
 Route::delete('vendor/product/DeleteAll', 'Vendor\ProductController@deleteAll');
 
 Route::post('vendor/image/upload/store','Vendor\ProductController@imageuploadstore');
 Route::post('vendor/delete','Vendor\ProductController@deleteImage');
 
 Route::post('vendor/product_filter','Vendor\ProductController@filter');
 
 //business upload 

Route::post('vendor/add_business_upload','Vendor\BusinessUploadController@store');
Route::get('vendor/business_upload/edit/{id}', 'Vendor\BusinessUploadController@show');
Route::PATCH('vendor/update_business_upload/{id}','Vendor\BusinessUploadController@update');

//order request
Route::get('vendor/order_request/view/{id}', 'Vendor\RequestOrderController@show');
Route::post('vendor/order/inprogress', 'Vendor\RequestOrderController@inprogress');
Route::post('vendor/order/cancel', 'Vendor\RequestOrderController@cancel');

//My Order
Route::get('vendor/my_order/view/{id}', 'Vendor\MyOrderController@show');
Route::post('vendor/order/readytopickup', 'Vendor\MyOrderController@readytopickup');

//Payment
Route::post('vendor/add_bank', 'Vendor\PaymentController@store');
Route::get('vendor/bank/edit/{id}', 'Vendor\PaymentController@show');
Route::PATCH('vendor/bank/{id}','Vendor\PaymentController@update');

//vendor notification
Route::get('vendor/notification/read/{id}', 'Vendor\NotificationController@read');
Route::get('vendor/notification/remove/{id}', 'Vendor\NotificationController@remove');

//Feedback
Route::get('vendor/feedback/view/{id}', 'Vendor\FeedbackController@show');

 /*  Vendor Route Management End here  */
