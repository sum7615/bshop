<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\MoneyController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\BankController;


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

Route::Match(['get', 'post'], '/', [AdminController::class, 'home']);



// admin login/logout and profile
Route::Match(['get', 'post'], '/login', [AdminController::class, 'login']);
Route::Match(['get', 'post'], '/logout', [AdminController::class, 'logout']);
Route::Match(['get', 'post'], '/adminDashboard', [AdminController::class, 'adminDashboard']);
Route::Match(['get', 'post'], '/profile', [AdminController::class, 'profile']);


//employee
Route::Match(['get', 'post'], '/employee', [AdminController::class, 'employee']);
Route::Match(['get', 'post'], '/employeeView/{id}', [AdminController::class, 'employeeView']);
Route::Match(['get', 'post'], '/addEmployee', [AdminController::class, 'addEmployee']);
Route::Match(['get', 'post'], '/updateEmployee/{id}', [AdminController::class, 'updateEmployee']);
Route::Match(['get', 'post'], '/terminateEmployee/{id}', [AdminController::class, 'terminateEmployee']);

//stock
Route::Match(['get', 'post'], '/stockIn', [StockController::class, 'stockIn']);

Route::Match(['get', 'post'], '/stock', [StockController::class, 'stock']);
Route::Match(['get', 'post'], '/addStock', [StockController::class, 'addStock']);
Route::Match(['get', 'post'], '/updateStock', [StockController::class, 'updateStock']);
Route::Match(['get', 'post'], '/deleteStock', [StockController::class, 'deleteStock']);


//contact
Route::Match(['get', 'post'], '/contact', [StockController::class, 'contact']);
Route::Match(['get', 'post'], '/addContact', [StockController::class, 'addContact']);
Route::Match(['get', 'post'], '/updateContact/{id}', [StockController::class, 'updateContact']);
Route::Match(['get', 'post'], '/contactDetails/{id}', [StockController::class, 'contactDetails']);
Route::Match(['get', 'post'], '/deleteContact/{id}', [StockController::class, 'deleteContact']);
Route::Match(['get', 'post'], '/deletedContact', [StockController::class, 'deletedContact']);
Route::Match(['get', 'post'], '/deletedContactDetails/{id}', [StockController::class, 'deletedContactDetails']);

//cash
Route::Match(['get', 'post'], '/cash', [MoneyController::class, 'cash']);
Route::Match(['get', 'post'], '/cashDispatch/{id}', [MoneyController::class, 'cashDispatch']);
Route::Match(['get', 'post'], '/payOut', [MoneyController::class, 'payOut']);


//document
Route::Match(['get', 'post'], '/document', [DocumentController::class, 'document']);


//sale
Route::Match(['get', 'post'], '/allSale', [SaleController::class, 'allSale']);
Route::Match(['get', 'post'], '/sale', [SaleController::class, 'sale']);
Route::Match(['get', 'post'], '/getOrder', [SaleController::class, 'getOrder']);
Route::Match(['get', 'post'], '/order/completedOrder', [SaleController::class, 'completedOrder']);
Route::Match(['get', 'post'], '/orderStatus', [SaleController::class, 'orderStatus']);






//bill
Route::Match(['get', 'post'], '/bill', [DocumentController::class, 'bill']);




//report
Route::Match(['get', 'post'], '/report', [DocumentController::class, 'report']);


// bank
Route::Match(['get','post'],'/bank',[BankController::class,'bank']);