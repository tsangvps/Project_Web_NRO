<?php

use Illuminate\Support\Facades\Route;

// giao diện người dùng
Route::group(['namespace' => 'Client', 'as' => 'client.'], function () {
    Route::get('dang-nhap',  'UsersController@login')->name('users.login');
    Route::post('dang-nhap', 'UsersController@CheckLogin')->name('users.checklogin');
    Route::get('dang-ky',  'UsersController@register')->name('users.register');
    Route::post('dang-ky', 'UsersController@CheckRegister')->name('users.checkregister');
    Route::get('dang-xuat', 'UsersController@logout')->name('users.logout');

    Route::get('/test/{id}', 'ClientController@test');

    Route::get('/', 'ClientController@index')->name('index'); //trang chủ
    Route::get('/tin-tuc', 'ClientController@tintuc')->name('tintuc'); //Tin Tức
    Route::get('/download', 'ClientController@download')->name('download');
    Route::resource('Posts', 'PostController'); //Bài Viết 

});

// Route ADMIN
Route::group(['namespace' => 'Admin', 'prefix' => '1', 'as' => 'admin.'], function () {
    Route::get('/', 'Server@index')->name('index'); //trang chủ

    // //Phần Client (Web)
    Route::resource('/client/post-page', 'client\posts_page'); //page

    Route::resource('/client/post', 'client\PostsController'); //page

    Route::resource('/client/users', 'client\UsersController'); //users


});