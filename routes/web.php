<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\HopitalController;
use App\Models\Hopital;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');




Route::get('/README', function () {
    return view('README');
})->name('README');

Route::get('/sidebar-left', function () {
    return view('sidebar-left');
})->name('sidebar-left');


    Route::get('/sidebar-right', function () {
        return view('sidebar-right');
    })->name('sidebar-right')->middleware('guest');




Route::get('/signin', function () {  
    return view('signin');
})->name('signin')->middleware('guest');

Route::get('/signup', function () {
    return view('signup');
})->name('signup')->middleware('guest');


Route::get('/Medecin', function () {
    return view('Medecin');
})->name('Medecin')->middleware('guest');
// ROUTES PATIENT 

Route::get('/401', function () {
    return view('401');
})->name('401')->middleware('guest');
// ROUTES 401 

Route::get('/404', function () {
    return view('404');
})->name('404')->middleware('guest');
// ROUTES 404

Route::get('/500', function () {
    return view('500');
})->name('500')->middleware('guest');
// ROUTES 500 

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');
// ROUTES login 
Route::get('/register', function () {
    return view('register');
})->name('register')->middleware('guest');
// ROUTES register
Route::get('/password', function () {
    return view('password');
})->name('password');
// ROUTES password
Route::get('/tables', function () {
    return view('tables');
})->name('tables');
// ROUTES tables
Route::get('/layout-sidenav-light', function () {
    return view('layout-sidenav-light');
})->name('layout-sidenav-light');
// ROUTESlayout-sidenav-light    
Route::get('/layout-static', function () {
    return view('layout-static');
})->name('layout-static');
// ROUTES layout-static.   
Route::get('/charts', function () {
    return view('charts');
})->name('charts');
// ROUTES charts


Route::post('post_inscription_patient', [PatientController::class, 'store'])->name('post_inscription_patient');
Route::get('suivi', [PatientController::class, 'suivi'])->name('suivi');
Route::post('post_inscription_medecin', [MedecinController::class, 'store'])->name('post_inscription_medecin');
Route::post('post_inscription_hopital', [HopitalController::class, 'store'])->name('post_inscription_hopital');


Route::middleware('auth')->group(function () {
   
    Route::get('/dashboard_patient', [PatientController::class, 'dashboard_patient'])->name('dashboard_patient');
    Route::get('/dashboard_medecin', [MedecinController::class, 'dashboard_medecin'])->name('dashboard_medecin');
    Route::get('/dashboard_hopital', [HopitalController::class, 'dashboard_hopital'])->name('dashboard_hopital');


});