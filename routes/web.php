<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', function(){
    return view('pages.home');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//logout route
Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');

//register route
Route::get('/register', function(){
    return view('auth.register');
})->name('register');


require __DIR__.'/auth.php';


Route::get('/user-list' , function(){
    return view(('admin.users.usersList'));
})->name('user-list');


//authenticate with google


Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');
// Route::get('google',function(){

//     return view('googleAuth');
    
// });
    
// Route::get('auth/google', 'AuthLoginController@redirectToGoogle');

// Route::get('auth/google/callback', 'AuthLoginController@handleGoogleCallback');