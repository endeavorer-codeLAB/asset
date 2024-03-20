<?php

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
    return redirect(route('login'));
    // return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/asset-inventory', [App\Http\Controllers\Admin\AssetInventory\AssetInventoryController::class, 'index'])->name('admin.asset-inventory.index');
Route::get('/admin/asset-inventory/create', [App\Http\Controllers\Admin\AssetInventory\AssetInventoryController::class, 'create'])->name('admin.asset-inventory.create');
Route::post('/admin/asset-inventory/create', [App\Http\Controllers\Admin\AssetInventory\AssetInventoryController::class, 'store'])->name('admin.asset-inventory.store');
Route::get('/admin/asset-inventory/{id}', [App\Http\Controllers\Admin\AssetInventory\AssetInventoryController::class, 'show'])->name('admin.asset-inventory.show');
Route::get('/pdf', [App\Http\Controllers\Admin\AssetInventory\AssetInventoryController::class, 'export_asset_pdf'])->name('pdf.asset');
Route::get('/search', [App\Http\Controllers\Admin\AssetInventory\AssetInventoryController::class, 'search']);