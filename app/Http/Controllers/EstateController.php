<?php

namespace App\Http\Controllers;


use App\Models\estate;
use App\Models\EstatePhoto;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EstateController extends Controller
{
    public function show($estate_id){
//        $company =  DB::select("$company_id");
        $estate = estate::find($estate_id);
        return view('project-profile', ['estate' => $estate]);

    }
    public function delete($project_id,$estate_id)
    {
      //done
         DB::delete("delete from estates where id = ?", [$estate_id]);
         return redirect('edit-project/'.$project_id);
    }
    public function edit($project_id,$estate_id)
    {
        $project = DB::select('select * from projects where id = ? ', [$project_id]);
        $estate = DB::select('select * from estates where id = ? ', [$estate_id]);
        $estate_photos = DB::select('select * from estate_photos where project_id = ? && estate_id = ? ', [$project_id,$estate_id]);
        $estateModels = estate::hydrate($estate);
        $estate_photosModels = estate::hydrate($estate_photos);
//        dd($estate_photos);
      return view('edit-estate', ['project_id'=> $project_id, 'estate' => $estateModels[0],'estate_photos'=>$estate_photosModels]);
    }
    public function update($project_id, $estate_id, Request $request){
         DB::update('update estates set name = ?,type =?, price= ?, description =?,block =?,floor =? where id = ?',
         [$request->name, $request->type, $request->price, $request->description, $request->block, $request->floor, $estate_id]);
        EstatePhoto::create([
            'project_id' => $project_id,
            'estate_id'=> $estate_id,
            'url' => $request->picture,
            'alt' => $request->alt,
        ]);
         return redirect('edit-project/'.$project_id);
    //dd("SUCCESS");
    }
    public function create(Request $request){
        estate::create([
        'project_id' => $request->id,
        'name'=> $request->name,
        'type' => $request->type,
        'price' => $request->price,
        'description' => $request->description,
        'block' => $request->block,
        'floor' => $request->floor,

    ]);
        return redirect('edit-project/'.$request->id);
}
public function deletePhoto($photo_id, $estate_id,$project_id){
    DB::delete("delete from estate_photos where id = ?", [$photo_id]);
    return redirect('edit-estate/'.$estate_id.'/'.$project_id);
}
}
