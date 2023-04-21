<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Notes::paginate(10);
        return response()->json([
            'data' => $notes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $notes = Notes::create([
            'title' => $request->title,
            'desc' => $request->desc
        ]);

        return response()->json([
            'data' => $notes
        ]); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Notes $note)
    {
        return response()->json([
            'data'=> $note
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notes $note)
    {
        $note->title = $request->title;
        $note->desc = $request->desc;
        $note->save();

        return response()->json([
            'data' => $note
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notes $note)
    {
        $note->delete();
        return response()->json([
            'messsage' => 'Notes Deeted'
        ], 204);
    }
}
