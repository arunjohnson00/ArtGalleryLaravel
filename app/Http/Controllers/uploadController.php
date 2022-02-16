<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class uploadController extends Controller
{
    public function upload(Request $items){
        $image=$items->file('image')->getClientOriginalName();
        $userid=$items->input('userid');
        $title=$items->input('title');
        $description=$items->input('description');
        
        $items->file('image')->storeAs('public/image',$image);

        $data=array('image'=>$image,'userid'=>$userid,'title'=>$title,'description'=>$description);

        DB::table('images')->insert($data);

        return back();

    }
}
