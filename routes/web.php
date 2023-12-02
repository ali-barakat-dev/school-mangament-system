<?php

use Illuminate\Support\Facades\Auth;
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

        Route::group(['namespace' => 'grade','prefix'=>'Grad'], function () {
            Route::resource('/', 'GradController');
            Route::get('delete/{id}', 'GradController@destroy')->name('grade_delete');

        });

        Route::group(['namespace' => 'grade', 'prefix' => 'sections'], function () {
            Route::get('/', 'SectionController@index')->name('section.index');
            Route::get('create', 'SectionController@create')->name('section.create');
            Route::post('store', 'SectionController@store')->name('section.store');
            Route::get('edit/{list_Section_id}', 'SectionController@edit')->name('section.edit');
            Route::post('update/{list_Section_id}', 'SectionController@update')->name('section.update');
            Route::get('destroy/{list_Section_id}', 'SectionController@destroy')->name('section.destroy');
           
            Route::get('classes{id}','SectionController@getclasses');
        });
        

        Route::group(['namespace' => 'grade', 'prefix' => 'classroom'], function () {
            Route::get('/', 'ClassRoomController@index')->name('class.index');
            Route::get('creat', 'ClassRoomController@create')->name('class.create');
            Route::post('store', 'ClassRoomController@store')->name('class.store');
            Route::get('edit/{class_id}', 'ClassRoomController@edit')->name('class.edit');
            Route::post('update/{class_id}', 'ClassRoomController@update')->name('class.update');
            Route::get('destroy/{class_id}', 'ClassRoomController@destroy')->name('class.destroy');
        });

        Route::view('/Add_parent', 'livewire.show_form')->name('add.parent');

        Route::group(['namespace' => 'teachers', 'prefix' => 'Teacher'], function () {
            Route::get('/', 'TeacherController@index')->name('teacher.index');
            Route::get('creat', 'TeacherController@create')->name('teacher.create');
            Route::post('store', 'TeacherController@store')->name('teacher.store');
            Route::get('edit/{Teacher_id}', 'TeacherController@edit')->name('teacher.edit');
            Route::post('update/{Teacher_id}', 'TeacherController@update')->name('teacher.update');
            Route::get('destroy/{Teacher_id}', 'TeacherController@destroy')->name('teacher.destroy');
        });

        Route::group(['namespace' => 'students', 'prefix' => 'Students'], function () {
            Route::get('/', 'StudentController@index')->name('students.index');
            Route::get('creat', 'StudentController@create')->name('students.create');
            Route::post('store', 'StudentController@store')->name('students.store');
            Route::get('edit/{Student_id}', 'StudentController@edit')->name('students.edit');
            Route::post('update/{Student_id}', 'StudentController@update')->name('students.update');
            Route::get('destroy/{Student_id}', 'StudentController@destroy')->name('students.destroy');
        });
        
    }


);