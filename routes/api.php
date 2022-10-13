<?php

use App\Http\Controllers\outlet\outletController;
use App\Http\Controllers\User\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/store-user',[userController::class,'store'])->name('user.store');
Route::post('/user-update/{id}',[userController::class,'update'])->name('user.update');
Route::get('/user-delete/{id}',[userController::class,'delete'])->name('user.delete');


///outlet route

Route::post('/store-outlet',[outletController::class,'store'])->name('outlet.store');
Route::post('/outlet-update/{id}',[outletController::class,'update'])->name('outlet.update');
Route::get('/outlet-delete/{id}',[outletController::class,'delete'])->name('outlet.delete');

