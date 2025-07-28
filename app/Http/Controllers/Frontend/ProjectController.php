<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(6);
        return view('frontend.projects.index', compact('projects'));
    }

    public function show($id)
    {
       $project = Project::findOrFail($id);
    return view('frontend.projects.show', compact('project'));
    }
}
