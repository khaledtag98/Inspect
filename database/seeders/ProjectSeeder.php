<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Factory as Faker;
use App\Models\Company;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $company = Company::all()->take(10);
        for ($i=0 ; $i<5;$i++){
            Project::create(['company_id' => $company[$i]->id, 'name'=> $faker->name, 'description' =>$faker->paragraph, 'address' =>$faker->address]);
        }

    }
}
