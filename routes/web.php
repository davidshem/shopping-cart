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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main',function () {
    return view('main');
});

Route::get('/adidas',function () {
    return view('adidas');
});

Route::get('/checkout2',function () {
    return view('checkout2');
});

Route::get('/Final pay',function () {
    return view('Final pay');
});

Route::get('/home',function () {
    return view('home');
});

Route::get('/nike',function () {
    return view('nike');
});

Route::get('/NSS_shop',function () {
    return view('NSS_shop');
});

Route::get('/pay_now',function () {
    return view('pay_now');
});

Route::get('/reebok',function () {
    return view('reebok');
});

Route::get('/secondpage',function () {
    return view('secondpage');
});

Route::get('/secondpage',function () {
    return view('secondpage');
});

Route::get('/NSS_all',function () {
    return view('NSS_all');
});

Route::get('/newuser',function () {
    return view('newuser');
});

Route::get('/addProduct',[
    'uses'=>'ProductController@create',
    'as'=>'product'
]);

Route::post('/product/store',[
    'uses'=>'ProductController@store',
    'as'=>'addProduct.store'
]);

Route::get('/viewproduct',[ //broswer name
    'uses'=>'ProductController@view',
    'as'=>'view.product' //programing name
]);

Route::get('/viewproduct/delete/{id}', [
    'uses'=>'ProductController@delete',
    'as' => 'viewproduct.delete'
]);

Route::get('/viewlist',[
    'uses'=>'ProductController@viewlist',
    'as'=>'view.list'
]);

Route::get('/abc',[
    'uses'=>'ProductController@abc',
    'as'=>'abc.list'
]);

Route::get('/productdetail/{id}',[
    'uses'=>'ProductController@detail',
    'as'=>'product.detail'
]);

Route::post('/viewlist', [
    'uses'=>'ProductController@search',
    'as' => 'search.product'
]);

Route::get('editproduct/{id}', [
    'uses'=>'ProductController@edit',
    'as' => 'edit.product'
]);

Route::post('updateproduct', [
    'uses'=>'ProductController@update',
    'as' => 'update.product'
]);

Route::get('/NSS_all',[
    'uses'=>'ProductController@NSS_all',
    'as'=>'NSS_all.list'
]);

Route::get('/lucky',[
    'uses'=>'ProductController@lucky',
    'as'=>'lucky.list'
]);

Route::get('/NSS_Adidas',[
    'uses'=>'ProductController@NSS_Adidas',
    'as'=>'NSS_all.Adidas'
]);

Route::get('/NSS_Nike',[
    'uses'=>'ProductController@NSS_Nike',
    'as'=>'NSS_all.Nike'
]);

Route::get('/NSS_Reebok',[
    'uses'=>'ProductController@NSS_Reebok',
    'as'=>'NSS_all.Reebok'
]);

//process payment
Route::post('paypal','PaymentController@payWithpaypal') ; 

//check status
Route::get('status','PaymentController@getPaymentStatus') ; 

Route::post('newuser', [
    'uses'=>'RegisterController@createUser',
    'as' => 'new.user'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
