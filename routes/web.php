<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaniController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','admin'])->group(function(){
    Route::get('admin/dashboard',[HomeController::class,'index']);

    Route::get('/admin/kabupaten',[DaniController::class,'index'])->name('admin/kabupaten');
    Route::get('/admin/kabupaten/create', [DaniController::class, 'create'])->name('admin/kabupaten/create');
    Route::post('/admin/kabupaten/save', [DaniController::class, 'save'])->name('admin/kabupaten/save');
    Route::get('/admin/kabupaten/edit/{id}', [DaniController::class, 'edit'])->name('admin/kabupaten/edit');
    Route::put('/admin/kabupaten/edit/{id}', [DaniController::class, 'update'])->name('admin/kabupaten/update');
    Route::delete('/admin/kabupaten/delete/{id}', [DaniController::class, 'delete'])->name('admin/kabupaten/delete');

});

require __DIR__.'/auth.php';

//Route::get('admin/dashboard',[HomeController::class,'index']);
//Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);
