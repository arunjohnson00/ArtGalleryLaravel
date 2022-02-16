<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class deleteController extends Controller
{
    public function delete($id){
        DB::table('images')->Delete($id);
        return back();
    }
}
