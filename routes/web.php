<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
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

//login
Route::get('/', [AuthController::Class, 'Index'])->name('login');
Route::post('/', [AuthController::Class, 'Login']);

//company crud
//read
Route::get('/company', [CompanyController::class, 'Show'])->middleware('auth');
Route::post('/company/list/{slug}', [CompanyController::class, 'Details'])->middleware('auth');

//create
Route::post('/company/create', [CompanyController::class, 'Create'])->middleware('auth');
Route::get('/company/create', [CompanyController::class, 'CreateForm'])->middleware('auth');

//update
Route::post('/company/update', [CompanyController::class, 'Update'])->middleware('auth');

//delete
Route::post('/company/delete', [CompanyController::class, 'Delete'])->middleware('auth');

