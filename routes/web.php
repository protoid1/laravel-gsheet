<?php

use App\Livewire\Tailwind;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tailwindview', function () {
    return view('tailwindview');
});


Route::get('/tailwind', Tailwind::class);


