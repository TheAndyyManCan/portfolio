<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SkillController;
use App\Models\Education;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Models\Skill;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{project}', [ProjectController::class, 'view']);

Route::get('/contact', [ContactMessageController::class, 'create']);
Route::get('/admin/message', [ContactMessageController::class, 'index'])->middleware('auth');
Route::get('/admin/message/{contactmessage}/view', [ContactMessageController::class, 'view'])->middleware('auth');

Route::get('/admin', function(){
    return view('admin.admin');
})->middleware('auth');

Route::get('/admin/skills', [SkillController::class, 'index'])->middleware('auth');
Route::get('/admin/skills/create', [SkillController::class, 'create'])->middleware('auth');
Route::get('/admin/skills/{skill}/edit', [SkillController::class, 'edit'])->middleware('auth');

Route::get('/admin/education', [EducationController::class, 'index'])->middleware('auth');
Route::get('/admin/education/create', [EducationController::class, 'create'])->middleware('auth');
Route::get('/admin/education/{education}/edit', [EducationController::class, 'edit'])->middleware('auth');

Route::get('/admin/project', [AdminProjectController::class, 'index'])->middleware('auth');
Route::get('/admin/project/create', [AdminProjectController::class, 'create'])->middleware('auth');
Route::get('/admin/project/{project}/edit', [AdminProjectController::class, 'edit'])->middleware('auth');

Route::get('/admin/post', [AdminPostController::class, 'index'])->middleware('auth');
Route::get('/admin/post/create', [AdminPostController::class, 'create'])->middleware('auth');
Route::get('/admin/post/{post}/edit', [AdminPostController::class, 'edit'])->middleware('auth');

Route::get('/admin/category', [CategoryController::class, 'index'])->middleware('auth');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->middleware('auth');
Route::get('/admin/category/{category}/edit', [CategoryController::class, 'edit'])->middleware('auth');

Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');
