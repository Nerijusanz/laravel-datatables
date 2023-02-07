<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    
    public function index()
    {

        $customers = Customer::all();

        return view('customers.table',compact('customers'));

    }

    public function datatable()
    {
        $customers = Customer::all();

        return view('customers.datatable', compact('customers'));
    }

    public function datatableAjax()
    {

        return view('customers.datatableAjax');
    }


}
