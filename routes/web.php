<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Http\Controllers\ListingController;




Route::get('/',[ListingController::class, 'index']);

Route::get('/listings/create', [ListingController::class, 'create']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);

Route::post('/listing/store', [ListingController::class, 'store']);
