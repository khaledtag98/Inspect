<?php

namespace Database\Seeders;

use App\Models\Company;
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
         \App\Models\User::factory(20)->create();
//        factory(App\User::class, 50)->create()->each(function($u) {
//            $u->posts()->save(factory(App\Post::class)->make());
//        });
        $CompanySeeder = new CompanySeeder();
        $CompanySeeder->run();

    }
}
