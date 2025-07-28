<?php

namespace App\Http\Controllers\editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('pages.editor.contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('pages.editor.contact.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->route('editor.contact.index')->with('success', 'Pesan berhasil dikirim!');
    }

    public function show($id)
    {
        $message = Contact::findOrFail($id);
        return view('pages.editor.contact.show', compact('message'));
    }

    public function edit($id)
    {
        $message = Contact::findOrFail($id);
        return view('pages.editor.contact.edit', compact('message'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $message = Contact::findOrFail($id);
        $message->update($validated);

        return redirect()->route('editor.contact.index')->with('success', 'Pesan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();

        return redirect()->route('editor.contact.index')->with('success', 'Pesan berhasil dihapus!');
    }
}
