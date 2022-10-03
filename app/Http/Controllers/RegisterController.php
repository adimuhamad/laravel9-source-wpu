<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
  public function index()
  {
    return view('register.index', [
      'title' => 'Register',
      'active' => 'register'
    ]);
  }

  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required|max:100',
      'username' => 'required|min:5|max:20|unique:users',
      'email' => 'required|email:dns|unique:users',
      'password' => 'required|min:10|max:255'
    ]);

    // $validatedData['password'] = bcrypt($validatedData['password']);
    $validatedData['password'] = Hash::make($validatedData['password']);

    User::create($validatedData);
    // $request = session();
    // $request->flash('success', 'Registration successfully! Please login');
    // return redirect('/login');
    return redirect('/login')->with('success', 'Registration successfully! Please login');
  }
}
