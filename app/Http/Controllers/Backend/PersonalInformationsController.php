<?php

namespace App\Http\Controllers\Backend;
use App\Models\PersonalInformations;
use App\Models\MultipleFile;
use App\Http\Controllers\Controller;
use App\Http\Requests\PersonalInformationsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
class PersonalInformationsController extends Controller
{


    // public function MultiFile(){
       
    //     return view('multifile.import');
    // }
    // public function saveUploadForm(Request $request){
    //     dd($request->file('upload_file'));
    // }
    /**
     * Display a listing of the resource.
     */
    public function ArcMap()
    {
     $personalInformations= PersonalInformations::all();
     return view('map.arcmap',compact('personalInformations'));
    }
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
   

    public function PersonalInfoCrud():View{
        $personalInformation= PersonalInformations::latest()->get();
        return view('personalinfo.create',compact('personalInformation'));
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
        // PersonalInformations::create($request->all());
         
        // return redirect()->route('personalinfo.index')
        //                 ->with('success','Product created successfully.');
    try{
        
        $data= $request->validated();
        $data= $request->all();
        PersonalInformations::create($data);

        return redirect('/farm/index')->with('message','Personal informations added successsfully');
    
    }
    catch(\Exception $ex){
        return redirect('/personalinfo/index')->with('message','Someting went wrong');
    }

    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $personalInformation = PersonalInformations::find($id);
        return view('personalinfo.create')->with('personalInformation',$personalInformation);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $personalInformation = PersonalInformations::findOrFail($id);
        return view('personalinfo.edit', compact('personalInformation'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $personalInformation = PersonalInformations::find($id);
        $input = $request->all();
        $personalInformation->update($input);
        return redirect('personalInformation')->with('flash_message', 'personalInformation Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
            $personalInformation = PersonalInformations::findOrFail($id);
            $personalInformation->delete();
            return redirect()->route('personal_information.index')->with('success', 'Personal Information deleted successfully');
        
    }
}
