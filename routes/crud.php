<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

//read
    Route::get('company', [CompanyController::class, 'Show']);
    Route::post('/company/list/{slug}', [CompanyController::class, 'Details']);
    Route::get('/company/list/{slug}', [CompanyController::class, 'Details']);

//create
    Route::post('/company/create', [CompanyController::class, 'Create']);
    Route::get('/company/create', [CompanyController::class, 'CreateForm']);

//update
    Route::post('/company/update', [CompanyController::class, 'Update']);

//delete
    Route::post('/company/delete', [CompanyController::class, 'Delete']);
});
