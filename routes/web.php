<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

// We can use Route::resource for simpler CRUD routes,
// but since we only need index, create, store, and destroy,
// we'll specify them explicitly for clarity and simplification.
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index'); // VIEW ALL
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create'); // ADD FORM
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store'); // ADD SUBMISSION
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy'); // DELETE