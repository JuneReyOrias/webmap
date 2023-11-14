<?php

namespace App\Http\Controllers\Backend;
use App\Models\FarmProfile;
use App\Http\Controllers\Controller;
use App\Http\Requests\FarmProfileRequest;
use App\Http\Requests\UpdateFarmProfileRequest;
use App\Models\PersonalInformations;
use Illuminate\Http\Request;

class FarmProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function ArcMap()
    {
     $farmprofile= FarmProfile::all();
     return view('map.arcmap',compact('farmprofile'));
     $map_markes = array ();
     foreach ($farmprofile as $key => $farmprofile) { 
         $map_markes[] = (object)array(
             'tenurial_status' => $farmprofile->tenurial_status,
             'rice_farm_address' => $farmprofile->rice_farm_address,
             'no_of_years_as_farmers' => $farmprofile->no_of_years_as_farmers,
             'gps_longitude' => $farmprofile->gps_longitude,
             'gps_latitude' => $farmprofile->gps_latitude,
             'total_physical_area_has' => $farmprofile->total_physical_area_has,
             'rice_area_cultivated_has' => $farmprofile->rice_area_cultivated_has,
             'land_title_no' => $farmprofile->land_title_no,
             'lot_no' => $farmprofile->lot_no,
         );
     }
     return response()->json($map_markes);
 
    }
    
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
   

    public function store(FarmProfileRequest $request)
    {
        try {
            $user = auth()->user();
    
            // Assuming there's a relationship between User and PersonalInformation
            $personalInformation = $user->personalInformation;
    
            $data = $request->validated();
    
            if ($personalInformation) {
                $data['farmer_no'] = $personalInformation->farmer_no;
            }
    
            FarmProfile::create($data);
    
            return redirect('/fixedcost')->with('message', 'Farm Profile added successfully');
        } catch (\Exception $ex) {
            return redirect('/farmprofile')->with('message', 'Something went wrong');
        }
    }
    


//     public function store(FarmProfileRequest $request)
// {
//     try {
//         $data = $request->validated();

//         // Assuming 'farmer_no' is present in the validated data
//         $farmerNo = $data['farmer_no'];

//         // You can get the farmer instance using the farmer_no
//         $personalInformations = PersonalInformations::where('farmer_no', $farmerNo)->first();

//         if (!$personalInformations) {
//             return redirect('/farmprofile')->with('message', 'Farmer not found');
//         }

//         // Add the foreign key farmer_no to the data before creating the FarmProfile
//         $data['farmer_no'] = $personalInformations->id; // Assuming 'id' is the primary key of the Farmers table

//         FarmProfile::create($data);

//         return redirect('/fixedcost')->with('message', 'Farm Profile added successfully');
//     } catch (\Exception $ex) {
//         return redirect('/farmprofile')->with('message', 'Something went wrong');
//     }
// }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($farmno_id)
    {
        $farmprofile = FarmProfile::where('farmno_id',$farmno_id)->first();
        return view('farm_profile.farm_edit')->with('farmprofile',$farmprofile);
       
    }

    /**
     * Update the specified resource in storage.
     */
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
    public function update(UpdateFarmProfileRequest $request, $farmno_id)
    {
        try {
            $data = $request->validated();
            
            // Optionally, add logic to get farmer_no
            // $data['farmer_no'] = $this->getFarmerNo();
    
            FarmProfile::where('farmno_id', $farmno_id)->update($data);
    
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
            $farmprofile = FarmProfile::where('farmno_id', $farmno_id);
        
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
