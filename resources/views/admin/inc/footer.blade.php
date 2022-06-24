<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; <script>
        document.write(new Date().getFullYear());</script> <a href="https://leadtechconsult.com/">LeadTechConsult</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="/plugins/datatables/jquery.dataTables.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
        
<script>
  ClassicEditor
  .create(document.querySelector('#editor'))
  .catch(error=>{
      console.error(error);
  });                                             
</script>
<script type="text/javascript">

  $(document).ready(function(){
    
      addMember();
      deleteMember();
      editUser();
      deleteUser();
      addTeamMember();
      deleteTeamMember();

  });


  function addMember(){
    $('input[id="others"]').click(function(){
      if($(this).is(":checked")){
        
        $('#otherpurpose').show();

      }
      else if($(this).is(":not(:checked)")){
        
        $('#otherpurpose').hide();
      }
    });
    
    $("#submitAdminMember").on('submit', function(e){

      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

      e.preventDefault();

      
      var purpose = '';
      $('#error').html('');
      $('#error').hide();
      $('#enter').hide();
      $('#loader').show();

      
      // if($('input[name="agree"]').is(":not(:checked)")){
        
      //   $('#error').show();
      //   $('#error').append('<div class="alert alert-danger">Agree to streams pledge</div');
      //   $('#enter').show();
      //   $('#loader').hide();
      //   return;
            
      // }else if($('input[name="agree"]').is(":checked")){
      //   $('#error').html('');
      //   $('#error').hide();
      // }

      if($('input[type="checkbox"]').is(":checked")){
          
        purpose = $("input[name=purpose]").val();

      }
      
      
      var firstname = $("input[name=firstname]").val();

      var lastname = $("input[name=lastname]").val();

      var email = $("input[name=email]").val();

      var phoneNumber = $("input[name=phonenumber]").val();
      var gender = $("input[name=gender]").val();
      var state = $("input[name=state]").val();
      
      var description = $("input[name=description]").val();
      var occupation = $("input[name=occupation]").val();
      var institution = $("input[name=institution]").val();
      var dob = $("input[name=dob]").val();

      $.ajax({

        type:'POST',

        url: "{{ url('/add_member') }}",

        data: $("#submitAdminMember").serialize(),

        success:function(data){
          $('#enter').show();
          $('#loader').hide();

          if(data.success == '200'){
            $('#error').html('');
            $('#error').hide();
            location.reload();
            
          }else if(data.exists == '201'){
            $('#error').show();
            $('#error').append('<div class="alert alert-danger">Email already exists</div');
            
          }
          
        },

        error:function(data){
          //alert("Error");
          console.log(data);
          if(data.status == 422){
            $('#error').show();
            $.each(data.responseJSON.errors, function(key,value) {
              $('#error').append('<div class="alert alert-danger">'+value+'</div');
            });
          }else if(data.status == 500){
            $('#error').show();
            $('#error').append('<div class="alert alert-danger">Something went wrong!</div');
            
          }
          
          $('#enter').show();
          $('#loader').hide();
        }

      });

    });

  }


  function addTeamMember(){
   
    
    $("#submitTeam").on('submit', function(e){

    
      e.preventDefault();

      $('#error').html('');
      $('#error').hide();
      $('#enter').hide();
      $('#loader').show();

      var formdata = new FormData();
      var files = $('#team_image')[0].files;

      formdata.append("_token", "{{csrf_token()}}");
      formdata.append("fullname", $("#fullname").val());
      formdata.append("category", $("#category").val());
      formdata.append("position", $("#position").val());
      formdata.append("team_image", files[0], files[0]['name']);
      formdata.append("fblink", $("#fblink").val());
      formdata.append("iglink", $("#iglink").val());
      formdata.append("twitterlink", $("#twitterlink").val());
      formdata.append("quote", $("#quote").val());

      $.ajax({

        type:'POST',
        url: "{{ url('/admin/team') }}",
        data: formdata,
        contentType: false,
        processData: false,
        success:function(data){
          $('#enter').show();
          $('#loader').hide();

          if(data.success == '200'){
            $('#error').html('');
            $('#error').hide();
            location.reload();
            
          }else if(data.exists == '201'){
            $('#error').show();
            $('#error').append('<div class="alert alert-danger">Member already exists</div');
            
          }
          
        },

        error:function(data){
          //alert("Error");
          console.log(data);
          if(data.status == 422){
            $('#error').show();
            $.each(data.responseJSON.errors, function(key,value) {
              $('#error').append('<div class="alert alert-danger">'+value+'</div');
            });
          }else if(data.status == 500){
            $('#error').show();
            $('#error').append('<div class="alert alert-danger">Something went wrong!</div');
            
          }
          
          $('#enter').show();
          $('#loader').hide();
        }

      });

    });

  }

  function deleteProduct(id){
   
    
   $("#submitTeam").on('submit', function(e){

   
     e.preventDefault();


     $.ajax({

       type:'POST',
       url: "{{ url('/admin/product/') }}",
       contentType: false,
       processData: false,
       success:function(data){
         if(data.success == '200'){
           location.reload();
           
         }
         
       },

       error:function(data){
         //alert("Error");
         console.log(data);
         if(data.status == 422){
           $.each(data.responseJSON.errors, function(key,value) {
              alert(value);
           });
         }else if(data.status == 500){
            alert("Something went wrong!");
         }
         
       }

     });

   });

 }

  function deleteMember(){
    
    $('.member-modal').on('click', function (evn) { // this is the "a" tag
      evn.preventDefault();
      $('#modal-member-delete').modal('show');
      var memberId = $(this).data('itemId');
      var submitUrl = '/member/'+memberId;

      $('.member-yes').click(function(){
        // $('.page_id').html(memberId);
        $('#member-delete-form').attr('action', submitUrl);
      });

    });

  }

  function deleteTeamMember(){
    
    $('.team-modal').on('click', function (evn) { // this is the "a" tag
      evn.preventDefault();
      $('#modal-team-delete').modal('show');
      var teamId = $(this).data('id');
      var submitUrl = '/team/'+teamId;

      $('.team-yes').click(function(){
        // $('.page_id').html(memberId);
        $('#team-delete-form').attr('action', submitUrl);
      });

    });

  }

  function deleteUser(){
    
    $('.user-delete-modal').on('click', function (evn) { // this is the "a" tag
      evn.preventDefault();
      $('#modal-delete-user').modal('show');
      var userId = $(this).data('id');
      var submitUrl = '/user/'+userId;

      $('.user-yes').click(function(){
        // $('.page_id').html(memberId);
        $('#user-delete-form').attr('action', submitUrl);
      });

    });

  }

  function editUser(){
    
    $('.user-edit-modal').on('click', function (evn) { // this is the "a" tag
      evn.preventDefault();
      $('#modal-edit-user').modal('show');
      var userId = $(this).data('id');
      $('#firstname').val($(this).data('firstname'));
      $('#lastname').val($(this).data('lastname'));
      $('#email').val($(this).data('email'));
      var submitUrl = '/user/'+userId;

      $('.user-edit-yes').click(function(){
        // $('.page_id').html(memberId);
        $('#user-edit-form').attr('action', submitUrl);
      });

    });

  }
</script>

