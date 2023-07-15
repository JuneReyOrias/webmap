@extends('admin.dashb')
@section('admin')


<div class="page-content">

  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Forms</a></li>
      <li class="breadcrumb-item active" aria-current="page">Rice Survey Forms</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title"><span>I.</span>Personal Information</h6>

         <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p>
          <form class="forms-sample">
            <div class="row mb-3">
              <div class="col">
                <label for="lastname" class="form-label">LastName:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your Lastname" type="text">
              </div>
              <div class="col">
                <label class="form-label">MiddlName:</label>
                <input type="text" class="form-control mb-4 mb-md-0" name="middlename" id="middlename" placeholder="Enter Your Middle name">
              </div>
              <div class="col">
                <label class="form-label">FirstName:</label>
                <input type="text" class="form-control mb-4 mb-md-0" name="firstname" id="firstname" placeholder="Enter your Firstname">
              </div>
              <div class="col">
                <label class="form-label">ExtensionName:</label>
                <input type="text" class="form-control mb-2 mb-md-1" name="ExtensionName" id="ExtensionName" placeholder="Enter your ExtensionName">
              </div>
              </div>
  
            <div class="row mb-3">
              <div class="col-md-5">
                <label class="form-label">Home Address:</label>
                <input class="form-control mb-4 mb-md-0" name="ExtensionName" id="ExtensionName" placeholder="Enter your home address" />
              </div>
              <div class="col-md-3">
                <label class="form-label">Sex</label>
                <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                <option selected disabled>Select your sex</option>
                <option>Male</option>
                <option>Female</option>
              </select>
              </div>
            
              <div class="col-md-3">
                <label class="form-label">Religion:</label>
                <input class="form-control mb-4 mb-md-0" name="ExtensionName" id="ExtensionName" placeholder="Enter your Religion" />
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label for="lastname" class="form-label">Date of Birth:</label>
                <input type="date" id="lastname" class="form-control mb-4 mb-md-0" >
              </div>
              <div class="col">
                <label for="lastname" class="form-label">Place of Birth:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your Place of Birth" type="text">
              </div>
              <div class="col">
                <label class="form-label">Contact Number:</label>
                <input class="form-control mb-4 mb-md-0" placeholder="Enter your contact number" type="text"/>
              </div>
              <div class="col">
              <label class="form-label">Civil Status</label>
                <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                <option selected disabled>Select</option>
                <option>Single</option>
                <option>Maried</option>
              </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label for="lastname" class="form-label">Name Of Legal Spouse:</label>
                <input class="form-control mb-4 mb-md-0" placeholder="Enter your spouse name" type="text"/>
              </div>
              <div class="col">
                <label for="lastname" class="form-label">No.of Children:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your no. of children" type="text">
              </div>
              <div class="col">
                <label class="form-label">Mother's maiden Name:</label>
                <input class="form-control mb-4 mb-md-0" placeholder="Enter your Mother's maiden Name" type="text"/>
              </div>
              <div class="col">
                <label class="form-label">Highest Formal Education :</label>
                <input class="form-control mb-4 mb-md-0" placeholder="Enter your Education" type="text"/>
              </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                  <label class="form-label">Person with Disability</label>
                    <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                    <option selected disabled>Select</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                  </div>
              <div class="col">
                <label for="lastname" class="form-label">PWD ID No.:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter PWD ID No." type="text">
              </div>
              <div class="col">
                <label class="form-label">Government Issued ID</label>
                  <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                  <option selected disabled>Select</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
                </div>
                <div class="col">
                  <label for="lastname" class="form-label">ID type:</label>
                  <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter ID type" type="text">
                </div>
                <div class="col">
                  <label for="lastname" class="form-label">ID No.:</label>
                  <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter ID no." type="text">
                </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label">Members of any Farmers Assoc/Org/Coop</label>
                  <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                  <option selected disabled>Select</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
                </div>
            <div class="col">
              <label for="lastname" class="form-label">if yes, please specify:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter specify name." type="text">
            </div>
              <div class="col">
                <label for="lastname" class="form-label">Name of Contact Person:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter name of contact person" type="text">
              </div>
              <div class="col">
                <label for="lastname" class="form-label">Cp/Tel no.:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter cp/tel.no.." type="text">
              </div>
          </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!---->
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title"><span>II.</span>Farm Profile</h6>

         <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p>
          <form class="forms-sample">
            <div class="row mb-3">
              <div class="col">
                <label for="lastname" class="form-label">Tenurial Status:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your Lastname" type="text">
              </div>
              <div class="col">
                <label class="form-label">Rice Farm Address:</label>
                <input type="text" class="form-control mb-4 mb-md-0" name="middlename" id="middlename" placeholder="Enter Your Middle name">
              </div>
              <div class="col">
                <label class="form-label">Number of the years as Rice Farmer:</label>
                <input type="text" class="form-control mb-4 mb-md-0" name="firstname" id="firstname" placeholder="Enter your Firstname">
              </div>
              <div class="col">
                <label class="form-label">GPS-Longitude:</label>
                <input type="text" class="form-control mb-2 mb-md-1" name="ExtensionName" id="ExtensionName" placeholder="Enter your ExtensionName">
              </div>
              </div>
  
            <div class="row mb-3">
              <div class="col-md-5">
                <label class="form-label">GPS-Latitude:</label>:</label>
                <input class="form-control mb-4 mb-md-0" name="ExtensionName" id="ExtensionName" placeholder="Enter your home address" />
              </div>
              <div class="col-md-3">
                <label class="form-label">Total Physical Area</label>
                <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                <option selected disabled>Select your sex</option>
                <option>Male</option>
                <option>Female</option>
              </select>
              </div>
            
              <div class="col-md-3">
                <label class="form-label">GPS Coordinates Longitude:</label>
                <input class="form-control mb-4 mb-md-0" name="ExtensionName" id="ExtensionName" placeholder="Enter your Religion" />
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label for="lastname" class="form-label">Total Physical Area(has):</label>
                <input type="date" id="lastname" class="form-control mb-4 mb-md-0" >
              </div>
              <div class="col">
                <label for="lastname" class="form-label">Titile Number:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your Place of Birth" type="text">
              </div>
              <div class="col">
                <label class="form-label">Lot No.:</label>
                <input class="form-control mb-4 mb-md-0" placeholder="Enter your contact number" type="text"/>
              </div>
              <div class="col">
              <label class="form-label">Prefered Variety:Specify</label>
                <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                <option selected disabled>Select</option>
                <option>Single</option>
                <option>Maried</option>
              </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label for="lastname" class="form-label">Type of Rice Variety Planted:</label>
                <input class="form-control mb-4 mb-md-0" placeholder="Enter your spouse name" type="text"/>
              </div>
              <div class="col">
                <label for="lastname" class="form-label">Yield(kg/Ha.):</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your no. of children" type="text">
              </div>
              <div class="col">
                <label class="form-label">:</label>
                <input class="form-control mb-4 mb-md-0" placeholder="Enter your Mother's maiden Name" type="text"/>
              </div>
              <div class="col">
                <label class="form-label">RSBSA Registered:</label>
                <input class="form-control mb-4 mb-md-0" placeholder="Enter your Education" type="text"/>
              </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                  <label class="form-label">PCIC Insured.:</label>
                    <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                    <option selected disabled>Select</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                  </div>
              <div class="col">
                <label for="lastname" class="form-label">Goverment Assisted.:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter PWD ID No." type="text">
              </div>
              <div class="col">
                <label class="form-label">Source of Capital</label></label>
                  <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                  <option selected disabled>Select</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
                </div>
                <div class="col">
                  <label for="lastname" class="form-label">Remarks/Recommendation:</label>
                  <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter ID type" type="text">
                </div>
                <div class="col">
                  <label for="lastname" class="form-label">Interviewed by.:</label>
                  <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter ID no." type="text">
                </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label">Date of Interview</label>
                  <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                  <option selected disabled>Select</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
                </div>
            <div class="col">
              <label for="lastname" class="form-label">District:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter specify name." type="text">
            </div>
              <div class="col">
                <label for="lastname" class="form-label">Name of Contact Person:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter name of contact person" type="text">
              </div>
              <div class="col">
                <label for="lastname" class="form-label">Cp/Tel no.:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter cp/tel.no.." type="text">
              </div>
          </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<!--end of the forms-->

<!--Cost and Return-->
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title"><span>III.</span>Cost and Return</h6>

       <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p>
        <form class="forms-sample">
          <div class="row mb-3">
            <div class="col">
              <label for="lastname" class="form-label">Name of farmer:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your Lastname" type="text">
            </div>
            <div class="col">
              <label class="form-label">Farm Address:</label>
              <input type="text" class="form-control mb-4 mb-md-0" name="middlename" id="middlename" placeholder="Enter Your Middle name">
            </div>
            <div class="col">
              <label class="form-label">Fixed Cost:</label>
              <input type="text" class="form-control mb-4 mb-md-0" name="firstname" id="firstname" placeholder="Enter your Firstname">
            </div>
            <div class="col">
              <label class="form-label">Variables Cost:</label>
              <input type="text" class="form-control mb-2 mb-md-1" name="ExtensionName" id="ExtensionName" placeholder="Enter your ExtensionName">
            </div>
            </div>

          <div class="row mb-3">
            <div class="col-md-5">
              <label class="form-label">Rice Farmer No:</label>
              <input class="form-control mb-4 mb-md-0" name="ExtensionName" id="ExtensionName" placeholder="Enter your home address" />
            </div>
            <div class="col-md-3">
              <label class="form-label">Seeds</label>
              <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
              <option selected disabled>Select your sex</option>
              <option>Male</option>
              <option>Female</option>
            </select>
            </div>
          
            <div class="col-md-3">
              <label class="form-label">Unit:</label>
              <input class="form-control mb-4 mb-md-0" name="ExtensionName" id="ExtensionName" placeholder="Enter your Religion" />
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="lastname" class="form-label">Quantity:</label>
              <input type="date" id="lastname" class="form-control mb-4 mb-md-0" >
            </div>
            <div class="col">
              <label for="lastname" class="form-label">Unit Price:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your Place of Birth" type="text">
            </div>
            <div class="col">
              <label class="form-label">Total Rice Cost:</label>
              <input class="form-control mb-4 mb-md-0" placeholder="Enter your contact number" type="text"/>
            </div>
            <div class="col">
            <label class="form-label">Labor (No of Person)</label>
              <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
              <option selected disabled>Select</option>
              <option>Single</option>
              <option>Maried</option>
            </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="lastname" class="form-label"> Rate/Person:</label>
              <input class="form-control mb-4 mb-md-0" placeholder="Enter your spouse name" type="text"/>
            </div>
            <div class="col">
              <label for="lastname" class="form-label">Total Labor Cost:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your no. of children" type="text">
            </div>
            <div class="col">
              <label class="form-label">Fertilizers(No of Sacks):</label>
              <input class="form-control mb-4 mb-md-0" placeholder="Enter your Mother's maiden Name" type="text"/>
            </div>
            <div class="col">
              <label class="form-label">Unit Price/Sack:</label>
              <input class="form-control mb-4 mb-md-0" placeholder="Enter your Education" type="text"/>
            </div>
          </div>
          <div class="row mb-3">
              <div class="col">
                <label class="form-label">Total Cost of Fertilizers</label>
                  <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                  <option selected disabled>Select</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
                </div>
            <div class="col">
              <label for="lastname" class="form-label">Pesticides (No of L or Kg).:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter PWD ID No." type="text">
            </div>
            <div class="col">
              <label class="form-label"> Unit Price of Pesticides </label>
                <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                <option selected disabled>Select</option>
                <option>Yes</option>
                <option>No</option>
              </select>
              </div>
              <div class="col">
                <label for="lastname" class="form-label">Total Pesticides:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter ID type" type="text">
              </div>
              <div class="col">
                <label for="lastname" class="form-label">Total Fuel Cost:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter ID no." type="text">
              </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label class="form-label">Total Variable Cost</label>
                <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                <option selected disabled>Select</option>
                <option>Yes</option>
                <option>No</option>
              </select>
              </div>
          <div class="col">
            <label for="lastname" class="form-label">Farrm Machineries:</label>
            <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter specify name." type="text">
          </div>
            <div class="col">
              <label for="lastname" class="form-label">Rice Farmer No:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter name of contact person" type="text">
            </div>
            <div class="col">
              <label for="lastname" class="form-label">Plowing Cost:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter cp/tel.no.." type="text">
            </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Total Variable Cost</label>
              <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
              <option selected disabled>Select</option>
              <option>Yes</option>
              <option>No</option>
            </select>
            </div>
        <div class="col">
          <label for="lastname" class="form-label">Farrm Machineries:</label>
          <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter specify name." type="text">
        </div>
          <div class="col">
            <label for="lastname" class="form-label">Rice Farmer No:</label>
            <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter name of contact person" type="text">
          </div>
          <div class="col">
            <label for="lastname" class="form-label">Plowing Cost:</label>
            <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter cp/tel.no.." type="text">
          </div>
      </div>

       <div class="row mb-3">
            <div class="col">
              <label class="form-label">Total Variable Cost</label>
                <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                <option selected disabled>Select</option>
                <option>Yes</option>
                <option>No</option>
              </select>
              </div>
          <div class="col">
            <label for="lastname" class="form-label">Farrm Machineries:</label>
            <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter specify name." type="text">
          </div>
            <div class="col">
              <label for="lastname" class="form-label">Rice Farmer No:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter name of contact person" type="text">
            </div>
            <div class="col">
              <label for="lastname" class="form-label">Plowing Cost:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter cp/tel.no.." type="text">
            </div>
        </div>
<!--start below-->
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Harrowing Cost:</label>
              <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
              <option selected disabled>Select</option>
              <option>Yes</option>
              <option>No</option>
            </select>
            </div>
        <div class="col">
          <label for="lastname" class="form-label">Harvest Cost:</label>
          <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter specify name." type="text">
        </div>
          <div class="col">
            <label for="lastname" class="form-label">Post Harvest:</label>
            <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter name of contact person" type="text">
          </div>
          <div class="col">
            <label for="lastname" class="form-label">Total Cost For Machineries:</label>
            <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter cp/tel.no.." type="text">
          </div>
      </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--end of the farm profile-->

 <!--start for Production Cost-->
 <div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title"><span>III.</span>Cost and Return</h6>

       <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p>
        <form class="forms-sample">
          <div class="row mb-3">
            <div class="col">
              <label for="lastname" class="form-label">Name of farmer:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your Lastname" type="text">
            </div>
            <div class="col">
              <label class="form-label">Farm Address:</label>
              <input type="text" class="form-control mb-4 mb-md-0" name="middlename" id="middlename" placeholder="Enter Your Middle name">
            </div>
            <div class="col">
              <label class="form-label">Fixed Cost:</label>
              <input type="text" class="form-control mb-4 mb-md-0" name="firstname" id="firstname" placeholder="Enter your Firstname">
            </div>
            <div class="col">
              <label class="form-label">Variables Cost:</label>
              <input type="text" class="form-control mb-2 mb-md-1" name="ExtensionName" id="ExtensionName" placeholder="Enter your ExtensionName">
            </div>
            </div>

          <div class="row mb-3">
            <div class="col-md-5">
              <label class="form-label">Rice Farmer No:</label>
              <input class="form-control mb-4 mb-md-0" name="ExtensionName" id="ExtensionName" placeholder="Enter your home address" />
            </div>
            <div class="col-md-3">
              <label class="form-label">Seeds</label>
              <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
              <option selected disabled>Select your sex</option>
              <option>Male</option>
              <option>Female</option>
            </select>
            </div>
          
            <div class="col-md-3">
              <label class="form-label">Unit:</label>
              <input class="form-control mb-4 mb-md-0" name="ExtensionName" id="ExtensionName" placeholder="Enter your Religion" />
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="lastname" class="form-label">Quantity:</label>
              <input type="date" id="lastname" class="form-control mb-4 mb-md-0" >
            </div>
            <div class="col">
              <label for="lastname" class="form-label">Unit Price:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your Place of Birth" type="text">
            </div>
            <div class="col">
              <label class="form-label">Total Rice Cost:</label>
              <input class="form-control mb-4 mb-md-0" placeholder="Enter your contact number" type="text"/>
            </div>
            <div class="col">
            <label class="form-label">Labor (No of Person)</label>
              <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
              <option selected disabled>Select</option>
              <option>Single</option>
              <option>Maried</option>
            </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="lastname" class="form-label"> Rate/Person:</label>
              <input class="form-control mb-4 mb-md-0" placeholder="Enter your spouse name" type="text"/>
            </div>
            <div class="col">
              <label for="lastname" class="form-label">Total Labor Cost:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter your no. of children" type="text">
            </div>
            <div class="col">
              <label class="form-label">Fertilizers(No of Sacks):</label>
              <input class="form-control mb-4 mb-md-0" placeholder="Enter your Mother's maiden Name" type="text"/>
            </div>
            <div class="col">
              <label class="form-label">Unit Price/Sack:</label>
              <input class="form-control mb-4 mb-md-0" placeholder="Enter your Education" type="text"/>
            </div>
          </div>
          <div class="row mb-3">
              <div class="col">
                <label class="form-label">Total Cost of Fertilizers</label>
                  <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                  <option selected disabled>Select</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
                </div>
            <div class="col">
              <label for="lastname" class="form-label">Pesticides (No of L or Kg).:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter PWD ID No." type="text">
            </div>
            <div class="col">
              <label class="form-label"> Unit Price of Pesticides </label>
                <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                <option selected disabled>Select</option>
                <option>Yes</option>
                <option>No</option>
              </select>
              </div>
              <div class="col">
                <label for="lastname" class="form-label">Total Pesticides:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter ID type" type="text">
              </div>
              <div class="col">
                <label for="lastname" class="form-label">Total Fuel Cost:</label>
                <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter ID no." type="text">
              </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label class="form-label">Total Variable Cost</label>
                <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                <option selected disabled>Select</option>
                <option>Yes</option>
                <option>No</option>
              </select>
              </div>
          <div class="col">
            <label for="lastname" class="form-label">Farrm Machineries:</label>
            <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter specify name." type="text">
          </div>
            <div class="col">
              <label for="lastname" class="form-label">Rice Farmer No:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter name of contact person" type="text">
            </div>
            <div class="col">
              <label for="lastname" class="form-label">Plowing Cost:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter cp/tel.no.." type="text">
            </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Total Variable Cost</label>
              <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
              <option selected disabled>Select</option>
              <option>Yes</option>
              <option>No</option>
            </select>
            </div>
        <div class="col">
          <label for="lastname" class="form-label">Farrm Machineries:</label>
          <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter specify name." type="text">
        </div>
          <div class="col">
            <label for="lastname" class="form-label">Rice Farmer No:</label>
            <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter name of contact person" type="text">
          </div>
          <div class="col">
            <label for="lastname" class="form-label">Plowing Cost:</label>
            <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter cp/tel.no.." type="text">
          </div>
      </div>

       <div class="row mb-3">
            <div class="col">
              <label class="form-label">Total Variable Cost</label>
                <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
                <option selected disabled>Select</option>
                <option>Yes</option>
                <option>No</option>
              </select>
              </div>
          <div class="col">
            <label for="lastname" class="form-label">Farrm Machineries:</label>
            <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter specify name." type="text">
          </div>
            <div class="col">
              <label for="lastname" class="form-label">Rice Farmer No:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter name of contact person" type="text">
            </div>
            <div class="col">
              <label for="lastname" class="form-label">Plowing Cost:</label>
              <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter cp/tel.no.." type="text">
            </div>
        </div>
<!--middle production-->
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Rice Farmer:</label>
              <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
              <option selected disabled>Select</option>
              <option>Yes</option>
              <option>No</option>
            </select>
            </div>
        <div class="col">
          <label for="lastname" class="form-label">Seed Type Used :</label>
          <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter specify name." type="text">
        </div>
          <div class="col">
            <label for="lastname" class="form-label">Seeds Used (in kg) :</label>
            <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter name of contact person" type="text">
          </div>
          <div class="col">
            <label for="lastname" class="form-label">Seed Source:</label>
            <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter cp/tel.no.." type="text">
          </div>
      </div>
      
      <!--new production-->
      <div class="row mb-3">
        <div class="col">
          <label class="form-label">No of Fertilizer:</label>
            <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
            <option selected disabled>Select</option>
            <option>Yes</option>
            <option>No</option>
          </select>
          </div>
      <div class="col">
        <label for="lastname" class="form-label">No of Pesticides:</label>
        <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter specify name." type="text">
      </div>
        <div class="col">
          <label for="lastname" class="form-label">No of Insecticides Used (in L):</label>
          <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter name of contact person" type="text">
        </div>
        <div class="col">
          <label for="lastname" class="form-label">Area Planted:</label>
          <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter cp/tel.no.." type="text">
        </div>
    </div>

    <!--middle production-->
    <div class="row mb-3">
      <div class="col">
        <label class="form-label">Date Planted :</label>
          <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
          <option selected disabled>Select</option>
          <option>Yes</option>
          <option>No</option>
        </select>
        </div>
    <div class="col">
      <label for="lastname" class="form-label">Date Harvest :</label>
      <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter specify name." type="text">
    </div>
      <div class="col">
        <label for="lastname" class="form-label">Yields(Tons/kg):</label>
        <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter name of contact person" type="text">
      </div>
      <div class="col">
        <label for="lastname" class="form-label">Type of Product:</label>
        <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter cp/tel.no.." type="text">
      </div>
  </div>

   <!--another one production-->
   <div class="row mb-3">
    <div class="col">
      <label class="form-label">Sold To</label>:</label>
        <select class="form-select mb-4 mb-md-0" name="age_select" id="ageSelect">
        <option selected disabled>Select</option>
        <option>Yes</option>
        <option>No</option>
      </select>
      </div>
  <div class="col">
    <label for="lastname" class="form-label">If Palay Milled, where?:</label>
    <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter specify name." type="text">
  </div>
    <div class="col">
      <label for="lastname" class="form-label">Gross Income(Palay):</label>
      <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter name of contact person" type="text">
    </div>
    <div class="col">
      <label for="lastname" class="form-label">Gross Income(Rice):</label>
      <input id="lastname" class="form-control mb-4 mb-md-0" placeholder="Enter cp/tel.no.." type="text">
    </div>
</div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
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
            <button type="submit" class="btn btn-primary me-2">Submit</button>
       
        </div>
      </div>
    </div>
  
  </div>

</div>@endsection