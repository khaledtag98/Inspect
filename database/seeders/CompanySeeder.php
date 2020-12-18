<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\estate;
use App\Models\Project;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $catygory = ["Land","Apartment","Chalet"];
        $faker = Faker::create();
        $users = User::all()->take(10);
        for($i=0; $i<10; $i++){
           $company = Company::create(['user_id' => $users[$i]->id, 'name'=> $users[$i]->name]);
            for ($j=0 ; $j<5;$j++){
                $project = Project::create(['company_id' => $company->id, 'name'=> $faker->name, 'description' =>$faker->paragraph, 'address' =>$faker->address]);
                for($k = 0;$k < 6 ;$k++ ){
                    estate::create([
                        'project_id' => $project->id,
                        'name'=> $faker->name ,
                        'price'=> $faker->numberBetween(1000,1000000) ,
                        'block'=> $faker->numberBetween(1,15),
                        'floor'=> $faker->numberBetween(1,15),
                        'available'=> $faker->boolean ,
                        'description'=> $faker->paragraph ,
                        'type'=> $catygory[rand ( 0 , 2 )],
                        ]);
                }
            }
        }
    }
}
