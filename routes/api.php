<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**Controllers */

use App\Http\Controllers\CuentaController;
use App\Http\Controllers\TransaccionController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('cuentas',[CuentaController::class,'index']);
Route::post('cuentas',[CuentaController::class,'store']);
Route::put('cuentas/{id}',[CuentaController::class,'update']);
