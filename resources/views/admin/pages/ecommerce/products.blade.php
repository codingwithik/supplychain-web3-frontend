@extends('/admin/layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ul class="float-sm-right">
                <li><a href="/admin/add_product" class="btn btn-primary">Add Product</a></li>
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
                <h3 class="card-title">Streams Products</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(count($products) > 0)
                    <table class="table table-bordered table-responsive">
                    <thead>                  
                        <tr>
                            <th style="width: 10px">S/N</th>
                            <th></th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    @foreach ($products as $key => $product)
                      <tbody>
                        @if($product->deleted == false)
                          <tr>
                            <td>{{$key+1}}</td>
                            <td><img src="{{$product->product_image}}" width="50" height="50"></td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->product_price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td width="25%">
                              <a href="{{ URL('/admin/edit_product/'.$product->id )}}" class="btn btn-info btn-sm">Edit</a>
                              <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{ $product->id }}">Delete</a>
                            </td>
                          </tr>
                        @endif
                          
                      </tbody>

                      <div class="modal fade" id="modal-delete-{{ $product->id }}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Delete Product</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <p>Are you sure you want to delete this product?</p>
                            </div>
                            <div class="modal-footer">
                              
                              <form action="/admin/product/{{$product->id}}" method="POST">
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
                    </table>
                @else
                    <P>No Products</p>
                @endif   
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{$products->links()}}
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