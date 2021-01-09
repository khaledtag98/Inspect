<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\projectController;
use \App\Http\Controllers\companyCheckController;
use \App\Http\Controllers\CompanyController;
use \App\Http\Controllers\EstateController;
use App\Http\Controllers\MailController;
use App\Mail\RequestInspection;
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
// Route::get('/add-estate/{id}', function () {return view('add-estate');})->name('estates');
Route::get('edit-project/{pid}/{eid}',[EstateController::class,'delete']);
Route::get('edit-estate/{pid}/{eid}',[EstateController::class,'edit']);
Route::get('edit-estate-info/{pid}/{eid}',[EstateController::class,'update']);

Route::get('add-estate/{id}', function($id){
    
    return view('add-estate', ['project_id' => $id]);});
Route::get('/save-estate', [EstateController::class, 'create']); 

Route::get('/all-companies',
    function () {
        $companies = \App\Models\Company::all() ;
        
        return view('all-companies' , ['companies' => $companies]);
    })->name('companies');

Route::get('/results',
    function () {
        $companies = \App\Models\Company::where('name', 'LIKE', '%'. request('query') . '%')->get();
        $projects =  \App\Models\Project::where('name', 'LIKE', '%'. request('query') . '%')->get();
        $estates = \App\Models\estate::where('name', 'LIKE', '%'. request('query') . '%')->get();
        return view('search-results')->with(['companies'=>$companies])->with(['projects'=> $projects])->with(['estates'=> $estates]);

    });
    

Route::get('/send-request',  [MailController::class, 'send']);

Route::get('/request-inspection', function(){
    return view('book-system');
});
Route::get('delete/{id}',[projectController::class,'delete']);
Route::get('edit-project/{id}',[projectController::class,'showdata']);
Route::post('edit-project',[projectController::class,'update'])->name('editProject');
Route::get('/sign-in', function () {return view('sign-in');})->middleware('guest')->name('sign-in');
Route::get('/dashboard',[companyCheckController::class, 'isCompany'])->middleware(['auth'])->name('dashboard');
Route::post('/create-new-project', [projectController::class, 'store']);
Route::get('{company_slug}', [CompanyController::class, 'show']);
Route::get('{company_slug}/{project_slug}', [projectController::class, 'show']);

Route::post('/update-user-info', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'update'])->name('updateUserInfo');

require __DIR__.'/auth.php';



