<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.category', [
            'categories' => Category::all()
        ]);
    }

    public function create(){
        return view('admin.category.create');
    }

    public function edit(Category $category){
        return view('admin.category.edit', [
            'category' => $category
        ]);
    }
}
