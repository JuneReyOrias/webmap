@extends('admin.dashb')
@section('admin')


<div class="page-content">

    <nav class="page-breadcrumb">
  
    </nav>
   
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card">
          
          <div class="card-body">
            
            <h6 class="card-title"><span>I.</span>Personal Information</h6>
  
           <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p>
           <div class="table-responsive tab ">
            <table class="table table table-info">
                <thead class="thead-light">
                    <tr >
                        <th>Farmer No.</th>
                        <th>FirtsName</th>
                        <th>MiddleName</th>
                        <th>LastName</th>
                        <th>ExtentionName</th>
                        <th>Home Address.</th>
                        <th>FirtsName</th>
                        <th>MiddleName</th>
                        <th>Sex</th>
                        <th>religion</th>
                        <th>date_of_birth</th>
                        <th>place_of_birth</th>
                        <th>civil_status</th>
                        <th>mothers_maiden_name</th>
                        <th>highest_formal_education</th>
                        <th>person_with_disability</th>
                        <th>pwd_id_no</th>
                        <th>government_issued_id</th>
                        <th>id_type</th>
                        <th>gov_id_no</th>
                        <th>member_ofany_farmers_ass_org_coop</th>
                        <th>nameof_farmers_ass_org_coop</th>
                        <th>name_contact_person</th>
                        <th>cp_tel_no</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($personalInformation as $item)
                    <tr class="table-light">
                      
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->first_name }}</td>
                        <td>{{ $item->middle_name }}</td>
                        <td>{{ $item->last_name }}</td>
                        <td>{{ $item->extension_name }}</td>
                        <td>{{ $item->home_address}}</td>
                        <td>{{ $item->sex }}</td>
                        <td>{{ $item->religion }}</td>
                        <td>{{ $item->date_of_birth }}</td>
                        <td>{{ $item->place_of_birth}}</td>
                        <td>{{ $item->contact_no }}</td>
                        <td>{{ $item->civil_status }}</td>
                        <td>{{ $item->name_legal_spouse }}</td>
                        <td>{{ $item->no_of_children }}</td>
                        <td>{{ $item->mothers_maiden_name }}</td>
                        <td>{{ $item->highest_formal_education }}</td>
                        <td>{{ $item->person_with_disability}}</td>
                        <td>{{ $item->government_issued_id }}</td>
                        <td>{{ $item->id_type }}</td>
                        <td>{{ $item->gov_id_no }}</td>
                        <td>{{ $item->member_ofany_farmers_ass_org_coop }}</td>
                        <td>{{ $item->nameof_farmers_ass_org_coop }}</td>
                        <td>{{ $item->name_contact_person }}</td>
                        <td>{{ $item->cp_tel_no }}</td>
                        
  
                        <td>
                            {{-- <a href="{{ url('/personalInformations/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                            <a href="{{ url('/personalinfo' . $item->farm_no . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                            <form method="POST" action="{{ url('personal_informations' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
  
   
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>

</div>

</div>@endsection