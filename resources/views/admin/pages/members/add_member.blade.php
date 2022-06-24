@extends('/admin/layouts.app')

@section('content')
 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Member</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/members">Back</a></li>
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
                <h3 class="card-title">Add Member </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="quickform" role="form" id="submitAdminMember">
				@csrf
				<div class="card-body">
                  <div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="firstname" placeholder="First Name" required>
							
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
						
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Enter Email" required>
							
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth" required>
							
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<select class="form-control" name="gender">
								<option value="">Gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
			
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="number" class="form-control" name="phonenumber" placeholder="Enter Phone Number" maxlength="11">
						
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<select class="form-control" name="state">
								<option value="">State of Residence</option>
								<option value="Anambra">Anambra</option>
								<option value="Abia">Abia</option>
								<option value="Adamawa">Adamawa</option>
								<option value="Akwa Ibom">Akwa Ibom</option>
								<option value="Bauchi">Bauchi</option>
								<option value="Bayelsa">Bayelsa</option>
								<option value="Benue">Benue</option>
								<option value="Borno">Borno</option>
								<option value="Cross River">Cross River</option>
								<option value="Delta">Delta</option>
								<option value="Ebonyi">Ebonyi</option>
								<option value="Edo">Edo</option>
								<option value="Ekiti">Ekiti</option>
								<option value="Enugu">Enugu</option>
								<option value="Abuja">FCT Abuja</option>
								<option value="Gombe">Gombe</option>
								<option value="Imo">Imo</option>
								<option value="Jigawa">Jigawa</option>
								<option value="Kaduna">Kaduna</option>
								<option value="Kano">Kano</option>
								<option value="Kastina">Kastina</option>
								<option value="Kebbi">Kebbi</option>
								<option value="Kogi">Kogi</option>
								<option value="Kwara">Kwara</option>
								<option value="Lagos">Lagos</option>
								<option value="Nassarawa">Nassarawa</option>
								<option value="Niger">Niger</option>
								<option value="Ogun">Ogun</option>
								<option value="Ondo">Ondo</option>
								<option value="Osun">Osun</option>
								<option value="Oyo">Oyo</option>
								<option value="Plateau">Plateau</option>
								<option value="Rivers">Rivers</option>
								<option value="Sokoto">Sokoto</option>
								<option value="Taraba">Taraba</option>
								<option value="Yobe">Yobe</option>
								<option value="Zamfara">Zamfara</option>
							</select>
							
						</div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="occupation" placeholder="Occupation">
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="institution" placeholder="Current Institution">
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="col-sm-6 col-md-6">
						
					</div>
								
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<h3>How do you want to help Streams?</h3>
							
							<div class="custom-control custom-checkbox mr-sm-2">
								<input class="custom-control-input" type="checkbox" value="Active volunteering" name="purpose" id="checkactive">

								<label class="custom-control-label" for="checkactive" style="font-size:20px;">
									Active volunteering (staff)
								</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input class="custom-control-input" type="checkbox" value="Donations" name="purpose" id="checkdonations">
								<label class="custom-control-label" for="checkdonations" style="font-size:20px;">
									Donations
								</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input class="custom-control-input" type="checkbox" value="Others" id="others">
								<label class="custom-control-label" for="others" style="font-size:20px;">
									Others
								</label>
							</div>
							
							<div class="from-group">
								<input class="form-control" type="text" value="" name="otherpurpose" id="otherpurpose" style="display:none;" placeholder="Tell us">
							</div>

						</div>
                  </div>
                  
                </div>
								
					<div class="form-group">
							<textarea name="description" class="form-control" rows="6" placeholder="Tell us how you heard of Streams Foundation"></textarea>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<textarea name="advice" class="form-control" rows="6" placeholder="Advice Streams"></textarea>
						<div class="help-block with-errors"></div>
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