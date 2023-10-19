<?php

namespace App\Http\Controllers\Backend;
use App\Models\FixedCost;
use App\Http\Controllers\Controller;
use App\Http\Requests\FixedCostRequest;
use App\Http\Requests\UpdateFixedCostRequest;
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
    public function FixedCostCrud()
    {
        $fixedcost= FixedCost::latest()->get();
        return view('fixed_cost.fixed_create',compact('fixedcost'));
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
    
            return redirect('machineriesused')->with('message','Fixed Cost added successsfully');
        
        }
        catch(\Exception $ex){
            return redirect('/fixedcost')->with('message','Someting went wrong');
        }
    }
    public function FixedCost()
    {
        $fixedcost= FixedCost::latest()->get();
        return view('fixed_cost.fixed_create',compact('fixedcost'));
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
    public function edit($fixed_id)
    {
        $fixedcost = FixedCost::where('fixed_id',$fixed_id)->first();
        return view('fixed_cost.fixed_edit')->with('fixedcost',$fixedcost);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFixedCostRequest $request, $fixed_id)
    {
        try {
            // Get validated data from the request (if you're using validation rules)
            $data = $request->validated();
        
            // If you want to use all data, use this line instead of the above line.
            // $data = $request->all();
        
            // Update the PersonalInformations table
            FixedCost::where('fixed_id', $fixed_id)->update($data);
        
            // Optionally, you can return a response indicating success
            return redirect('/fixedcost/create')->with('message','fixed cost updated successsfully');
        } catch (\Exception $e) {
            // Handle any exceptions that might occur during the update process
            return response()->json(['message' => 'Error updating record: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($fixed_id)
    {
        try {
            $fixedcost = FixedCost::where('fixed_id', $fixed_id);
        
            if ($fixedcost) {
                $fixedcost->delete();
                return redirect()->route('fixed_cost.create')
                                 ->with('message', 'Fixed Cost deleted successfully');
            } else {
                return redirect()->route('fixed_cost.create')
                                 ->with('message', 'Fixed Cost not found');
            }
        } catch (\Exception $e) {
            return redirect()->route('fixed_cost.create')
                             ->with('message', 'Error deleting Fixed Cost : ' . $e->getMessage());
        }
    }
}
