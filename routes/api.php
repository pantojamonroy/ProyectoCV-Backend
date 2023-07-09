<?php

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClienteController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::post("/cliente",[ClienteController::class,'create']);

Route::get("/clientes",[ClienteController::class,'read']);

Route::put("/cliente",[ClienteController::class,'update']);

Route::delete("/cliente",[ClienteController::class,'delete']);

//Contact Form//

Route::post('/contact', [ContactController::class, 'enviarMensaje']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});