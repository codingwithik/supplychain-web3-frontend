@extends('/admin/layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Events</h1>
          </div>
          <div class="col-sm-6">
            <ul class="float-sm-right">
                <li><a href="/admin/add_event" class="btn btn-primary">Add Event</a></li>
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
                <h3 class="card-title">Streams Events</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(count($events) > 0)
                    
                    @foreach ($events as $key => $event)
                        <div class="well">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img style="width:100%;" src="{{$event->cover_image}}">
                                </div>

                                <div class="col-md-8 col-sm-8">
                                    <h5><a href="/admin/edit_event/{{$event->id}}">{{$event->title}}</a></h5>
                                    <small>Written on {{$event->created_at}}</small><br><br>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{ $event->id }}">Delete Event</a>
        
                                </div>
                            </div>
                            <br>
                        </div>   
                        
                        <div class="modal fade" id="modal-delete-{{ $event->id }}">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Delete Event</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                              <p>Are you sure you want to delete this event?</p>
                              </div>
                              <div class="modal-footer">
                                
                                <form action="/event/{{$event->id}}" method="POST">
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
                            <P>No Events</p>
                           </div>
                       </div>
                   </div>
                @endif   
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{$events->links()}}
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