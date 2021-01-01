<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CompanyController extends Controller
{
    public function show($company_slug){

//        $company_name = Str::title(str_replace('-', ' ', $company_slug));
        $company =  DB::select("select * from companies where slug = ?",[$company_slug]);
        $companyModels = Company::hydrate($company);
//        $company = Company::where('name', $company_name)->first();
        return view('company-profile', ['company' => $companyModels[0]]);

    }
}
