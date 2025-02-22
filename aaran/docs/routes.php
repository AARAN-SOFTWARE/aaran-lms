<?php

use Illuminate\Support\Facades\Route;

//Docs
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/release', Aaran\Web\Livewire\Dashboard\Index::class)->name('docs');
//    Route::get('/contribution', Aaran\Web\Livewire\Dashboard\Index::class)->name('docs');

});
