@extends('/admin/layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ul class="float-sm-right">
                <li><a href="/admin/add_project" class="btn btn-primary">Add Project</a></li>
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
                <h3 class="card-title">Streams Projects</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(count($projects) > 0)
                    
                    @foreach ($projects as $key => $project)
                        <div class="well">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img style="width:100%" src="{{$project->project_image}}">
                                </div>

                                <div class="col-md-8 col-sm-8">
                                    <h3><a href="/admin/edit_project/{{$project->id}}">{{$project->title}}</a></h3>
                                    <small>Written on {{$project->created_at}}</small><br><br>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{ $project->id }}">Delete Project</a>
        
                                </div>
                            </div>
                            <br><br>
                        </div>   
                        
                        <div class="modal fade" id="modal-delete-{{ $project->id }}">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Delete Project</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                              <p>Are you sure you want to delete this project?</p>
                              </div>
                              <div class="modal-footer">
                                
                                <form action="/project/{{$project->id}}" method="POST">
                                  {{ method_field('DELETE') }}
                                  {{ csrf_field() }}
                                  <button type="submit" class="btn btn-danger" >Yes</button>
                                      
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
            
                @else
                   <div class="well">
                       <div class="row">
                           <div class="col-md-12 col-sm-12">
                            <P>No Projects</p>
                           </div>
                       </div>
                   </div>
                @endif   
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{$projects->links()}}
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