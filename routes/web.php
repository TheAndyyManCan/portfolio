<?php

use App\Http\Controllers\SkillController;
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
        'skills' => Skill::all()
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

Route::get('/login', function(){
    return view('sessions.login');
})->name('login');
