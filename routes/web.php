<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/contattaci', [PageController::class, 'contattaci'])->name('contattaci');

Route::get('/test', [PageController::class, 'test'])->name('test');