<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\projectController;
use \App\Http\Controllers\companyCheckController;
use \App\Http\Controllers\CompanyController;
use \App\Http\Controllers\EstateController;
use App\Models\Company;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/company', function () {return view('company-profile');})->name('company');
Route::get('/', function () {return view('landing');})->name('home');
Route::get('/profile', function () {return view('profile');})->name('profile');
Route::get('/all-projects', function () {return view('all-projects');})->name('projects');

Route::get('/all-companies',
    function () {
        $companies = \App\Models\Company::all() ;
        dd($companies);
        return view('all-companies' , ['companies' => $companies]);
    })->name('companies');
    Route::get('/results',
    function () {
        $companies = \App\Models\Company::where('name', 'LIKE', '%'. request('query') . '%')->get();
        $projects =  \App\Models\Project::where('name', 'LIKE', '%'. request('query') . '%')->get();
        $estates = \App\Models\estate::where('name', 'LIKE', '%'. request('query') . '%')->get();

        return view('search-results')->with(['companies'=>$companies])->with(['projects'=> $projects])->with(['estates'=> $estates]);
    
    });


Route::get('/sign-in', function () {return view('sign-in');})->middleware('guest')->name('sign-in');
Route::get('/dashboard',[companyCheckController::class, 'isCompany'])->middleware(['auth'])->name('dashboard');
Route::post('/create-new-project', [projectController::class, 'store']);
Route::get('{company_slug}', [CompanyController::class, 'show']);
Route::get('{company_slug}/{project_slug}', [projectController::class, 'show']);

// Route::get('/results', function(){
//     // where('name','LIKE', '%' . request('query') . '%')->get()
//     $companies = App\Models\Company::all();
 
//     dd($companies);//print 
//     return view('search-results');
// });

require __DIR__.'/auth.php';



