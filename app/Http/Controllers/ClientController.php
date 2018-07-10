<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
  
  	public function login(Request $request)
    {
    	$dni = $request->input('dni');
    	$password = $request->input('password');
    	
    	if($dni==="47507106" && $password==="6666")
    	{
    		return response()->json(['status'=>'ok']);
    	}        	
        else
        {
        	return response()->json(['status'=>'error']);
        }       	
    }

    public function profile(Request $request)
    {
        return response()->json(['fist_name'=>'Bherring', 'last_name'=>'Paucar Bonifacio']);
    }
}
