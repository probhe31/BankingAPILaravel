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

    public function accounts(Request $request)
    {
        $account1 = new Account();
        $account1->id = '1';
        $account1->name = 'Cuenta sueldo';
        $account1->number = '1452-1245-4544';
        $account1->amount = '5000';

        $account2 = new Account();
        $account2->id = '1';
        $account2->name = 'Cuenta sueldo';
        $account2->number = '666-1245-4666';
        $account2->amount = '1500';


        $accounts = array($account1, $account2);

        return response()->json($accounts);

    }
}

class Account
{
    public $id;
    public $name;
    public $number;
    public $amount;
}

