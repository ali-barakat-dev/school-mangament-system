<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Auth::routes();
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('auth.login');
    });

});
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ],
    function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard.index');

        Route::group(['namespace' => 'grade'], function () {
            Route::resource('grad', 'GradController');
            Route::get('grade/delete/{id}', 'GradController@destroy')->name('grade_delete');

        });

        Route::group(['namespace' => 'grade', 'prefix' => 'section'], function () {
            Route::get('/', 'Sectioncontroller@index')->name('section.index');
            Route::get('create', 'Sectioncontroller@create')->name('section.create');
            Route::post('store', 'Sectioncontroller@store')->name('section.store');
        });

        Route::view('/Add_parent', 'livewire.show_parent')->name('add_parent');

        Route::group(['namespace' => 'grade', 'prefix' => 'classroom'], function () {
            Route::get('/', 'Classromcontroller@index')->name('class.index');
            Route::get('creat', 'Classromcontroller@create')->name('class.create');
            Route::post('store', 'Classromcontroller@store')->name('class.store');
            Route::get('edit/{class_id}', 'Classromcontroller@edit')->name('class.edit');
            Route::post('update/{class_id}', 'Classromcontroller@update')->name('class.update');
            Route::get('/delete/{class_id}', 'Classromcontroller@delete')->name('class.delete');
        });
    }

);