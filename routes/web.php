<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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


Route::get('/', [CrudController::class, 'index']);
Route::get('/crud-create', [CrudController::class, 'crud_create']);
Route::post('/store', [CrudController::class, 'crud_store']);

Route::get('/edit-crud/{id}', [CrudController::class, 'crud_edit']);
Route::put('/store-update/{id}', [CrudController::class, 'crud_update']);

Route::get('/delete/{id}', [CrudController::class, 'crud_delete']);

Auth::routes();
