<?php

use App\Http\Controllers\Admin\{
    DashController,
    PlanController
};
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashController::class, 'index'])->name('dasn.index');

// PLANS
Route::any('planos/search', [PlanController::class, 'search'])->name('planos.search');
Route::resource('/planos', PlanController::class)->names('admin.plans');