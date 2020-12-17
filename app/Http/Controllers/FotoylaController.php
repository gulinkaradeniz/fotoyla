<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotoylaController extends Controller
{
    public function index()
    {
        $sayilar=['1','2','3','4','5','6','7','8','9','10'];
        return view('index',compact('sayilar'));
    }
}
