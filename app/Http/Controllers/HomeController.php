<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Post;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $category = DB::table('categories')->where('title', 'Homepage')->first();
        return view('welcome', [
            'skills' => Skill::all()->sortByDesc('years_of_experience'),
            'education' => Education::all(),
            'projects' => Project::all()->where('featured', 1),
            'posts' => Post::all()->where('category_id', $category->id)->keyBy('title')
        ]);
    }
}
