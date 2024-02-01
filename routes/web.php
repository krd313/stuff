<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ShopController;
// use App\Http\Controllers\UnitController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopListController;
use App\Http\Controllers\FoodCategoryController;




Route::get('/', function () {
    return view('welcome');
});

// Route::get('/shop/list', [ShopController::class, 'list'])->name('shop.list');
// Route::get('/shop/item', [ShopController::class, 'item'])->name('shop.item');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

route::resource('/articles', ArticleController::class)->only(['index','show']);

Route::middleware('auth')->group(function () {
    route::resource('/dashboard/articles', ArticleController::class)->except(['index','show']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/logout', [ProfileController::class, 'logout'])->name('profile.logout');

Route::resource('/unit', UnitController::class);

Route::resource('/shoplist', ShopListController::class);

});

require __DIR__.'/auth.php';
