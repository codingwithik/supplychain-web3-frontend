@extends('/admin/layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Image</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/images">Back</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
          <!-- left column -->
          <div class="col-md-8">
            @if ($message = Session::get('success'))

                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong>

                </div>

             
            @endif
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Image</h3>
              </div>
              <!-- /.card-header -->

              
              <!-- form start -->
              {!! Form::open(['action' => 'GalleryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="card-body">  
                    @if (count($errors) > 0)

                    <div class="alert alert-danger">
        
                        <strong>Whoops!</strong> There were some problems with your input.
        
                        <ul>
        
                            @foreach ($errors->all() as $error)
        
                                <li>{{ $error }}</li>
        
                            @endforeach
        
                        </ul>
        
                    </div>
        
                @endif
                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        {{Form::text('title', '', ['name' => 'title', 'class' => 'form-control', 'placeholder' => 'Image Title'])}}
                    </div>
                    
                    <div class="form-group">
                        {{Form::file('gallery_image',  ['accept' => 'image/*'])}}
                    </div>
                    {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
                </div>
                
              {!! Form::close() !!}
              
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection