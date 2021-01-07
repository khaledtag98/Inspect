<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class companyCheckController extends Controller
{
    public function isCompany(){

        if(Auth::user()->company)
        {
            $user = Auth::user();
            $projects = $user->company->projects;
            $company = $user->company;
            return view('company-dashboard',['projects'=>$projects,'company'=>$company]);

        }
        return view('dashboard');
    }
}
