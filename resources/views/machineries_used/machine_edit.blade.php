@extends('admin.dashb')
@section('admin')


<div class="page-content">

  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      
    </ol>
  </nav>
  
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title"><span>IV.</span>Machineries Used</h6>

         <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p>
         <form  action="{{route('machineries_used.update',$MachineneriesUsed->machine_id )}}" method="post"  >
            @csrf
            <div class="row mb-3">
             
              <div class="col-md-3">

                <div class="form-floating mb-4 mb-md-0">
                <input id="lastname" class="form-control mb-4 mb-md-0" name="plowing_machineries_used" value="{{$MachineneriesUsed->plowing_machineries_used}}" placeholder="Lastname" type="text" aria-label="Lastname"id="floatingInput">
                <label for="floatingInput" >Plowing Machineries used:</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
              <input id="lastname" class="form-control mb-4 mb-md-0" name="plo_ownership_status" value="{{$MachineneriesUsed->plo_ownership_status}}" placeholder="Lastname" type="text" aria-label="ExtensionName"id="floatingInput">
              <label for="floatingInput" >Ownership Status:</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="no_of_plowing"value="{{$MachineneriesUsed->no_of_plowing }}" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
            <label for="floatingInput" >No. of Plowing:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="plowing_cost"value="{{$MachineneriesUsed->plowing_cost }}" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
          <label for="floatingInput" >Plowing Cost:</label>
        </div>
      </div>
              </div>
  
            <div class="row mb-3">
              <div class="col-md-3">
                <div class="form-floating mb-4 mb-md-0">
                <input  class="form-control mb-4 mb-md-0" name="harrowing_machineries_used" value="{{$MachineneriesUsed->harrowing_machineries_used}}" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                <label for="floatingInput" >Harrowing Machineries Used:</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
                <input  class="form-control mb-4 mb-md-0" name="harro_ownership_status"value="{{$MachineneriesUsed->harro_ownership_status}}" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                <label for="floatingInput" > Ownership Status:</label>
              
            </div>
          </div>
                <div class="col-md-3">
                  <div class="form-floating mb-4 mb-md-0">
                  <input  class="form-control mb-4 mb-md-0" name="no_of_harrowing"value="{{ $MachineneriesUsed->no_of_harrowing }}" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                  <label for="floatingInput" >No. of Harrowing:</label>
                </div>
              </div>
           
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
                <input  class="form-control mb-4 mb-md-0" name="harrowing_cost"value="{{$MachineneriesUsed->harrowing_cost}}" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                <label for="floatingInput" > Harrowing Cost:</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="harvesting_machineries_used"value="{{ $MachineneriesUsed->harvesting_machineries_used }}" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
            <label for="floatingInput" >Harvesting Machineries Used:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="harvest_ownership_status" value="{{$MachineneriesUsed->harvest_ownership_status }}" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
          <label for="floatingInput" > Ownership Status:</label>
        </div>
      </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="harvesting_cost" value="{{$MachineneriesUsed->harvesting_cost}}" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
            <label for="floatingInput" >Harvesting Cost:</label>
        </div>
      </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="postharvest_machineries_used" value="{{$MachineneriesUsed->postharvest_machineries_used}}" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
          <label for="floatingInput" >Post Machineries Used:</label>
        </div>
      </div>
    </div>
            <div class="row mb-3">
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="postharv_ownership_status" value="{{$MachineneriesUsed->postharv_ownership_status}}" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
            <label for="floatingInput" >Machine Ownership Status:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="post_harvest_cost" value="{{$MachineneriesUsed->post_harvest_cost}}" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
          <label for="floatingInput" >PostHarvest Cost:</label>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-floating mb-4 mb-md-0">
        <input  class="form-control mb-4 mb-md-0" name="total_cost_for_machineries" value="{{$MachineneriesUsed->total_cost_for_machineries}}"   placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
        <label for="floatingInput" >Total Cost for Machineries:</label>
      </div>
    </div>
       
</div>
<div  class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a  href="{{route('machineries_used.create')}}"button  class="btn btn-success me-md-2">Back</button></a></p>
  <button  type="submit" class="btn btn-success me-md-2">Next</button></a></p>
          </form>
       
        </div>
      </div>
    </div>
  </div>

 
  <!--end for Production Cost-->
  {{-- <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h6 class="card-title">Import File</h6>
            <p class="text-muted mb-3">Import excel file, csv file or Msacces file only.</p>
            <input type="file" id="myDropify"/>
             --}}
       
        </div>
      </div>
    </div>
  
  </div>

</div>
@endsection