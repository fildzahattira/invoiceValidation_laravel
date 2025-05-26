<?php

use Illuminate\Support\Facades\Route;

//import product controller
use App\Http\Controllers\InvoiceController;

//route resource for products
Route::resource('/invoices', InvoiceController::class);

Route::get('/', function () {
    return view('welcome');
});