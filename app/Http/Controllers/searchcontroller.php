<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class searchcontroller extends Controller
{
    function search(Request $request){
        if(isset('$_GET'['query'])){
            echo 'Hello world';
                }else{

        return view('search');
                }
    }
}
