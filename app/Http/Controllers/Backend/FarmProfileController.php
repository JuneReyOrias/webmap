<?php

namespace App\Http\Controllers\Backend;
use App\Models\FarmProfile;
use App\Http\Controllers\Controller;
use App\Http\Requests\FarmProfileRequest;
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(FarmProfileRequest $request)
    {
        try{
        
            $data= $request->validated();
            $data= $request->all();
            FarmProfile::create($data);
    
            return redirect('/fixed/index')->with('message','Personal informations added successsfully');
        
        }
        catch(\Exception $ex){
            return redirect('/farm/index')->with('message','Someting went wrong');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
