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
})->name('home');

//Route::resource('/student_reg','RegisterController');



//Route::resource('/login','Login2Controller');




Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index');
    Route::resource('/subject','SubjectController');

    Route::resource('/student','StudentController');

    Route::get('/register_2','StudentController@index');
    Route::post('/register_2','StudentController@store');

    Route::get('/register_class/{class_id}','RegisterController@show');
    Route::post('/register_class','RegisterController@store');

    Route::post('student_course/{id}/delete', "RegisterController@delete");
    Route::post('student_course/{id}/insert', "RegisterController@insert");

});

//Route::get('/home', 'HomeController@index');
//Route::resource('/subject','SubjectController');
//
//Route::resource('/student','StudentController');
//Route::get('/register_2','StudentController@index');
//Route::post('/register_2','StudentController@store');
//
//Route::get('/register_class/{class_id}','RegisterController@show');
//Route::post('/register_class','RegisterController@store');

Auth::routes();
Route::get('logout', function(){
    Auth::logout();
    return redirect('/');
});

