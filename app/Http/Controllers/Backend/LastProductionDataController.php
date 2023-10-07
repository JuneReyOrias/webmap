<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LastProductionDatasRequest;
use App\Models\LastProductionData;
use App\Models\LastProductionDatas;
use Illuminate\Http\Request;

class LastProductionDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function ProductionForms(){
        $lastproductiondata= LastProductionDatas::all();
    return view('production_data.production_index',compact('lastproductiondata'));
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
    public function store(LastProductionDatasRequest $request)
    {
        try{
        
            $data= $request->validated();
            $data= $request->all();
            LastProductionDatas::create($data);
    
            return redirect('/seeds/store')->with('message','Fixed Cost added successsfully');
        
        }
        catch(\Exception $ex){
            return redirect('/production/index')->with('message','Someting went wrong');
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
