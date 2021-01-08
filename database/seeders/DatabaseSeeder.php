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
        User::factory(20)->has(
            Company::factory()->has(
                Project::factory()->has(
                    estate::factory()->count(5)
                )->count(10)
            )->count(1)
        )->create();

//        $CompanySeeder = new CompanySeeder();
//        $CompanySeeder->run();

    }
}
