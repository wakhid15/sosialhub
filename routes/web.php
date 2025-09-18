<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ReportController;

// -------------------------------
// Default Landing (Public Pages)
// -------------------------------
Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/barcode', [LandingController::class, 'barcode'])->name('barcode');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/helper', [LandingController::class, 'helper'])->name('helper');

// Auth Pages
Route::get('/login', [LandingController::class, 'login'])->name('login.form');
Route::post('/login', [LandingController::class, 'authenticate'])->name('login');
Route::post('/logout', [DashboardController::class, 'logout'])->middleware('auth')->name('logout');

// -------------------------------
// Dashboard (Private)
// -------------------------------
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::resource('/dashboard/profiles', ProfileController::class)->middleware('auth');
Route::resource('/dashboard/users', UserController::class)->middleware('auth');
Route::resource('/dashboard/members', MemberController::class)->middleware('auth');
Route::resource('/dashboard/books', BookController::class)->middleware('auth');
Route::resource('/dashboard/raks', RakController::class)->middleware('auth');
Route::resource('/dashboard/transactions', TransactionController::class)->middleware('auth');

// Reports
Route::get('/dashboard/reports', [ReportController::class, 'index'])->middleware('auth')->name('reports.index');
Route::get('/dashboard/reports/books', [ReportController::class, 'books'])->middleware('auth')->name('reports.books');
Route::get('/dashboard/reports/users', [ReportController::class, 'users'])->middleware('auth')->name('reports.users');
Route::get('/dashboard/reports/members', [ReportController::class, 'members'])->middleware('auth')->name('reports.members');

Route::get('/dashboard/reports/confirm/transactions', [ReportController::class, 'confirm'])->middleware('auth')->name('reports.confirm');
Route::post('/dashboard/reports/confirm/transactions', [ReportController::class, 'transactions'])->middleware('auth')->name('reports.transactions');

// Transactions
Route::post('/dashboard/transactions/createpengembalian', [TransactionController::class, 'pengembalian'])->middleware('auth')->name('transactions.createpengembalian');
Route::post('/dashboard/transactions/prosespengembalian', [TransactionController::class, 'prosespengembalian'])->middleware('auth')->name('transactions.prosespengembalian');

// Print
Route::post('/dashboard/users/print', [PrintController::class, 'print_user'])->middleware('auth')->name('users.print');
Route::post('/dashboard/members/print', [PrintController::class, 'print_member'])->middleware('auth')->name('members.print');
Route::post('/dashboard/books/print', [PrintController::class, 'print_book'])->middleware('auth')->name('books.print');

// Import Excel Books
Route::post('/dashboard/books/import', [BookController::class, 'import'])->middleware('auth')->name('books.import');
Route::post('/books/import', [BookController::class, 'import'])->name('books.import.simple');

// Scan
Route::post('/dashboard/scan/scan-barcode', function (\Illuminate\Http\Request $request) {
    $barcode = $request->input('barcode');
    $barcodeImage = DNS1D::getBarcodePNG($barcode, 'C128');
    return view('scan-result', ['barcodeImage' => $barcodeImage, 'barcode' => $barcode]);
})->middleware('auth')->name('scan-result');
