<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', function () {
    return view('welcome', [
        'skills' => Skill::all()->sortByDesc('years_of_experience'),
        'education' => Education::all(),
        'projects' => Project::all()->where('featured', 1)
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', function() {
    return view('projects');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/admin', function(){
    return view('admin.admin');
})->middleware('auth');

Route::get('/admin/skills', [SkillController::class, 'index'])->middleware('auth');
Route::get('/admin/skills/create', [SkillController::class, 'create'])->middleware('auth');
Route::get('/admin/skills/{skill}/edit', [SkillController::class, 'edit'])->middleware('auth');

Route::get('/admin/education', [EducationController::class, 'index'])->middleware('auth');
Route::get('/admin/education/create', [EducationController::class, 'create'])->middleware('auth');
Route::get('/admin/education/{education}/edit', [EducationController::class, 'edit'])->middleware('auth');

Route::get('/admin/project', [ProjectController::class, 'index'])->middleware('auth');
Route::get('/admin/project/create', [ProjectController::class, 'create'])->middleware('auth');
Route::get('/admin/project/{project}/edit', [ProjectController::class, 'edit'])->middleware('auth');

Route::get('/login', function(){
    return view('sessions.login');
})->name('login');
