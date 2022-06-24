@extends('/admin/layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$school->school_name}}</h1>
          </div>
          <div class="col-sm-6">
            <ul class="float-sm-right">
                <li><a href="/admin/schools" class="btn btn-primary">Back</a></li>
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
                <h3 class="card-title">{{$school->school_name}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h5>Firstname: {{$school->firstname}}</h5><br>
                        <h5>Lastname: {{$school->lastname}}</h5><br>
                        <h5>Email Address: {{$school->email}}</h5><br>
                        <h5>Phone Number: {{$school->phone_number}}</h5><br>
                        <h5>School Affiliation: {{$school->school_affiliation}}</h5><br>
                        <h5>State: {{$school->state}}</h5><br>
                        <h5>LGA: {{$school->lga}}</h5><br>
                        <h5>City: {{$school->city}}</h5><br>
                        <h5>School Needs: {{$school->school_needs}}</h5><br>
                        <h5>School Grade: {{$school->grade}}</h5><br>
                        <h5>Amount Needed: {{$school->amount}}</h5><br>
                        <h5>School Type: {{$school->type}}</h5><br>
                        <h5>Description: {{$school->description}}</h5>
                        
                    </div>

                  </div><br>
                @if(count($images) > 0)

                        <div class="well">
                          
                            <div class="row">
                              @foreach ($images as $key => $image)
                                <div class="col-md-4 col-sm-4">
                                    <img style="width:100%; height:70%;" src="/storage/school_images/{{$image->school_image}}"><br>
                                </div>

                                @endforeach

                            </div>
                            <br><br>
                        </div>   
                            
                    {{-- @endforeach --}}
            
                {{-- @else
                   <div class="well">
                       <div class="row">
                           <div class="col-md-12 col-sm-12">
                            <P>No Images</p>
                           </div>
                       </div>
                   </div> --}}
                @endif   
              </div>
              <!-- /.card-body -->
              
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