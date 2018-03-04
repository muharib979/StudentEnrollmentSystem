<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
 //logout

Route::get('/logout', 'AdminController@logout');
Route::get('/student_logout', 'AdminController@student_logout');
 
Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});
//admin..
Route::post('/adminlogin', 'AdminController@login_dashboard');
Route::post('/studentlogin', 'AdminController@student_login_dashboard');

Route::get('/student_dashboard', 'AdminController@student_dashboard');


Route::get('/admin_dashboard', 'AdminController@admin_dashboard');
Route::get('/viewprofile', 'AdminController@viewprofile');
Route::get('/setting', 'AdminController@setting');
Route::get('/student_setting', 'AdminController@studentsetting');


Route::get('/student_profile', 'AddstudentsController@studentprofile');

//student......................
Route::get('/allstudent', 'AllstudentsController@allstudent');
Route::get('/addstudent', 'AddstudentsController@addstudent');
Route::post('/save_student', 'AddstudentsController@savestudent');
Route::get('/student_delete/{student_id}', 'AllstudentsController@studentdelete');
Route::get('/student_view/{student_id}', 'AllstudentsController@studentview');
Route::get('/student_edit/{student_id}', 'AllstudentsController@studentedit');
Route::post('/update_student/{student_id}', 'AllstudentsController@studentupdate');

//all page are here
Route::get('/tutionfee', 'tutionController@tution');
Route::get('/bba', 'BBAController@bba');
Route::get('/cse', 'CSEController@cse');
Route::get('/eee', 'EEEController@eee');
Route::get('/mba', 'MBAController@mba');
Route::get('/allteacher', 'TeacherController@allteacher');
Route::get('/addteacher', 'TeacherController@addteacher');
Route::post('/save_teacher', 'TeacherController@saveteacher');

