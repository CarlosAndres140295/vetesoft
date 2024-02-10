<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    /**
     * Show list customers
     */
    public function index(): View
    {
        return view('customers.index');
    }

}
