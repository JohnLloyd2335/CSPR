<?php

use App\Http\Controllers\CustomerSegmentation;
use App\Http\Controllers\ExportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes(['register' => false]);


Route::group(['middleware' => 'auth'], function(){
  Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  Route::get('/customer_segregation',[CustomerSegmentation::class,'index'])->name('com_seg');
  Route::view('/product_recommendation','prod_rec')->name('prod_rec');

  Route::get('/customer_segregation/export/csv', [ExportController::class,'csv'])->name('com_seg.export.csv');

  Route::get('/customer_segregation/export/xlsx', [ExportController::class,'xlsx'])->name('com_seg.export.xlsx');
}); 

