@extends('/admin/layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Orders</h1>
          </div>
          <div class="col-sm-6">
            <ul class="float-sm-right">
                {{-- <li><a href="/admin/add_product" class="btn btn-primary">Add Product</a></li> --}}
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
                <h3 class="card-title">Orders</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(count($orders) > 0)
                    <table class="table table-bordered table-responsive">
                    <thead>                  
                        <tr>
                            <th style="width: 10px">S/N</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Customer Name</th>
                            <th>Phone Number</th>
                            <th>Amount Paid</th>
                            <th>Transaction Date</th>
                            <th>Delivery Status</th>
                        </tr>
                    </thead>

                    @foreach ($orders as $key => $order)
                        <tbody>
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$order->product_name}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->customer_name}}</td>
                                <td>{{$order->customer_phonenumber}}</td>
                                <td>{{$order->amount_paid}}</td>
                                <td>{{$order->transaction_date}}</td>
                                @if($order->is_delivered == false)
                                  <td style="textColor: orange;">Pending</td>
                                  <td width="25%">
                                    <a href="{{ URL('/admin/view_order/'.$order->id )}}" class="btn btn-info btn-sm">View</a>
                                  </td>
                                @else
                                  <td style="textColor: green;">Delivered</td>
                                  <td width="25%">
                                    <a href="{{ URL('/admin/view_order/'.$order->id )}}" class="btn btn-info btn-sm">View</a>
                                  </td>  
                                @endif
                                
                            </tr>
                        </tbody>

                    @endforeach
                    </table>
                @else
                    <P>No Orders</p>
                @endif   
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{$orders->links()}}
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