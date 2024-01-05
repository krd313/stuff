<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ShopController;
// use App\Http\Controllers\UnitController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopListController;
use App\Http\Controllers\FoodCategoryController;

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

// Route::get('/shop/list', [ShopController::class, 'list'])->name('shop.list');
// Route::get('/shop/item', [ShopController::class, 'item'])->name('shop.item');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/logout', [ProfileController::class, 'logout'])->name('profile.logout');

Route::resource('/unit', UnitController::class);

Route::resource('/shoplist', ShopListController::class);

});

require __DIR__.'/auth.php';
