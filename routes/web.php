<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Setting routes to Home controller adn Admin controller and to different pages of the website with url setting. All the routes for the website are setup on this page and allow data from different locations to be connected back through url.

Route::get('/redirect',[UserController::class,'redirect']);

Route::get('/',[UserController::class,'index']);

Route::get('/menu',[UserController::class,'menu']);

Route::get('/menuProducts',[AdminController::class,'menuProducts']);

Route::get('/about',[UserController::class,'about']);

Route::get('/contact',[UserController::class,'contact']);

// This route has been setup as post to enter data rather then get data. It is for the entry of products into the database through the menuProducts blade page. The code for this route is setup in the admin controller where it is linked to.
Route::post('/addMenuProducts',[AdminController::class,'addMenuProducts']);

// Route setup for viewing products in admin dashboard sidebar
Route::get('/viewMenuProducts',[AdminController::class,'viewMenuProducts']);

// Route's for deletion/edit of product/id data recieved viemenuproducts.blade then sent to admin controller 
Route::get('/deleteMenuProducts/{id}',[AdminController::class,'deleteMenuProducts']);
Route::get('/editMenuProducts/{id}',[AdminController::class,'editMenuProducts']);
Route::post('/changeMenuProducts/{id}',[AdminController::class,'changeMenuProducts']);