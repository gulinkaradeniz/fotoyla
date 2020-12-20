<?php

namespace App\Http\Controllers;
use App\User;
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
        $data=new User();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->password=Hash::make(request('password'));
        if ($request->hasfile('photo')) {
            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('storage/photo/',$filename);
            $data->photo=$filename;
        }else{
            abort(404);
        }
        $data->save();
        return redirect(url('/'));
    }
    public function create()
    {
        return view('users.create');
    }
}
