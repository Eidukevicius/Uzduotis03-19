<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
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


Route::get('/companies', [CompanyController::class, 'companies'])->name('companies');
Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
Route::post('/store/companies', [CompanyController::class, 'store'])->name('companies.store');
Route::get('/companies/{id}', [CompanyController::class, 'show'])->name('companies.show');
Route::get('/companies/{id}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
Route::put('/companies/{id}', [CompanyController::class, 'update'])->name('companies.update');
Route::delete('/companies/{id}', [CompanyController::class, 'destroy'])->name('companies.destroy');
Route::post('/companies/search', [CompanyController::class, 'searchByTitle'])->name('companies.search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout','\App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');
});

require __DIR__.'/auth.php';


Route::get('/', [CompanyController::class, 'searchBtTitle']);
Route::post('/search', [CompanyController::class, 'search']);