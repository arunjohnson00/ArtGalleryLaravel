<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class profileUpdateControl extends Controller
{
    public function profileupdate(Request $reqst,$id){
       
        $name=$reqst->input('name');
        $email=$reqst->input('email');

        $datas=array('name'=>$name,'email'=>$email);

        DB::table('users')->where('id',$id)->update($datas);
        return back();
    }
}
