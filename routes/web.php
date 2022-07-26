<?php

use App\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Authenticate;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/', function () {
    return view('welcome');
});






Route::middleware([Authenticate::class, Admin::class])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');


    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');

    
    Route::get('/admin/subjects', [SubjectController::class, 'admin_index'])->name('admin.subjects');
    Route::get('/admin/subjects/create', [SubjectController::class, 'create'])->name('admin.subjects.create');
    Route::post('/admin/subjects', [SubjectController::class, 'store'])->name('admin.subjects.store');
    Route::get('/admin/subjects/show/{subject_id}', [SubjectController::class, 'show'])->name('admin.subjects.show');
    Route::delete('/admin/subjects/{subject_id}', [SubjectController::class, 'destroy'])->name('admin.subjects.destroy');
    Route::get('/admin/subjects/edit/{subject_id}', [SubjectController::class, 'edit'])->name('admin.subjects.edit');
    Route::post('/admin/subjects/update/{subject_id}', [SubjectController::class, 'update'])->name('admin.subjects.update');
    

    Route::get('/admin/questions')->name('admin.questions');
    Route::get('/admin/questions/create/{subject_id}', [QuestionController::class, 'create'])->name('admin.questions.create');
    Route::post('/admin/questions', [QuestionController::class, 'store'])->name('admin.questions.store');
    Route::delete('/admin/questions/{question_id}', [QuestionController::class, 'destroy'])->name('admin.questions.destroy');
    Route::get('/admin/questions/edit/{question_id}', [QuestionController::class, 'edit'])->name('admin.questions.edit');
    Route::post('/admin/questions/update/{question_id}', [QuestionController::class, 'update'])->name('admin.questions.update');
});

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });

    Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');


    Route::get('/questions/{subject_id}', [QuestionController::class, 'index']);
    Route::post('/questions/result', [QuestionController::class, 'result']);


    Route::get('/histories/{user_id}', [HistoryController::class, 'index'])->name('histories.index');
    Route::post('/histories/store/{subject_id}/{user_id}', [HistoryController::class, 'store'])->name('histories.store');
    Route::get('/histories/{user_id}/show/{history_id}', [HistoryController::class, 'show'])->name('histories.show');
    Route::delete('/histories/{user_id}/destroy/{history_id}', [HistoryController::class, 'destroy'])->name('histories.destroy');
    Route::delete('/histories/{user_id}/clear', [HistoryController::class, 'clear'])->name('histories.clear');

    Route::get('/settings', function() {
        return view('settings.index');
    });
    Route::get('/settings/{user_id}', [UserController::class, 'edit'])->name('settings.edit');
    Route::post('/settings/{user_id}/update', [UserController::class, 'update'])->name('settings.update');

    Route::get('/password/{user_id}', [UserController::class, 'change_password'])->name('password.edit');
    Route::post('/password/{user_id}/update', [UserController::class, 'update_password'])->name('password.update');
});

