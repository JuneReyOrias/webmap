<?php

namespace App\Http\Controllers\Backend;
use App\Models\PersonalInformations;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalInformationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $personalInformations= PersonalInformations::all();
     return view('personalinfo.index',compact('personalInformations'));
    }
    public function FarmForm(){
        $farm= PersonalInformations::all();
    return view('farm_profile.farm_index',compact('farm'));
    }

    public function FixedForms(){
        $fixed= PersonalInformations::all();
    return view('fixed_cost.fixed_index',compact('fixed'));
    }
    public function MachineForms(){
        $fixed= PersonalInformations::all();
    return view('machineries_used.machine_index',compact('fixed'));
    }

    public function ProductionForms(){
        $fixed= PersonalInformations::all();
    return view('production_data.production_index',compact('fixed'));
    }

    public function VariableForms(){
        $fixed= PersonalInformations::all();
    return view('variable_cost.variable_index',compact('fixed'));
    }
    public function RiceFarmers(){
        $forms= PersonalInformations::latest()->get();
        return view('farmers.form.rice_farmersforms',compact('forms'));
    }
    public function RiceMap(){
        $maps= PersonalInformations::latest()->get();
        return view('farmers.form.rice_map',compact('maps'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personalinfo.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { $validatedData = $request->validate([
        'name' => 'required',
        'address' => 'required',
        // Add other fields as per your requirement

      
    ]);
    PersonalInformations:: create($validatedData);
    return redirect()->route('personalinfo.index')->with('success', 'Personal Information created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $personalInformation = PersonalInformations::findOrFail($id);
        return view('personal_information.show', compact('personalInformations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $personalInformation = PersonalInformations::findOrFail($id);
        return view('personal_information.edit', compact('personalInformation'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            // Add other fields as per your requirement
        ]);
        $personalInformation = PersonalInformations::findOrFail($id);
        $personalInformation->update($validatedData);
        return redirect()->route('personal_information.index')->with('success', 'Personal Information updated successfully');
   
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
