<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('projects', [
            'projects' => Project::all()
        ]);
    }

    public function view(Project $project){
        $post = Post::where('project_id', $project->id)->first();
        $post['pictures'] = FileUpload::all()->where('project_id', $project->id);
        return view('project.view', [
            'project' => $project,
            'post' => $post
        ]);
    }
}
