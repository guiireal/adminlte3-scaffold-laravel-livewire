<?php

use App\Livewire\Pages\Home;
use App\Livewire\Pages\Page2;
use App\Livewire\Pages\Page3;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/page-2', Page2::class)->name('page-2');
Route::get('/page-3', Page3::class)->name('page-3');
