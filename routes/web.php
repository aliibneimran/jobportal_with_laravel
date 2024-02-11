<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\ApplicantController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\IndustryController;
use App\Http\Controllers\backend\JobController;
use App\Http\Controllers\backend\LocationController;
use App\Http\Controllers\backend\PackageController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\frontend\ApplicationController;
use App\Http\Controllers\frontend\CandidateDetailController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\JobDetailsController;
use App\Http\Controllers\frontend\JobListController;
use App\Http\Controllers\frontend\SearchController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Admin Middleware
Route::prefix('admin')->group(function(){
    Route::get('login',[AdminController::class,'index'])->name('admin_login_form');
    Route::post('login/owner',[AdminController::class,'login'])->name('admin_login');
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin_dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class,'logout'])->name('admin_logout')->middleware('admin');
    Route::get('register',[AdminController::class,'register'])->name('admin_register');
    Route::post('register/create',[AdminController::class,'registration'])->name('admin.register.create');

    //category
    Route::get('categories',[CategoryController::class,'index'])->name('categories.index')->middleware('admin');
    Route::get('categories/create',[CategoryController::class,'create'])->name('categories.create')->middleware('admin');
    Route::post('categories/store',[CategoryController::class,'store'])->name('categories.store')->middleware('admin');
    Route::get('categories/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit')->middleware('admin');
    Route::post('categories/update/{id}',[CategoryController::class,'update'])->name('categories.update')->middleware('admin');
    Route::get('categories/delete/{id}',[CategoryController::class,'delete'])->name('categories.delete')->middleware('admin');

    //location
    // Route::resource('locations', LocationController::class);

    Route::get('locations',[LocationController::class,'index'])->name('locations.index')->middleware('admin');
    Route::get('locations/create',[LocationController::class,'create'])->name('locations.create')->middleware('admin');
    Route::post('locations/store',[LocationController::class,'store'])->name('locations.store')->middleware('admin');
    Route::get('locations/edit/{id}',[LocationController::class,'edit'])->name('locations.edit')->middleware('admin');
    Route::post('locations/update/{id}',[LocationController::class,'update'])->name('locations.update')->middleware('admin');
    Route::get('locations/destroy/{id}',[LocationController::class,'destroy'])->name('locations.destroy')->middleware('admin');

    //Industries
    Route::get('industries',[IndustryController::class,'index'])->name('industries.index')->middleware('admin');
    Route::get('industries/create',[IndustryController::class,'create'])->name('industries.create')->middleware('admin');
    Route::post('industries/store',[IndustryController::class,'store'])->name('industries.store')->middleware('admin');
    Route::get('industries/edit/{id}',[IndustryController::class,'edit'])->name('industries.edit')->middleware('admin');
    Route::post('industries/update/{id}',[IndustryController::class,'update'])->name('industries.update')->middleware('admin');
    Route::get('industries/delete/{id}',[IndustryController::class,'delete'])->name('industries.delete')->middleware('admin');


    //Package
    Route::get('packages', [PackageController::class,'index'])->name('packages.index')->middleware('admin');
    Route::get('packages/create', [PackageController::class,'create'])->name('packages.create')->middleware('admin');
    Route::post('packages/store', [PackageController::class,'store'])->name('packages.store')->middleware('admin');
    Route::get('packages/edit/{id}', [PackageController::class,'edit'])->name('packages.edit')->middleware('admin');
    Route::post('packages/update/{id}', [PackageController::class,'update'])->name('packages.update')->middleware('admin');
    Route::post('packages/delete/{id}', [PackageController::class,'destroy'])->name('packages.destroy')->middleware('admin');

    Route::get('jobs', [JobController::class,'index'])->name('all-jobs')->middleware('admin');

    Route::get('payments',[PaymentController::class,'index'])->name('payments.index')->middleware('admin');
    Route::post('payments/approve/{id}',[PaymentController::class,'approve'])->name('payments.approve')->middleware('admin');




});

//Company Middleware
Route::prefix('company')->group(function(){
    Route::get('login',[CompanyController::class,'index'])->name('company_login_form');
    Route::post('login/company',[CompanyController::class,'login'])->name('company_login');
    Route::get('dashboard',[CompanyController::class,'dashboard'])->name('company_dashboard')->middleware('company');
    Route::get('logout',[CompanyController::class,'logout'])->name('company_logout')->middleware('company');
    Route::get('register',[CompanyController::class,'register'])->name('company_register');
    Route::post('register/create',[CompanyController::class,'registration'])->name('company.register.create');

    Route::get('password',[CompanyController::class,'forgetPassword'])->name('company.password');

    Route::get('profile',[CompanyController::class,'profile'])->name('company_profile')->middleware('company');
    Route::get('edit-profile', [CompanyController::class, 'editProfile'])->name('company.edit.profile')->middleware('company');
    Route::post('update-profile', [CompanyController::class, 'updateProfile'])->name('company.update.profile')->middleware('company');

    // Route::get('packages', [PackageController::class,'index'])->name('packages.index')->middleware('company');

    // Route::get('packages/show/{id}', [PackageController::class,'show'])->name('packages.show')->middleware('company');

    Route::get('payments',[PaymentController::class,'index'])->name('payments')->middleware('company');
    Route::post('payments',[PaymentController::class,'store'])->name('payments.store')->middleware('company');


    //jobs

    Route::resource('jobs', JobController::class)->middleware('company');
    Route::resource('applications', ApplicantController::class)->middleware('company');
    
    Route::get('cv/{id}', [ApplicantController::class,'show'])->name('cv.show');

    Route::post('approve/{id}',[ApplicantController::class,'approve'])->name('approve')->middleware('company');


    // Route::get('jobs',[JobController::class,'index'])->name('jobs.index')->middleware('company');
    // Route::get('jobs/create',[JobController::class,'create'])->name('jobs.create')->middleware('company');
    // Route::post('jobs/store',[JobController::class,'store'])->name('jobs.store')->middleware('company');
    // Route::get('jobs/edit/{id}',[JobController::class,'edit'])->name('jobs.edit')->middleware('company');
    // Route::post('jobs/update/{id}',[JobController::class,'update'])->name('jobs.update')->middleware('company');
    // Route::get('jobs/delete/{id}',[JobController::class,'delete'])->name('jobs.delete')->middleware('company');
});

//Candidate Middleware
Route::prefix('candidate')->group(function(){
    Route::get('login',[CandidateController::class,'index'])->name('candidate_login_form');
    Route::post('login/candidate',[CandidateController::class,'login'])->name('candidate_login');
    Route::get('profile',[CandidateController::class,'profile'])->name('candidate_profile')->middleware('candidate');
    Route::get('logout',[CandidateController::class,'logout'])->name('candidate_logout')->middleware('candidate');
    Route::get('register',[CandidateController::class,'register'])->name('candidate_register');
    Route::post('register/create',[CandidateController::class,'registration'])->name('candidate.register.create');

    Route::get('edit-profile', [CandidateController::class, 'editProfile'])->name('candidate.edit.profile')->middleware('candidate');
    Route::post('update-profile', [CandidateController::class, 'updateProfile'])->name('candidate.update.profile')->middleware('candidate');

    Route::post('apply', [ApplicationController::class, 'application'])->name('apply.job')->middleware('candidate');

    Route::get('jobs', [JobListController::class, 'index'])->name('jobs')->middleware('candidate');
    Route::get('/job/details/{id}', [JobDetailsController::class, 'index'])->name('job.details')->middleware('candidate');

    Route::get('about', [JobListController::class, 'about'])->name('about')->middleware('candidate');
    Route::get('contact', [JobListController::class, 'contact'])->name('contact')->middleware('candidate');


});


//Frontend
Route::get('/', [HomeController::class, 'index'])->name('search');
Route::get('jobs', [JobListController::class, 'index'])->name('jobs');
Route::get('/job/details/{id}', [JobDetailsController::class, 'index'])->name('job.details');

Route::get('about', [JobListController::class, 'about'])->name('about');
Route::get('contact', [JobListController::class, 'contact'])->name('contact');
Route::get('blog', [JobListController::class, 'blog'])->name('blog');


Route::get('search', [SearchController::class, 'index'])->name('search');








// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
