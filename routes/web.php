<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UniDbController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('pages.index');
// });
// Route::get('/user/{id}/{name}', function ($id , $name) {
//     return 'this is dynamic routes of userName '.$name." with an id ".$id;
//     // return view('this is the dynamic routes' , ['hello' , $id])
// });

//  Route::get('/users', function () {
//      return view('pages.user');
//  });

// Route::view('main' , 'pages.main');
// Route::view('check' , 'pages.check');
// Route::view('auth' , 'pages.noaccess');


// Route::get('/',[UserController::class , "index"]);
// Route::get('/about',[UserController::class , "about"]);
// Route::get('/services',[UserController::class , "services"]);

// Route::get('/inner',[StudentController::class , "inner"]);
// Route::get('/student',[StudentController::class , "student"]);

// Route::view('login',"pages.form");
// Route::post('/user',[FormController::class , "getData"]);

// Route::post('/auth',[AuthController::class , "auth"]);


Route::get('/', function () {
     return view('index');
 });

Route::view('auth',"auth");
Route::view('check',"check")->middleware('protectedPage');

// Route::group(['middleware'=>['checkName']], function(){
//    Route::view('check',"check");
// });
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// using for the model data connection
Route::get('uniDb',[UniDbController::class , "uniDb"]);
Route::get('student',[DbController::class , "getModel"]);

Route::get('product',[SubjectController::class , "getData"]);
Route::get('employee',[EmployeeController::class , "getEmployee"]);

// Route::get('sub',[RequestController::class , "testRequest"]);
// Route::post('sub',[RequestController::class , "testRequest"]);
// Route::put('sub',[RequestController::class , "testRequest"]);

Route::delete('sub',[RequestController::class , "testRequest"]);
Route::view('test',"test");

Route::post('session',[SessionController::class , "flashSessions"]);
Route::view('addUser',"flashSession");

// Route::view('login',"login");
Route::view('profile',"profile");
Route::get('/logout', function () {
     if(session()->has('user')){
        session()->pull('user', null);
     }
     return redirect('login');
 });

 Route::get('/login', function () {
     if(session()->has('user')){
        return redirect('profile');
     }
     return view('login');
 });

Route::post('loginSession',[LoginController::class , "loginSession"]);

Route::view('file',"UploadFile");
Route::post('upload',[FileController::class , "fileUpload"]);