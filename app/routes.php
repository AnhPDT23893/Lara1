<?php


/**
 * UnAuthenticated group
 */
Route::group(array('before' => 'guest'), function() {
    Route::group(array('before' => 'csrf'), function() {
        Route::post('/login', array('as' => 'login-submit', 'uses' => 'UsersController@doLogin'));
    });

    Route::get('/login', array('as' => 'login', 'uses' => 'UsersController@login'));
});

/**
 * Authenticated group
 */
Route::group(array('before' => 'auth'), function() {
    Route::group(array('before' => 'csrf'), function() {

    });

    Route::get('/logout', array('as' => 'logout', 'uses' => 'UsersController@logout'));
});


/********************************************************
 *                      Admin area
 ********************************************************/

Route::group(array('prefix' => 'admin'), function() {

    Route::group(array('before' => 'csrf'), function () {
        Route::post('/login', array('as' => 'admin.adUser.doLogin', 'uses' => 'AdUsersController@doLogin'));
    });
    Route::get('/login', array('as' => 'admin.adUser.login', 'uses' => 'AdUsersController@login'));


    Route::group(array('before' => 'auth.admin'), function () {

        Route::resource('dashboard', 'AdDashboardController');
        Route::resource('adUser', 'AdUsersController');
        Route::resource('adRole', 'AdRolesController');
        Route::resource('asPost','AdPostController');
        Route::resource('adProduct', 'AdProductController');
        Route::resource('adCategory', 'CategoryController');
        Route::resource('adBlog', 'AdBlogController');
        Route::resource('adShip', 'AdShipController');
        Route::resource('adCustomer', 'AdCustomerController');
        Route::resource('adContact', 'AdContactController');
        Route::resource('adOrder', 'AdOrderController');

        Route::get('/logout', array('as' => 'admin.adUser.logout', 'uses' => 'AdUsersController@logout'));
        Route::get('/adRole/{adRole}/delete', array('as' => 'admin.adRole.delete', 'uses' => 'AdRolesController@destroy'));
        Route::get('/adUser/{adUser}/delete', array('as' => 'admin.adUser.delete', 'uses' => 'AdUsersController@destroy'));
        Route::get('/adProduct/{adProduct}/delete', array('as' => 'admin.adProduct.delete', 'uses' => 'AdProductController@destroy'));
        Route::get('/adCategory/{adCategory}/delete', array('as' => 'admin.adCategory.delete', 'uses' => 'CategoryController@destroy'));
        Route::get('/adBlog/{adBlog}/delete', array('as' => 'admin.adBlog.delete', 'uses' => 'AdBlogController@destroy'));
        Route::get('/adShip/{adShip}/delete', array('as' => 'admin.adShip.delete', 'uses' => 'AdShipController@destroy'));
        Route::get('/adCustomer/{adCustomer}/delete', array('as' => 'admin.adCustomer.delete', 'uses' => 'AdCustomerController@destroy'));
        Route::get('/adContact/{adContact}/delete', array('as' => 'admin.adContact.delete', 'uses' => 'AdContactController@destroy'));
        Route::get('/adOrder/{adOrder}/delete', array('as' => 'admin.adOrder.delete', 'uses' => 'AdOrderController@destroy'));
    });

});

/********************************************************
 *                      site area
 ********************************************************/

Route::group(array('prefix' => 'site'), function() {

    Route::group(array('before' => 'csrf'), function () {
        Route::post('/login', array('as' => 'site.login.doLogin', 'uses' => 'LoginController@doLogin'));
    });
    Route::get('/login', array('as' => 'site.login.login', 'uses' => 'LoginController@login'));
    Route::get('/product/{id}', array('as' => 'site.product.show', 'uses' => 'ProductController@show'));
    Route::get('/blog/{id}', array('as' => 'site.blog.show', 'uses' => 'BlogController@show'));
    Route::get('/profile/{id}', array('as' => 'site.profile.show', 'uses' => 'ProfileController@show'));

    Route::group(array('before' => 'auth.site'), function() {


    });
    Route::resource('home', 'HomeController');
    Route::resource('about', 'AboutController');
    Route::resource('Contact', 'ContactController');
    Route::resource('order', 'OrderController');
    Route::resource('cart', 'CartController');
    Route::resource('product', 'ProductController');
    Route::resource('ship', 'ShipController');
    Route::resource('register', 'RegisterController');
    Route::resource('category', 'SiteCategoryController');
    Route::resource('blog', 'BlogController');
    Route::resource('profile', 'ProfileController');
    Route::resource('login', 'LoginController');

    Route::get('/adOrder/{adOrder}/delete', array('as' => 'admin.adOrder.delete', 'uses' => 'AdOrderController@destroy'));

    Route::get('/register', function() {
        return View::make('site.user.register');
    });
//    Route::get('/order', function() {
//        return View::make('site.order.order');
//    });

    Route::post('/cart/order', array('as' => 'site.cart.order', 'uses' => 'OrderController@store'));
//    Route::post('/contact/comment', array('as' => 'site.Contact.store', 'uses' => 'ContactController@store'));
});