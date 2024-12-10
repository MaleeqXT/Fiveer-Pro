<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyList;
class MyListController extends Controller
{
    //
    public function list()
    {
        return view('messages.list');
    }

    public function store(Request $request)
    {
        $request->validate([
            'list_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        MyList::create([
            'list_name' => $request->list_name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'List created successfully!');
    }

}
