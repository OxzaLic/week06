<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//week10 CRUD : Stock of Products
Route::get("/product", [ProductController::class, "index"])->name('product.index');
Route::get("/product/create", [ProductController::class, "create"])->name('product.create');
Route::post("/product", [ProductController::class, "store"])->name('product.store');
Route::get('/product/{id}', [ProductController::class, "show"])->name('product.show');
Route::get("/product/{id}/edit", [ProductController::class, "edit"])->name('product.edit');
Route::patch("/product/{id}", [ProductController::class, "update"])->name('product.update');
Route::delete("/product/{id}", [ProductController::class, "destroy"])->name('product.destroy');

// Route::resource('/product', ProductController::class );

//QUIZ
Route::resource('/product', ProductController::class);


Route::get("/staff", [StaffController::class, "index"])->name('staff.index');
Route::get("/staff/create", [StaffController::class, "create"])->name('staff.create');
Route::post("/staff", [StaffController::class, "store"])->name('staff.store');
Route::get('/staff/{id}', [StaffController::class, "show"])->name('staff.show');
Route::get("/staff/{id}/edit", [StaffController::class, "edit"])->name('staff.edit');
Route::patch("/staff/{id}", [StaffController::class, "update"])->name('staff.update');
Route::delete("/staff/{id}", [StaffController::class, "destroy"])->name('staff.destroy');

