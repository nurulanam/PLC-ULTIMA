<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\InformationController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('backend.Index');
});


Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::middleware('role:admin|moderator')->group(function (){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('/information', InformationController::class);
        Route::get('/information/{id}/view', [InformationController::class, 'viewInfo'])->name('information.view');
    });
    Route::middleware('role:admin')->group(function (){
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::resource('/users', UserController::class);
        Route::post('/users/{user}/roles', [UserController::class, 'addRole'])->name('users.roles');
        Route::delete('/users/{user}/roles/{role}', [UserController::class, 'revokeRole'])->name('users.roles.revoke');
    });
});

require __DIR__.'/auth.php';
