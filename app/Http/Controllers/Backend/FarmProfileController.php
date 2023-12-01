<?php

namespace App\Http\Controllers\Backend;
use App\Models\FarmProfile;
use App\Http\Controllers\Controller;
use App\Http\Requests\FarmProfileRequest;
use App\Http\Requests\UpdateFarmProfileRequest;
use App\Models\PersonalInformations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FarmProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function show(personalInformations $personalInformations): 
    // {
    //     // $personalInformations = PersonalInformations::find($id);
    //     return view('personalinfo.create')->with('personalInformations',$personalInformations);
    // }
    // public function ArcMap()
    // {
    //  $farmprofile= FarmProfile::all();
    //  return view('map.arcmap',compact('farmprofile'));}
    public function index()
    {
        //
    }
    public function Arcmap()
    {
        // $farmprofile= FarmProfile::all();
        $farmLocation = DB::table('farm_profiles')
     ->Join('agri_districts', 'farm_profiles.agri_districtS_id', '=', 'agri_districts.id')
     ->leftJoin('polygons', 'farm_profiles.id', '=', 'polygons.farm_profiles_id')
     ->select('farm_profiles.*', 'agri_districts.*' , 'polygons.*')
     ->get();


    //  return view('map.arcmap',compact('farmprofile'));
    // return  $farmLocation;
    return view('map.arcmap', ['farmLocation' => $farmLocation]);

     }
    
 


    // public function getLocation() {

    // }
    
    public function searchfarm(Request $request){
 
        $gps_latitude=$request->gps_latitude;
        $gps_longitude=$request->gps_longitude;

        $farmprofile=FarmProfile::whereBetween('gps_latitude',[$gps_latitude-0.1,$gps_latitude+0.1])->whereBetween('gps_longitude',[$gps_longitude-0.1,$gps_longitude+0.1]);

        return   $farmprofile;
    }
    public function FarmProfile(){
        $farmprofile= FarmProfile::all();
    return view('farm_profile.farm_index',compact('farmprofile'));
 }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function FarmProfileCrud()
    {
        $farmprofile= FarmProfile::latest()->get();
        return view('farm_profile.farm_show',compact('farmprofile'));
        
    }
    /**
     * Store a newly created resource in storage.
     */
    // public function store(FarmProfileRequest $request)
    // {
    //     try{
        
    //         $data= $request->validated();
    //         $data= $request->all();
           
    //         // if($file= $request->file('farmer_no')){
    //         //     $name=
    //         // }
    //         FarmProfile::create($data);
    
    //         return redirect('/fixedcost')->with('message','Farm Profile added successsfully');
        
    //     }
    //     catch(\Exception $ex){
    //         return redirect('/farmprofile')->with('message','Someting went wrong');
    //     }
    // }
   
    public function edit($id)
    {
        // dd($id);
        $farmprofile = PersonalInformations::where('id',$id)->first();
      
        // // $personalInformation = PersonalInformations::findOrFail($personalInformation);
        return view('farm_profile.farm_edit')->with('farmprofile',$farmprofile);
       ;
    }


    public function store(FarmProfileRequest $request)
    {
       
        try {
           
            $user = auth()->user();
            $data = $request->validated();
            $personalInformationId = 1;

            // $personalInformation = $user->personalInformation;
            // $personalInformationId = $request->input('personal_information_id');
            // $personalInformation = PersonalInformations::findOrFail($personalInformationId);
         // Assuming there's a relationship between User and PersonalInformations
        //  if (!$personalInformation) {
        //     return redirect('/farmprofile')->with('message', 'Personal Information not found for the authenticated user');
        // }

    // Check if the associated PersonalInformations record exists
    // Access the primary key of the PersonalInformations model instance

    $farmProfile = FarmProfile::create([
             'personal_information_id' => $request->input('personal_information_id'),
            'tenurial_status' => request('tenurial_status'),
            'rice_farm_address' => request('rice_farm_address'),
            'no_of_years_as_farmers' => request('no_of_years_as_farmers'),
            'gps_longitude' => request('gps_longitude'),
            'gps_latitude' => request('gps_latitude'),
            'total_physical_area_has' => request('total_physical_area_has'),
            'rice_area_cultivated_has' => request('rice_area_cultivated_has'),
            'land_title_no' => request('land_title_no'),
            'lot_no' => request('lot_no'),
            'area_prone_to' => request('area_prone_to'),
            'ecosystem' => request('ecosystem'),
            'type_rice_variety' => request('type_rice_variety'),
            'prefered_variety' => request('prefered_variety'),
            'plant_schedule_wetseason' => request('plant_schedule_wetseason'),
            'plant_schedule_dryseason' => request('plant_schedule_dryseason'),
            'no_of_cropping_yr' => request('no_of_cropping_yr'),
            'yield_kg_ha' => request('yield_kg_ha'),
            'rsba_register' => request('rsba_register'),
            'pcic_insured' => request('pcic_insured'),
            'source_of_capital' => request('source_of_capital'),
            'remarks_recommendation' => request('remarks_recommendation'),
            'oca_district_office' => request('oca_district_office'),
            'name_technicians' => request('name_technicians'),
            'date_interview' => request('date_interview'),
            ]);
            // dd($farmProfile);

// Save the FarmProfile
// $farmProfile = FarmProfile::create($data);

// Retrieve the personal_information_id
$personalInformationId = $farmProfile->getKey();

// Associate the FarmProfile with PersonalInformations
$personalInformation = PersonalInformations::find($personalInformationId);
$farmProfile->personalInformations()->associate($personalInformation);
$farmProfile->save();

         
    

return redirect('/fixedcost')->with('message', 'Farm Profile added successfully');
} catch (\Exception $ex) {
    // Handle the exception
    dd($ex);
    return redirect('/farmprofile')->with('message', 'Something went wrong');
}
        //    // }
        //    try{
        //     $user = auth()->user();
        //     $data= $request->validated();
        //     $data= $request->all();
        //     PersonalInformations::create($data);
    
        //     return redirect('//fixedcost')->with('message','Personal informations added successsfully');
        
        // }
        // catch(\Exception $ex){
        //     dd($ex); // Debugging statement to inspect the exception
        //     return redirect('/farmprofile')->with('message','Someting went wrong');
            
        // }   
    }
    
     
    // try {
    //     // Your validation logic here
    //     $data = $request->validated();
    
    //     // Assuming there's a relationship between User and PersonalInformations
    //     $user = auth()->user();

    //     $data['id_type'] = 1;
    //     // $data['personal_informations_id'] = 1;
    //     // Set the foreign key value to the primary key of the user
    //     // $data['users_id'] = $user  ->getPrimaryKey();
   
    //     // Create a new PersonalInformations record and associate it with the user
    //    Farmprofile::create($data);
    
    //     // Debugging statement to inspect data or variables
    //     dd('Data processed successfully');
    
    //     return redirect('/farmprofile')->with('message', 'Personal information added successfully');
    // } catch (\Exception $ex) {
    //     // Log the exception or handle it as needed
    //     dd($ex); // Debugging statement to inspect the exception
    
    //     return redirect('/personalinformation')->with('message', 'Something went wrong');
    // }
    
    
    
       
  

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdateFarmProfileRequest $request, $farmno_id)
    // {
    //                 // dd(($request->all()));
    //                 try {
    //                     // Get validated data from the request (if you're using validation rules)
    //                     $data = $request->validated();
                    
    //                     // If you want to use all data, use this line instead of the above line.
    //                     // $data = $request->all();
                    
    //                     // Update the PersonalInformations table
    //                     FarmProfile::where('farmno_id', $farmno_id)->update($data);
                    
    //                     // Optionally, you can return a response indicating success
    //                     return redirect('/farmprofile/create')->with('message','Farm Profile updated successsfully');
    //                 } catch (\Exception $e) {
    //                     // Handle any exceptions that might occur during the update process
    //                     return response()->json(['message' => 'Error updating record: ' . $e->getMessage()], 500);
    //                 }
    // }
    public function update(UpdateFarmProfileRequest $request, $id)
    {
        try {
            $data = $request->validated();
            
            // Optionally, add logic to get farmer_no
            // $data['farmer_no'] = $this->getFarmerNo();
    
            FarmProfile::where('farmno_id', $id)->update($data);
    
            return redirect('/farmprofile/create')->with('message', 'Farm Profile updated successfully');
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error updating record: ' . $e->getMessage()], 500);
        }
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($farmno_id)
    {
        try {
            $farmprofile = FarmProfile::where('farmno_id', $id);
        
            if ($farmprofile) {
                $farmprofile->delete();
                return redirect()->route('farm_profile.show')
                                 ->with('message', 'Fixed Cost deleted successfully');
            } else {
                return redirect()->route('farm_profile.show')
                                 ->with('message', 'Fixed Cost not found');
            }
        } catch (\Exception $e) {
            return redirect()->route('farm_profile.show')
                             ->with('message', 'Error deleting Fixed Cost : ' . $e->getMessage());
        }
    }
}
