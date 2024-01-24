<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;


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

Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/testpage', function () { return dd('welcome'); });
// Route::get('/testpage', function () { return ('welcome'); });
// Route::get('/testpage', function () { return view('welcome'); });
Route::view('/testpage','testpage');

Route::get('/allprod',[App\Http\Controllers\ProductController::class, 'index']);

Route::view('/updateprod','productupdt');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('admin')->group(function () {
    // Route::get('/dashboard', function () {
        //     dd("inside admin dashboard");
        //     // Matches The "/admin/users" URL
        // });
        Route::view('/dashboard','admin.dashboard');
        
        Route::get('/updateprod/{id}', [App\Http\Controllers\ProductController::class, 'edit']);
        
        Route::get('/deleteprod/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);
        Route::any('/saveeditedprod/{id}', [App\Http\Controllers\ProductController::class, 'update']);
        
        Route::view('/addnewprod', 'addnewproduct');
        Route::post('/saveprod', [App\Http\Controllers\ProductController::class, 'store']);
        
        Route::get('/alluser',[App\Http\Controllers\usersController::class, 'index']);
        
        Route::view('/adduser', 'addnewuser');
        Route::view('/saveuser',[App\Http\Controllers\usersController::class, 'store']);
        
    });