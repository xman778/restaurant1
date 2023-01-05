<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\AdminController;
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



Route::get('/', [RestaurantController::class,"index"]);

Route::get('/forward', [RestaurantController::class,"forward"])->name('forward');

Route::post('/reservation', [AdminController::class,"reservation"])->name('reservation');

Route::get('/showreservation', [AdminController::class,"showreservation"])->name('showreservation');

Route::get('/editrevers/{id}', [AdminController::class,"editrevers"])->name('editrevers');


Route::get('/reservationdeleted/{$id}', [AdminController::class,"deletereservation"])->name('delete.reservation');

Route::get('/adminusers', [AdminController::class,"users"])->name('users');

Route::get('/foodhome', [AdminController::class,"food"])->name('food');

Route::post('/foodcreate', [AdminController::class,"foodcreate"])->name('food.create');

Route::get('/fooddelete/{id}', [AdminController::class,"fooddelete"])->name('food.delete');

Route::get('/food-edit/{id}', [AdminController::class,"foodedit"])->name('food.edit');

Route::post('/foodupdate', [AdminController::class,"foodupdate"])->name('food.update');

Route::post('/delete/{id}', [AdminController::class,"destroy"])->name('delete');


Route::post('/admin/chef}', [AdminController::class,"chef"])->name('chef');

route::get('/adminchef',[AdminController::class,'showchef']);


route::get('/admindeletechef/{id}',[AdminController::class,'deletechef'])->name('deletechef');

route::get('/admineditchef/{id}',[AdminController::class,'editchef'])->name('editchef');

route::post('/admindupdatechef',[AdminController::class,'updatechef'])->name('updatechef');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
