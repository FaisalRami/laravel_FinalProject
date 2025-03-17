<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

Route::get('admin', function () {
    return view('layouts.admin');
});

//store

Route::get('products/index', [StoreController::class ,'index']);

Route::get('products/create', [StoreController::class ,'create']);

Route::POST('products/store', [StoreController::class ,'store']);

Route::get('products/delete/{id}',[StoreController::class ,'destroy']);

Route::get('products/edit/{id}', [StoreController::class ,'edit']);

Route::post('products/update/{id}', [StoreController::class ,'update']);


//category

Route::get('categories/index', [CategoryController::class ,'index']);

Route::get('categories/create', [CategoryController::class ,'create']);

Route::POST('categories/store', [CategoryController::class ,'store']);

Route::get('categories/delete/{id}',[CategoryController::class ,'destroy']);

Route::get('categories/edit/{id}', [CategoryController::class ,'edit']);

Route::post('categories/update/{id}', [CategoryController::class ,'update']);


//Home Page

Route::get('home/index' , [FrontController::class ,'index']);

