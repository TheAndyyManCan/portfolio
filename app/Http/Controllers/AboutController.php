<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index(){
        $category = DB::table('categories')->where('title', 'About')->first();
        $posts = Post::all()
                ->where('category_id', $category->id)
                ->keyBy('title');
        foreach($posts as $post){
            $post['pictures'] = FileUpload::all()->where('post_id', $post->id);
        }
        return view('about', [
            'posts' => $posts
        ]);
    }
}
