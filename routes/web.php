<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    $product = Product::all();
    $category = Category::all();
    $about = About::all();
    return view('home',compact('product','category','about'));
    // this to show the home page . 
});



Auth::routes();

// Products Routes
Route::get('admin/products',[ProductController::class, 'index']); 
Route::get('admin/products/create',[ProductController::class, 'create']); 
Route::post('admin/products/store',[ProductController::class, 'store']); 
Route::get('admin/products/delete/{id}',[ProductController::class, 'delete']);
Route::get('admin/products/update/{id}',[ProductController::class,'update']);
Route::put('admin/products/updateact/{id}',[ProductController::class,'updateact'])->name('updateact');

// Categories Routes
Route::get('admin/categories/category',[CategoryController::class, 'show_categoery']); 
Route::get('admin/categories/create',[CategoryController::class, 'create']); 
Route::post('admin/categories/store',[CategoryController::class, 'store']); 
Route::get('admin/categories/delete/{id}',[CategoryController::class, 'delete']);
Route::get('admin/categories/update/{id}',[CategoryController::class,'update']);
Route::put('admin/categories/updateact/{id}',[CategoryController::class,'updateact'])->name('updateact');

// contact Routes 
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'save'])->name('contact.store');
Route::get('/contact-us/all',[ContactController::class, 'all']);
Route::get('/replay/{id}',[ContactController::class, 'replay']);
Route::post('/replay_act/{id}',[ContactController::class, 'replay_act'])->name('replay_act');


// about Routes 




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
