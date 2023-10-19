@extends('admin.dashb')
@section('admin')

  <div class="page-content">

    <nav class="page-breadcrumb">
  
    </nav>
   
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
      
        <div class="card-body">
          @if (session('message'))
          <div class="alert alert-success" role="alert">
            {{ session('message')}}
          </div>
             
          @endif
          <h6 class="card-title"><span>I.</span>Personal Information</h6>

         {{-- <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p> --}}
         <form action="{{route('personalinfo.update',$personalInformation->farmer_no )}}" method="post" enctype="multipart/form-data">
            {{-- {{csrf_field}} --}}@csrf
            
            <div class="row mb-3">
               
              <div class="col-md-3">

                <div class="form-floating mb-4 mb-md-0"> 
            
                <input  class="form-control mb-4 mb-md-0" name="first_name" placeholder="FirstName" value="{{ $personalInformation->first_name }}" type="text" aria-label="FirstName"id="floatingInput">
                <label for="floatingInput" >FirstName:</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
              <input  class="form-control mb-4 mb-md-0" name="middle_name" placeholder="MiddleName"value="{{$personalInformation->middle_name}}"  type="text" aria-label="MiddleName"id="floatingInput">
              <label for="floatingInput" >MiddeName:</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="last_name" placeholder="Lastname" value="{{$personalInformation->last_name}}" type="text" aria-label="LastName"id="floatingInput">
            <label for="floatingInput" >LastName:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0"  name="extension_name"  placeholder="Extension Name" value="{{$personalInformation->extension_name}}" type="text" aria-label="ExtensionName"id="floatingInput">
          <label for="floatingInput" >Extension Name:</label>
        </div>
      </div>
              </div>
  
            <div class="row mb-3">
              <div class="col-md-3">
                <div class="form-floating mb-4 mb-md-0">
                <input  class="form-control mb-4 mb-md-0" name= "home_address"placeholder="Home Address"value="{{$personalInformation->home_address}}"  type="text" aria-label="HomeAddress"id="floatingInput">
                <label for="floatingInput" >Home Address:</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
                <select class="form-select mb-4 mb-md-0" name="sex"id="floatingSelect" value="{{$personalInformation->sex}}" aria-label="Floating label select e">
                  {{-- <option >Select</option>
                  {{-- <option>Male</option>
                  <option>Female</option> --}} 
                  @foreach ( json_decode('{"Select":"Select","Male":"Male", "Female":"Female"}',true) as $optionkey=> $optionValue)
                  <option value="{{$optionkey}}"{{(isset($personalInformation->sex)&& $personalInformation->sex ==$optionkey)? 'selected':''}}>{{$optionValue}}</option>
                @endforeach
                </select>
              <label for="floatingInput" >Sex:</label>
            </div>
          </div>
                <div class="col-md-3">
                  <div class="form-floating mb-4 mb-md-0">
                  <input  class="form-control mb-4 mb-md-0" name="religion" placeholder="Lastname" value="{{$personalInformation->religion}}" type="text" aria-label="MiddlName"id="floatingInput">
                  <label for="floatingInput" >Religion:</label>
                </div>
              </div>
           
            <div class="col-md-3">
              <div class="form-floating mb-4 mb-md-0">
              <input  class="form-control mb-4 mb-md-0" name="date_of_birth" placeholder="Date Of Birth"value="{{$personalInformation->date_of_birth}}"  type="textzzzzzzzz" aria-label="DateOfBirth"id="floatingInput">
              <label for="floatingInput" >Date of Birth:</label>
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="place_of_birth"placeholder="Place OF Birth"value="{{$personalInformation->place_of_birth}}"  type="text" aria-label="PlaceOfBirth"id="floatingInput">
            <label for="floatingInput" >Place of Birth:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="contact_no" placeholder="Contact no." value="{{$personalInformation->contact_no}}" type="text" aria-label="ContactNo"id="floatingInput">
          <label for="floatingInput" >Contact No.:</label>
        </div>
      </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="civil_status" placeholder="Contact no." value="{{$personalInformation->civil_status}}" type="text" aria-label="ContactNo"id="floatingInput">
            {{-- <select class="form-select mb-4 mb-md-0" name="civil_status"id="floatingSelect"aria-label="Floating label select e">
              {{-- <option selected disabled>Select</option>
              <option>Single</option>
              <option>Maried</option>
              <option>Divorced</option>
              <option>Widowed</option> --}}
              {{-- @foreach ( json_decode('{"Single":"Single","Maried":"Maried","Divorced":"Divorced","Widowed":"Widowed"}',true) as $optionkey=> $optionValue)
              <option value="{{$optionkey}}"{{(isset($personalInformation->civil_status)&& $personalInformation->civil_status==$optionkey)? 'selected':''}}>{{$optionValue}}</option>
            @endforeach  --}}
            {{-- @foreach ($personalInformation as $personalInformation)
             <option value="{{ $personalInformation }}" {{(isset($personalInformation->civil_status)&& $personalInformation->civil_status == $personalInformation) ? 'selected' : '"Single":"Single","Maried":"Maried","Divorced":"Divorced","Widowed":"Widowed"}' }}>
                {{ $personalInformation }}
              </option>
              @endforeach
            </select> --}}
          <label for="floatingInput" >Civil Status:</label>
        </div> 
      </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="name_legal_spouse"placeholder="Name of legal spouse" value="{{$personalInformation->name_legal_spouse}}" type="text" aria-label="NameOfLegalSpouse"id="floatingInput">
          <label for="floatingInput" >Name Of LegalSpouse:</label>
        </div>
      </div>
    </div>
            <div class="row mb-3">
          <div class="col-md-3">
            <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0" name="no_of_children" placeholder="No. Of Children" value="{{$personalInformation->no_of_children}}"type="text" aria-label="No.OfChildren"id="floatingInput">
            <label for="floatingInput" >No.of Children:</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
          <input  class="form-control mb-4 mb-md-0" name="mothers_maiden_name" placeholder="Mothers Maiden Name" value="{{$personalInformation->mothers_maiden_name}}"type="text" aria-label="MothersMaidenName"id="floatingInput">
          <label for="floatingInput" >Mother's maiden Name:</label>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-floating mb-4 mb-md-0">
        <input  class="form-control mb-4 mb-md-0" name="highest_formal_education" placeholder="Highest Formal Education" value="{{$personalInformation->highest_formal_education}}"type="text" aria-label="highest_formal_education"id="floatingInput">
        <label for="floatingInput" >Highest Formal Education:</label>
      </div>
    </div>
        <div class="col-md-3">
          <div class="form-floating mb-4 mb-md-0">
            <input  class="form-control mb-4 mb-md-0"name="person_with_disability" placeholder="Highest Formal Education" value="{{$personalInformation->person_with_disability}}"type="text" aria-label="highest_formal_education"id="floatingInput">
            {{-- <select class="form-select mb-4 mb-md-0" name="person_with_disability"id="floatingSelect"value="{{$personalInformation->person_with_disability}}" aria-label="Floating label select e">
              {{-- <option selected disabled>Select</option>
              <option>Yes</option>
              <option>No</option> --}}
              {{-- @foreach ( json_decode('{"Select":"Select","Yes":"Yes","No":"No"}',true) as $optionkey=> $optionValue)
              <option value="{{$optionkey}}"{{(isset($personalInformation->person_with_disability)&& $personalInformation->person_with_disability==$optionkey)? 'selected':''}}>{{$optionValue}}</option>
            @endforeach 
      
            </select> --}}
          <label for="floatingInput" >Person with Disability:</label>
        </div>
      </div>
     
  </div>
  <div class="row mb-3">
    <div class="col-md-3">
      <div class="form-floating mb-4 mb-md-0">
      <input  class="form-control mb-4 mb-md-0" name="pwd_id_no" placeholder="Lastname" value="{{$personalInformation->pwd_id_no}}"type="text" aria-label="MiddlName"id="floatingInput">
      <label for="floatingInput" >PWD ID No.:</label>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-floating mb-4 mb-md-0">
      {{-- <select class="form-select mb-4 mb-md-0" name="government_issued_id" id="floatingSelect" value="{{$personalInformation->government_issued_id}}"aria-label="Floating label select e">
        <option selected disabled>Select</option>
        <option>Yes</option>
        <option>No</option>
      </select> --}}      <input  class="form-control mb-4 mb-md-0"name="government_issued_id" placeholder="Highest Formal Education" value="{{$personalInformation->government_issued_id}}"type="text" aria-label="highest_formal_education"id="floatingInput">
    <label for="floatingInput" >Government Issued ID:</label>
  </div>
</div>
<div class="col-md-3">
  <div class="form-floating mb-4 mb-md-0">
  <input  class="form-control mb-4 mb-md-0" name="id_type" placeholder="Lastname"value="{{$personalInformation->id_type}}" type="text" aria-label="MiddlName"id="floatingInput">
  <label for="floatingInput" >ID Type:</label>
</div>
</div>
<div class="col-md-3">
<div class="form-floating mb-4 mb-md-0">
<input  class="form-control mb-4 mb-md-0"name="gov_id_no" placeholder="Lastname"value="{{$personalInformation->gov_id_no}}" type="text" aria-label="MiddlName"id="floatingInput">
<label for="floatingInput" >ID No.:</label>
</div>
</div>

</div>
<div class="row mb-3">

<div class="col-md-3">
  <div class="form-floating mb-4 mb-md-0">
    {{-- <select class="form-select mb-4 mb-md-0" name="member_ofany_farmers_ass_org_coop"id="floatingSelect"value="{{$personalInformation->member_ofany_farmers_ass_org_coop}}" aria-label="Floating label select e">
      <option selected disabled>Select</option>
      <option>Yes</option>
      <option>No</option>
    </select> --}}
    <input  class="form-control mb-4 mb-md-0"name="member_ofany_farmers_ass_org_coop" placeholder="Lastname"value="{{$personalInformation->member_ofany_farmers_ass_org_coop}}" type="text" aria-label="MiddlName"id="floatingInput">
  <label for="floatingInput" >Members in any farmers Ass/Org/Coop:</label>
</div>
</div>
<div class="col-md-3">
  <div class="form-floating mb-4 mb-md-0">
  <input  class="form-control mb-4 mb-md-0" name="nameof_farmers_ass_org_coop" placeholder="" value="{{$personalInformation->nameof_farmers_ass_org_coop}}"type="text" aria-label="MiddlName"id="floatingInput">
  <label for="floatingInput" >If yes,please specify:</label>
</div>
</div>
<div class="col-md-3">
<div class="form-floating mb-4 mb-md-0">
<input  class="form-control mb-4 mb-md-0" name="name_contact_person" placeholder="" value="{{$personalInformation->name_contact_person}}" type="text" aria-label="MiddlName"id="floatingInput">
<label for="floatingInput" >Name of Contact Person:</label>
</div>
</div>
<div class="col-md-3">
<div class="form-floating mb-4 mb-md-0">
<input  class="form-control mb-4 mb-md-0" name="cp_tel_no" placeholder="" value="{{$personalInformation->cp_tel_no}}" type="text" aria-label="MiddlName"id="floatingInput">
<label for="floatingInput" >Cellphone/Tel.no.:</label>
</div>
</div>

</div>
<div  class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a  href="{{route('personalinfo.create')}}"button  class="btn btn-success me-md-2">Back</button></a></p>
  <button  type="submit" class="btn btn-success me-md-2">Next</button></a></p>
</div>
{{-- @endforeach --}}
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