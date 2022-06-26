<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Expert\ExpertController;
use App\Http\Controllers\Problem\ProblemController;
use App\Http\Controllers\Solution\SolutionController;
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

Auth::routes(['register' => true]);

Route::prefix('admin')->middleware(['auth', 'role:administrator'])->group(function(){

    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin');

    Route::get('/cates', [CategoryController::class, 'index'])->name('admin.cates.index');

    Route::get('/cates/create', [CategoryController::class, 'create'])->name('admin.cates.create');

    Route::get('/problems', [ProblemController::class, 'index'])->name('admin.problem.index');

    Route::get('/soln', [SolutionController::class, 'index'])->name('admin.soln.index');

});

Route::get('/approve/{id}', [SolutionController::class, 'approve'])->middleware(['auth', 'role:administrator']);

Route::prefix('expert')->middleware(['auth', 'role:expert'])->group(function(){

    Route::get('/dashboard', [ExpertController::class, 'index'])->name('expert');

    Route::get('/cates', [CategoryController::class, 'index'])->name('expert.cates.index');

    Route::get('/problems', [ProblemController::class, 'index'])->name('expert.problem.index');

    Route::post('/post_soln', [ProblemController::class, 'store_soln'])->name('soln.expert');

    Route::get('/soln', [SolutionController::class, 'index'])->name('expert.soln.index');

});

Route::get('/respond/{id}', [ProblemController::class, 'respond'])->middleware(['auth', 'role:expert']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'role:user']);
Route::get('/home/my_asked_problem', [ProblemController::class, 'index'])->name('user.problem.index')->middleware(['auth', 'role:user']);
Route::get('/home/new/problem', [ProblemController::class, 'create'])->name('user.problem.create');
Route::post('saveProblem', [ProblemController::class, 'saveProblem'])->name('saveProblem')->middleware(['auth', 'role:user']);
Route::get('mysoln', [SolutionController::class, 'index'])->name('users.index')->middleware(['auth','role:user']);
