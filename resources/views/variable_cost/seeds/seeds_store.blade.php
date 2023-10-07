@extends('admin.dashb')
@section('admin')


<div class="page-content">

  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
  </nav>
  <div class="progress mb-3">
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75% Complete</div>

  </div>
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        @if($errors->any())
        <ul class="alert alert-warning">
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach@extends('admin.dashb')
          @section('admin')
          
          
          <div class="page-content">
          
            <nav class="page-breadcrumb">
              <ol class="breadcrumb">
                
              </ol>
            </nav>
            <div class="progress mb-3">
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75% Complete</div>
          
            </div>
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
                    <h6 class="card-title"><span>VI.</span>Variable Cost</h6>
                    <h5 class="card-title"><span>a.</span>Seeds</h5>
                   {{-- <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p> --}}
                   <form  action{{url('last_production_datas')}} method="post"  >
                      @csrf
                      <div class="row mb-3">
                       
                        <div class="col-md-3">
          
                          <div class="form-floating mb-4 mb-md-0">
                          <input id="lastname" class="form-control mb-4 mb-md-0" name="seeds_typed_used" placeholder="Lastname" type="text" aria-label="Lastname"id="floatingInput">
                          <label for="floatingInput" >Seed Type used:</label>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-floating mb-4 mb-md-0">
                        <input id="lastname" class="form-control mb-4 mb-md-0" name="seeds_used_in_kg" placeholder="Lastname" type="text" aria-label="ExtensionName"id="floatingInput">
                        <label for="floatingInput" >Seeds in kgs/bag used:</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-floating mb-4 mb-md-0">
                        <select class="form-select mb-4 mb-md-0" name="seed_source"id="floatingSelect" aria-label="Floating label select e">
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
                    <input  class="form-control mb-4 mb-md-0" name="no_of_fertilizer_used_in_bags" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                    <label for="floatingInput" >  No. of fertilizer used in bags:</label>
                  </div>
                </div>
                        </div>
            
                      <div class="row mb-3">
                        <div class="col-md-3">
                          <div class="form-floating mb-4 mb-md-0">
                          <input  class="form-control mb-4 mb-md-0" name="no_of_pesticides_used_in_l_per_kg" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                          <label for="floatingInput" >No. of pesticides used in l per kg:</label>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-floating mb-4 mb-md-0">
                          <input  class="form-control mb-4 mb-md-0" name="no_of_insecticides_used_in_l" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                          <label for="floatingInput" >No. of insecticides used in l:</label>
                      </div>
                    </div>
                          <div class="col-md-3">
                            <div class="form-floating mb-4 mb-md-0">
                            <input  class="form-control mb-4 mb-md-0" name="area_planted" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                            <label for="floatingInput" >Area planted:</label>
                          </div>
                        </div>
                     
                      <div class="col-md-3">
                        <div class="form-floating mb-4 mb-md-0">
                        <input  class="form-control mb-4 mb-md-0" name="date_planted" placeholder="Lastname" type="date" aria-label="MiddlName"id="floatingInput">
                        <label for="floatingInput" >date_planted:</label>
                      </div>
                    </div>
                  </div>
          
                  <div class="row mb-3">
                    <div class="col-md-3">
                      <div class="form-floating mb-4 mb-md-0">
                      <input  class="form-control mb-4 mb-md-0" name="date_harvested" placeholder="Lastname" type="date" aria-label="MiddlName"id="floatingInput">
                      <label for="floatingInput" >Date Harvested:</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-floating mb-4 mb-md-0">
                    <input  class="form-control mb-4 mb-md-0" name="yield_tons_per_kg" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                    <label for="floatingInput" >Yield (tons/kg):</label>
                  </div>
                </div>
                  <div class="col-md-3">
                    <div class="form-floating mb-4 mb-md-0">
                      <input  class="form-control mb-4 mb-md-0" name="unit_price_palay_per_kg" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                      <label for="floatingInput" >Unit price palay per kg:</label>
                  </div>
                </div>
                  <div class="col-md-3">
                    <div class="form-floating mb-4 mb-md-0">
                    <input  class="form-control mb-4 mb-md-0" name="unit_price_rice_per_kg" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                    <label for="floatingInput" >Unit price rice per kg:</label>
                  </div>
                </div>
              </div>
                      <div class="row mb-3">
                    <div class="col-md-3">
                      <div class="form-floating mb-4 mb-md-0">
                        <input  class="form-control mb-4 mb-md-0" name="type_of_product" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                        <label for="floatingInput" >Type of product:</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-floating mb-4 mb-md-0">
                      <select class="form-select mb-4 mb-md-0" name="sold_to"id="floatingSelect" aria-label="Floating label select e">
                        <option selected disabled>Select</option>
                        <option>Palay</option>
                        <option>Rice</option>
                      </select>
                    <label for="floatingInput" >Sold To:</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-floating mb-4 mb-md-0">
                  <input  class="form-control mb-4 mb-md-0" name="if_palay_milled_where" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                  <label for="floatingInput" >If palay milled where?:</label>
                </div>
              </div>
                  <div class="col-md-3">
                    <div class="form-floating mb-4 mb-md-0">
                      <input  class="form-control mb-4 mb-md-0" name="gross_income_palay" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                <label for="floatingInput" >Gross Income (Palay)</label>
                  </div>
                </div>
               
            </div>
             <div class="row mb-3">
              <div class="col-md-3">
                <div class="form-floating mb-4 mb-md-0">
                <input  class="form-control mb-4 mb-md-0" name="gross_income_rice" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
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
            <a  href="{{route('farm_profile.index')}}"button  class="btn btn-success me-md-2">Back</button></a></p>
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
        </ul>
        @endif
        <div class="card-body">
          
          <h6 class="card-title"><span>VI.</span>Variable Cost</h6>
          <h5 class="card-title"><span>a.</span>Seeds</h5>
         {{-- <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p> --}}
          <form action{{url('seeds')}} method="post">
            @csrf
            <div class="row mb-3">
             
              <div class="col-md-3">

                <div class="form-floating mb-4 mb-md-0">
                <input  class="form-control mb-4 mb-md-0" name="seed_name" placeholder="FirstName" type="text" aria-label="FirstName"id="floatingInput">
                <label for="floatingInput" >Seed Name:</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
              <input  class="form-control mb-4 mb-md-0" name="seed_type" placeholder="MiddleName" type="text" aria-label="MiddleName"id="floatingInput">
              <label for="floatingInput" >Seed Type:</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="unit" placeholder="Lastname" type="text" aria-label="LastName"id="floatingInput">
            <label for="floatingInput" >Unit:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0"  name="quantity"  placeholder="Extension Name" type="text" aria-label="ExtensionName"id="floatingInput">
          <label for="floatingInput" >Quantity:</label>
        </div>
      </div>
              </div>
  
            <div class="row mb-3">
              <div class="col-md-3">
                <div class="form-floating mb-4 mb-md-0">
                <input  class="form-control mb-4 mb-md-0" name= "unit_price"placeholder="Home Address" type="text" aria-label="HomeAddress"id="floatingInput">
                <label for="floatingInput" >Unit Price:</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
                <input  class="form-control mb-4 mb-md-0" name= "total_seed_cost"placeholder="Home Address" type="text" aria-label="HomeAddress"id="floatingInput">
                <label for="floatingInput" >Total Seed Cost:</label>
            </div>
          </div>
                {{-- <div class="col-md-3">
                  <div class="form-floating mb-4 mb-md-0">
                  <input  class="form-control mb-4 mb-md-0" name="religion" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
                  <label for="floatingInput" >Religion:</label>
                </div>
              </div>
           
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
              <input  class="form-control mb-4 mb-md-0" name="date_of_birth" placeholder="Date Of Birth" type="date" aria-label="DateOfBirth"id="floatingInput">
              <label for="floatingInput" >Date of Birth:</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="place_of_birth"placeholder="Place OF Birth" type="text" aria-label="PlaceOfBirth"id="floatingInput">
            <label for="floatingInput" >Place of Birth:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="contact_no" placeholder="Contact no." type="text" aria-label="ContactNo"id="floatingInput">
          <label for="floatingInput" >Contact No.:</label>
        </div>
      </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
            <select class="form-select mb-4 mb-md-0" name="civil_status"id="floatingSelect" aria-label="Floating label select e">
              <option selected disabled>Select</option>
              <option>Single</option>
              <option>Maried</option>
              <option>Divorced</option>
              <option>Widowed</option>
            </select>
          <label for="floatingInput" >Civil Status:</label>
        </div>
      </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="name_legal_spouse"placeholder="Name of legal spouse" type="text" aria-label="NameOfLegalSpouse"id="floatingInput">
          <label for="floatingInput" >Name Of LegalSpouse:</label>
        </div>
      </div>
    </div>
            <div class="row mb-3">
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="no_of_children" placeholder="No. Of Children" type="text" aria-label="No.OfChildren"id="floatingInput">
            <label for="floatingInput" >No.of Children:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="mothers_maiden_name" placeholder="Mothers Maiden Name" type="text" aria-label="MothersMaidenName"id="floatingInput">
          <label for="floatingInput" >Mother's maiden Name:</label>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-floating mb-4 mb-md-0">
        <input  class="form-control mb-4 mb-md-0" name="highest_formal_education" placeholder="Highest Formal Education" type="text" aria-label="highest_formal_education"id="floatingInput">
        <label for="floatingInput" >Highest Formal Education:</label>
      </div>
    </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
            <select class="form-select mb-4 mb-md-0" name="person_with_disability"id="floatingSelect" aria-label="Floating label select e">
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
      <input  class="form-control mb-4 mb-md-0" name="pwd_id_no" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
      <label for="floatingInput" >PWD ID No.:</label>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-floating mb-4 mb-md-0">
      <select class="form-select mb-4 mb-md-0" name="government_issued_id" id="floatingSelect" aria-label="Floating label select e">
        <option selected disabled>Select</option>
        <option>Yes</option>
        <option>No</option>
      </select>
    <label for="floatingInput" >Government Issued ID:</label>
  </div>
</div>
<div class="col-md-3">
  <div class="form-floating mb-4 mb-md-0">
  <input  class="form-control mb-4 mb-md-0" name="id_type" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
  <label for="floatingInput" >ID Type:</label>
</div>
</div>
<div class="col-md-3">
<div class="form-floating mb-4 mb-md-0">
<input  class="form-control mb-4 mb-md-0"name="gov_id_no" placeholder="Lastname" type="text" aria-label="MiddlName"id="floatingInput">
<label for="floatingInput" >ID No.:</label>
</div>
</div>

</div>
<div class="row mb-3">

<div class="col-md-3">
  <div class="form-floating mb-4 mb-md-0">
    <select class="form-select mb-4 mb-md-0" name="member_ofany_farmers_ass_org_coop"id="floatingSelect" aria-label="Floating label select e">
      <option selected disabled>Select</option>
      <option>Yes</option>
      <option>No</option>
    </select>
  <label for="floatingInput" >Members in any farmers Ass/Org/Coop:</label>
</div>
</div>
<div class="col-md-3">
  <div class="form-floating mb-4 mb-md-0">
  <input  class="form-control mb-4 mb-md-0" name="nameof_farmers_ass_org_coop" type="text" aria-label="MiddlName"id="floatingInput">
  <label for="floatingInput" >If yes,please specify:</label>
</div>
</div>
<div class="col-md-3">
<div class="form-floating mb-4 mb-md-0">
<input  class="form-control mb-4 mb-md-0" name="name_contact_person" type="text" aria-label="MiddlName"id="floatingInput">
<label for="floatingInput" >Name of Contact Person:</label>
</div>
</div>
<div class="col-md-3">
<div class="form-floating mb-4 mb-md-0">
<input  class="form-control mb-4 mb-md-0" name="cp_tel_no" type="text" aria-label="MiddlName"id="floatingInput">
<label for="floatingInput" >Cellphone/Tel.no.:</label>
</div>
</div> --}}

</div>
<div  class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a  href="{{route('production_data.index')}}"button  class="btn btn-success me-md-2">Back</button></a></p>
  <button  type="submit" class="btn btn-success me-md-2">Next</button></a></p>
</div>
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
            <div class="form-errors"></div>
            <form id="upload-form" method="post" enctype="multipart/form-data" onsubmit="saveForm(event)">
              @csrf
       
                <div class="form-group mb-3">
                  <label for=inputemail>Upload</label>
                  <input type="file" class ="form-control" id="myDropify" name="upload_file" aria-describedby="emailHelp">
                  <span class="text-danger input_image_err formErrors"></span>
              </div>
            <div class="form-group mb-2 text-center">
              <button type="submit" class="btn btn-primary me-2">Submit</button>
            </div>
             
            </form>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmz9ATKxIep9tiCx5/Z9fNEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
            </script>
            <script sr="https://cdn. jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtY10QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

             <script>
              function saveForm(e){
                e.preventDefault();
                console.log($('#upload-form'));
                var uploadForm= $('upload-for,')(0);
                Var uploadFormData= new FormData(uploadForm);

                $.ajax({
                  method="Post",
                  url:"{{url('saveUploadForm')}}",
                  data:uploadFormData,
                  processData:false,
                  contentType:false,
                  success:function(response){
                    console.log(response);
                    $(#form-errors).html('');
                  },
                  error:function(response){

                  }
                })
              }
             </script>
           
       
        </div>
      </div>
    </div>
  
  </div>

</div>@endsection