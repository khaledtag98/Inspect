<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function hambozo()
    {
        // $faker = \Faker\Factory::create();
        // $userWithCompany = User::create([
        //     'name' => $faker->unique()->name . ' (Has a company)',
        //     'email' => $faker->unique()->email,
        //     'password' => Hash::make('password')
        // ]);
        // $Company = Company::create(['user_id' => $userWithCompany->id]);
        // for ($i = 0; $i < 10; $i++) {
        //     Address::create([
        //         'company_id' => $Company->id,
        //         'country' => 'Egypt',
        //         'city' => 'Alex',
        //         'street' => '45'
        //     ]);
        //     // $Company->addresses()->create(['country'=>'Egypt',
        //     // 'city'=>'Alex',
        //     // 'street'=>'45']);
        // }
        // $Company->addresses[6]->delete();
        // dd($Company->addresses);
        return view('landing');
    }
}
