<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /* Mostrar los proyectos */
    public function index(Request $request)
    {
        // Traigo los projectos usando el modelo Project
        /* $portfolio = Project::orderBy('created_at', 'DESC')->get(); */
        /* $portfolio = Project::latest()->get(); */

        $projects = Project::latest()->paginate();

        return view('projects.index', compact('projects'));
    }

    /* Mostrar un proyecto individual segun su id */
    public function show($id) {
        $project = Project::findOrFail($id); // find devuelve un JSON
        return view('projects.show', [
            'project' => $project
        ]);
    }
}
