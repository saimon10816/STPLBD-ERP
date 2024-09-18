<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Home Route (Dashboard for authenticated users)
Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

use App\Http\Controllers\AdminController;

Route::group(['middleware' => ['role:super-admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

use App\Http\Controllers\WarpingController;

Route::resource('warpings', WarpingController::class);
Route::get('/warping', [WarpingController::class, 'showForm'])->name('warping.form');
Route::post('/warping/calculate', [WarpingController::class, 'calculate'])->name('warping.calculate');

use App\Http\Controllers\InventoryController;

Route::resource('inventory', InventoryController::class);

use App\Http\Controllers\SalesController;

Route::resource('sales', SalesController::class);
Route::get('/sales/report', [SalesController::class, 'salesReport'])->name('sales.report');

use App\Http\Controllers\SalesChartController;

// Route to fetch chart data
Route::get('/charts/sales', [SalesChartController::class, 'generate']);

// Route to view the sales report chart
Route::get('/sales/report', function () {
    return view('sales.report');
})->name('sales.report');

use App\Http\Controllers\PurchaseController;

Route::resource('purchases', PurchaseController::class);

use App\Http\Controllers\CustomerController;

Route::resource('customers', CustomerController::class);

use App\Http\Controllers\ReportController;

Route::get('/reports/sales', [ReportController::class, 'salesReport'])->name('reports.sales');
Route::get('/reports/purchases', [ReportController::class, 'purchaseReport'])->name('reports.purchases');

use App\Http\Controllers\ProfileController;


Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

// Authentication routes
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);






