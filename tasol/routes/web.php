<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TimeTableController;

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

Route::get('/', function () {
    return redirect()->route('subjects.index');
});

Route::resource('subjects', SubjectController::class)->except('delete', 'edit', 'update');
Route::resource('faculties', FacultyController::class)->except('delete', 'edit', 'update');
Route::get('time_tables/create', [TimeTableController::class, 'create'])->name('time_tables.create');
Route::get('time_tables', [TimeTableController::class, 'index'])->name('time_tables.index');

