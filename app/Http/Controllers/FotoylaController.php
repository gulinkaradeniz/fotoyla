<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;
class FotoylaController extends Controller
{
    public function index()
    {
        $image=Images::all()->random(1);
        return view('fotoyla.index',compact('image'));
    }
}
