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

        Route::group(['namespace' => 'grade'], function () {
            Route::resource('/grad', 'GradController');
            Route::get('delete/{id}', 'GradController@destroy')->name('grade_delete');

        });

        Route::group(['namespace' => 'Class_Room', 'prefix' => 'ClassRoom'], function () {
            Route::get('/', 'ClassRoomController@index')->name('class.index');
            Route::get('create', 'ClassRoomController@create')->name('class.create');
            Route::post('create', 'ClassRoomController@store')->name('class.store');
            Route::get('edit/{class_id}', 'ClassRoomController@edit')->name('class.edit');
            Route::post('update/{class_id}', 'ClassRoomController@update')->name('class.update');
            Route::get('destroy/{class_id}', 'ClassRoomController@destroy')->name('class.destroy');
        });

        Route::group(['namespace' => 'Section', 'prefix' => 'Sections'], function () {
            Route::get('/', 'SectionController@index')->name('section.index');
            Route::get('create', 'SectionController@create')->name('section.create');
            Route::post('create', 'SectionController@store')->name('section.store');
            Route::get('edit/{list_Section_id}', 'SectionController@edit')->name('section.edit');
            Route::post('update/{list_Section_id}', 'SectionController@update')->name('section.update');
            Route::get('destroy/{list_Section_id}', 'SectionController@destroy')->name('section.destroy');
           
            Route::get('classes{id}','SectionController@getclasses');
        });

            Route::view('/Add_parent', 'livewire.show_form')->name('add.parent');

        Route::group(['namespace' => 'Teachers', 'prefix' => 'Teacher'], function () {
            Route::get('/', 'TeacherController@index')->name('teacher.index');
            Route::get('create', 'TeacherController@create')->name('teacher.create');
            Route::post('create', 'TeacherController@store')->name('teacher.store');
            Route::get('edit/{Teacher_id}', 'TeacherController@edit')->name('teacher.edit');
            Route::post('update/{Teacher_id}', 'TeacherController@update')->name('teacher.update');
            Route::get('destroy/{Teacher_id}', 'TeacherController@destroy')->name('teacher.destroy');
        });

        Route::group(['namespace' => 'Students', 'prefix' => 'Students'], function () {
            Route::get('/', 'StudentController@index')->name('students.index');
            Route::get('create', 'StudentController@create')->name('students.create');
            Route::post('create', 'StudentController@store')->name('students.store');
            Route::get('edit/{Student_id}', 'StudentController@edit')->name('students.edit');
            Route::post('update/{Student_id}', 'StudentController@update')->name('students.update');
            Route::get('destroy/{Student_id}', 'StudentController@destroy')->name('students.destroy');
        });
        
    }


);