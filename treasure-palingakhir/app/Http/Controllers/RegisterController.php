<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'username' => 'required |min:5'
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        $request->session :: flash('success', 'Regristrasi berhasil! silahkan login');
        return redirect('/login');
    }

}
