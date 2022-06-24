@extends('/admin/layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Donations</h1>
          </div>
          <div class="col-sm-6">
            <ul class="float-sm-right">
                {{-- <li><a href="/admin/add_member" class="btn btn-primary">Add Member</a></li> --}}
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
                <h3 class="card-title">Successful Donations</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(count($donations) > 0)
                    <table class="table table-bordered table-responsive">
                    <thead>                  
                        <tr>
                            <th style="width: 10px">S/N</th>
                            <th>Project Name</th>
                            <th>Customer name</th>
                            <th>Amount Paid</th>
                            <th>Transaction Date</th>
                        </tr>
                    </thead>

                    @foreach ($donations as $key => $donation)
                        <tbody>
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$donation->project_name}}</td>
                                <td>{{$donation->customer_name}}</td>
                                <td>{{$donation->amount_paid}}</td>
                                <td>{{$donation->transaction_date}}</td>
                            </tr>
                        </tbody>

                    @endforeach
                    </table>
                @else
                    <P>No Donations</p>
                @endif   
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{$donations->links()}}
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