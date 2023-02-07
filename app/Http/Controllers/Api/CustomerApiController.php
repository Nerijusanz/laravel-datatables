<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Customer;
use DataTables;

class CustomerApiController extends Controller
{
    
    public function index()
    {

        $data = Customer::select('first_name', 'last_name', 'email')->get();
        
        return Datatables::of($data)->make(true);


        //$data = Customer::select('first_name', 'last_name', 'email')->get();
        //return response()->json($data);
        

    }

}
