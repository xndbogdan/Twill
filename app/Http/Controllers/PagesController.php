<?php


namespace App\Http\Controllers;


use App\Models\Project;

class PagesController extends Controller
{
    public function projects(){
        $projects = Project::published()->get();
        return view('landing', compact('projects'));
    }
}
