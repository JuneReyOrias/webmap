<?php

namespace App\Http\Controllers\Backend;
use App\Models\FarmProfile;
use App\Http\Controllers\Controller;
use App\Http\Requests\FarmProfileRequest;
use App\Http\Requests\UpdateFarmProfileRequest;
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
    public function store(FarmProfileRequest $request)
    {
        try{
        
            $data= $request->validated();
            $data= $request->all();
            FarmProfile::create($data);
    
            return redirect('/fixedcost')->with('message','Farm Profile added successsfully');
        
        }
        catch(\Exception $ex){
            return redirect('/farmprofile')->with('message','Someting went wrong');
        }
    }

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
    public function update(UpdateFarmProfileRequest $request, $farmno_id)
    {
                    // dd(($request->all()));
                    try {
                        // Get validated data from the request (if you're using validation rules)
                        $data = $request->validated();
                    
                        // If you want to use all data, use this line instead of the above line.
                        // $data = $request->all();
                    
                        // Update the PersonalInformations table
                        FarmProfile::where('farmno_id', $farmno_id)->update($data);
                    
                        // Optionally, you can return a response indicating success
                        return redirect('/farmprofile/create')->with('message','Farm Profile updated successsfully');
                    } catch (\Exception $e) {
                        // Handle any exceptions that might occur during the update process
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
