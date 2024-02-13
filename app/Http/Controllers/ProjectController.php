<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('admin.project.project', [
            'projects' => Project::all()
        ]);
    }

    public function create(){
        return view('admin.project.create');
    }

    public function edit(Project $project){
        return view('admin.project.edit', [
            'project' => $project
        ]);
    }
}
