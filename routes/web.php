<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Portfolio2Controller;

Route::get('/', [Portfolio2Controller::class, 'index']);

Route::get('/portfolio2', [Portfolio2Controller::class, 'index'])->name('portfolio2.index');
