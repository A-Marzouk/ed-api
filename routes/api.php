<?php

use App\Http\Controllers\ClassProgressController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\EducationClassController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ResourceManagementController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherActivityController;
use App\Http\Controllers\TeacherController;
use App\Models\ClassProgress;
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

/* Teacher routes */
Route::prefix('teachers')->group( function () {
    Route::get('/', [TeacherController::class, 'index'])->name('get.teachers');
    Route::get('/activities', [TeacherActivityController::class, 'index'])->name('get.teacher.activities');
    Route::get('/activities/{teacherActivity}', [TeacherActivityController::class, 'show'])->name('get.single.teacher.activity');
    Route::get('/{teacher}', [TeacherController::class, 'show'])->name('get.single.teacher');
});

/* Student routes */
Route::prefix('students')->group( function () {
    Route::get('/', [StudentController::class, 'index'])->name('get.students');
    Route::get('/{student}', [StudentController::class, 'show'])->name('get.single.student');
});

/* Class routes */
Route::prefix('classes')->group( function () {
    Route::get('/', [EducationClassController::class, 'index'])->name('get.classes');
    Route::get('/progress', [ClassProgressController::class, 'index'])->name('get.class.progress');
    Route::get('/{educationClass}', [EducationClassController::class, 'show'])->name('get.single.class');
});

/* Resource routes */
Route::prefix('resources')->group( function () {
    Route::get('/', [ResourceController::class, 'index'])->name('get.resources');
    Route::get('/management', [ResourceManagementController::class, 'index'])->name('get.resources.managment');
    Route::get('/{resource}', [ResourceController::class, 'show'])->name('get.single.resource');
});

/* Coach routes */
Route::prefix('coaches')->group( function () {
    Route::get('/', [CoachController::class, 'index'])->name('get.coaches');
    Route::get('/{coach}', [CoachController::class, 'show'])->name('get.single.coach');
});


