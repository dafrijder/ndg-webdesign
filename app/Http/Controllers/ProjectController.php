<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        return view('main.projects', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function adminIndex()
    {
        $projects = Project::latest()->paginate(10);

        return view('admin.projects.index', compact('projects'));
    }

    public function adminShow(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'linkurl' => 'nullable|url',
            'status' => 'required|in:completed,in_progress,not_started',
        ]);

        Project::create($request->all());

        return redirect()->back()->with('success', 'Project succesvol aangemaakt!');
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'linkurl' => 'nullable|url',
            'status' => 'required|in:completed,in_progress,not_started',
        ]);

        $project->update($request->only(['title', 'description', 'linkurl', 'status']));

        return redirect()->route('admin.projects.index')->with('success', 'Project succesvol bijgewerkt.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project verwijderd.');
    }
}
