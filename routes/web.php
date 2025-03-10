<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\IndicationController;
use App\Models\Indication;

Route::get('/', [PageController::class, 'homePage'])->name('home');
Route::get('/cek-kesehatan', [PageController::class, 'healtCheckPage']);
Route::get('/form-cek-kesehatan', [PageController::class, 'formHealtCheckPage'])->name('test.form');
Route::get('/hasil', [PageController::class, 'resultPage'])->name('result');    
Route::post('/diagnosa', [DiagnosaController::class, 'cekDiagnosa'])->name('diagnosa');  

Route::get('/login', [PageController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [PageController::class, 'dashboardPage'])->name('dashboard');
        Route::get('/indication', [PageController::class, 'indicationPage'])->name('indication');
        Route::get('/indication-add', [PageController::class, 'indicationAddPage'])->name('indication.add');
        Route::get('/disease', [PageController::class, 'diseasePage'])->name('disease');
        Route::get('/disease-add', [PageController::class, 'diseaseAddPage'])->name('disease.add');

        Route::post('/indcation-add', [IndicationController::class, 'store'])->name('indication.store');
        Route::delete('/indication/{id}', [IndicationController::class, 'destroy'])->name('indication.destroy');
        Route::post('/disease-add', [DiseaseController::class, 'store'])->name('disease.store');
        Route::delete('/disease/{id}', [DiseaseController::class, 'destroy'])->name('disease.destroy');
    });
});