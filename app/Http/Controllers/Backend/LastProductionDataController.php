<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LastProductionDatasRequest;
use App\Http\Requests\UpdateLastProductiondatasRequest;
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
    public function ProductionDataCrud()
    {
        $lastproductiondata= LastProductionDatas::latest()->get();
        return view('production_data.production_create',compact('lastproductiondata'));
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
    
            return redirect('/seeds')->with('message','Fixed Cost added successsfully');
        
        }
        catch(\Exception $ex){
            return redirect('/productiondata')->with('message','Someting went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //$production_id
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($production_id)
    {
        $lastproductiondata = LastProductionDatas::where('production_id',$production_id)->first();
        return view('production_data.production_edit')->with('lastproductiondata',$lastproductiondata);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLastProductiondatasRequest $request, $production_id)
    {
        try {
            // Get validated data from the request (if you're using validation rules)
            $data = $request->validated();
        
            // If you want to use all data, use this line instead of the above line.
            // $data = $request->all();
        
            // Update the PersonalInformations table
            LastProductionDatas::where('production_id', $production_id)->update($data);
        
            // Optionally, you can return a response indicating success
            return redirect('/production/create')->with('message','Last Production Data updated successsfully');
        } catch (\Exception $e) {
            // Handle any exceptions that might occur during the update process
            return redirect()->route('production_data.create')
            ->with('message', 'Error updating Last Production Data : ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($production_id)
    {
        try {
             $lastproductiondata = LastProductionDatas::where('production_id', $production_id);
        
            if ( $lastproductiondata) {
                 $lastproductiondata->delete();
                return redirect()->route('production_data.create')
                                 ->with('message', 'Last Production Data deleted successfully');
            } else {
                return redirect()->route('production_data.create')
                                 ->with('message', 'Last Production Data not found');
            }
        } catch (\Exception $e) {
            return redirect()->route('production_data.create')
                             ->with('message', 'Error deleting Last Production Data : ' . $e->getMessage());
        }
    }
}
