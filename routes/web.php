<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\MCardApplicationController;
use App\Http\Controllers\MRegistrationController;
use App\Http\Controllers\UserController;

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


Route::get('/', function () {
    return redirect('/dashboard');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');

    //Marriage Course


    //Marriage Request


    //Marriage Registration Applicant
    Route::get('/marriage-registration', [MRegistrationController::class, 'index'])->name('manageMRegistration.index');
    Route::get('/marriage-registration/view-info', [MRegistrationController::class, 'show'])->name('manageMRegistration.infoApplicant');
    Route::get('/marriage-registration/edit-application', [MRegistrationController::class, 'edit'])->name('manageMRegistration.editAppApplication');
    Route::get('/marriage-registration/view-application', [MRegistrationController::class, 'showApp'])->name('manageMRegistration.viewAppApplicant');
    Route::get('/marriage-registration/print-application', [MRegistrationController::class, 'showPrint'])->name('manageMRegistration.printAppApplicant');
    Route::get('/marriage-registration/show-certificate', [MRegistrationController::class, 'showCert'])->name('manageMRegistration.viewCertificateApplicant');
    
    //Marriage Registration Staff


    //Marriage Card Applicant
    Route::get('/marriage-card', [MCardApplicationController::class, 'index'])->name('manageMCard.index'); 
    Route::get('/marriage-card/card-application', [MCardApplicationController::class, 'show'])->name('manageMCard.cardAppApplicant'); 
    Route::get('/marriage-card/view-application', [MCardApplicationController::class, 'showApp'])->name('manageMCard.viewAppApplicant');
    Route::get('/marriage-card/print-application', [MCardApplicationController::class, 'showPrint'])->name('manageMCard.printAppApplicant');
    
    //Marriage Card Staff


    //Consultation Application


    //Insentive Application


    //Example
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
    Route::get('/form-example', [HomeController::class, 'formExample'])->name('form-example');
    Route::get('/manage', [PageController::class, 'manage'])->name('manage');
    Route::get('/create', [PageController::class, 'create'])->name('create');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::resources([
        'user' => UserController::class,
    ]);
});
