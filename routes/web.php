<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Http\Controllers\ListingController;



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
Route::get('/listings/create', [ListingController::class, 'create']);

// Store listing data
Route::post('/listings', [ListingController::class, 'store']);

//single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

