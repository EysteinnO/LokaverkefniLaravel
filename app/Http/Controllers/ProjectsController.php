<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projects;

class ProjectsController extends Controller
{
    public function index()
    {
        //Sótt allt collectionið sem modelið Projects inniheldur
    	$projects = Projects::all();

    	//return $projects;
    	return view ('Projects.index', compact('projects'));
    }
    //Fall sem tekur inn Project modelið sem parameter og skilar af sér $project collection í viewið sem hægt er að nota.
    public function show(Projects $project)
    {    	

    	return view ('Projects.show', compact('project'));
    }

    //Insert síðan
    public function create()
    {
    	return view ('Projects.create');
    }
    //Insert fallið
    public function store()
    {
        //Insert into...
    	Projects::create(request(['title', 'description']));

    	return redirect('/projects');
    }

    //Edit 
    public function edit(Projects $project)
    {    	
    	return view ('Projects.edit', compact('project'));

    }
    //$project = Projects::findOrFail($id); -> hægt að setja inn Modelið sem parameter í fallið og Laravel sér um rest.
    //Þarf ekki að nota findorfail lengur.
    //Update fallið
    public function update(Projects $project)
    {
    	$project->update(request(['title', 'description']));
    	return redirect('/projects');
    }
    //Delete record fallið
    public function destroy(Projects $project)
    {
    	$project->delete();
    	
    	return redirect('/projects');
    }
    //calendar síða
    public function calendar()
    {
        $projects = Projects::all();
        return view ('Projects.calendar', compact('projects'));
    }
    //Blog slíða
    public function blog()
    {
        $projects = Projects::all();

        //return $projects;
        return view ('Projects.blog', compact('projects'));
    }

    
}
