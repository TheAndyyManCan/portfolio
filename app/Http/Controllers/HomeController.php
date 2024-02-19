<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\FileUpload;
use App\Models\Post;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        dd(DB::table('categories'));
        $category = DB::table('categories')->where('title', 'Homepage')->first();
        $posts = Post::all()
                ->where('category_id', $category->id)
                ->keyBy('title');
        foreach($posts as $post){
            $post['pictures'] = FileUpload::all()->where('post_id', $post->id);
        }

        // ddd($posts);

        return view('welcome', [
            'skills' => Skill::all()->sortByDesc('years_of_experience'),
            'education' => Education::all(),
            'projects' => Project::all()->where('featured', 1),
            'posts' => $posts
        ]);
    }
}
