<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DocsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('login');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::controller(DocsController::class)->group(function () {
    Route::group(['prefix' => 'docs'], function () {
        Route::get('finaly', 'index')->name('index');
        Route::get('product', 'product')->name('product');
        Route::get('category', 'category')->name('category');
        Route::get('introduction', 'introduction')->name('introduction');
        Route::get('about', 'about')->name('about');
        Route::get('html', 'html')->name('html');
    });
});
