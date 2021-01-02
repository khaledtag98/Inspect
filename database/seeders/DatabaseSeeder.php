<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\estate;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(50)->has(
            Company::factory(20)->has(
                Project::factory(20)->has(
                    estate::factory(5)->count(50)
                )->count(50)
            )->count(10)
        )->create();

//        $CompanySeeder = new CompanySeeder();
//        $CompanySeeder->run();

    }
}
