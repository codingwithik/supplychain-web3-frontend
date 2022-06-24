@extends('/admin/layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order</h1>
          </div>
          <div class="col-sm-6">
            <ul class="float-sm-right">
                <li><a href="/admin/orders" class="btn btn-primary">Back</a></li>
                @if($order->is_delivered == false)
                    <li><a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-update-{{ $order->id }}">Update Status</a></li>
                @endif
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
                <h3 class="card-title">Order</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h5>Customer Name: {{$order->customer_name}}</h5><br>
                        <h5>Customer Email: {{$order->customer_email}}</h5><br>
                        <h5>Phone Number: {{$order->customer_phonenumber}}</h5><br>
                        <h5>Address: {{$order->customer_address}}</h5><br>
                        <h5>Product Name: {{$order->product_name}}</h5><br>
                        <h5>Quantity: {{$order->quantity}}</h5><br>
                        <h5>Amount Paid: {{$order->amount_paid}}</h5><br>
                    </div>

                  </div><br>
                
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


  <div class="modal fade" id="modal-update-{{ $order->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Order</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <p>Are you sure you want to update this order to delivered?</p>
        </div>
        <div class="modal-footer">
          
          <form action="/admin/update_order/{{$order->id}}" method="POST">
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
  
  @endsection