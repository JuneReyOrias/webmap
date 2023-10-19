<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\VariableCostRequest;
use App\Models\VariableCost;
use Illuminate\Http\Request;

class VariableCostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function VariableForms(){
        $variablecost= VariableCost::all();
    return view('variable_cost.variable_index',compact('variablecost'));
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
    public function store(VariableCostRequest $request)
    {
        {
            try{
            
                $data= $request->validated();
                $data= $request->all();
               VariableCost::create($data);
        
                return redirect('/personalinfo/create')->with('message','Variable Cost added successsfully');
            
            }
            catch(\Exception $ex){
                return redirect('/variable')->with('message','Someting went wrong');
            }
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
