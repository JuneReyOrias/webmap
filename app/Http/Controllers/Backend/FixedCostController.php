<?php

namespace App\Http\Controllers\Backend;
use App\Models\FixedCost;
use App\Http\Controllers\Controller;
use App\Http\Requests\FixedCostRequest;
use Illuminate\Http\Request;

class FixedCostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    
    public function FixedForms(){
        $fixed= FixedCost::all();
    return view('fixed_cost.fixed_index',compact('fixed'));
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
    public function store(FixedCostRequest $request)
    {
        try{
        
            $data= $request->validated();
            $data= $request->all();
            FixedCost::create($data);
    
            return redirect('/machineries/index')->with('message','Fixed Cost added successsfully');
        
        }
        catch(\Exception $ex){
            return redirect('/fixed/index')->with('message','Someting went wrong');
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
