<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function index()
    {

        $customers = Customer::all();

        return view('customers.table',compact('customers'));

    }


}
