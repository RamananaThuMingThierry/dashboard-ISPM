<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantsController;

Route::apiResource('etudiants', EtudiantsController::class);