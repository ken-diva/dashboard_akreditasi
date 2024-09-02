<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_Faculty;

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

// Route::controller(C_Auth::class)->group(function () {
//     Route::get('/', 'index');
//     Route::post('/login', 'login');
//     Route::get('/logout', 'logout');
// });

Route::controller(C_Faculty::class)->group(function () {
    Route::get('/faculty', 'index');
    // Route::get('/faculty/{id}', 'read');
    Route::get('/faculty/update/{id}', 'update');
    Route::post('/faculty/update_data/{id}', 'update_data');
    Route::get('/faculty/delete/{id}', 'delete');
    Route::get('/faculty/add/', 'add');
});

// check databases
Route::get('/test', function () {
    try {
        DB::connection()->getPdo();
        return 'Database connection is successful!';
    } catch (\Exception $e) {
        return 'Could not connect to the database. Please check your configuration. Error: ' . $e->getMessage();
    }
});
