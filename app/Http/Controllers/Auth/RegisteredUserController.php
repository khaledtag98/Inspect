<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Company;
use App\Models\CompanyPhone;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
//     * @return \Illuminate\View\View
     */
//    public function create()
//    {
//        return view('auth.register');
//    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:companies',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'picture' => 'https://via.placeholder.com/600x400.png/d9fbff/85afff?text='.$request->name,
            'password' => Hash::make($request->password),
        ]));

        if(isset($request->isCompany)){

          $company =  Company::create(['user_id' => $user->id,
                            'picture' => 'https://via.placeholder.com/600x400.png/d9fbff/85afff?text='.$request->companyName,
                             'slug'=> Str::slug($request->companyName),
                             'name'=> $request->companyName,
                             'description' => $request->description]);
            $address = Address::create([
                            'company_id' => $company->id,
                             'country'=> $request->country,
                             'city'=> $request->city,
                             'street'=> $request->street,
            ]);
            $phone = CompanyPhone::create([
                'company_id' => $company->id,
                'phone'=> $request->phone,
            ]);
        }

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
    public function update(Request $request)
    {
//        $request->validate([
//            'name' => 'required|string|max:255|unique:companies',
//            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string|confirmed|min:8',
//        ]);
        DB::update('update users set name = ?,email=?,password=? where id = ?',[$request->name,$request->email,Hash::make($request->password),Auth::id()]);
        return redirect('dashboard');
    }

}
