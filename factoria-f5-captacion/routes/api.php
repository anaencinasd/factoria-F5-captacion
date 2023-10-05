<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PersonSelectionDayController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\SelectionDayController;
use App\Http\Controllers\StatusRequirementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/comment', CommentController::class);
Route::resource('/requirement', RequirementController::class);
Route::resource('/selectionDay', SelectionDayController::class);
Route::resource('/statusRequirement', StatusRequirementController::class);

//Rutas SelectionDay_person

Route::get('/getPersonInSelectionDay/{selectionDay}', [PersonSelectionDayController::class, 'getPersonInSelectionDay']);
Route::post('/addPersonToSelectionDay/{selectionDay}', [PersonSelectionDayController::class, 'addPersonToSelectionDay']);
