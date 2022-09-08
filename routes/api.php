<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassesController;

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

Route::apiResource('classes', ClassesController::class);

/*========================= Classes =========================*/
require_once 'classes.php';

/*========================= Filières ========================*/
require_once 'filieres.php';

/*========================= Etudiants =======================*/
require_once 'etudiants.php';
