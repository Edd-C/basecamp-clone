<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        request()->validate(['body' => 'required']);

         $project->addTask(request('body'));

         redirect($project->path());
    }
}
