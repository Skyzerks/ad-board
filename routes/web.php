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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'as' => 'main',
    'uses' => 'MainController@showMain'
]);

Route::get('/catalog/{id?}', [
    'as' => 'catalog',
    'uses' => 'CatalogController@showCategory'
]);

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/create-ad', [
    'as' => 'create.ad',
    'middleware' => 'auth',
    'uses' => 'CatalogController@showCategory'
]);

Route::get('/user/info', [
    'as' => 'user.info',
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
]);

Route::post('/create-category', [
    'as' => 'create.category',
    'middleware' => 'auth',
    'uses' => 'CatalogController@createCategory'
]);

Route::group(['middleware' => ['auth', 'admin'], 'as' => 'admin::', 'prefix' => 'admin'], function(){

//    Route::get('/', [
//        'as' => 'main',
//        'uses' => 'Admin\UserController@index'
////            function(){
////            return 'hello admin';
////        }
//    ]);

    Route::resource('/', 'Admin\MainController', [
        'only' => ['index']
    ]);
    // /admin/user/
    // /admin/user/1/edit
    // /admin/user/1/update
    // /admin/user/1/delete
    // php artisan route:list
    Route::resource('category', 'Admin\CategoryController', [
        'only' => ['index', 'show', 'create', 'destroy', 'store']
    ]);

    Route::resource('ad', 'Admin\AdController', [
        'only' => ['index', 'show', 'create','destroy']
    ]);

    Route::resource('user', 'Admin\UserController', [
        'only' => ['store', 'index', 'edit', 'update','create', 'destroy']
    ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
