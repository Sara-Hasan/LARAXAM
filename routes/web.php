<?php

use App\Http\Controllers\QuestionEaxmController;
use App\Http\Controllers\resultController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\allresultController;

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

Auth::routes();

Route::group(['middleware' => ['admin']], function(){
    Route::get('/dashboard', function (){
        return view('admin.dashboard');
    });
    Route::resource('exams', ExamController::class);
    Route::resource('exams', 'App\Http\Controllers\ExamController');

    Route::resource('question', QuestionController::class);
    Route::resource('question', 'App\Http\Controllers\QuestionController');

    Route::resource('answer', AnswerController::class);
    Route::resource('answer', 'App\Http\Controllers\AnswerController');

    Route::resource('users', UserController::class);
    Route::resource('users', 'App\Http\Controllers\UserController');

});
// Route::group(['middleware' => ['auth','admin']], function()
// {
    
    

// });
    Route::get('questionexam/{id}', [App\Http\Controllers\QuestionEaxmController::class, 'indexx'])->name('exam');
    Route::post('questionexam/{id}', [App\Http\Controllers\QuestionEaxmController::class, 'stores'])->name('quizz');
    Route::resource('questionexam', 'App\Http\Controllers\QuestionEaxmController');

    Route::resource('result', resultController::class);
    Route::resource('result', 'App\Http\Controllers\resultController');

    Route::get('/allresult', [App\Http\Controllers\allresultController::class, 'index'])->name('allresult');
    Route::get('/quiz', function () {
        return view('quiz');
    });




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'create'])->name('home');

// Route::resource('category', CategoryController::class);
// Route::resource('category', 'App\Http\Controllers\CategoryController');




// Route::resource('allresult', allresultController::class)->name('all');
// Route::resource('allresult', 'App\Http\Controllers\allresultController')->name('resultall');
// Route::get('/result', [App\Http\Controllers\QuestionEaxmController::class, 'stores'])->name('result');
// Route::resource('result', 'App\Http\Controllers\QuestionEaxmController');
