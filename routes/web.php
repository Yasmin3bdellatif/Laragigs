<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;





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


/*

common resource routes:
index-> show all listings
show->show single listing
create->show form to create new listing
store-> store new listing
edit->show form to edit listing
update->update listing
destroy->delete listing

*/



//all listing
Route::get('/',[ListingController::class,'index']);

//show create form
Route::get('/listings/create', [ListingController::class, 'create'])
    ->middleware('auth');

// Store listing data
Route::post('/listings', [ListingController::class, 'store'])
    ->middleware('auth');

//show edit form
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit'])
    ->middleware('auth');

//update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])
    ->middleware('auth');

//delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])
    ->middleware('auth');

//single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//show register/create form
Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])
    ->middleware('guest');

//create new user
Route::Post('/users', [UserController::class, 'store']);

//log user out
Route::post('/logout', [UserController::class, 'logout'])
    ->middleware('auth');

//show login form
Route::get('/login', [UserController::class, 'login'])
    ->name('login')
    ->middleware('guest');

//log in user
Route::post('/users/login/authenticate', [UserController::class, 'authenticate'])
    ->name('users.authenticate');
