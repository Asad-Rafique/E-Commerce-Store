<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/dashboard', [HomeController::class, 'home']);
Route::get("/admin/dashboard",[HomeController::class,"login_home"])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';






Route::get("/category", [AdminController::class, "category"])->name('category')->middleware(["auth", "admin"]);
Route::post("/AddCategory", [AdminController::class, "AddCategory"])->middleware(["auth", "admin"]);

Route::get("/DeletCatagory/{id}", [AdminController::class, "DeletCatagory"])->middleware(["auth", "admin"]);


Route::get("/Edit/{id}", [AdminController::class, "Edit"])->middleware(["auth", "admin"]);
Route::post("/UpdateCategory/{id}", [AdminController::class, "UpdateCategory"])->middleware(["auth", "admin"]);

Route::get("/AddProdect", [AdminController::class, "AddProdect"])->middleware(["auth", "admin"]);


// add prodects    data ================================================================================================
Route::post("/SubmitProduct", [AdminController::class, "SubmitProduct"])->middleware(["auth", "admin"]);

Route::get("/ViweProdect", [AdminController::class, "ViweProdect"])->middleware(["auth", "admin"]);

Route::get("/delete_prodect/{id}", [AdminController::class, "delete_prodect"])->middleware(["auth", "admin"]);

Route::get("/Update_prodect/{id}", [AdminController::class, "Update_prodect"])->middleware(["auth", "admin"]);

Route::post("/edit_prodect/{id}", [AdminController::class, "edit_prodect"])->middleware(["auth", "admin"]);

Route::get("/prodect_search", [AdminController::class, "prodect_search"])->middleware(["auth", "admin"]);

// This is user side route ==================================================================================================

Route::get("/Admin/Dashbord",[HomeController::class,"index"])->middleware(["auth","admin"]);

Route::get("/prodect_details/{id}", [HomeController::class, "prodect_details"]);

Route::get("/add_to_cart/{id}", [HomeController::class, "add_to_cart"])->middleware(['auth', 'verified']);

Route::get('/login-home', [HomeController::class, 'count']);
