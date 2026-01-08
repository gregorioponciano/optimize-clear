<?php


use App\Http\Controllers\OptimizeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OptimizeController::class, 'teste'])->name('teste');
