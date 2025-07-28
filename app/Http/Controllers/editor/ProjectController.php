<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
  public function index(Request $request)
{
    $query = Project::query();

    if ($request->filled('search')) {
        $search = $request->search;
        $query->where('title', 'like', "%{$search}%")
              ->orWhere('location', 'like', "%{$search}%")
              ->orWhere('client_name', 'like', "%{$search}%");
    }

    $projects = $query->latest()->paginate(10);

    return view('pages.editor.project.index', compact('projects'));
}


    public function create()
    {
        return view('pages.editor.project.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'contract_type' => 'required|string|max:100',
            'contract_period' => 'required|string|max:255',
            'year' => 'required|digits:4|integer',
            'client_name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'client_logo' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        if ($request->hasFile('client_logo')) {
            $validated['client_logo'] = $request->file('client_logo')->store('clients', 'public');
        }

        Project::create($validated);

        return redirect()->route('editor.project.index')->with('success', 'Project berhasil ditambahkan!');
    }

    public function show(Project $project)
    {
        return view('pages.editor.project.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('pages.editor.project.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'contract_type' => 'required|string|max:100',
            'contract_period' => 'required|string|max:255',
            'year' => 'required|digits:4|integer',
            'client_name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'client_logo' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        if ($request->hasFile('client_logo')) {
            if ($project->client_logo) {
                Storage::disk('public')->delete($project->client_logo);
            }
            $validated['client_logo'] = $request->file('client_logo')->store('clients', 'public');
        }

        $project->update($validated);

        return redirect()->route('editor.project.index')->with('success', 'Project berhasil diperbarui!');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        if ($project->client_logo) {
            Storage::disk('public')->delete($project->client_logo);
        }

        $project->delete();

        return redirect()->route('editor.project.index')->with('success', 'Project berhasil dihapus!');
    }

    
}
