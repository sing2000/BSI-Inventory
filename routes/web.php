<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\POSController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\AddonsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\Vending_maController;
use App\Http\Controllers\Auth\RegisterController;


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
Auth::routes();
//home page
Route::get('/home', [HomeController::class, 'index'])->name('home');
//Dashboard page
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//inventory page
Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');
//Suppliers page
Route::get('/suppliers', [SuppliersController::class, 'index'])->name('suppliers');
Route::post('/suppliers', [SuppliersController::class, 'store'])->name('suppliers.store');
//Items page
Route::get('/items', [ItemsController::class, 'index'])->name('items');
Route::post('/items', [ItemsController::class, 'store'])->name('items.store');
//Sales page
Route::get('/sales', [SalesController::class, 'index'])->name('sales');
//Order page
Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
//orders page
Route::get('/pos', [POSController::class, 'index'])->name('pos');
//Report page
Route::get('/reports', [ReportsController::class, 'index'])->name('reports');
//accounts page
Route::get('/accounting', [AccountingController::class, 'index'])->name('accounting');
//settings page
Route::get('/setting', [SettingController::class, 'index'])->name('setting');
//products page
Route::get('/products', [ProductsController::class, 'index'])->name('products');
//add-ons page
Route::get('/add-ons', [AddonsController::class, 'index'])->name('add-ons');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);