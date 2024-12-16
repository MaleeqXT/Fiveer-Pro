<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Store a new type in the database.
     */
    public function store(Request $request)
{
    try {
        $request->validate([
            'email' => 'array',
            'mobile' => 'array',
        ]);

        $emailTypes = $request->input('email', []);
        $mobileTypes = $request->input('mobile', []);

        foreach (['Inbox Messages', 'Order Messages', 'Order Update', 'Rating Reminders', 'Buyer Briefs', 'My Gigs'] as $type) {
            Type::updateOrCreate(
                ['name' => $type],
                [
                    'email' => in_array($type, $emailTypes),
                    'mobile' => in_array($type, $mobileTypes),
                ]
            );
        }

        return redirect()->back()->with('success', 'Notifications updated successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }
}

}
