<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class projectController extends Controller
{

    public function store(Request $request)
    {
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
            'picture' => 'https://via.placeholder.com/600x400.png/d9fbff/85afff?text=' . $request->name,
        ]);
        return redirect('dashboard');
    }

    public function show($company_slug, $project_slug)
    {
//        $company =  DB::select("$company_id");
//        $project_name = Str::title(str_replace('-', ' ', $project_slug));
        //        $project = Project::where('name',$project_name)->first();
        $project = DB::select("select * from projects where slug = ?", [$project_slug]);
        $projectModels = Project::hydrate($project);
        return view('project-profile', ['project' => $projectModels[0]]);

    }

    public function delete($project_id)
    {
        DB::delete("delete from projects where id = ?", [$project_id]);
//        $project = Project::find($project_id);

//        dd("hello");
        return redirect('dashboard');
    }
    public function showdata($id){
    $project = \App\Models\Project::findOrFail($id);
    return view('edit-project',['project'=>$project]);
}
    public function update(Request $request)
    {
        DB::update('update projects set name = ?,slug =?,description =?,address =?,picture =? where id = ?',
            [$request->name, Str::slug($request->name), $request->description, $request->address, $request->picture,$request->id]);
        return redirect('dashboard');
    }
}
