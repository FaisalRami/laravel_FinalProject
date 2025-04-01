<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\StoreController;
use App\Models\Category;
use App\Models\Store;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('admin', function () {
    return view('layouts.admin');
});

// Route::get('/', function () {
//         $categories=Category::all();
//         $store=Store::find(1);
//         $stores=Store::all();
//         // $stores = Store::with('category')->get();
//         $category_name = Category::find($store->category);
//         return view('admin.products.index' ,compact('stores' , 'category_name' , 'categories'));
// });


//store

Route::get('/', [StoreController::class ,'index']);

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

// use Illuminate\Support\Facades\Auth;
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
