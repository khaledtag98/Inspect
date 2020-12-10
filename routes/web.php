<?php

use App\Http\Controllers\TestController;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;


Route::get('/', [TestController::class, 'hambozo']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/sign-in', function () {
    return view('sign-in');
});
Route::get('/edit-profile', function () {
    return view('edit-profile');
});
