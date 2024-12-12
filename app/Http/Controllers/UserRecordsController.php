<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Credential;

class UserRecordsController extends Controller
{
    // Display all users
    public function index()
    {
        $users = Credential::all(); // Fetch all user records
        return view('user-records', compact('users'));
    }

    // Store a new user
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string|max:255',
            'user_id' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'extension' => 'nullable|string|max:255',
            'birthdate' => 'required|date',
            'birthplace' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'civilstatus' => 'required|string|max:255',
            'religion' => 'nullable|string|max:255',
            'nationality' => 'required|string|max:255',
        ]);

        Credential::create($validated); // Create a new user record

        return redirect()->route('user-records')->with('message', 'New record created successfully');
    }

    // Update an existing user
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id' => 'required|string|max:255',
            'user_id' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'extension' => 'nullable|string|max:255',
            'gender' => 'required|string|max:255',
            'civilstatus' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'birthplace' => 'required|string|max:255',
            'religion' => 'nullable|string|max:255',
            'nationality' => 'required|string|max:255',
        ]);

        $user = Credential::findOrFail($id); // Find the user record by ID
        $user->update($validated); // Update the user record

        return redirect()->route('user-records')->with('message', 'Record updated successfully');
    }

    // Delete a specific user
    public function destroy(Request $request)
    {
    $ids = $request->input('delete'); // Get the array of IDs from the request
    if ($ids) {
        Credential::whereIn('id', $ids)->delete(); // Use whereIn for better performance
    }
    return response()->json(['success' => true]); // Return a JSON response
    }

    // Delete all users
    public function destroyAll()
    {
        Credential::truncate(); // Delete all records

        return 
        redirect()->route('user-records')->with('message', 'All records deleted successfully');
    }

    public function adminView()
    {
        $users = Credential::where('role', 'admin')->get(); // Assuming you have a User model that fetches all users
        return view('user-records-admin', compact('users'));
    }

    public function studentView()
    {
        $users = Credential::where('role', 'student')->get(); // Assuming you have a User model that fetches all users
        return view('user-records-student', compact('users'));
    }

    public function tutorView()
    {
        $users = Credential::where('role', 'tutor')->get(); // Assuming you have a User model that fetches all users
        return view('user-records-tutor', compact('users'));
    }
}
