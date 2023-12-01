@extends('admin.dashb')
@section('admin')


<div class="page-content">

  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      
    </ol>
  </nav>
  <div class="progress mb-3">
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30% Complete</div>
      
             
  </div>
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">

          @if($errors->any())
          <ul class="alert alert-warning">
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
          @endif
          <h6 class="card-title"><span>II.</span>Farm Profile</h6>
      
          {{-- @section('content')
          <div class="form-floating mb-4 mb-md-0">
              <select class="form-select" name="personal_information_id" id="personalInformationDropdown" aria-label="Floating label select">
                  <option selected disabled>Select Personal Information</option>
                  @foreach( $personalInformations as $personalInfo)
                      <option value="{{ $personalInfo->id }}">{{ $personalInfo->first_name }} {{ $personalInfo->last_name }}</option>
                  @endforeach
              </select>
              <label for="personalInformationDropdown">Select Personal Information:</label>
          </div>
      @endsection  --}}
      
      {{-- @foreach($personalInformations  as $persoanlinfo)
              <input id="personal_information_id" class="form-control mb-4 mb-md-0" name="id" value="{{ $persoanlinfo->id}}" placeholder="" type="text" aria-label="personal_information_id"id="floatingInput">
              <label for="floatingInput" >personal_information_id:</label>
              <input id="personal_information_id" class="form-control mb-4 mb-md-0" name="personal_information_id" value="{{ $persoanlinfo->first_name}}" placeholder="" type="text" aria-label="personal_information_id"id="floatingInput">
              <input id="personal_information_id" class="form-control mb-4 mb-md-0" name="personal_information_id" value="{{ $persoanlinfo->last_name}}" placeholder="" type="text" aria-label="personal_information_id"id="floatingInput">
              @endforeach --}}
          <form  action{{url('farm_profiles')}} method="post"  >
            @csrf
            <div class="row mb-3">
            
              <div class="col-md-3">
 
                <div class="form-floating mb-4 mb-md-0">
                <input id="lastname" class="form-control mb-4 mb-md-0" name="tenurial_status" placeholder="" type="text" aria-label="Lastname"id="floatingInput">
                <label for="floatingInput" >Tenurial Status:</label>
              </div>
            
            </div>
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
              <input id="lastname" class="form-control mb-4 mb-md-0" name="rice_farm_address" placeholder="" type="text" aria-label="ExtensionName"id="floatingInput">
              <label for="floatingInput" >Rice Farm Address:</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="no_of_years_as_farmers" placeholder="" type="text" aria-label="MiddlName"id="floatingInput">
            <label for="floatingInput" >Number of Years as Farmers:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="gps_longitude" placeholder="" type="text" aria-label="MiddlName"id="floatingInput">
          <label for="floatingInput" >GPS_Longitude:</label>
        </div>
      </div>
              </div>
  
            <div class="row mb-3">
              <div class="col-md-3">
                <div class="form-floating mb-4 mb-md-0">
                <input  class="form-control mb-4 mb-md-0" name="gps_latitude" placeholder="" type="text" aria-label="MiddlName"id="floatingInput">
                <label for="floatingInput" >GPS_Latitude:</label>
              </div>
            </div>
      
                <div class="col-md-3">
                  <div class="form-floating mb-4 mb-md-0">
                  <input  class="form-control mb-4 mb-md-0" name="total_physical_area_has" placeholder="" type="text" aria-label="total_physical_area_ha"id="floatingInput">
                  <label for="floatingInput" >Total Physical Area(has):</label>
                </div>
              </div>
           
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
              <input  class="form-control mb-4 mb-md-0" name="rice_area_cultivated_has" placeholder="" type="text" aria-label="MiddlName"id="floatingInput">
              <label for="floatingInput" >Rice Area Cultivated(has):</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="land_title_no" placeholder="" type="text" aria-label="MiddlName"id="floatingInput">
            <label for="floatingInput" >Land Title No.:</label>
          </div>
        </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="lot_no" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
            <label for="floatingInput" >Lot No.:</label>
          </div>
        </div>
          <div class="col-md-3">
           
              <div class="form-floating mb-4 mb-md-0">
                <select class="form-select mb-4 mb-md-0" name="area_prone_to"placeholder="" id="floatingSelect" aria-label="Floating label select e">
                  <option selected disabled>Select</option>
                  <option>Flood</option>
                  <option>Drought</option>
                  <option>Drought</option>
                  <option>Drought</option>
                  
                </select>
              <label for="floatingInput" >Area Prone To:</label>
            </div>
          </div>
      
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
            <select class="form-select mb-4 mb-md-0" name="ecosystem"id="floatingSelect" aria-label="Floating label select e">
              <option selected disabled>Select</option>
              <option>Lowland Rain Fed</option>
              <option>Lowland Irrigated</option>
             
            </select>
          <label for="floatingInput" >Ecosystem:</label>
        </div>
      </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="type_rice_variety" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
          <label for="floatingInput" >Type of Rice Variety Planted:</label>
        </div>
      </div>
    </div>
            <div class="row mb-3">
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="prefered_variety" placeholder="" type="text" aria-label="MiddlName"id="floatingInput">
            <label for="floatingInput" >Preferred variety:pls Specify:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="plant_schedule_wetseason" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
          <label for="floatingInput" >Planting schedule(Wet Season):</label>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-floating mb-4 mb-md-0">
        <input  class="form-control mb-4 mb-md-0" name="plant_schedule_dryseason" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
        <label for="floatingInput" >Planting Schedule(Dry Season):</label>
      </div>
    </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
        <input  class="form-control mb-4 mb-md-0" name="no_of_cropping_yr" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
          <label for="floatingInput" >No. of Cropping/year:</label>
        </div>
      </div>
     
  </div>
  <div class="row mb-3">
    <div class="col-md-3">
      <div class="form-floating mb-4 mb-md-0">
      <input  class="form-control mb-4 mb-md-0" name="yield_kg_ha" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
      <label for="floatingInput" >Yield (Kg/Ha)::</label>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-floating mb-4 mb-md-0">
      <select class="form-select mb-4 mb-md-0" name="rsba_register"id="floatingSelect" aria-label="Floating label select e">
        <option selected disabled>Select</option>
        <option>Yes</option>
        <option>No</option>
      </select> 
    <label for="floatingInput" >RSBA Registered:</label>
  </div>
</div>
<div class="col-md-3">
  <div class="form-floating mb-4 mb-md-0">
    <select class="form-select mb-4 mb-md-0" name="pcic_insured"id="floatingSelect" aria-label="Floating label select e">
      <option selected disabled>Select</option>
      <option>Yes</option>
      <option>No</option>
    </select> 
  <label for="floatingInput" >PCIC Insured:</label>
</div>
</div>
<div class="col-md-3">
<div class="form-floating mb-4 mb-md-0">
  <select class="form-select mb-4 mb-md-0" name="source_of_capital"id="floatingSelect" aria-label="Floating label select e">
    <option selected disabled>Select</option>
    <option>Own</option>
    <option>Loan</option>
    <option>Financed</option>
  </select> 
<label for="floatingInput" >Source of Capital:</label>
</div>
</div>

</div>
<div class="row mb-3">

<div class="col-md-3">
  <div class="form-floating mb-4 mb-md-0">
    <input  class="form-control mb-4 mb-md-0" name="remarks_recommendation" placeholder="" type="text" aria-label="MiddlName"id="floatingInput">
    <label for="floatingInput" >Remarks/Recommendation:</label>
</div>
</div>
<div class="col-md-3">
  <div class="form-floating mb-4 mb-md-0">
  <input  class="form-control mb-4 mb-md-0" name="oca_district_office" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
  <label for="floatingInput" >OCA District Office:</label>
</div>
</div>
<div class="col-md-3">
<div class="form-floating mb-4 mb-md-0">
<input  class="form-control mb-4 mb-md-0" name="name_technicians" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
<label for="floatingInput" >Name of Technicians:</label>
</div>
</div>
<div class="col-md-3">
<div class="form-floating mb-4 mb-md-0">
<input  class="form-control mb-4 mb-md-0" name="date_interview" placeholder="" type="text" aria-label="MiddlName"id="floatingInput">
<label for="floatingInput" >Date Interview:</label>
</div>
</div>

</div>
<div  class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a  href="{{route('personalinfo.index')}}"button  class="btn btn-success me-md-2">Back</button></a></p>
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
          <form id="upload-form" method="post" enctype="multipart/form-data" onsubmit="saveForm(event)">
            @csrf
            <input type="file" id="myDropify"/>
          
          </form>
          
            
       
        </div>
      </div>
    </div>
  
  </div>

</div>
@endsection