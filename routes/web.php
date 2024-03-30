<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/note')->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    /* Route::get('/note', [NoteController::class, 'index'])->name('notes.index');
    Route::get('/note/create', [NoteController::class, 'create'])->name('notes.create');
    Route::post('/note', [NoteController::class, 'store'])->name('notes.store');
    Route::get('/note/{id}', [NoteController::class, 'show'])->name('notes.show');
    Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('notes.edit');
    Route::put('/note/{id}', [NoteController::class, 'update'])->name('notes.update');
    Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('notes.destroy'); */

    Route::resource('note', NoteController::class);

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
