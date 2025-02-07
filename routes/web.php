<?php

use Illuminate\Support\Facades\Route;


// route in open - before login

Route::get('/',App\Livewire\Web\Home\Index::class)->name('home');
Route::get('/abouts',App\Livewire\Web\Contact\Index::class)->name('abouts');
Route::get('/blogs',App\Livewire\Web\Contact\Index::class)->name('blogs');
Route::get('/services',App\Livewire\Web\Contact\Index::class)->name('services');
Route::get('/contacts',App\Livewire\Web\Contact\Index::class)->name('contacts');



// route in Secured - after login

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
