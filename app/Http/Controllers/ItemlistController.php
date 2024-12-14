<?php

namespace App\Http\Controllers;

use App\Models\Itemlist;
use Illuminate\Http\Request;

class ItemlistController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Itemlist::create($validatedData);

        return redirect()->route('messages.list')->with('success');
    }

    public function index()
    {
        $itemlists = Itemlist::all();
        return view('messages.list', compact('itemlists'));
    }
}
