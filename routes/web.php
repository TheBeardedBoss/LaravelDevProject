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

// Setting routes to Home controller and Admin controller and then to different pages of the website with url setting's. All the routes for the website are setup on this page and allow data from different locations to be connected back through url to controller to web.php.

// Some route have been setup as post to enter data rather then get data. e.g It is for the entry of products into the database through the menuProducts blade page, similarly for messages. The code for this route is setup in the admin controller where it is linked to or the User controller.

Route::get('/redirect',[UserController::class,'redirect']);

Route::get('/',[UserController::class,'index']);

Route::get('/menu',[UserController::class,'menu']);

Route::get('/menuProducts',[AdminController::class,'menuProducts']);

Route::get('/about',[UserController::class,'about']);

// Routes for the Contact page
Route::get('/contact',[UserController::class,'contact']);
Route::post('/addContactMessages',[UserController::class,'addContactMessages']);
Route::get('/viewContactMessages',[AdminController::class,'viewContactMessages']);
Route::get('/deleteContactMessages/{id}',[AdminController::class,'deleteContactMessages']);


Route::post('/addMenuProducts',[AdminController::class,'addMenuProducts']);

// Route setup for viewing products in admin dashboard sidebar
Route::get('/viewMenuProducts',[AdminController::class,'viewMenuProducts']);

// Route's for deletion/edit of product/id data recieved viemenuproducts.blade then sent to admin controller 
Route::get('/deleteMenuProducts/{id}',[AdminController::class,'deleteMenuProducts']);
Route::get('/editMenuProducts/{id}',[AdminController::class,'editMenuProducts']);
Route::post('/changeMenuProducts/{id}',[AdminController::class,'changeMenuProducts']);

//addToCart route
Route::post('/addToCart/{id}',[UserController::class,'addToCart']);

// Route for navbar -> basket number however undefined variable thrown, Checkout is unfinished and was throwing errors unfortunately
Route::get('/navbar',[UserController::class,'navbar']);

Route::get('/checkout',[UserController::class,'checkout']);

Route::get('/checkout',[UserController::class,'checkout']);

