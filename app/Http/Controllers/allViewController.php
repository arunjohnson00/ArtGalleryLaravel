<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class allViewController extends Controller
{
    public function view(){
        $user=DB::select('select * from images');

        return view('welcome',['user'=>$user]);
    }
}
