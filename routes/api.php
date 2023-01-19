<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\KorisnikController;

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

Route::resource('portal', PortalController::class)->only('index', 'destroy', 'show', 'store');
Route::resource('korisnik', KorisnikController::class)->only('index', 'destroy');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
