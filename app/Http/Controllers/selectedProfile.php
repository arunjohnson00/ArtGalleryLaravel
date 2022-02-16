<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class selectedProfile extends Controller
{
    public function viewprofile($reqsted){
        $id=$reqst->input('myId');
        $userid= DB::table('images')->where('id',$id)->get('userid');
         foreach($userid as $user ){
             $profileid=$user->userid;
         }
         $userid=DB::select('select * from users where id=?',[$profileid]);
 
         return view('profile',['userid'=>$userid]);
     }
}
