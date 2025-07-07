<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\BirdForm;
use App\Livewire\Lazy;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);
Route::get('/bird', BirdForm::class);
Route::get('/lazy', Lazy::class)->lazy();
