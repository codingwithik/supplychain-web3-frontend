@extends('/admin/layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Schools</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">School Listing</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(count($schools) > 0)
                    <table class="table table-bordered table-responsive">
                    <thead>                  
                        <tr>
                            <th style="width: 10px">S/N</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>State</th>
                            <th>LGA</th>
                            <th>Phone Number</th>
                            <th>School Name</th>
                            <th>School Affiliation</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    @foreach ($schools as $key => $school)
                        <tbody>
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$school->firstname}}</td>
                                <td>{{$school->lastname}}</td>
                                <td>{{$school->email}}</td>
                                <td>{{$school->state}}</td>
                                <td>{{$school->lga}}</td>
                                <td>{{$school->phone_number}}</td>
                                <td>{{$school->school_name}}</td>
                                <td>{{$school->school_affiliation}}</td> 
                                <td width="25%">
                                  <a href="{{ URL('/admin/view_school/'.$school->id )}}" class="btn btn-info btn-sm">View</a>
                                  @if($school->is_confirmed == 0)
                                  <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-delete">Confirm</a> 
                                  @endif
                                </td>
                            </tr>
                        </tbody>

                    @endforeach
                    </table>
                @else
                    <P>No Schools</p>
                @endif   
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{$schools->links()}}
                </ul>
              </div>
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        
        </div>
        <!-- /.row -->

       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection