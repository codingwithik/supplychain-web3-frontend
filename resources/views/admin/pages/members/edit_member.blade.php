@extends('/admin/layouts.app')

@section('content')
 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Member</h1>
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
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Member </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="quickform" role="form" method="post" action="/member/{{$member->id}}">
				{{ method_field('PUT') }}
            	{{ csrf_field() }}
				<div class="card-body">
					
					@foreach ($errors->all() as $error)
						<p class="text-danger">{{ $error }}</p>
					@endforeach 

                  <div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
						<input type="text" class="form-control" name="firstname" value="{{$member->firstname}}" required>
							
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="lastname" value="{{$member->lastname}}" required>
						
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="email" class="form-control" name="email" value="{{$member->email}}" disabled required>
							
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="date" class="form-control" name="dob" value="{{$member->dob}}" required>
							
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<select class="form-control" name="gender">
								<option value="{{$member->gender}}">{{$member->gender}}</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
			
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="number" class="form-control" name="phoneNumber" value="{{$member->phoneNumber}}" maxlength="11">
						
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<select class="form-control" name="state">
								<option value="{{$member->state}}">{{$member->state}}</option>
								<option value="anambra">Anambra</option>
								<option value="abia">Abia</option>
								<option value="adamawa">Adamawa</option>
								<option value="akwa ibom">Akwa Ibom</option>
								<option value="bauchi">Bauchi</option>
								<option value="bayelsa">Bayelsa</option>
								<option value="benue">Benue</option>
								<option value="borno">Borno</option>
								<option value="cross river">Cross River</option>
								<option value="delta">Delta</option>
								<option value="ebonyi">Ebonyi</option>
								<option value="edo">Edo</option>
								<option value="ekiti">Ekiti</option>
								<option value="enugu">Enugu</option>
								<option value="abuja">FCT Abuja</option>
								<option value="gombe">Gombe</option>
								<option value="imo">Imo</option>
								<option value="jigawa">Jigawa</option>
								<option value="kaduna">Kaduna</option>
								<option value="kano">Kano</option>
								<option value="kastina">Kastina</option>
								<option value="kebbi">Kebbi</option>
								<option value="kogi">Kogi</option>
								<option value="kwara">Kwara</option>
								<option value="lagos">Lagos</option>
								<option value="nassarawa">Nassarawa</option>
								<option value="niger">Niger</option>
								<option value="ogun">Ogun</option>
								<option value="ondo">Ondo</option>
								<option value="osun">Osun</option>
								<option value="oyo">Oyo</option>
								<option value="plateau">Plateau</option>
								<option value="rivers">Rivers</option>
								<option value="sokoto">Sokoto</option>
								<option value="taraba">Taraba</option>
								<option value="yobe">Yobe</option>
								<option value="zamfara">Zamfara</option>
							</select>
							
						</div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="occupation" value="{{$member->occupation}}">
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="institution" value="{{$member->institution}}">
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="col-sm-6 col-md-6">
						
					</div>
								
					<div class="col-sm-6 col-md-6">
						<div class="form-group">
							<h3>How do you want to help Streams?</h3>
							
							<div class="custom-control custom-checkbox mr-sm-2">
								<input class="custom-control-input" type="checkbox" value="Active volunteering" name="active_purpose" id="checkactive" @if($member->purpose == 'Active volunteering' || $member->purpose == 'Active volunteering and Donations') checked @endif>

								<label class="custom-control-label" for="checkactive" style="font-size:20px;">
									Active volunteering (staff)
								</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input class="custom-control-input" type="checkbox" value="Donations" name="donation_purpose" id="checkdonations" @if($member->purpose == 'Donations' || $member->purpose == 'Active volunteering and Donations') checked @endif>
								<label class="custom-control-label" for="checkdonations" style="font-size:20px;">
									Donations
								</label>
							</div>
							<div class="custom-control custom-checkbox mr-sm-2">
								<input class="custom-control-input" type="checkbox" value="Others" id="others"  @if($member->otherpurpose != '' ) checked @endif >
								<label class="custom-control-label" for="others" style="font-size:20px;">
									Others
								</label>
							</div>
							
							<div class="from-group">
								<input class="form-control" type="text" value="{{$member->otherpurpose}}" name="otherpurpose" id="otherpurpose" style='@if($member->otherpurpose != '' ) "display: ;" @endif' placeholder="Tell us">
							</div>

						</div>
                  </div>
                  
                </div>
								
					<div class="form-group">
							<textarea name="description" class="form-control" rows="6">{{$member->description}}</textarea>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<textarea name="advice" class="form-control" rows="6" >{{$member->advice}}</textarea>
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