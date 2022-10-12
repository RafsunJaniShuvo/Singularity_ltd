<?php

use App\Http\Controllers\outlet\outletController;
use App\Http\Controllers\User\userController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::group(['middleware'=>'auth'],function(){
    Route::get('/add-user',[userController::class,'index'])->name('adduser');
    Route::get('/manage-user',[userController::class,'manage'])->name('user.manage');
    Route::get('/edit-user/{id}',[userController::class,'edit'])->name('user.edit');
    
    
    
    Route::get('/add-outlet',[outletController::class,'index'])->name('addoutlet');
});


require __DIR__.'/auth.php';



// Route::get('/google-map',[outletController::class,'map']);