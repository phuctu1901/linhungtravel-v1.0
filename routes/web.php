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


Route::get('/detail', function () {
    return view('client.tour_days');
});
//Route::get('/admins', function () {
//    return view('admin.index');
//});

// Đăng nhập và xử lý đăng nhập


Route::get('admin/login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('admin/login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);

Route::group(['prefix'=>'/admin',  'middleware' => 'auth'],function(){
    //   Admin -> phần tour
    Route::get('/tour', 'Admin\TourController@index');
    Route::get('/tour/add', 'Admin\TourController@addview');
    Route::get('/tour/edit/{tour_id}', 'Admin\TourController@editview');
    Route::get('/tour/getCategoryByParentId/{parent_id}', 'Admin\TourController@getCategoryByParentId');

    Route::get('/tour/delete/{tour_id}', 'Admin\TourController@deleteTour');

    Route::post('/tour/addRequest', 'Admin\TourController@addRequest');
    Route::post('/tour/editRequest', 'Admin\TourController@editRequest');

    //   Admin -> phần danh mục tour
    Route::get('/tourcategoryparent', 'Admin\TourParentController@getAll');



    Route::get('/tourcategory', 'Admin\TourCategoryController@getAll');

    Route::get('/tourcategory/add', 'Admin\TourCategoryController@addView');
    Route::post('/tourcategory/addRequest', 'Admin\TourCategoryController@addRequest');

    Route::get('/tourcategory/edit/{tour_category_id}', 'Admin\TourCategoryController@editview');
    Route::post('/tourcategory/editRequest', 'Admin\TourCategoryController@editRequest');
    Route::get('/tourcategory/delete/{tour_category_id}', 'Admin\TourCategoryController@delete');

    Route::get('/slider', 'Admin\SliderController@getAll');

    Route::get('/slider/add', 'Admin\SliderController@addView');
    Route::post('/slider/addRequest', 'Admin\SliderController@addRequest');
    Route::get('/slider/edit/{slider_id}','Admin\SliderController@editview');
    Route::post('/slider/editRequest', 'Admin\SliderController@editRequest');
    Route::get('/slider/delete/{slider_id}', 'Admin\SliderController@delete');
    Route::get('/slider/detail/{slider_id}','Admin\SliderController@detail');

    Route::get('/footer', 'Admin\FooterController@index');
    Route::get('/footer/edit/{id}', 'Admin\FooterController@editView');
    Route::post('/footer/editRequest','Admin\FooterController@editRequest');
    Route::get('/footer/add', 'Admin\FooterController@addView');
    Route::post('/footer/addRequest','Admin\FooterController@addRequest');
    Route::get('/footer/delete/{id}', 'Admin\FooterController@delete');


    Route::get('/page', 'Admin\PageController@getAll');
    Route::get('/page/add', 'Admin\PageController@addView');
    Route::post('/page/addRequest', 'Admin\PageController@addRequest');
    Route::get('/page/edit/{page_id}', 'Admin\PageController@editview');
    Route::post('/page/editRequest', 'Admin\PageController@editRequest');
    Route::get('/page/delete/{page_id}', 'Admin\PageController@delete');



    Route::get('/postcategory', 'Admin\PostCategoryController@getAll');
    Route::get('/postcategory/add', 'Admin\PostCategoryController@addView');
    Route::post('/postcategory/addRequest', 'Admin\PostCategoryController@addRequest');
    Route::get('/postcategory/edit/{post_category_id}', 'Admin\PostCategoryController@editview');
    Route::post('/postcategory/editRequest', 'Admin\PostCategoryController@editRequest');
    Route::get('/postcategory/delete/{post_category_id}', 'Admin\PostCategoryController@delete');


    Route::get('/post', 'Admin\PostController@getAll');
    Route::get('/post/add', 'Admin\PostController@addView');
    Route::post('/post/addRequest', 'Admin\PostController@addRequest');
    Route::get('/post/edit/{post_id}', 'Admin\PostController@editview');
    Route::post('/post/editRequest', 'Admin\PostController@editRequest');
    Route::get('/post/delete/{post_id}', 'Admin\PostController@delete');

    Route::get('/info', 'Admin\InfoController@getAll');
    Route::post('/info/update', 'Admin\InfoController@update');


    Route::get('/seocode', 'Admin\SeocodeController@getAll');
    Route::post('/seocode/update', 'Admin\SeocodeController@update');

    Route::get('/config', 'Admin\WebConfigController@getAll');
    Route::post('/config/update', 'Admin\WebConfigController@update');

//    Serice
    Route::get('/service', 'Admin\ServiceController@index');
    Route::get('/service/add', 'Admin\ServiceController@addView');
    Route::post('/service/addRequest','Admin\ServiceController@addRequest');
    Route::get('/service/edit/{service_id}', 'Admin\ServiceController@editView');
    Route::post('/service/editRequest','Admin\ServiceController@editRequest');
//    Route::get('/service/detail/{service_id}', 'Admin\ServiceController@detail');
    Route::get('/service/delete/{service_id}', 'Admin\ServiceController@delete');


    Route::get('/servicetype', 'Admin\ServiceTypeController@index');
    Route::get('/servicetype/add', 'Admin\ServiceTypeController@addView');
    Route::post('/servicetype/addRequest','Admin\ServiceTypeController@addRequest');
    Route::get('/servicetype/edit/{service_id}', 'Admin\ServiceTypeController@editView');
    Route::post('/servicetype/editRequest','Admin\ServiceTypeController@editRequest');


    Route::get('/review', 'Admin\ReviewController@index');
    Route::get('/review/edit/{id}', 'Admin\ReviewController@editView');
    Route::post('/review/editRequest','Admin\ReviewController@editRequest');
    Route::get('/review/add', 'Admin\ReviewController@addView');
    Route::post('/review/addRequest','Admin\ReviewController@addRequest');
    Route::get('/review/delete/{id}', 'Admin\ReviewController@delete');


    Route::get('/request/done', 'Admin\RequestController@done');
    Route::get('/request/do', 'Admin\RequestController@do');
    Route::get('/request/edit/{service_id}', 'Admin\RequestController@editView');
    Route::post('/request/editRequest','Admin\RequestController@editRequest');

    Route::get('/car', 'Admin\CarController@index');
    Route::post('/car/update', 'Admin\CarController@update');


    Route::get('/', 'Admin\DashboardController@index');


    // Đăng ký thành viên
    Route::get('/register', 'Auth\RegisterController@getRegister');
    Route::post('/register', 'Auth\RegisterController@postRegister');
    Route::get('/user', 'Admin\UserController@index');
    Route::get('/user/add', 'Admin\UserController@addView');
    Route::post('/user/addRequest', 'Admin\UserController@addRequest');
    Route::get('/user/delete/{user_id}', 'Admin\UserController@delete');
    Route::get('/user/detail/{user_id}', 'Admin\UserController@detail');



// Đăng xuất
    Route::get('/logout', [ 'as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);
    Route::get('/changePassword','Admin\UserController@showChangePasswordForm');

    Route::post('/changePassword','Admin\UserController@changePassword');
    //các route khác
});




Route::get('/', 'Client\HomeController@index');


Route::get('/chi-tiet-tour/{tour_slug}', 'Client\TourController@show');
Route::get('/tour-trong-ngay', 'Client\TourListController@getTourInDay');
Route::get('/tour-nhieu-ngay', 'Client\TourListController@getTourMultiDay');
Route::get('/danh-sach-tour', 'Client\DestinationController@getAll');
Route::get('/danh-sach-tour/{tour_cat_slug}', 'Client\TourListController@getToursBySlug');
Route::get('/tour-trong-ngay/{tour_cat_slug}', 'Client\TourListController@getTourInDayByCategory');
Route::get('/tour-nhieu-ngay/{tour_cat_slug}', 'Client\TourListController@getTourMultiDayByCategory');
Route::get('/lien-he', 'Client\ContactController@index');
Route::post('/lien-he/goi-yeu-cau', 'Client\ContactController@addRequest');


Route::get('/bai-viet', 'Client\PostController@index');
Route::get('/bai-viet/{post_category_slug}', 'Client\PostController@getPostByCategorySlug');
Route::get('/chi-tiet-bai-viet/{post_slug}', 'Client\PostController@detail');

Route::get('/thue-xe', 'Client\CarController@index');
Route::get('/dich-vu', 'Client\ServiceController@index');
Route::get('/dich-vu/{servie_slug}', 'Client\ServiceController@detail');


Route::get('/{page_slug}','Client\PageController@show');


//Route::get('/api/{tour_slug}', 'Client\TourController@detail');
//Route::get('/api/tourtype', 'Client\TourTypeController@all');

//Route::get('get-form',['uses'=> 'handleController@index']);
//Route::post('handle-form',['uses'=> 'handleController@handleRequest']);



