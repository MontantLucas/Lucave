<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VinController;

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

Route::group(['middleware' => ['auth']], function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/dashboard', [HomeController::class, 'home'])->name('dashboard');

    Route::get('/vin/{idVin}', [VinController::class, 'ViewVin'])->name('information');

    Route::get('/create',[VinController::class, 'create'])->name('vin.create');

    Route::post('/vin', [VinController::class, 'store'])->name('vin.store');

    Route::get('/index', [VinController::class, 'index'])->name('vin.index');

    Route::delete('/vin/{vin}', [VinController::class, 'delete'])->name('vin.delete');
    Route::get('/vin/{vin}/edit', [VinController::class, 'edit'])->name('vin.edit');
    Route::put('/vin/{vin}', [VinController::class, 'update'])->name('vin.update');

    Route::get('/admincheck', [HomeController::class ,'isAdmin'])->middleware('IsAdmin');
});

require __DIR__.'/auth.php';
