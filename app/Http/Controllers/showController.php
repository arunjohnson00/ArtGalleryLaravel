<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class showController extends Controller
{

    public function show(){
        
        $id=Auth::user()->id;
        $user=DB::select('select * from images where userid=?',[$id]);

        return view('gallery',['users'=>$user]);
    }
}
