<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index(){
        $category = DB::table('categories')->where('title', 'About')->first();
        return view('about', [
            'posts' => Post::all()->where('category_id', $category->id)->keyBy('title')
        ]);
    }
}
