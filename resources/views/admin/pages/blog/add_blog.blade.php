@extends('/admin/layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/blogs">Back</a></li>
              <li class="breadcrumb-item active">Blog</li>
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
                <h3 class="card-title">Add Blog</h3>
              </div>
              <!-- /.card-header -->

              
              <!-- form start -->
              {!! Form::open(['action' => 'BlogController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
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
                      {{Form::label('category', 'Category')}}
                      {{Form::select('title', ['News' => 'News', 'Article' => 'Article'], null, ['name' => 'category', 'class' => 'form-control', 'placeholder' => 'Select a category...'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        {{Form::text('title', '', ['name' => 'title', 'class' => 'form-control', 'placeholder' => 'Title'])}}
                    </div>

                    <div class="form-group">
                      {{Form::label('title', 'Tags')}}
                      {{Form::text('title', '', ['name' => 'tags', 'class' => 'form-control', 'placeholder' => 'Add Tags'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('title', 'Body')}}
                        {{Form::textarea('title', '', ['name' => 'body', 'id' => 'ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
                    </div>
                    
                    <div class="form-group">
                        {{Form::label('title', 'Author Image')}}
                        {{Form::file('author_image', ['accept' => 'image/*'])}}
                    </div>
                    
                    <div class="form-group">
                        {{Form::label('title', 'Blog Image')}}
                        {{Form::file('blog_image', ['accept' => 'image/*'])}}
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