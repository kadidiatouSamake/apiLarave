<?php
namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        return Note::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
            'matiere' => 'required',
            'note' => 'required',
        ]);

        return Note::create($request->all());
    }

    public function show(Note $note)
    {
        return $note;
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
            'matiere' => 'required',
            'note' => 'required',
        ]);

        $note->update($request->all());

        return $note;
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return response()->noContent();
    }
}
