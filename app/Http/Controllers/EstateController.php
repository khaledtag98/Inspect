<?php

namespace App\Http\Controllers;


use App\Models\estate;
use Illuminate\Http\Request;

class EstateController extends Controller
{
    public function show($estate_id){
//        $company =  DB::select("$company_id");
        $estate = estate::find($estate_id);
        return view('project-profile', ['estate' => $estate]);

    }
}
