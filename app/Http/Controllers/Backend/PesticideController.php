<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PesticidesRequest;
use App\Models\Pesticide;
use Illuminate\Http\Request;

class PesticideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function PesticidesVar(){
        $pesticides= Pesticide::all();
    return view('variable_cost.pesticides.pesticides_store',compact('pesticides'));
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
    public function store(PesticidesRequest $request)
    {
        try{
            $data= $request->validated();
            $data= $request->all();
            Pesticide::create($data);
    
            return redirect('/transport')->with('message','Pesticides data added successsfully');
        
        }
        catch(\Exception $ex){
            return redirect('/pesticides')->with('message','Someting went wrong');
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
