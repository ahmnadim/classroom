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

/*Frontend Route*/
Route::get('/', 'FrontendController@welcome')->name('welcome');
Route::get('about', 'FrontendController@about')->name('about');
Route::get('contact', 'FrontendController@contact')->name('contact');
Route::get('courses', 'FrontendController@courses')->name('courses');
Route::post('contact', 'FrontendController@contactWithTeacher')->name('contact.us');

Auth::routes();

Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['admin', 'auth']], function(){
	Route::resource('teachers', 'TeachersController');
	Route::post('teacher/{id}/authorize', 'TeachersController@auth')->name('teacher.auth');
	Route::post('teacher/{id}/unauthorize', 'TeachersController@unauth')->name('teacher.unauth');
});

Route::get('admin/dashboard', 'HomeController@index')->name('admin.dashboard');

// Route::get('/teacher/home', 'TeacherController@index')->name('teacher.home');
//Route::get('/student/home', 'StudentController@index')->name('student.home');

// Teachers Route................................................................

Route::get('teacher-login', 'AuthTeacher\LoginController@showLoginForm')->name('teacher.login.show');
Route::post('teacher/dashboard', 'AuthTeacher\LoginController@login')->name('teacher.login');

Route::post('logout', 'AuthTeacher\LoginController@logout')->name('logout');

Route::get('teacher-register', 'AuthTeacher\RegisterController@showRegistrationForm')->name('teacher.register');
Route::post('teacher-register', 'AuthTeacher\RegisterController@register');




Route::POST('teacher-password/email','AuthTeacher\ForgotPasswordController@sendResetLinkEmail')->name('teacher.password.email');
Route::GET('teacher-password/reset','AuthTeacher\ForgotPasswordController@showLinkRequestForm')->name('teacher.password.request');
Route::POST('teacher-password/reset','AuthTeacher\ResetPasswordController@reset');
Route::GET('teacher-password/reset/{token}','AuthTeacher\ResetPasswordController@showResetForm')->name('teacher.password.reset');

// Students Route................................................................

Route::get('student-login', 'AuthStudent\LoginController@showLoginForm')->name('student.login');
Route::post('student', 'AuthStudent\LoginController@login')->name('student.login.post');

Route::post('logout', 'AuthStudent\LoginController@logout')->name('logout');

Route::get('student-register', 'AuthStudent\RegisterController@showRegistrationForm')->name('student.register');
Route::post('student-register', 'AuthStudent\RegisterController@register');

Route::get('student-password/reset', 'AuthStudent\ForgotPasswordController@showLinkRequestForm')->name('student.password.request');
Route::post('student-password/email', 'AuthStudent\ForgotPasswordController@sendResetLinkEmail')->name('student.password.email');
Route::get('student-password/reset/{token}', 'AuthStudent\ResetPasswordController@showResetForm')->name('student.password.reset');
Route::post('student-password/reset', 'AuthStudent\ResetPasswordController@reset')->name('student.password.update');
Route::get('course/details/{id}','FrontendController@courseDetails')->name('course.details');

// Teacher Route>................................

Route::group(['as'=>'teacher.', 'prefix'=>'teacher', 'namespace'=>'Teacher', 'middleware'=>['auth:teacher', 'teacherauth']], function(){

	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	Route::resource('post', 'PostController');
	Route::resource('course', 'CourseController');
	Route::get('profile', 'ProfileController@index')->name('profile.index');
	Route::get('allassignment', 'ProfileController@allassignment')->name('allassignment');
	Route::PUT('profile/update', 'ProfileController@profileUpdate')->name('profile.update');
	Route::PUT('password/update', 'ProfileController@passwordUpdate')->name('password.update');
	Route::get('course-details/{id}', 'CourseController@courseDetails')->name('course.showdetails');

	Route::get('attandance', 'DashboardController@attandance')->name('attandance');
	Route::get('todays', 'DashboardController@todays')->name('todays');
	Route::post('attandance/add/{id}', 'DashboardController@attandance_add')->name('attandance.add');
	Route::post('attandance/remove/{id}', 'DashboardController@attandance_remove')->name('attandance.remove');
	

});

Route::get('teacher/unauthorize', 'Teacher\DashboardController@unauthorize')->name('teacher.unauthorize');

// student route................................

Route::group(['as'=>'student.', 'prefix'=>'student', 'namespace'=>'Student', 'middleware'=>['auth:student']], function(){

	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	Route::get('courses', 'CoursesController@course')->name('courses');
	Route::get('add-courses', 'CoursesController@create')->name('course.create');
	Route::post('add-courses', 'CoursesController@store')->name('courses.store');
	Route::get('assignment/index', 'CoursesController@assignment_index')->name('assignment.index');
	Route::get('marks/index', 'CoursesController@marks_index')->name('marks.index');
	Route::get('assignment/{id}', 'CoursesController@assignment')->name('assignment');
	Route::post('assignment', 'CoursesController@assignment_store')->name('assignment.submit');
	Route::get('posts', 'CoursesController@posts')->name('posts');

	Route::get('course-details/{id}', 'CoursesController@courseDetails')->name('course.showdetails');

	Route::get('profile', 'ProfileController@index')->name('profile.index');
	Route::PUT('profile/update', 'ProfileController@profileUpdate')->name('profile.update');
	Route::PUT('password/update', 'ProfileController@passwordUpdate')->name('password.update');
});

/*Subscriber route*/
Route::post('subscribe','SubscriberController@subscribe')->name('subscribe');