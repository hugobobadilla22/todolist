<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index'])->name('todos.index');
Route::get('/todos/new', [TodoController::class, 'create'])->name('todos.create');
Route::post('/todos/store', [TodoController::class, 'store'])->name('todos.store');
Route::get('/{todo}', [TodoController::class, 'show'])->name('todos.show');
Route::get('/todos/edit', [TodoController::class, 'edit'])->name('todos.edit');
Route::delete('/destroy/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
