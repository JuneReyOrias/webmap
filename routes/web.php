<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\PersonalInformationsController;
use App\Http\Controllers\Backend\FixedCostController;
use App\Http\Controllers\Backend\FarmProfileController;
use App\Http\Controllers\Backend\FertilizerController;
use App\Http\Controllers\Backend\LaborController;
use App\Http\Controllers\Backend\LastProductionDataController;
use App\Http\Controllers\Backend\MachineriesUsedController;
use App\Http\Controllers\Backend\PesticideController;
use App\Http\Controllers\Backend\SeedController;
use App\Http\Controllers\Backend\TransportController;
use App\Http\Controllers\Backend\VariableCostController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\KmlImportController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\RegisteredUserController;

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


// Route::get('home/', function () {
//     return view('home');
// });

Route::get('/landing', [LandingPageController::class, 'LandingPage'])->name('landing-page.page');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/joinme' ,[PersonalInformationsController::class,'Personalfarms'])->name('farm-table.join_table');
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
    // Route::patch('/admin/store', [AdminController::class, 'AdminProfileStore'])->name('admin.store');
    Route::post('/admin/profile', [AdminController::class, 'update'])->name('admin.profile.update');

//    Route::controller(PersonalInformationsController::class)->group(function(){
        //    Route::get('/map/gmap', 'Gmap')->name('map.gmap');
        //     Route::get('/map/arcmap', 'ArcMap')->name('map.arcmap');
        //     Route::get('/personalinfo/index',PersonalInformationsController::class,'PersonalInfo')->name('personalinfo.index');
        //     Route::post('/personalinfo/index',PersonalInformationsController::class, 'store');
        //     Route::get('/farm/index', 'FarmProfile')->name('farm_profile.index');
        //     Route::get('/fixed/index', 'FixedForms')->name('fixed_cost.index');
        //     Route::get('/machineries/index', 'MachineForms')->name('machineries_used.index');
        //     Route::get('/production/index', 'ProductionForms')->name('production_data.index');
        //     Route::get('/variable/index', 'VariableForms')->name('variable_cost.index');
        //     // Route::get('/multifile/import', 'MultiFile')->name('multifile.import');
            

//    });


});//end Group admin middleware
Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');


Route::middleware(['auth','role:agent'])->group(function(){

Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashb');
Route::get('/agent/logout', [AgentController::class, 'agentlog'])->name('agent.logout');

});//end Group agent middleware

Route::middleware(['auth','role:user'])->group(function(){

    Route::get('/user/dashboard', [UserController::class, 'UserDashboard'])->name('user.user_dashboard');
    
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    
    });//end Group agent middleware

//Route::get('/farmers', [FarmersController::class, 'create'])->name('farmerdata.farmer_create');
//Route::post('/farmers', [FarmerController::class, 'store'])->name('farmers.create');

//Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

//Route::resource('farmers', FarmersController::class);

 Route::get('/multifile/import', [FileController::class, 'MultiFiles'])->name('multifile.import');
  Route::post('/multifile/import',[FileController::class, 'saveUploadForm']);
      
//   Route::get('/personalinfo/index',[PersonalInformationsController::class,'PersonalInfo'])->name('personalinfo.index');
//       Route::post('/personalinfo/index',[PersonalInformationsController::class, 'store'])->name('personalinfo.store');
    //   Route::get('/personalinfo/{personalInformations}/edit',[PersonalInformationsController::class, 'edit'])->name('personalinfo.edit');
      Route::get('/map/gmap',[PersonalInformationsController::class, 'Gmap'])->name('map.gmap');
      Route::get('/map/arcmap',[FarmProfileController::class, 'ArcMap'])->name('map.arcmap');
      Route::get('/personalinfo/create',[PersonalInformationsController::class, 'PersonalInfoCrud'])->name('personalinfo.create');

// Route::get('/farm/index',[FarmProfileController::class ,'FarmProfile'])->name('farm_profile.index');
// Route::post('/farm/index',[FarmProfileController::class, 'store']);

// Route::get('/fixed/index', [FixedCostController::class,'FixedForms'])->name('fixed_cost.index');
// Route::post('/fixed/index',[FixedCostController::class, 'store']);

// Route::get('/machineries/index', [MachineriesUsedController::class,'MachineForms'])->name('machineries_used.index');
// Route::post('/machineries/index',[MachineriesUsedController::class, 'store']);

// Route::get('/production/index', [LastProductionDataController::class,'ProductionForms'])->name('production_data.index');
// Route::post('/production/index',[LastProductionDataController::class, 'store']);

// Route::get('/seeds/store', [SeedController::class,'SeedsVar'])->name('variable_cost.seeds.store');
// Route::post('seeds/store',[SeedController::class, 'store']);

// Route::get('/labor/store', [LaborController::class,'LaborsVar'])->name('variable_cost.labor.store');
// Route::post('/labor/store',[LaborController::class, 'store']);

// Route::get('/fertilizer/store', [FertilizerController::class,'FertilizersVar'])->name('variable_cost.fertilizer.store');
// Route::post('/fertilizer/store',[FertilizerController::class, 'store']);

// Route::get('/pesticides/store', [PesticideController::class,'PesticidesVar'])->name('variable_cost.pesticides.store');
// Route::post('/pesticides/store',[PesticideController::class, 'store']);

// Route::get('/transport/store', [TransportController::class,'TransportVar'])->name('variable_cost.transport.store');
// Route::post('/transport/store',[TransportController::class, 'store']);


// Route::get('/variablecost/index', [VariableCostController::class,'VariableForms'])->name('variable_cost.index');
// Route::post('/variablecost/index',[VariableCostController::class, 'store']);

// Route::get('/personalinfo/edit/{personalInformations}',[ PersonalInformationsController::class ,'edit'])->name('personalinfo.edit');
// // updates a post
// Route::put('/personalinfo-update/{id}', PersonalInformationsController::class ,'update')->name('personalinfo.update');
// // deletes a post
// Route::delete('/personalinfo-destroy/{id}', PersonalInformationsController::class ,'destroy')->name('personalinfo.destroy');
// Route::get('/personalinfo/{personalInformations}/edit',[PersonalInformationsController::class, 'edit'])->name('personalinfo.edit');

Route::get('/kml/import', [KmlImportController::class, 'index'])->name('kml.import');
Route::post('/kml/import',[KmlImportController::class, 'store'])->name('kml.store');
// Route::get('/', [KmlImportController::class, 'index']);
// Route::post('/import', [KmlImportController::class, 'import']);

Route::middleware('auth')->group(function () {
    Route::get('/personalinformation',[PersonalInformationsController::class,'PersonalInfo'])->name('personalinfo.index');
    Route::post('/personalinformation',[PersonalInformationsController::class, 'store'])->name('personalinfo.store');
    Route::get('/personalinformations/{personalInformation}',[ PersonalInformationsController::class ,'edit'])->name('personalinfo.edit');
    Route::post('/personalinformation/{personalInformation}', [PersonalInformationsController::class ,'update'])->name('personalinfo.update');
    Route::post('/personalinformations/{personalInformation}', [PersonalInformationsController::class, 'destroy'])->name('personalinfo.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/farmprofile',[FarmProfileController::class ,'FarmProfile'])->name('farm_profile.index');
    Route::post('/farmprofile',[FarmProfileController::class, 'store'])->name('farm_profile.store');
    Route::get('/farmprofile/show',[FarmProfileController::class, 'FarmProfileCrud'])->name('farm_profile.show');
    Route::get('/farmprofile/{farmprofile}',[ FarmProfileController::class,'edit'])->name('farm_profile.edit');
    Route::post('/farmprofile/{farmprofile}', [FarmProfileController::class,'update'])->name('farm_profile.update');
    Route::delete('/farmprofile/{farmprofile}', [FarmProfileController::class, 'destroy'])->name('farm_profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/fixedcost', [FixedCostController::class,'FixedForms'])->name('fixed_cost.index');
    Route::post('/fixedcost',[FixedCostController::class, 'store']);
    Route::get('/fixedcost/create',[FixedCostController::class, 'FixedCost'])->name('fixed_cost.create');
    Route::get('/fixedcost/{fixedcost}',[ FixedCostController::class,'edit'])->name('fixed_cost.edit');
    Route::post('/fixedcost/{fixedcost}', [FixedCostController::class,'update'])->name('fixed_cost.update');
    Route::delete('/fixedcost/{fixedcost}', [FixedCostController::class, 'destroy'])->name('fixed_cost.destroy');

});
Route::middleware('auth')->group(function () {
    Route::get('/machineriesused', [MachineriesUsedController::class,'MachineForms'])->name('machineries_used.index');
    Route::post('/machineriesused',[MachineriesUsedController::class, 'store']);
     Route::get('/machineriesused/create',[MachineriesUsedController::class, 'MachineriesUsedCrud'])->name('machineries_used.create');
    Route::get('/machineriesused/{machineriesused}',[ MachineriesUsedController::class, 'edit'])->name('machineries_used.edit');
    Route::post('/machineriesused/{machineriesused}', [MachineriesUsedController::class, 'update'])->name('machineries_used.update');
    Route::delete('/machineriesused/{machineriesused}', [MachineriesUsedController::class,'destroy'])->name('machineries_used.destroy');

});
Route::middleware('auth')->group(function () {
    Route::get('/production', [LastProductionDataController::class,'ProductionForms'])->name('production_data.index');
    Route::post('/production',[LastProductionDataController::class, 'store']);
    Route::get('/production/create',[LastProductionDataController::class, 'ProductionDataCrud'])->name('production_data.create');
    Route::get('/production/{lastproductiondata}',[ LastProductionDataController::class, 'edit'])->name('production_data.edit');
    Route::post('/production/{lastproductiondata}', [LastProductionDataController::class, 'update'])->name('production_data.update');
    Route::delete('/production/{lastproductiondata}', [LastProductionDataController::class, 'destroy'])->name('production_data.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/seeds', [SeedController::class,'SeedsVar'])->name('variable_cost.seeds.store');
    Route::post('seeds',[SeedController::class, 'store']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/labor', [LaborController::class,'LaborsVar'])->name('variable_cost.labor.store');
    Route::post('/labor',[LaborController::class, 'store']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/fertilizer', [FertilizerController::class,'FertilizersVar'])->name('variable_cost.fertilizer.store');
    Route::post('/fertilizer',[FertilizerController::class, 'store']); 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/pesticides', [PesticideController::class,'PesticidesVar'])->name('variable_cost.pesticides.store');
    Route::post('/pesticides',[PesticideController::class, 'store']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
  Route::get('/transport', [TransportController::class,'TransportVar'])->name('variable_cost.transport.store');
    Route::post('/transport',[TransportController::class, 'store']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
Route::get('/variablecost', [VariableCostController::class,'VariableForms'])->name('variable_cost.index');
Route::post('/variablecost',[VariableCostController::class, 'store']);
      Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
      Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
      Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
  });
  