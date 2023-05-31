<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

//read
    Route::get('company', [CompanyController::class, 'Show']);
    Route::post('/company/list/{slug}', [CompanyController::class, 'Details']);
    Route::get('/company/list/{slug}', [CompanyController::class, 'Details'])->name('companyList');

//create
    Route::post('/company/create', [CompanyController::class, 'Create'])->name('companyCreate');
    Route::get('/company/create', [CompanyController::class, 'CreateForm'])->name('companyGetForm');

//update
    Route::post('/company/update', [CompanyController::class, 'Update'])->name('companyUpdate');

//delete
    Route::post('/company/delete', [CompanyController::class, 'Delete'])->name('companyDelete');
});
