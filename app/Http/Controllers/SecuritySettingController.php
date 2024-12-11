<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecuritySetting;
use Illuminate\Support\Facades\Auth;

class SecuritySettingController extends Controller
{
    public function index()
    {
        // Get the authenticated user's security settings
        $settings = SecuritySetting::where('user_id', Auth::id())->first();
    
        // Pass the data to the view
        return view('websites.setting', compact('settings'));
    }
    

    public function store(Request $request)
{
    $request->validate([
        'phone' => 'nullable|string|max:15',
        'new_password' => 'required|string|min:8|confirmed',
        'security_question' => 'nullable|string|max:255',
        'security_answer' => 'nullable|string|max:255',
    ]);

    try {
        $settings = SecuritySetting::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'phone' => $request->input('phone'),
                'security_question' => $request->input('security_question'),
                'security_answer' => $request->input('security_answer'),
                'password' => bcrypt($request->input('new_password'))
            ]
        );

        return redirect()->route('security.index')->with('success', 'Security settings updated successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}

}
