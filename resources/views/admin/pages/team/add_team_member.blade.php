@extends('/admin/layouts.app')

@section('content')
 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Team Member</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/teams">Back</a></li>
              <li class="breadcrumb-item active">Member</li>
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
			@if(session()->has('notif'))
			<div class="row">
				<div class="col-md-12 col-sm-12">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>{{ session()->get('notif') }}</strong>
				</div>
				</div>
			</div>
			@endif
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Team Member </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="submitTeam" class="quickform" role="form" enctype = "multipart/form-data">
				@csrf
				<div class="card-body">
                  <div class="row">

					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<select class="form-control" name="category" id="category">
								<option value="">Select a category</option>
								<option value="Board of Directors">Board of Directors</option>
								<option value="Advisory Directors">Advisory Directors</option>
								<option value="Executive Board">Executive Board</option>
							</select>
			
						</div>
					</div>  

					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name" required>
							
						</div>
					</div>
					
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="position" id="position" placeholder="Enter Position" required>
							
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="fblink" id="fblink" placeholder="Facebook Link">
							
						</div>
					</div>
					
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="iglink" id="iglink" placeholder="Instagram Link">
							
						</div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="twitterlink" id="twitterlink" placeholder="Twitter Link">
							
						</div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<textarea type="text" class="form-control" name="quote" id="quote" placeholder="Quote"></textarea>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="file" class="form-control" accept="image/*" name="team_image" id="team_image" required>
							
						</div>
					</div>

					<div class="col-sm-6 col-md-6">
						
					</div>
								
                </div>
							
				
					
				<div class="col-sm-6 col-md-6">
					<div class="form-group">
					
						<div style="display:none" id="error"></div>
					</div>
                 </div>
                 

					<div class="form-group">
						<div id="success"></div>
						<button type="submit" class="btn btn-primary" id="enter">Submit</button>
						<i class="fa fa-spinner fa-spin fa-3x" id="loader" style="display:none;"></i>
					</div>

                
					</div>
				</form>
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