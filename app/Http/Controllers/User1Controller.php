<?php

namespace App\Http\Controllers;

use App\Models\User1;
use Illuminate\Http\Request;

class User1Controller extends Controller
{
    public function index()
    {
        $users = User1::get(); // Change variable name to $users to be more descriptive
        return view('user1.index', compact('users')); // Pass $users to the view
    }

    public function create()
    {
        return view('user1.create');
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|email|max:255|unique:users1,email|string',
            'username' => 'required|max:255|unique:users1,username|string',
        ]);

        // Create a new User1 record using mass assignment
        User1::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
        ]);

        // Redirect to the create page with success message
        return redirect('user1/create')->with('status', 'User Created');
    }

    public function edit($id)
    {
        $user1 = User1::findOrFail($id); // Fetch the user by ID
        return view('user1.edit', compact('user1')); // Pass $user1 to the view
    }
    

    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|email|max:255|unique:users1,email,' . $id,
            'username' => 'required|max:255|unique:users1,username,' . $id,
        ]);

        // Update the User1 record using mass assignment
        User1::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('status', 'User updated');
    }

    public function destroy(int $id)
    {
        $user1=User1::findOrFail($id);
        $user1->delete();

        return redirect()->back()->with('status', 'User deleted');

    }
}
