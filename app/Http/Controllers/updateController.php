<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class updateController extends Controller
{
    public function update(Request $reqst,$id){
    
      
      

       if($reqst->file('images')){
      
        $images=$reqst->file('images')->getClientOriginalName();
        $reqst->file('images')->storeAs('public/image',$images);
       }

       else{


       $imageFromDB= DB::table('images')->where('id',$id)->get('image');

       foreach($imageFromDB as $imageExtract){
        $images=$imageExtract->image;
       }
       
      
       }
        
        $titles=$reqst->input('titles');
        $descriptions=$reqst->input('descriptions');
        
     

        $datas=array('image'=>$images,'title'=>$titles,'description'=>$descriptions);

        DB::table('images')->where('id',$id)->update($datas);
        return back();
   
      
    }
}
