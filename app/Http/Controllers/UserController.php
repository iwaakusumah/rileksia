<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.users', compact('users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role' => 'required|in:Super Admin,Admin',
        ]);

        // Hash password
        $validatedData['password'] = bcrypt($request->password);

        // Set default is_active value
        // $validatedData['is_active'] = true;

        // Create user
        User::create($validatedData);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:Super Admin,Admin',
        ]);

        $user->update($validatedData);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    // public function updateStatus(Request $request)
    // {
    //     $userId = $request->input('userId');

    //     $user = User::findOrFail($userId);
    //     $user->is_active = !$user->is_active;
    //     $user->save();

    //     return response()->json(['success' => true]);
    // }
}
