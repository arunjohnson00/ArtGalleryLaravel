<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class selectedController extends Controller
{
    public function viewselect(Request $reqst){
        $id=$reqst->input('myId');

        $imageDB=DB::select('select * from images where id=?',[$id]);

        return view('welcome',['images'=>$imageDB]);

        
    }
    
    
}
