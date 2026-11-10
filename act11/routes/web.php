<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Step 4-5: child layout
Route::get('/child', function () {
    return view('child');
});

// Steps 8-11: welcome view with data and @if / @elseif / @else
Route::get('greeting', function () {
    $records = ['Record 1', 'Record 2'];

    return view('welcome', [
        'name' => 'Fran',
        'records' => $records,
    ]);
});

// Step 14: site with menu, three sections and footer
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/photos', [PageController::class, 'photos'])->name('photos');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
