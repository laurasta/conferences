<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();

        return view('conferences', compact('conferences'));
    }

    public function create()
    {
        return view('conferences.create');
    }

    public function edit(Conference $conference)
    {
        return view('conferences.edit', compact('conference'));
    }

    public function update(Request $request, Conference $conference)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'address' => 'required|max:255',
        ]);

        $conference->update($validatedData);

        return redirect()->route('conferences.show', $conference);
    }

    public function show($id)
    {
        $conference = Conference::findOrFail($id);

        return view('conferences.show', compact('conference'));
    }

    public function destroy($id)
    {
        // Logic to delete the conference with the given ID
        $conference = Conference::find($id);
        if (!$conference) {
            return redirect()->back()->with('error', 'Conference not found');
        }else{
            $conference->delete();
            return redirect()->route('conferences.index')->with('success', 'Conference deleted successfully');
        }

    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'address' => 'required|string|max:255',
        ]);

        Conference::create($data);

        return redirect()->route('conferences.index');
    }

}
