<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'address' => $request->address,
        ]);
    }
    public function show($company_slug,$project_slug){
//        $company =  DB::select("$company_id");
//        $project_name = Str::title(str_replace('-', ' ', $project_slug));
        //        $project = Project::where('name',$project_name)->first();
        $project =  DB::select("select * from projects where slug = ?",[$project_slug]);
        $projectModels = Project::hydrate($project);
        return view('project-profile', ['project' => $projectModels[0]]);

    }

}
