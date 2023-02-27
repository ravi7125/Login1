<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SignupController;


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
Route::group(['middleware'=>"web"], function(){
    Route::get('helper', function () {
        echo "hello";
       });
       
       Route::get('/', function () {
       
           return view('welcome');
       });
       // file storage performing code url.....
       Route::get('/image', function () {
           return view('image');
       });
       Route::post('/upload-image',[SignupController::class,'upload']);
       
      
       Route::view('Signupshow','Signupshow');
       Route::post('signup',[SignupController::class,'data']);
       Route::get('Signupshow',[SignupController::class,'show']);
       
       Route::get('delete/{id}',[SignupController::class,'delete']);
       Route::get('update/{id}',[SignupController::class,'update']);
       Route::view('update','update');
       Route::get('update',[SignupController::class,'updatedata']);
       
       Route::view('Request','Request');
       Route::get('Request',[SignupController::class,'index']);
       
       // Route::view('mail','mail');
       
    //    Route::view('login','login');
    //    Route::get('login' ,[SignupController::class,'log'])->name('login');
    //    Route::post('login' ,[SignupController::class,'login'])->name('login');
      
       Route::view('signup','signup');
    //    Route::get('signup' ,[SignupController::class,'register_view'])->name('signup');
    //    Route::post('signup' ,[SignupController::class,'signup'])->name('signup');

    //    Route::post('home' ,[SignupController::class,'home'])->name('home');
    //    Route::post('logout' ,[SignupController::class,'logout'])->name('logout');





    });