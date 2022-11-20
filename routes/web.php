<?php

use App\Http\Controllers\MerchandiseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Html\FormFacade;

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
    return view('landing');
});

Route::get('/merchandises',[MerchandiseController::class, 'index']);
Route::post('/merchandises',[MerchandiseController::class, 'store']);

Route::get('/edit-merchandise/{merchandises}',[MerchandiseController::class, 'edit']);
Route::put('/edit-merchandise/{merchandises}',[MerchandiseController::class, 'update']);
Route::get('/delete-merchandise/{merchandises}',[MerchandiseController::class, 'delete']);
Route::delete('/confirmdelete-merchandise/{merchandises}',[MerchandiseController::class, 'destroy']);
