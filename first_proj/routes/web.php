<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use  App\Http\Controllers\authAdminController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route:: view('users/create','users.welcome');


Route::get('Blog/Create',[BlogController :: class , 'create']);
Route::post('Blog/Store',[BlogController :: class , 'store']);
Route::get('Blog/index',[BlogController :: class , 'index']);

########################################################################
Route::get('admin/create',[AdminController::class,'create']);
Route::post('admin/store',[AdminController::class,'store']);
Route::get('admin/index',[AdminController :: class , 'index']);
########################################################################
Route :: get('Login',[authAdminController :: class , 'login']);
Route :: post('DOLogin',[authAdminController :: class , 'doLogin']);
Route :: get('Logout',[authAdminController :: class , 'Logout']);


