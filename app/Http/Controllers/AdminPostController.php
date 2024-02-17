<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index(){
        return view('admin.post.post', [
            'posts' => Post::all()
        ]);
    }

    public function create(){
        return view('admin.post.create', [
            'categories' => Category::all(),
            'projects' => Project::all()
        ]);
    }

    public function edit(Post $post){
        return view('admin.post.edit', [
            'post' => $post,
            'categories' => Category::all(),
            'projects' => Project::all()
        ]);
    }
}
