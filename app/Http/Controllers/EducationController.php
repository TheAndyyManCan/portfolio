<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function index(){
        return view('admin.education.education', [
            'education' => Education::all()
        ]);
    }

    public function edit(Education $education){
        return view('admin.education.edit', [
            'education' => $education
        ]);
    }

    public function create(){
        return view('admin.education.create');
    }
}
