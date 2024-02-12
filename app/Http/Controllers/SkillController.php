<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        return view('admin.skills', [
            'skills' => Skill::all()
        ]);
    }

    public function create(){
        return view('admin.skills.create');
    }

    public function edit(Skill $skill){
        return view('admin.skills.edit', [
            'skill' => $skill
        ]);
    }

    public function store(){

    }
}
