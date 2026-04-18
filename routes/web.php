<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Auth;

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

// user urls
Route::get('/', function () {
    return view('user.welcome');
})->name('index');

Route::get('/small', function () {
    return view('user.small');
});

// Route::get('/', function () {
//     return view('welcome');
// });

//admin urls


Route::get('/statics', function () {
    return view('administrator.statics');
});

Route::get('/projects', function () {
    return view('administrator.projects');
});

Route::get('/quiqdonation', function () {
    return view('administrator.quiqdonation');
});

Route::get('/donators', function () {
    return view('administrator.donators');
});
Route::get('/investpro', function () {
    return view('administrator.investpro');
});
Route::get('/smallpro', function () {
    return view('administrator.smallproject');
});

Route::get('/email', function () {
    return view('administrator.email');
});

Route::get('/telegram', function () {
    return view('administrator.telegram');
});











Route::get('/ k', function () {
    return view('login');
});

// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('user', 'DonationController@create');


// Route::get('don', 'DonationController@index');
route::post('store',[DonationController::class,'store']);
// route::post('add1',[DonationController::class,'add1']);
route::get('show',[DonationController::class,'show']);

//route::post('register',[RegisterController::class,'register']);
Route::resource('auth','HomeController');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/donate', [App\Http\Controllers\HomeController::class, 'donate'])->name('donate');
Route::post('/donate-quick', [App\Http\Controllers\HomeController::class, 'donateQuick'])->name('donate-quick');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
