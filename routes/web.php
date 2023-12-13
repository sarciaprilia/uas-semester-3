<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [InvoiceController::class, 'index'])->name('dashboard'); 
    Route::post('/dashboard', [InvoiceController::class, 'store'])->name('invoices.store'); 
    Route::put('/dashboard/{invoice}', [InvoiceController::class, 'update'])->name('invoices.update'); 
    Route::delete('/dashboard/{invoice}', [InvoiceController::class, 'destroy'])->name('invoices.destroy'); 
});

require __DIR__.'/auth.php';
