<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit() {
        $title = 'Edit profile';
        $user = User::findOrFail(Auth::id());

        return view('users.profile_edit', compact('title', 'user'));
    }

    public function change(Request $r) {
        $userId = Auth::id();

        $r->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => "required|unique:users,email,$userId|email|max:255"
        ]);

        $user = User::findOrFail($userId);
        $user->first_name = $r->firstName;
        $user->last_name = $r->lastName;
        $user->username = $r->username;
        $user->email = $r->email;
        $user->save();

        return redirect()->route('dashboard');
    }
}
