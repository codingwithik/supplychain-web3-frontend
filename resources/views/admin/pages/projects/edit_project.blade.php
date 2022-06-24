@extends('/admin/layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Project</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/projects">Back</a></li>
              <li class="breadcrumb-item active">Project</li>
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
                <h3 class="card-title">Edit Project</h3>
              </div>
              <!-- /.card-header -->

              
              <!-- form start -->
              {!! Form::open(['action' => ['ProjectController@update', $project->id],  'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
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
                  {{Form::label('initiator', 'Initiator')}}
                  {{Form::text('title', $project->initiator, ['name' => 'initiator', 'class' => 'form-control', 'placeholder' => 'Initiator'])}}
                </div>
              
                <div class="form-group">
                    {{Form::label('projectname', 'Project Name')}}
                    {{Form::text('title', $project->title, ['name' => 'projectname', 'class' => 'form-control', 'placeholder' => 'Project Name'])}}
                </div>

                <div class="form-group">
                  {{Form::label('schoolname', 'School Name')}}
                  {{Form::text('title', $project->school_name, ['name' => 'schoolname', 'class' => 'form-control', 'placeholder' => 'School Name'])}}
                </div>

                <div class="form-group">
                  {{Form::label('schooladdress', 'School Address')}}
                  {{Form::text('title', $project->school_address, ['name' => 'schooladdress', 'class' => 'form-control', 'placeholder' => 'School Address'])}}
                </div>

                <div class="form-group">
                  {{Form::label('schoolgrade', 'School Grade')}}
                  {{Form::select('title', ['Nursery' => 'Nursery', 'Primary' => 'Primary', 'Secondary' => 'Secondary', 'Tertiary' => 'Tertiary'], $project->school_grade, ['name' => 'schoolgrade', 'class' => 'form-control', 'placeholder' => 'Select a grad...'])}}
                </div>

                <div class="form-group">
                  {{Form::label('schooltype', 'School Type')}}
                  {{Form::select('title', ['Public' => 'Public', 'Private' => 'Private'], $project->school_type, ['name' => 'schooltype', 'class' => 'form-control', 'placeholder' => 'Select type...'])}}
                </div>
                
                <div class="form-group">
                  {{Form::label('title', 'State')}}
                  {{Form::text('title', $project->state, ['name' => 'state', 'class' => 'form-control', 'placeholder' => 'State'])}}
                </div>
                
                <div class="form-group">
                  {{Form::label('title', 'City')}}
                  {{Form::text('title', $project->city, ['name' => 'city', 'class' => 'form-control', 'placeholder' => 'City'])}}
                </div>
                
                <div class="form-group">
                  {{Form::label('title', 'Tag')}}
                  {{Form::text('title', $project->tag, ['name' => 'tag', 'class' => 'form-control', 'placeholder' => 'Tag'])}}
                </div>

                <div class="form-group">
                  {{Form::label('schoolneeds', 'School Needs')}}
                  {{Form::text('title', $project->school_needs, ['name' => 'schoolneeds', 'class' => 'form-control', 'placeholder' => 'School Needs'])}}
                </div>

                <div class="form-group">
                  {{Form::label('amount', 'Amount Needed')}}
                  {{Form::number('title', $project->total_amount, ['name' => 'amount', 'class' => 'form-control', 'placeholder' => 'Amount Needed'])}}
                </div>

                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('title', $project->body, ['name' => 'body', 'id' => 'ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
                </div>
                
                <div class="form-group">
                    {{Form::label('title', 'Initiator Image')}}
                    {{Form::file('initiator_image', ['accept' => 'image/*'])}}
                </div>
                
                <div class="form-group">
                    {{Form::label('title', 'Project Image')}}
                    {{Form::file('project_image', ['accept' => 'image/*'])}}
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