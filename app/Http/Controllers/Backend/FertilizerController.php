<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FertilizerRequest;
use App\Models\Fertilizer;
use App\Models\Labor;
use Illuminate\Http\Request;

class FertilizerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function FertilizersVar(){
        $pesticides= Fertilizer::all();
    return view('variable_cost.fertilizer.fertilizer_store',compact('pesticides'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(FertilizerRequest $request)
    {
        try{
            $data= $request->validated();
            $data= $request->all();
            Fertilizer::create($data);
    
            return redirect('/pesticides')->with('message','Fertilizers data added successsfully');
        
        }
        catch(\Exception $ex){
            return redirect('/fertilizer')->with('message','Someting went wrong');
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
