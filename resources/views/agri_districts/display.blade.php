@extends('admin.dashb')
@section('admin')


<div class="page-content">

    <nav class="page-breadcrumb">
  
    </nav>
   
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card">
          
          <div class="card-body">
            @if (session('message'))
            <div class="alert alert-success" role="alert">
              {{ session('message')}}
            </div>
               
            @endif
            <h6 class="card-title"><span>I.</span>Personal Information</h6>
  
            <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p>
            <div class="table-responsive tab ">
             <table class="table table table-info">
                 <thead class="thead-light">
                     <tr >
                         <th>ID</th>
                         <th>District Name</th>
                         <th>Description</th>
                         <th>Latitude</th>
                         <th>Longitude</th>
                        
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                   {{-- @if($Agriculture->count() > 0) 
                @foreach($Agriculture as $agridistrict)
                     <tr class="table-light">
                          <td>{{ $loop->iteration }}</td>
                         <td>{{  $agridistrict->district }}</td>
                         <td>{{  $agridistrict->description }}</td>
                         <td>{{  $agridistrict->latitude }}</td>
                         <td>{{  $agridistrict->longitude }}</td>
                        
                         
          
                         <td>
                            
                              <a href="{{route('personalinfo.edit',  $agridistrict->id)}}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a> 
                 
                              <form  action="{{ route('personalinfo.destroy',  $agridistrict->id) }}"method="post" accept-charset="UTF-8" style="display:inline">
                                 {{ csrf_field()}}
                                 <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                             </form>
                              <div class="col-sm">
                                 <form action="{{ route('personalinfo.destroy', $personalInformations->id) }}" method="post">
                                   @csrf
                                   @method('DELETE')
                                   <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                 </form>
                             </div>
                         </td>
                     </tr>
                 @endforeach
                 @else
                 <tr>
                     <td class="text-center" colspan="5">Personal Informations not found</td>
                 </tr>
             @endif -- --}}
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

</div>

</div>@endsection