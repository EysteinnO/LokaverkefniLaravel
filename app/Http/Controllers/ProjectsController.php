<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projects;

class ProjectsController extends Controller
{
    public function index()
    {
    	$projects = Projects::all();

    	//return $projects;
    	return view ('Projects.index', compact('projects'));
    }
    //Method takes in model and inserts into $project
    public function show(Projects $project)
    {    	

    	return view ('Projects.show', compact('project'));
    }

    public function create()
    {
    	return view ('Projects.create');
    }

    public function store()
    {

    	Projects::create(request(['title', 'description']));

    	return redirect('/projects');
    }


    public function edit(Projects $project)
    {    	
    	return view ('Projects.edit', compact('project'));

    }
    //$project = Projects::findOrFail($id); -> hægt að setja inn Modelið sem parameter í fallið og Laravel sér um rest.
    public function update(Projects $project)
    {
    	$project->update(request(['title', 'description']));
    	return redirect('/projects');
    }

    public function destroy(Projects $project)
    {
    	$project->delete();
    	
    	return redirect('/projects');
    }

    public function calendar()
    {
        $projects = Projects::all();
        return view ('Projects.calendar', compact('projects'));
    }

    public function blog()
    {
        $projects = Projects::all();

        //return $projects;
        return view ('Projects.blog', compact('projects'));
    }

    
}
