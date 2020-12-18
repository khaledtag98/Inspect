<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class projectController extends Controller
{

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'address' => 'required|string|max:255',
        ]);

        $Project = Project::create([
            'company_id' => Auth::user()->company->id,
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
        ]);
    }
    public function show($company_id,$project_id){
//        $company =  DB::select("$company_id");
        $project = Project::find($project_id);
        return view('project-profile', ['project' => $project]);

    }

}
