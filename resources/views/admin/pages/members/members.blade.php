@extends('/admin/layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Members</h1>
          </div>
          <div class="col-sm-6">
            <ul class="float-sm-right">
                {{-- <li><a href="/admin/add_member" class="btn btn-primary">Add Member</a></li> --}}
            </ul>
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
                <h3 class="card-title">Streams Members</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(count($members) > 0)
                    <table class="table table-bordered table-responsive">
                    <thead>                  
                        <tr>
                            <th style="width: 10px">S/N</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>State</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Phone</th>
                            <th>Occupation</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    @foreach ($members as $key => $member)
                        <tbody>
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$member->firstname}}</td>
                                <td>{{$member->lastname}}</td>
                                <td>{{$member->email}}</td>
                                <td>{{$member->state}}</td>
                                <td>{{$member->gender}}</td>
                                <td>{{$member->dob}}</td>
                                <td>{{$member->phoneNumber}}</td>
                                <td>{{$member->occupation}}</td> 
                                <td width="25%">
                                  <a href="{{ URL('/admin/edit_member/'.$member->id )}}" class="btn btn-info btn-sm">Edit</a>
                                  <a href="#" class="btn btn-danger btn-sm member-modal" data-toggle="modal" data-target="#modal-delete" data-item-id={{$member->id}}>Delete</a>
                                </td>
                            </tr>
                        </tbody>


                    <div class="modal fade" id="modal-member-delete">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Delete Member</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Are you sure you want to delete this member?</p>
                          </div>
                          <div class="modal-footer">
                            
                            <form method="POST" id="member-delete-form">
                              {{ method_field('DELETE') }}
                              {{ csrf_field() }}
                              <button type="submit" class="btn btn-danger member-yes" >Yes</button>
                                  
                            </form>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                @endforeach
                    </table>
                @else
                    <P>No Members</p>
                @endif   
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{$members->links()}}
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