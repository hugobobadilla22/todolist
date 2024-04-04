<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index'])->name('todos.index');
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
Route::get('/todos/new', [TodoController::class, 'create'])->name('todos.create');
Route::post('/todos/store', [TodoController::class, 'store'])->name('todos.store');
Route::get('/{todo}', [TodoController::class, 'show'])->name('todos.show');
Route::get('/todos/edit/{todo}', [TodoController::class, 'edit'])->name('todos.edit');
Route::put('/todos/update/{todo}', [TodoController::class, 'update'])->name('todos.update');
Route::delete('/destroy/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
