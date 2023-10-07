<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeedRequest;
use App\Models\Seed;
use Illuminate\Http\Request;

class SeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function SeedsVar(){
        $pesticides= Seed::all();
    return view('variable_cost.seeds.seeds_store',compact('pesticides'));
    }
    /*
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
    public function store(SeedRequest $request)
    {
        try{
            $data= $request->validated();
            $data= $request->all();
            Seed::create($data);
    
            return redirect('labor/store')->with('message','Seeds data added successsfully');
        
        }
        catch(\Exception $ex){
            return redirect('/seeds/store')->with('message','Someting went wrong');
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
