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
        @if($errors->any())
        <ul class="alert alert-warning">
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
        @endif
        <div class="card-body">
          <h6 class="card-title"><span>V.</span>Last Production Data</h6>

         <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p>
         <form  action{{route('production_data.update',$lastproductiondata->production_id)}} method="post"  >
            @csrf
            <div class="row mb-3">
             
              <div class="col-md-3">

                <div class="form-floating mb-4 mb-md-0">
                <input id="lastname" class="form-control mb-4 mb-md-0" name="seeds_typed_used" value="{{$lastproductiondata->seeds_typed_used}}"  placeholder="Lastname" type="text" aria-label="Lastname"id="floatingInput">
                <label for="floatingInput" >Seed Type used:</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
              <input id="lastname" class="form-control mb-4 mb-md-0" name="seeds_used_in_kg" value="{{$lastproductiondata->seeds_used_in_kg}}" placeholder="Lastname" type="text" aria-label="ExtensionName"id="floatingInput">
              <label for="floatingInput" >Seeds in kgs/bag used:</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
              <select class="form-select mb-4 mb-md-0" name="seed_source"value="{{$lastproductiondata->seed_source}}"  id="floatingSelect" aria-label="Floating label select e">
                <option selected disabled>Select</option>
                <option>Government Subsidy</option>
                <option>Traders</option>
                <option>Own</option>
              </select> 
            <label for="floatingInput" >RSBA Registered:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="no_of_fertilizer_used_in_bags"value="{{$lastproductiondata->no_of_fertilizer_used_in_bags}}"  placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
          <label for="floatingInput" >  No. of fertilizer used in bags:</label>
        </div>
      </div>
              </div>
  
            <div class="row mb-3">
              <div class="col-md-3">
                <div class="form-floating mb-4 mb-md-0">
                <input  class="form-control mb-4 mb-md-0" name="no_of_pesticides_used_in_l_per_kg" value="{{$lastproductiondata->no_of_pesticides_used_in_l_per_kg}}"  placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                <label for="floatingInput" >No. of pesticides used in l per kg:</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
                <input  class="form-control mb-4 mb-md-0" name="no_of_insecticides_used_in_l"value="{{$lastproductiondata->no_of_insecticides_used_in_l }}"  placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                <label for="floatingInput" >No. of insecticides used in l:</label>
            </div>
          </div>
                <div class="col-md-3">
                  <div class="form-floating mb-4 mb-md-0">
                  <input  class="form-control mb-4 mb-md-0" name="area_planted"value="{{$lastproductiondata->area_planted}}"  placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                  <label for="floatingInput" >Area planted:</label>
                </div>
              </div>
           
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
              <input  class="form-control mb-4 mb-md-0" name="date_planted"value="{{$lastproductiondata->date_planted}}"  placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
              <label for="floatingInput" >date_planted:</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="date_harvested"value="{{$lastproductiondata->date_harvested}}"  placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
            <label for="floatingInput" >Date Harvested:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="yield_tons_per_kg"value="{{$lastproductiondata->yield_tons_per_kg}}"  placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
          <label for="floatingInput" >Yield (tons/kg):</label>
        </div>
      </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="unit_price_palay_per_kg"value="{{$lastproductiondata->unit_price_palay_per_kg}}"  placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
            <label for="floatingInput" >Unit price palay per kg:</label>
        </div>
      </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="unit_price_rice_per_kg" value="{{$lastproductiondata->unit_price_rice_per_kg}}"  placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
          <label for="floatingInput" >Unit price rice per kg:</label>
        </div>
      </div>
    </div>
            <div class="row mb-3">
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
              <input  class="form-control mb-4 mb-md-0" name="type_of_product"value="{{$lastproductiondata->type_of_product}}"   placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
              <label for="floatingInput" >Type of product:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
            <select class="form-select mb-4 mb-md-0" name="sold_to"value="{{$lastproductiondata->sold_to}}"  id="floatingSelect" aria-label="Floating label select e">
              <option selected disabled>Select</option>
              <option>Palay</option>
              <option>Rice</option>
            </select>
          <label for="floatingInput" >Sold To:</label>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-floating mb-4 mb-md-0">
        <input  class="form-control mb-4 mb-md-0" name="if_palay_milled_where"value="{{$lastproductiondata->if_palay_milled_where}}"  placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
        <label for="floatingInput" >If palay milled where?:</label>
      </div>
    </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="gross_income_palay"value="{{$lastproductiondata->gross_income_palay}}"  placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
      <label for="floatingInput" >Gross Income (Palay)</label>
        </div>
      </div>
     
  </div>
   <div class="row mb-3">
    <div class="col-md-3">
      <div class="form-floating mb-4 mb-md-0">
      <input  class="form-control mb-4 mb-md-0" name="gross_income_rice"value="{{$lastproductiondata->gross_income_rice}}"  placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
      <label for="floatingInput" >Gross Income (Rice):</label>
    </div>
  </div>

  {{-- <div class="col-md-3">
    <div class="form-floating mb-4 mb-md-0">
      <select class="form-select mb-4 mb-md-0" name="age_select"id="floatingSelect" aria-label="Floating label select e">
        <option selected disabled>Select</option>
        <option>Yes</option>
        <option>No</option>
      </select>
    <label for="floatingInput" >Government Issued ID:</label>
  </div>
</div>
<div class="col-md-3">
  <div class="form-floating mb-4 mb-md-0">
  <input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
  <label for="floatingInput" >ID Type:</label>
</div>
</div>
<div class="col-md-3">
<div class="form-floating mb-4 mb-md-0">
<input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
<label for="floatingInput" >ID No.:</label>
</div>
</div>

</div>
<div class="row mb-3">

<div class="col-md-3">
  <div class="form-floating mb-4 mb-md-0">
    <select class="form-select mb-4 mb-md-0" name="age_select"id="floatingSelect" aria-label="Floating label select e">
      <option selected disabled>Select</option>
      <option>Yes</option>
      <option>No</option>
    </select>
  <label for="floatingInput" >Members in any farmers Ass/Org/Coop:</label>
</div>
</div>
<div class="col-md-3">
  <div class="form-floating mb-4 mb-md-0">
  <input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
  <label for="floatingInput" >If yes,please specify:</label>
</div>
</div>
<div class="col-md-3">
<div class="form-floating mb-4 mb-md-0">
<input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
<label for="floatingInput" >Name of Contact Person:</label>
</div>
</div>
<div class="col-md-3">
<div class="form-floating mb-4 mb-md-0">
<input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
<label for="floatingInput" >Cellphone/Tel.no.:</label>
</div> --}}
{{-- </div>  --}}

</div>
<div  class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a  href="{{route('production_data.create')}}"button  class="btn btn-success me-md-2">Back</button></a></p>
  <button  type="submit" class="btn btn-success me-md-2">Next</button></a></p>
          </form>
       
        </div>
      </div>
    </div>
  </div>


  <!--end for Production Cost-->
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h6 class="card-title">Import File</h6>
            <p class="text-muted mb-3">Import excel file, csv file or Msacces file only.</p>
            <input type="file" id="myDropify"/>
            
       
        </div>
      </div>
    </div>
  
  </div>

</div>
@endsection