<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class companyCheckController extends Controller
{
    public function isCompany(){
        if(Auth::user()->company)
            return view('company-dashboard');
        return view('dashboard');
    }

}
