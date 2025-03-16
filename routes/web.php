<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard',['user' => Auth::user()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile.view');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    
    Route::get('/profile/vehicle/add', [CustomVehicleController::class, 'addVehicle'])->name('profile.vehicle.add');
    Route::get('/profile/vehicle/edit/{vehicle}', [CustomVehicleController::class, 'editVehicle'])->name('profile.vehicle.edit');
    Route::post('/profile/vehicle/save', [CustomVehicleController::class, 'saveVehicle'])->name('profile.vehicle.save');
    Route::put('/profile/vehicle/update/{vehicle}', [CustomVehicleController::class, 'updateVehicle'])->name('profile.vehicle.update');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
