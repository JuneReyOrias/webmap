<?php

namespace App\Http\Controllers\Backend;
use App\Models\PersonalInformations;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\MultipleFile;
use App\Http\Controllers\Controller;
use App\Http\Requests\PersonalInformationsRequest;
use App\Http\Requests\UpdatePersonalInformationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Strings;

class PersonalInformationsController extends Controller
{

protected $personalInformations;
public function __construct() {
    $this->personalInformations = new PersonalInformations;

}
public function FarmProfiles(){
    try {
       // Retrieve the necessary information from the personal_informations table
       $personalInformations = PersonalInformations::select('id', 'first_name', 'last_name')
       ->latest('id') // Order by id in descending order (latest first)
    ->first()
->get();
   
//    if ($personalInformations) {
//        // Record found, you can access its properties
//        $id = $personalInformations->id;
//        $firstname = $personalInformations->first_name;
//        $lastname = $personalInformations->last_name;
//    } else {
//        // Record not found, handle it accordingly (e.g., show an error message)
//        echo "Record not found!";}
       // You can return the data to a view or process it further
       return view('farm_profile.farm_index', ['personalInformations' => $personalInformations]);
   } catch (\Exception $ex) {
       // Log the exception for debugging purposes
       dd($ex);
       return redirect()->back()->with('message', 'Something went wrong');
   }
    }
public function Personalfarms() {

  
  


   

// $personalInformations = PersonalInformations::join('farm_profiles', 'personal_informations.farmer_no', '=', 'farm_profiles.farmer_no')
//                                             ->join('fixed_costs', 'fixed_costs.farmno_id', '=', 'fixed_costs.farmno_id')
//                                             ->get(['personal_informations.*', 'farm_profiles.tenurial_status','farm_profiles.gps_latitude'],['personal_informations.*', 'fixed_cost.fixed_id'],);

              
        // $personalInformations=DB::table('personal_informations')
        //                             ->leftJoin('farm_profiles','farm_profiles.farmer_no','personal_informations.farmer_no',)
    //     //                             ->leftJoin('personal_informations','personal_informations.farmno_id','farm_profiles.farmno_id',)->get();
    $personalInformations = DB::table('personal_informations')
    ->leftJoin('farm_profiles', 'farm_profiles.farmer_no', '=', 'personal_informations.farmer_no')
    ->leftJoin('fixed_costs', 'fixed_costs.farmer_no', '=', 'personal_informations.farmer_no')
    ->leftJoin('machineries_useds', 'machineries_useds.farmer_no', '=', 'personal_informations.farmer_no')
    ->leftJoin('seeds', 'seeds.farmer_no', '=', 'personal_informations.farmer_no')
    ->leftJoin('fertilizers', 'fertilizers.farmer_no', '=', 'personal_informations.farmer_no')
    ->leftJoin('labors', 'labors.farmer_no', '=', 'personal_informations.farmer_no')
    ->leftJoin('pesticides', 'pesticides.farmer_no', '=', 'personal_informations.farmer_no')
    ->leftJoin('transports', 'transports.farmer_no', '=', 'personal_informations.farmer_no')
    ->leftJoin('variable_costs', 'variable_costs.farmer_no', '=', 'personal_informations.farmer_no')
    ->leftJoin('last_production_datas', 'last_production_datas.farmer_no', '=', 'personal_informations.farmer_no')
    ->select(
        'personal_informations.first_name', 'personal_informations.last_name',
        'farm_profiles.tenurial_status',
        'fixed_costs.total_amount',
        'machineries_useds.total_cost_for_machineries', // Select all columns from machineries_useds
        'seeds.total_seed_cost',
        'fertilizers.total_cost_fertilizers',
        'labors.total_labor_cost',
        'pesticides.total_cost_pesticides',
        'transports.total_transport_per_deliverycost',
        'variable_costs.total_machinery_fuel_cost',
        'last_production_datas.gross_income_palay',  'last_production_datas.gross_income_rice', 
    )
    ->get();
    return view('farm-table.join_table',compact('personalInformations'));

    // dd($personalInformations);
}
    // public function MultiFile(){
       
    //     return view('multifile.import');
    // }
    // public function saveUploadForm(Request $request){
    //     dd($request->file('upload_file'));
    // }
    /**
     * Display a listing of the resource.
     */
    // public function ArcMap()
    // {
    //  $personalInformations= PersonalInformations::all();
    //  return view('map.arcmap',compact('personalInformations'));
    // }
    public function Gmap()
    {
     $personalInformations= PersonalInformations::all();
     return view('map.gmap',compact('personalInformations'));
    }
    public function PersonalInfo(): View
    {
        $personalInformation= PersonalInformations::all();
    return view('personalinfo.index',compact('personalInformation'));
    }
    public function Agent(): View
    {
        $personalInformation= PersonalInformations::all();
    return view('personalinfo.index_agent',compact('personalInformation'));
    }
   

    public function PersonalInfoCrud():View{
        $personalInformations= PersonalInformations::latest()->get();
        return view('personalinfo.create',compact('personalInformations'));
    }
    public function PersonalInfoCrudAgent():View{
        $personalInformations= PersonalInformations::latest()->get();
        return view('personalinfo.show_agent',compact('personalInformations'));
    }
    // public function RiceMap(){
    //     $maps= PersonalInformations::latest()->get();
    //     return view('farmers.form.rice_map',compact('maps'));
    // }
    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('personalinfo.index');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonalInformationsRequest $request): RedirectResponse
    {
        // try {
        //     // Your validation logic here
        //     $data = $request->validated();
        
        //     // Assuming there's a relationship between User and PersonalInformations
        //     $users = auth()->user();
        
        //     // Set the foreign key value directly in the $data array
        //     $data['users_id'] = $users->id;
        
        //     // Set a value for 'id_type' (replace 1 with the appropriate value)
        //     $data['id_type'] = 1; // Adjust the value based on your application's logic
        
        //     // Create a new PersonalInformations record
        //     PersonalInformations::create($data);
        
        //     // Debugging statement to inspect data or variables
        //     dd('Data processed successfully');
        
        //     return redirect('/farmprofile')->with('message', 'Personal information added successfully');
        // } catch (\Exception $ex) {
        //     // Log the exception or handle it as needed
        //     dd($ex); // Debugging statement to inspect the exception
        
        //     return redirect('/personalinformation')->with('message', 'Something went wrong');
        // }
        
        // try {
        //     // Your validation logic here
        //     $data = $request->validated();
        
        //     // Assuming there's a relationship between User and PersonalInformations
        //     $user = auth()->user();
        //     $data['id_type'] = 1;
        //     // // Set the foreign key value to the primary key of the user
        //     // $data['users_id'] = $user->getPrimaryKey();
        
        //     // Create a new PersonalInformations record and associate it with the user
        //     PersonalInformations::create($data);
        
        //     // Debugging statement to inspect data or variables
        //     // dd('Data processed successfully');
        
        //     return redirect('/farmprofile')->with('message', 'Personal information added successfully');
        // } catch (\Exception $ex) {
        //     // Log the exception or handle it as needed
        //     dd($ex); // Debugging statement to inspect the exception
        
        //     return redirect('/personalinformation')->with('message', 'Something went wrong');
        // }
        try{
        
            $data= $request->validated();
            $data= $request->all();
            PersonalInformations::create($data);
    
            return redirect('/farmprofile')->with('message','Personal informations added successsfully');
        
        }
        catch(\Exception $ex){
            dd($ex); // Debugging statement to inspect the exception
            return redirect('/personalinformation')->with('message','Someting went wrong');
            
        }   
        
        
               
          
          
    // try{
        
    //     $data= $request->validated();
    //     $data= $request->all();
    //     PersonalInformations::create($data);

    //     return redirect('/farmprofile')->with('message','Personal informations added successsfully');
    
    // }
    // catch(\Exception $ex){
    //     return redirect('/personalinformation')->with('message','Someting went wrong');
    // }

} 
    

    /**
     * Display the specified resource.
     */
    public function show(personalInformations $personalInformations): View
    {
        // $personalInformations = PersonalInformations::find($id);
        return view('personalinfo.create')->with('personalInformations',$personalInformations);
    }
    
    public function showPersonalInfo()
    {
        // Fetch personal information data
        $personalInformations = PersonalInformations::select('id', 'first_name', 'last_name')->get();

        // Pass the data to the view
        return view('farm_profile.farm_index', compact('personalInformation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd($farmer_no);
        $personalInformations = PersonalInformations::where('id',$id)->first();
        // // $personalInformation = PersonalInformations::findOrFail($personalInformation);
        return view('personalinfo.edit')->with('personalInformation',$personalInformations);
       ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonalInformationRequest $request,  $id)
    {
            // dd(($request->all()));
            try {
                // Get validated data from the request (if you're using validation rules)
                $data = $request->validated();
            
                // If you want to use all data, use this line instead of the above line.
                // $data = $request->all();
            
                // Update the PersonalInformations table
                PersonalInformations::where('id', $id)->update($data);
            
                // Optionally, you can return a response indicating success
                return redirect('/personalinfo/create')->with('message','Personal informations updated successsfully');
            } catch (\Exception $e) {
                // Handle any exceptions that might occur during the update process
                return response()->json(['message' => 'Error updating record: ' . $e->getMessage()], 500);
            }

    
           
        //     // $input = $request->all();
        //   $data= $request->validated();
        //   $data=($request->all());
        //     PersonalInformations::where('farmer_no', '=', $farmer_no)->update($data);
         
        //  $farmer_no= $request->farmer_no;
        //     // $personalInformations->update(array_merge($personalInformations->toArray(),$request->toArray()));
        //     $data= $request->validated();
        //     $data= $request->all();
        //     $personalInformation = PersonalInformations::where('farmer_no',$farmer_no)->first();
        //     $personalInformation = $personalInformation->update([
        //         'first_name'=>$request->first_name,
        //         'middle_name'=>$request->middle_name,
        //         'last_name'=>$request->last_name,
        //         'extension_name'=>$request->extension_name,
        //         'home_address'=>$request->home_address,
        //         'sex'=>$request->sex,
        //         'religion'=>$request->religion,
        //         'date_of_birth'=>$request->date_of_birth,
        //         'place_of_birth'=>$request->place_of_birth,
        //         'contact_no'=>$request->contact_no,
        //         'civil_status'=>$request->civil_status,
        //         'name_legal_spouse'=>$request->name_legal_spouse,
        //         'no_of_children'=>$request->no_of_children,
        //         'mothers_maiden_name'=>$request->mothers_maiden_name,
        //         'highest_formal_education'=>$request->highest_formal_education,
        //         'person_with_disability'=>$request->person_with_disability,
        //         'pwd_id_no'=>$request->pwd_id_no,
        //         'government_issued_id'=>$request->government_issued_id,
        //         'gov_id_no'=>$request->gov_id_no,
        //         'member_ofany_farmers_ass_org_coop'=>$request->member_ofany_farmers_ass_org_coop,
        //         'nameof_farmers_ass_org_coop'=>$request->nameof_farmers_ass_org_coop,
        //         'name_contact_person'=>$request->name_contact_person,
        //         'cp_tel_no'=>$request->cp_tel_no,
                
                
        //     ]);
           
          
            // PersonalInformations::where('farmer_no' ,'=',$farmer_no)->updated($data);
            // PersonalInformations::where('farmer_no' ,'=',$farmer_no)->update($request->all());
                //  PersonalInformations::find( $farmer_no)->Update($request->all());
     
        
        
      
     
           
        
        // }
        // catch(\Exception $ex){
        //     return redirect('/personalinfo/create')->with('message','Someting went wrong');
        // }
    

        // $personalInformations = PersonalInformations::where('farmer_no',$farmer_no)->find();
        // $input=$request->all();
        // $personalInformations->update($input);
        // return redirect()->route('personalinfo.create')
        //   ->with('success', 'Post updated successfully.');
    }
    //     try{
        
    //         $data= $request->validated();
    //         $data= $request->all();
    //         PersonalInformations::update($data);
    
    //         return redirect('/farm/index')->with('message','Personal informations added successsfully');
        
    //     }
    //     catch(\Exception $ex){
    //         return redirect('/personalinfo/index')->with('message','Someting went wrong');
    //     }
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        try {
            $personalInformations = PersonalInformations::where('id', $id);
        
            if ($personalInformations) {
                $personalInformations->delete();
                return redirect()->route('personalinfo.create')
                                 ->with('message', 'Personal Informations deleted successfully');
            } else {
                return redirect()->route('personalinfo.create')
                                 ->with('message', 'Personal Informations not found');
            }
        } catch (\Exception $e) {
            return redirect()->route('personalinfo.create')
                             ->with('message', 'Error deleting Personal Informations : ' . $e->getMessage());
        }
        
            // $personalInformations->delete();
            // return redirect()->route('personal_information.index')->with('success', 'Personal Information deleted successfully');
            // $personalInformations = PersonalInformations::findorfail($farmer_no);
            // $personalInformations->delete();
            // return redirect()->route('posts.index')
            //   ->with('success', 'Post deleted successfully');
    }
}
