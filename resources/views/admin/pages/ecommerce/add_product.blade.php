@extends('/admin/layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/products">Back</a></li>
              <li class="breadcrumb-item active">Product</li>
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
                <h3 class="card-title">Add Product</h3>
              </div>
              <!-- /.card-header -->

              
              <!-- form start -->
              {!! Form::open(['action' => 'ProductController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
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
                        {{Form::label('productname', 'Product Name')}}
                        {{Form::text('title', '', ['name' => 'productName', 'class' => 'form-control', 'placeholder' => 'Product Name'])}}
                    </div>

                    <div class="form-group">
                      {{Form::label('price', 'Price')}}
                      {{Form::number('title', '', ['name' => 'price', 'class' => 'form-control', 'placeholder' => 'Price'])}}
					</div>
					
					<div class="form-group">
						{{Form::label('quantity', 'Quantity')}}
						{{Form::number('title', '', ['name' => 'quantity', 'class' => 'form-control', 'placeholder' => 'Quantity'])}}
					  </div>
					  
					  <div class="form-group">
						{{Form::label('title', 'Tag')}}
						{{Form::text('title', '', ['name' => 'tag', 'class' => 'form-control', 'placeholder' => 'Tag'])}}
					  </div>

                    <div class="form-group">
                        {{Form::label('description', 'Body')}}
                        {{Form::textarea('title', '', ['name' => 'description', 'id' => 'ckeditor', 'class' => 'form-control', 'placeholder' => 'Product Description'])}}
                    </div>
                    
                    
                    <div class="form-group">
                        {{Form::label('title', 'Product Image')}}
                        {{Form::file('product_image', ['accept' => 'image/*'])}}
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