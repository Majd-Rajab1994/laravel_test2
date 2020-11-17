<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use Auth0\Login\Auth0Controller;
use App\Http\Controllers\Auth\Auth0IndexController;

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

Route::get('/',[ReportController::class,'index'])->name('home');
Route::get('/home',[SigninController::class,'checkuser'])->name('home');

Route::get('/home',[SigninController::class,'checkuser'])->name('home');

Route::get('/signin',[SigninController::class,'index'])->name('user.signin');
Route::post('/signin/checkuser',[SigninController::class,'checkuser'])->name('user.signin.checkuser');
Route::get('/signup',[SignupController::class,'index'])->name('user.signup');
Route::post('/signup/create',[SignupController::class,'create'])->name('user.signup.create');

Route::get('/user/homepage',[UserController::class,'index'])->name('user.homepage');

Route::get('/user/report',[ReportController::class,'index'])->name('user.report.view');
Route::get('/user/report',[ReportController::class,'showreport'])->name('user.report.show');

Route::get( '/auth0/callback', [Auth0Controller::class,'callback'] )->name( 'auth0-callback' );

Route::get( '/login', [Auth0IndexController::class,'login'] )->name( 'login' );
Route::get( '/logout', [Auth0IndexController::class,'logout'] )->name( 'logout' )->middleware('auth');
