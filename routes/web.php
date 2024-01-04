<?php

use App\Http\Controllers\CallcenterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChargeTypeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlotController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SaleofficerController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\Tickets\DashboardController as TicketsDashboardController;
use App\Http\Controllers\Tickets\UserController;
use App\Http\Controllers\TitledeedController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::get('/', [DashboardController::class, 'analytics']);

Route::resource('clients', ClientController::class);
Route::resource('projects', ProjectController::class);
Route::resource('category', CategoryController::class);
Route::resource('saleofficers', SaleofficerController::class);
Route::resource('charge-type', ChargeTypeController::class);
Route::resource('invoices', InvoiceController::class);
Route::resource('title-deed', TitledeedController::class);
Route::resource('payment', PaymentController::class);
Route::resource('sales', SaleController::class);
Route::resource('plots', PlotController::class);

Route::get('analytics', [DashboardController::class, 'analytics']);

Route::get('reports', [ReportController::class, 'index']);
Route::post('upload', [ClientController::class, 'upload']);

Route::post('generateAgentPerformanceReport', [ReportController::class, 'generateAgentPerformanceReport']);
Route::post('generateLeadStatusReport', [ReportController::class, 'generateLeadStatusReport']);
Route::post('generateSystemCallsTrendReport', [ReportController::class, 'generateSystemCallsTrendReport']);
Route::post('generateLeadsConversionComparisonReport', [ReportController::class, 'generateLeadsConversionComparisonReport']);
Route::post('generateFirstCallResolutionRateReport', [ReportController::class, 'generateFirstCallResolutionRateReport']);
Route::post('generateAverageCallTimeReport', [ReportController::class, 'generateAverageCallTimeReport']);
Route::post('generateCallAbandonmentRateReport', [ReportController::class, 'generateCallAbandonmentRateReport']);
Route::post('generateAgentActivityOverTimeReport', [ReportController::class, 'generateAgentActivityOverTimeReport']);
Route::post('generateTotalAmountSpentReport', [ReportController::class, 'generateTotalAmountSpentReport']);
Route::post('generateOverallSystemSummaryReport', [ReportController::class, 'generateOverallSystemSummaryReport']);


Route::get('client_search/{search}', [ClientController::class, 'client_search']);

// Dashboard


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


