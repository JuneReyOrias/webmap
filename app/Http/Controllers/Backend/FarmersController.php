<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Farmers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\FarmersImport;





class FarmersController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function import(Request $request)
     {
        $file = $request->file('excel_file');

    $this-> validate($request,[
        'excel_file'=> 'required|mimes:xlsx,xls'
    ]);
    try{
        excel::import(new FarmersImport, $file);
    }catch (Exception $e){
        return redirect()->back()->with('error','Error importing data: ',$e->getMessage());
    }

     }
    public function index()
    {
        //
    }
    public function RiceFarmers(){
        $forms= Farmers::latest()->get();
        return view('farmers.form.rice_farmersforms',compact('forms'));
    }
    public function RiceMap(){
        $maps= Farmers::latest()->get();
        return view('farmers.form.rice_map',compact('maps'));
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
    public function store(Request $request)
    {
        //
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
