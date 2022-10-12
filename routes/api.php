<?php

use App\Http\Controllers\outlet\outletController;
use App\Http\Controllers\User\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/add-user',[userController::class,'index'])->name('adduser');
Route::post('/store-user',[userController::class,'store'])->name('user.store');
Route::get('/manage-user',[userController::class,'manage'])->name('user.manage');
Route::get('/edit-user/{id}',[userController::class,'edit'])->name('user.edit');
Route::post('/user-update/{id}',[userController::class,'update'])->name('user.update');
Route::get('/user-delete/{id}',[userController::class,'delete'])->name('user.delete');


///outlet route
Route::get('/add-outlet',[outletController::class,'index'])->name('addoutlet');
Route::post('/store-outlet',[outletController::class,'store'])->name('outlet.store');
Route::get('/manage-outlet',[outletController::class,'manage'])->name('outlet.manage');
Route::get('/edit-outlet/{id}',[outletController::class,'edit'])->name('outlet.edit');
Route::post('/outlet-update/{id}',[outletController::class,'update'])->name('outlet.update');
Route::get('/outlet-delete/{id}',[outletController::class,'delete'])->name('outlet.delete');