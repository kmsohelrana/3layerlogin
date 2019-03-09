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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'teacher'], function () {

    Route::get('/home', 'TeacherController@index')->name('teacher.home');

    Route::get('/login', 'Teacher\LoginController@showLoginForm')->name('teacher.login');
    Route::post('/login', 'Teacher\LoginController@login');
    Route::post('/logout', 'Teacher\LoginController@logout')->name('teacher.logout');

    Route::get('/register', 'Teacher\RegisterController@showRegistrationForm')->name('teacher.register');
    Route::post('/register', 'Teacher\RegisterController@register');


    Route::get('/password/reset', 'Teacher\ForgotPasswordController@showLinkRequestForm')->name('teacher.password.request');
    Route::post('/password/email', 'Teacher\ForgotPasswordController@sendResetLinkEmail')->name('teacher.password.email');
    Route::get('/password/reset/{token}', 'Teacher\ResetPasswordController@showResetForm')->name('teacher.password.reset');
    Route::post('/password/reset', 'Teacher\ResetPasswordController@reset')->name('teacher.password.update');
});

Route::group(['prefix' => 'student'], function () {

    Route::get('/home', 'StudentController@index')->name('student.home');

    Route::get('/login', 'Student\LoginController@showLoginForm')->name('student.login');
    Route::post('/login', 'Student\LoginController@login');
    Route::post('/logout', 'Student\LoginController@logout')->name('student.logout');

    Route::get('/register', 'Student\RegisterController@showRegistrationForm')->name('student.register');
    Route::post('/register', 'Student\RegisterController@register');


    Route::get('/password/reset', 'Student\ForgotPasswordController@showLinkRequestForm')->name('student.password.request');
    Route::post('/password/email', 'Student\ForgotPasswordController@sendResetLinkEmail')->name('student.password.email');
    Route::get('/password/reset/{token}', 'Student\ResetPasswordController@showResetForm')->name('student.password.reset');
    Route::post('/password/reset', 'Student\ResetPasswordController@reset')->name('student.password.update');
});

Route::group(['prefix' => 'employee'], function () {

    Route::get('/home', 'EmployeeController@index')->name('employee.home');

    Route::get('/login', 'Employee\LoginController@showLoginForm')->name('employee.login');
    Route::post('/login', 'Employee\LoginController@login');
    Route::post('/logout', 'Employee\LoginController@logout')->name('employee.logout');

    Route::get('/register', 'Employee\RegisterController@showRegistrationForm')->name('employee.register');
    Route::post('/register', 'Employee\RegisterController@register');


    Route::get('/password/reset', 'Employee\ForgotPasswordController@showLinkRequestForm')->name('employee.password.request');
    Route::post('/password/email', 'Employee\ForgotPasswordController@sendResetLinkEmail')->name('employee.password.email');
    Route::get('/password/reset/{token}', 'Employee\ResetPasswordController@showResetForm')->name('employee.password.reset');
    Route::post('/password/reset', 'Employee\ResetPasswordController@reset')->name('employee.password.update');
});
