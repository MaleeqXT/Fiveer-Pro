<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class EditController extends Controller
{
    public function index() {
        // Get all questions to show on the page
        $questions = Question::all();
        return view('websites.edit', compact('questions'));
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        // Save the question in the database
        Question::create([
            'question' => $request->question,
        ]);

        // Redirect back to the page with the list of questions
        return redirect()->route('websites.edit')->with('success', 'Question added successfully');
    }
}

