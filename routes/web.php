<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\FarmersController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'adminDashb'])->name('admin.dashb');

    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::patch('/admin/profile', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    
    Route::controller(FarmersController::class)->group(function(){
            Route::get('/ricefarmer/forms', 'RiceFarmers')->name('farmers.rice_farmersforms');
            Route::get('/rice/map', 'RiceMap')->name('farmers.form.rice_map');
    });


});//end Group admin middleware

Route::middleware(['auth','role:agent'])->group(function(){

Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashb');

Route::get('/agent/logout', [AgentController::class, 'AgentLogout'])->name('agent.logout');

});//end Group agent middleware


//Route::get('/farmers', [FarmersController::class, 'create'])->name('farmerdata.farmer_create');
//Route::post('/farmers', [FarmerController::class, 'store'])->name('farmers.create');

//Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

//Route::resource('farmers', FarmersController::class);
 