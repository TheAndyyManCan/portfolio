<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Headline',
            'category_id' => 1,
            'project_id' => null,
            'description' => "description",
            'content' => 'Intuitive Solutions to Complex Problems'
        ]);
        DB::table('posts')->insert([
            'title' => 'Homepage-About',
            'category_id' => 1,
            'project_id' => null,
            'description' => "description",
            'content' => "<p>My name is Andy McDonald. I am a software engineer with a particular interest in back end web development using frameworks such as Laravel. I have recently completed my third year at the University of the Highlands and Islands, achieving a BSc in Computing (Software Engineering) with a distinction, and I am currently in 4th year on course to achieve my honours. </p><br />

<p>To be perfectly honest, I wasn't 100% sure what I wanted to do with my life until the COVID pandemic hit in 2020 and I finally took the plunge to apply to university to study computing. Since then, I have discovered a passion hidden away in my tendency to tinker, perfect and explore computer systems my entire life: Software Engineering.</p><br />

<p>I can't tell you how much I appreciate you taking the time to view my portfolio. Feel free to look around and find out more about me and my passion.</p>"
        ]);
    }
}
