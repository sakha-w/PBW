<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/user', [UserController::class, 'index'])->name('user.daftarPengguna');
Route::get('/userRegistration', [UserController::class, 'create'])->name('user.registrasi');
Route::post('/userStore', [UserController::class, 'store'])->name('user.store');
Route::get('/userEdit/{id}', [UserController::class, 'edit'])->middleware(['auth', 'verified'])->name('user.edit');
Route::put('/userUpdate/{id}', [UserController::class, 'update'])->middleware(['auth', 'verified'])->name('user.update');
Route::delete('/userDelete/{id}', [UserController::class, 'destroy'])->middleware(['auth', 'verified'])->name('user.delete');
Route::get('/userView/{id}', [UserController::class, 'show'])->name('user.infoPengguna');


Route::get('/koleksi', [CollectionController::class, 'index'])->name('koleksi.daftarKoleksi');
Route::get('/koleksiTambah', [CollectionController::class, 'create'])->name('koleksi.registrasi');
Route::post('/koleksiStore', [CollectionController::class, 'store'])->name('koleksi.store');
Route::get('/koleksiEdit/{id}', [CollectionController::class, 'edit'])->middleware(['auth', 'verified'])->name('koleksi.edit');
Route::put('/koleksiUpdate/{id}', [CollectionController::class, 'update'])->middleware(['auth', 'verified'])->name('koleksi.update');
Route::delete('/koleksiDelete/{id}', [CollectionController::class, 'destroy'])->middleware(['auth', 'verified'])->name('koleksi.delete');
Route::get('/koleksiView/{id}', [CollectionController::class, 'show'])->name('koleksi.infoKoleksi');



require __DIR__.'/auth.php';
