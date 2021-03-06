<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
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
    /*
    public function show($id) {
        $project = Project::findOrFail($id); // find devuelve un JSON
        return view('projects.show', [
            'project' => $project
        ]);
    }
    */
    // Mismo metodo anterior usando Route Model Binding
    public function show(Project $project) {
        //return $id;
        //$project = Project::findOrFail($id); // find devuelve un JSON
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create() {
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request) {

        /*         Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description')
        ]); */

        // Otra forma de enviar todos los datos del formulario
        // Project::create(request()->all());

        // Validamos el formulario, y solo guardamos los campos validados
/*         $fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]); */

        // La validacion va a ocurri automaticamente mediante el form request

        Project::create($request->validated()); // En lugar de pasar todos los campos, pasamos solo los validados

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado correctamente.');

    }

    public function edit(Project $project) {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request) {

        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado correctamente.');
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado correctamente.');
    }
}
