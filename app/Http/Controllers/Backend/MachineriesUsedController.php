<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MachineriesUsedtRequest;
use App\Http\Requests\UpdateMachineriesUsedRequest;
use App\Models\MachineriesUsed;
use App\Models\MachineriesUseds;
use Illuminate\Http\Request;

class MachineriesUsedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function MachineForms(){
        $MachineneriesUsed= MachineriesUsed::all();
    return view('machineries_used.machine_index',compact('MachineneriesUsed'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function MachineriesUsedCrud()
    {
        $machineriesused= MachineriesUseds::latest()->get();
        return view('machineries_used.machine_create',compact('machineriesused'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(MachineriesUsedtRequest $request)
    {
        try{
        
            $data= $request->validated();
            $data= $request->all();
            MachineriesUseds::create($data);
    
            return redirect('/production')->with('message','Fixed Cost added successsfully');
        
        }
        catch(\Exception $ex){
            return redirect('/machineriesused')->with('message','Someting went wrong');
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
    public function edit($machine_id)
    {
        $MachineneriesUsed = MachineriesUseds::where('machine_id',$machine_id)->first();
        return view('machineries_used.machine_edit')->with('MachineneriesUsed',$MachineneriesUsed);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMachineriesUsedRequest $request,  $machine_id)
    {
        try {
            // Get validated data from the request (if you're using validation rules)
            $data = $request->validated();
        
            // If you want to use all data, use this line instead of the above line.
            // $data = $request->all();
        
            // Update the PersonalInformations table
            MachineriesUseds::where('machine_id', $machine_id)->update($data);
        
            // Optionally, you can return a response indicating success
            return redirect('/machineriesused/create')->with('message','Machineries Used updated successsfully');
        } catch (\Exception $e) {
            // Handle any exceptions that might occur during the update process
            return response()->json(['message' => 'Error updating record: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($machine_id)
    {
        try {
            $MachineneriesUsed = MachineriesUseds::where('machine_id', $machine_id);
        
            if ($MachineneriesUsed) {
                $MachineneriesUsed->delete();
                return redirect()->route('machineries_used.create')
                                 ->with('message', 'Machineries Used deleted successfully');
            } else {
                return redirect()->route('machineries_used.create')
                                 ->with('message', 'Machineries Used not found');
            }
        } catch (\Exception $e) {
            return redirect()->route('machineries_used.create')
                             ->with('message', 'Error deleting Machineries Used : ' . $e->getMessage());
        }
    }
}
