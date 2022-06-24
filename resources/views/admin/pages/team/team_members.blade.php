@extends('/admin/layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Team Members</h1>
          </div>
          <div class="col-sm-6">
            <ul class="float-sm-right">
                <li><a href="/admin/add_team" class="btn btn-primary">Add Member</a></li>
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
                <h3 class="card-title">Streams Team Members</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(count($teams) > 0)
                    <table class="table table-bordered table-responsive">
                    <thead>                  
                        <tr>
                            <th style="width: 10px">S/N</th>
                            <th></th>
                            <th>Fullname</th>
                            <th>Category</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    @foreach ($teams as $key => $team)
                        <tbody>
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><img src="{{$team->team_image}}" width="50" height="50"></td>
                                <td>{{$team->fullname}}</td>
                                <td>{{$team->category}}</td>
                                <td>{{$team->position}}</td>
                                <td width="25%">
                                  <a href="{{ URL('/admin/edit_team/'.$team->id )}}" class="btn btn-info btn-sm">Edit</a>
                                  <a href="#" class="btn btn-danger btn-sm team-modal" data-toggle="modal" data-target="#modal-delete" data-id={{$team->id}}>Delete</a>
                                </td>
                            </tr>
                        </tbody>

                    @endforeach
                    </table>
                @else
                    <P>No Team Members</p>
                @endif   
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{$teams->links()}}
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

  <div class="modal fade" id="modal-team-delete">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Team Member</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this member?</p>
        </div>
        <div class="modal-footer">
          
          <form id="team-delete-form" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger team-yes">Yes</button>
                
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