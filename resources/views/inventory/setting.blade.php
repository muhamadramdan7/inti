@extends('layouts.admin',['$notif'])

@section('content')
<section class="content-header">
      <h1>
        Setting
        <small>Profile</small>
      </h1>
     
    </section>

   <section class="content">
     <div class="col-xs-12">
        
    <!-- /.box-header -->
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Setting Profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                    <form method="post" action="{{route('users.update', $user)}}">
                       {{ csrf_field() }}
    {{ method_field('patch') }}
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{auth()->user()->name}}">
                </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{auth()->user()->email}}">
                </div>
                </div>
                <div id="pw" class="form-group" style=" display: none" >
                        <label class="col-sm-2 col-sm-2 control-label">New Password</label>
                        <div class="col-sm-10">
                             <input type="password" id="password" name="password" class="form-control round-input" onchange="check_pass()" />
                        </div>
                    </div>
                      <div id="rppw" class="form-group" style=" display: none">
                        <label class="col-sm-2 col-sm-2 control-label">Repeat Password</label>
                        <div class="col-sm-10">
                             <input type="password" id="confirm_password" name="password_confirmation" class="form-control round-input" onchange="check_pass()"/>
                        </div>
                        </div>
               
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <button id="btnChange" type="button" class="btn btn-info" onclick="ChangePassword()">Change Password</button>
                <button id="submit" type="submit" class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>
          <!-- page2-->
        @hasanyrole('superadmin')

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Manage User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>email</th>
                  <th>Role</th>
                  <th>Aksi</th>
                </tr>
                </thead>
              <tbody>
                <tr class="">
                     <?php $i=1; ?>
                     @foreach($posts as $post)
                    <td>{{$i}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->email}}</td>

                     <?php if($post->hasRole('admin')){
                   ?> 
                     <td align="center"><button type="button" class="btn btn-info btn-sm" type="button">Petugas</button></td>
                    <?php }elseif($post->hasRole('superadmin')){?>
                      <td align="center"><button type="button" class="btn btn-info btn-sm" type="button">Super Admin</button></td>
                    <?php }else{?>
                      <td align="center"><button type="button" class="btn btn-info btn-sm" type="button">User</button></td>
                    <?php }?>

                     <form method="post" action="{{route('users.update', $post->id)}}" class="form-horizontal adminex-form">
                {{ csrf_field() }}
    {{ method_field('patch') }}
                    <?php if($post->hasRole('admin')){
                   ?> 
                    <td align="center"><input type="hidden" name="id" value="{{$post->id}})"><button class="btn btn-success" name="role_id" value="1">Upgrade</button> <button name="role_id" value="2" class="btn btn-warning">Downgrade</button> <button data-user_id="{{$post->id}}" class="btn btn-danger" data-toggle="modal" type="button" data-target="#delete">Delete</button> </td>
                    <?php }elseif($post->hasRole('user')){?>
                 <td align="center"><input type="hidden" name="id" value="{{$post->id}})"><button class="btn btn-success" name="role_id" value="1">Upgrade</button> <button type="button" data-user_id="{{$post->id}}" class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button></td>
                   <?php }else{?>
                   <td align="center"><input type="hidden" name="id" value="{{$post->id}})"><button type="button" class="btn btn-primary">Max</button> <button name="role_id" value="2" class="btn btn-warning">Downgrade</button> <button type="button" data-user_id="{{$post->id}}" class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button></td>
                    <?php }?>

                </tr>
            </form>

                      <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('user.delete','$user')}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
          <div class="modal-body">
                <p class="text-center">
                    Are you sure you want to delete this?
                </p>
                <input type="hidden" name="id" id="id" value="">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
          </div>
        </form>
     
    </div>
  </div>
   </div> 
                <?php $i++;
                 ?>
                 @endforeach
                </tbody>


              </table>
              
</div>
</div>
@endrole

   </section>
 <script src="{{asset('js/app.js')}}"></script>
<script>

  

      $('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var id = button.data('user_id')
      var modal = $(this)
      modal.find('.modal-body #id').val(id);
      })

  </script>
                 <script>
                    function ChangePassword(){
                              var x = document.getElementById("pw");
                               var y = document.getElementById("rppw");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "block";
         document.getElementById('btnChange').innerHTML = "Cancel";
    } else {
        x.style.display = "none";
         y.style.display = "none";
 document.getElementById('btnChange').innerHTML = "Change Password";
    }
                    }
                 </script>
                 <script>
                   function check_pass() {
    if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
        document.getElementById('submit').disabled = false;
    } else {
        document.getElementById('submit').disabled = true;
    }
}
                 </script>
    @endsection