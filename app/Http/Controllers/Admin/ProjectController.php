<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     ** @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view("admin.projects.index", compact("projects"));

    }

    /**
     * Show the form for creating a new resource.
     *
     ** @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.projects.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     ** @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $project = new Project();
        $project->name = $data["name"];
        $project->description = $data["description"];
        $project->link = $data["link"];
        $project->slug = Str::slug($project->name);

        $project->save();

        return redirect()->route('admin.projects.show', compact('project'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     ** @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view("admin.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     ** @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     ** @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     ** @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
