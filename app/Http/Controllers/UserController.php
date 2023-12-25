<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use App\Models\User; 
class UserController extends Controller
{
    public function insert(Request $request)
    {
        
        // Validation of incoming request data
        try {
            $validated = $request->validate([
                'name' => 'nullable|max:255',
                'email' => 'required|email',
                'password' => 'required|min:3',
            ]);
        } catch (ValidationException $e) {
            // Handle validation errors, if needed
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
        }
    
        // Hashing the password before storing it in the database
        $validated['password'] = Hash::make($validated['password']);

        // If 'name' is not present in the request, set it to null
        $validated['name'] = $validated['name'] ?? null;

        // Creating a new user in the database using the User model
        User::create($validated);

        // Redirecting to the login page after successful user creation
        return redirect('/login');
    }
}