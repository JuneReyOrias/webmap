<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MachineriesUsedtRequest;
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(MachineriesUsedtRequest $request)
    {
        try{
        
            $data= $request->validated();
            $data= $request->all();
            MachineriesUseds::create($data);
    
            return redirect('/production/index')->with('message','Fixed Cost added successsfully');
        
        }
        catch(\Exception $ex){
            return redirect('/machineries/index')->with('message','Someting went wrong');
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
