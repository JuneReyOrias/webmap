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
          <h6 class="card-title"><span>II.</span>Farm Profile</h6>

         <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p>
          <form class="forms-sample" >
            @csrf
            <div class="row mb-3">
             
              <div class="col-md-3">

                <div class="form-floating mb-4 mb-md-0">
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="Lastname"id="floatingInput">
                <label for="floatingInput" >Tenurial Status:</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="ExtensionName"id="floatingInput">
              <label for="floatingInput" >Rice Farm Address:</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
            <label for="floatingInput" >Gps_Latitude:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
          <label for="floatingInput" >Gps_Longitude:</label>
        </div>
      </div>
              </div>
  
            <div class="row mb-3">
              <div class="col-md-3">
                <div class="form-floating mb-4 mb-md-0">
                <input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                <label for="floatingInput" >No.of yrs as Rice Farmer:</label>
              </div>
            </div>
      
                <div class="col-md-3">
                  <div class="form-floating mb-4 mb-md-0">
                  <input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                  <label for="floatingInput" >Total Physical Arean(has):</label>
                </div>
              </div>
           
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
              <input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
              <label for="floatingInput" >Rice Area Cultivated(has):</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
            <label for="floatingInput" >Title No.:</label>
          </div>
        </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
            <label for="floatingInput" >Lot No.:</label>
          </div>
        </div>
          <div class="col-md-3">
           
              <div class="form-floating mb-4 mb-md-0">
                <select class="form-select mb-4 mb-md-0" name="age_select"id="floatingSelect" aria-label="Floating label select e">
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
            <select class="form-select mb-4 mb-md-0" name="age_select"id="floatingSelect" aria-label="Floating label select e">
              <option selected disabled>Select</option>
              <option>Single</option>
              <option>Maried</option>
              <option>Divorced</option>
              <option>Widowed</option>
            </select>
          <label for="floatingInput" >Ecosystem:</label>
        </div>
      </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
          <label for="floatingInput" >Name Of LegalSpouse:</label>
        </div>
      </div>
    </div>
            <div class="row mb-3">
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
            <label for="floatingInput" >No.of Children:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
          <label for="floatingInput" >Mother's maiden Name:</label>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-floating mb-4 mb-md-0">
        <input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
        <label for="floatingInput" >Highest Formal Education:</label>
      </div>
    </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
            <select class="form-select mb-4 mb-md-0" name="age_select"id="floatingSelect" aria-label="Floating label select e">
              <option selected disabled>Select</option>
              <option>Yes</option>
              <option>No</option>
            </select>
          <label for="floatingInput" >Person with Disability:</label>
        </div>
      </div>
     
  </div>
  <div class="row mb-3">
    <div class="col-md-3">
      <div class="form-floating mb-4 mb-md-0">
      <input  class="form-control mb-4 mb-md-0" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
      <label for="floatingInput" >PWD ID No.::</label>
    </div>
  </div>

  <div class="col-md-3">
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
</div>
</div>

</div>
<div  class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a  href="{{route('farmers.rice_farmersforms')}}"button  class="btn btn-success me-md-2">Back</button></a></p>
  <a  href="{{route('fixed_cost.index')}}"button  class="btn btn-success me-md-2">Next</button></a></p>
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