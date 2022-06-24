@extends('/admin/layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
              <ul class="float-sm-right">
                  <li><a href="/admin/add_user" class="btn btn-primary">Add User</a></li>
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
                <h3 class="card-title">Admin Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(count($users) > 0)
                    <table class="table table-bordered">
                    <thead>                  
                        <tr>
                            <th style="width: 10px">S/N</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    @foreach ($users as $key => $user)
                        <tbody>
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$user->firstname}}</td>
                                <td>{{$user->lastname}}</td>
                                <td>{{$user->email}}</td>
                                @if($user->hasRole('superadmin'))
                                  <td></td>
                                @else
                                  
                                  <td>
                                    <a href="#" class="btn btn-info btn-sm user-edit-modal" data-toggle="modal" data-target="#modal-default" data-id={{$user->id}} data-firstname={{$user->firstname}} data-lastname={{$user->lastname}} data-email={{$user->email}}>Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm user-delete-modal" data-toggle="modal" data-target="#modal-delete" data-id={{$user->id}}>Delete</a>
                                </td>
                                @endif

                            </tr>
                        </tbody>
                    @endforeach
                    </table>
                @endif   
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{$users->links()}}
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

  <div class="modal fade" id="modal-edit-user">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <!-- form start -->
           <form method="post" id="user-edit-form">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="card-body">
              <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" id="firstname"  required>

                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" id="lastname" required>

                @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" disabled>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              
            </div>
            
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary user-edit-yes">Save</button>
            </div>
          </form>
        </div>
      
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <div class="modal fade" id="modal-delete-user">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this user? </p>
        </div>
        <div class="modal-footer">
          
          <form method="POST" id="user-delete-form">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger user-yes" >Yes</button>
                
          </form>
          <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  @endsection

  