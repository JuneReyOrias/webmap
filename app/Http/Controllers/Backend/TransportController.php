<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransportRequest;
use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function TransportVar(){
        $transport= Transport::all();
    return view('variable_cost.transport.transport_store',compact('transport'));
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
    public function store(TransportRequest $request)
    {
        try{
            $data= $request->validated();
            $data= $request->all();
            Transport::create($data);
    
            return redirect('/variablecost')->with('message','transport data added successsfully');
        
        }
        catch(\Exception $ex){
            return redirect('/transport')->with('message','Someting went wrong');
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
