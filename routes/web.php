<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\ProjectsController;

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
Auth::routes();
Route::resource('projects' , ProjectsController::class);

//Admin Routes
// Route::group(['middleware' => "admin"],function() {

// 	Route::prefix('admin')->name('admin.')->group( [],function() {
// 		Route::get('/',function(){
// 			return 'welcomw to admin';
// 		});
// 		Route::resource('users',UserController::class);

// 	});

// 	});


//Manager Routes
Route::group(['middleware' => "manager"],function() {
	Route::prefix('manager')->name('manager.')->group(function() {
		Route::get('/',function(){
			return 'welcomw to manager';
		});
		Route::resource('users',UserController::class);
		
	});

});

//developer Routes
Route::group(['middleware' => "developer"],function() {
	Route::prefix('developer')->name('developer.')->group(function() {
		Route::get('/',function(){
			return 'welcomw to admin';
		});
	});

});

Route::get('/', function () {
    return view('index');
});

Route::get('/{page}', [AdminController::class,'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
