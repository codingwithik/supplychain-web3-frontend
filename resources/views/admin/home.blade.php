@extends('/admin/layouts.app')

@section('content')

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ count($users) }}</h3>

                <p>No. of Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ count($members) }}</h3>

                <p>No. of Members</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/admin/members" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ count($events) }}</h3>

                <p>No. of Events</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/admin/events" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ count($donations) }}</h3>

                <p>Donations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/admin/donations" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-12 connectedSortable">

            <!-- Map card -->
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
                              {{-- <th>Institution</th> --}}
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
                                  <td width="15%">{{$member->dob}}</td>
                                  <td>{{$member->phoneNumber}}</td>
                                  <td width="20%">{{$member->occupation}}</td> 
                                  {{-- <td>{{$member->institution}}</td>  --}}
                              </tr>
                          </tbody>
                      @endforeach
                      </table>
                  @else
                      <P>No Members</p>
                  @endif   
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    {{-- {{$members->links()}} --}}
                  </ul>
                </div>
              </div>
              <!-- /.card -->
  
            </div>
            <!-- /.card -->

            <!-- /.card -->

            <!-- Calendar -->
            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection
