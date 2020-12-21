<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class FotoylaController extends Controller
{
    public function index()
    {
        $users=User::all();
        $sayilar=['1','2','3','4','5','6','7','8','9','10'];
        return view('fotoyla.index',compact('sayilar','users'));
    }
}
