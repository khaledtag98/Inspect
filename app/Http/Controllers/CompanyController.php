<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyPhone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CompanyController extends Controller
{
    public function show($company_slug){

//        $company_name = Str::title(str_replace('-', ' ', $company_slug));
        $company =  DB::select("SELECT * FROM companies WHERE slug = ?",[$company_slug]);
        $companyModels = Company::hydrate($company);
        $phones =  DB::select("SELECT phone FROM company_phones WHERE id = (SELECT id FROM companies WHERE slug=?)",[$company_slug]);
//        $company = Company::where('name', $company_name)->first();
        $phoneModels = CompanyPhone::hydrate($phones);
        return view('company-profile', ['company' => $companyModels[0], 
                                        'phones' => $phoneModels[0]
                                        ]);

    }


    
}
