<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});
Route::get('/quiz', function () {
    return view('quiz');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'create'])->name('home');

Route::resource('category', CategoryController::class);
Route::resource('category', 'App\Http\Controllers\CategoryController');

Route::resource('exams', ExamController::class);
Route::resource('exams', 'App\Http\Controllers\ExamController');

Route::resource('question', QuestionController::class);
Route::resource('question', 'App\Http\Controllers\QuestionController');

Route::resource('answer', AnswerController::class);
Route::resource('answer', 'App\Http\Controllers\AnswerController');

Route::resource('users', UserController::class);
Route::resource('users', 'App\Http\Controllers\UserController');

// Route::get('/questionexam', [App\Http\Controllers\QuestionEaxmController::class, 'create'])->name('questionexam');
Route::resource('questionexam', QuestionEaxmController::class);
Route::resource('questionexam', 'App\Http\Controllers\QuestionEaxmController');

Route::resource('result', 'App\Http\Controllers\QuestionEaxmController');

