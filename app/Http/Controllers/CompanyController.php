<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function show($company_id){
//        $company =  DB::select("$company_id");
        $company = Company::find($company_id);
        return view('company-profile', ['company' => $company]);

    }
}
