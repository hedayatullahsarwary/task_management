<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('', [TasksController::class, 'Index'])->name('task.index');
Route::prefix('/tasks')->group(function() {
    Route::get('', [TasksController::class, 'Index'])->name('task.index');
    Route::get('create', [TasksController::class, 'Create'])->name('task.create');
    Route::post('create', [TasksController::class, 'Store'])->name('task.store');
    Route::get('view/{id}', [TasksController::class, 'View'])->name('task.view');
    Route::get('update/{id}', [TasksController::class, 'Edit'])->name('task.edit');
    Route::patch('update/{id}', [TasksController::class, 'Update'])->name('task.update');
    Route::get('delete/{id}', [TasksController::class, 'Delete'])->name('task.destroy');

    Route::post('/updatePriority', [TasksController::class, 'ChangePriority']);
});
