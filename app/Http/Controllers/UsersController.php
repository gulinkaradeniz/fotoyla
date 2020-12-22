<?php

namespace App\Http\Controllers;
use App\User;
use App\Images;
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
            'password'=>'required|min:8',
        ]);
        $user = tap(new \App\User($data))->save();
        return redirect(url('/'));
    }
    public function create()
    {
        return view('users.create');
    }
    public function upload($id)
    {
        $user=User::findOrFail($id);
        return view('users.upload',compact('user'));
    }
    public function upload_create(Request $request)
    {
        $id=$request->id;
        $user=User::findOrFail($id);
        $photo=new Images();
        
        $photo->user_id=$id;
        if ($request->hasfile('photo')) {
            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('storage/photo/',$filename);
            $photo->photo=$filename;
            $photo->save();
        }else{
            abort(404);
        }
        return redirect(url('/'));
        //return redirect()->route('medicines.show',compact('medicine','company','image'));

    }
    public function score(Request $request)
    {
        $request['scorer_id']=$request->id;
        $data = $request->validate([
            'user_id' => 'required',
            'score'=> 'required',
            'scorer_id'=>'required'
        ]);
        $score = tap(new \App\Scores($data))->save();
        return redirect(url('/'));
    }
}
