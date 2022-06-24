@extends('/admin/layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Campaign</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item active">Campaign</li>
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
                <h3 class="card-title">Edit Campaign</h3>
              </div>
              <!-- /.card-header -->

              
              <!-- form start -->
              {!! Form::open(['action' => ['CampaignController@update', $campaigns->id],  'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
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
                        {{Form::text('title', $campaigns->title, ['name' => 'title', 'class' => 'form-control', 'placeholder' => 'Title'])}}
                    </div>

                    <div class="form-group">
                      {{Form::label('amount', 'Campaign Amount')}}
                      {{Form::number('title', $campaigns->amount, ['name' => 'amount', 'class' => 'form-control', 'placeholder' => 'Campaign Amount'])}}
                    </div>


                    <div class="form-group">
                        {{Form::label('body', 'Body')}}
                        {{Form::textarea('title', $campaigns->body, ['name' => 'body', 'id' => 'ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
                    </div>
                    
                    <div class="form-group">
                        {{Form::file('campaign_image')}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
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