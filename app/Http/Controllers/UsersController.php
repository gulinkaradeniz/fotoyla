<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    public function index()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $request['password'] =Hash::make(request('password'));
        $data = $request->validate([
            'name' => 'required|max:255',
            'email'=> 'required|max:255',
            'password'=>'required|min:8'
        ]);
        $user = tap(new \App\User($data))->save();
        return redirect(url('/'));
    }
    public function create()
    {
        return view('users.create');
    }
}
