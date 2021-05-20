<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => ['auth']
], function () {
    Route::view('/', 'admin.layouts.master');
    
    // Hobby Routes
    Route::get('hobby', 'HobbyController@index');
    Route::post('hobby', 'HobbyController@store');
    Route::get('hobby/create', 'HobbyController@create');
    Route::get('hobby/{hobby}', 'HobbyController@show');
    Route::get('hobby/{id}/edit', 'HobbyController@edit');
    Route::put('hobby/{id}/edit', 'HobbyController@update');
    Route::get('hobby/{id}/delete', 'HobbyController@destroy');
    Route::get('hobby/ajax/data', 'HobbyController@anyData'); // For Datatables
    
    // Profile Routes
    Route::view('profile', 'admin.profile.index')->name('profile.index');;
    Route::view('profile/edit', 'admin.profile.edit')->name('profile.edit');
    Route::put('profile/edit', 'ProfileController@update')->name('profile.update');
    Route::put('profile/updateProfileImage', 'ProfileController@updateProfileImage')->name('profile.updateProfileImage');
    Route::view('profile/password', 'admin.profile.edit_password')->name('profile.edit.password');
    Route::post('profile/password', 'ProfileController@updatePassword')->name('profile.update.password');

    // User Routes
    Route::resource('/user', 'UserController');
    // Role Routes
    Route::resource('role', 'RoleController');
});

