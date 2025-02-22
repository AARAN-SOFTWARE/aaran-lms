<?php

use Illuminate\Support\Facades\Route;

//Docs
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/releases', Aaran\Docs\Livewire\Prologue\ReleaseNotes::class)->name('releases');
    Route::get('/contributions', Aaran\Docs\Livewire\Prologue\Contribution::class)->name('contributions');

});
