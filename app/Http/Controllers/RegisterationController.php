<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(RegisterationRequest $request)
    {
        //  agar user tidak sma
        //  1. membuat validate unique => 'unique:users'
        //  2. membuat if state 
        //  $user = User::where('email', $request->email)
        //             ->orWhere('username', $request->username)
        //             ->first();
        //  if($user)
        //  {
        //         dd('sudah ada');
        //  }

        User::create($request->all() );
        return redirect('/')->with('success', 'Anda sudah registrasi');
    }
}
