<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\AnswerLogController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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




Route::get('/answerlog', [AnswerLogController::class, 'first'])->name('first');

Route::get('/nextQuestion', [AnswerLogController::class, 'nextQuestion'])->name('nextQuestion');

Route::get('/test', [SubmissionController::class, 'index'])->name('test');

Route::post('/add/', [SubmissionController::class, 'store'])->name('add');

Route::get('/profile',[UserController::class, 'show'])->name('profile');

Route::get('/', [SubmissionController::class, 'index']);


Route::post('/learn', function (){
    return view('/learn');
});


require __DIR__ . '/auth.php';
