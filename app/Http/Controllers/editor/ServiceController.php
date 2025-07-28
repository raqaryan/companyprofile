<?php
namespace App\Http\Controllers\editor;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('pages.editor.service.index', compact('services'));
    }

    public function create()
    {
        return view('pages.editor.service.create');
    }

    public function store(Request $request)
    {
        Service::create($request->all());
        return redirect()->route('editor.service.index')->with('success', 'Berhasil ditambahkan');
    }

    public function edit(Service $service)
    {
        return view('pages.editor.service.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $service->update($request->all());
        return redirect()->route('editor.service.index')->with('success', 'Berhasil diupdate');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('success', 'Berhasil dihapus');
    }
}
