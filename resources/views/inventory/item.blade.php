@extends('layouts.admin',['$notif'])

@section('content')
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
        @hasanyrole('superadmin|admin')
              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Input Barang
</button>
@else

@endrole
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Masukan Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{url('item/add')}}">
         {{csrf_field()}}
      <div class="form-group">
           <label for="formGroupExampleInput">Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Example input">
      </div>
      <div class="form-group">
           <label for="formGroupExampleInput2">Nama barang</label>
           <input type="text" class="form-control" id="nama" name="nama" placeholder="Another input">
      </div>
      <div class="form-group">
           <label for="formGroupExampleInput2">Stock</label>
           <input type="text" class="form-control" id="stock" name="stock" placeholder="Another input">
      </div>
      <div class="form-group">
           <label for="formGroupExampleInput2">Lokasi</label>
           <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Another input">
      </div>
     
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>




            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Stock</th>
                  <th>Lokasi</th>
                  <th>tgl masuk</th>
                  @hasanyrole('superadmin|admin')
                  <th>aksi</th>
                  @endrole
                </tr>
                </thead>
                <tbody>
    <?php $i=1; ?>
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{$row->kode_barang}}</td>
      <td>{{$row->nama}}</td>
      <td>{{$row->stock}}</td>
      <td>{{$row->lokasi}}</td>
      <td>{{$row->created_at}}</td>
      @hasanyrole('superadmin|admin')
      <td>

                                    <button class="btn btn-info" data-id="{{$row->id}}" data-kode_barang="{{$row->kode_barang}}"data-nama="{{$row->nama}}" data-stock="{{$row->stock}}"data-lokasi="{{$row->lokasi}}" data-join_date="{{$row->join_date}}" data-toggle="modal" data-target="#edit">Edit</button>
                                    
                                    
                               @hasanyrole('superadmin') | <button data-id="{{$row->id}}" data-toggle="modal" data-target="#delete" class="btn btn-danger">Delete</button>@endrole</td>
      @endrole
    </tr>



    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
           <form action="{{ route('item-delete','$row->id') }}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}

      <div class="modal-body">
        <p class="text-center"> Hapus Data ini?</p>
        <input type="hidden" name="id" id="id" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

                                


    <?php $i++; ?>
    @endforeach

  </tbody>


         
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Add New</h4>
                                    </div> 
                                    <form action="{{route('item.update','$row->id')}}" method="post" class="form-horizontal" role="form">
                                            {{method_field('patch')}}
                                            {{csrf_field()}}
                                    <div class="modal-body">
                   
                                    <input type="hidden" name="id" id="id" value="">
                                            <div class="form-group">
                                                <label for="" class="col-lg-2 col-sm-2 control-label">kode barang</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="kode_barang" name="kode_barang">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-lg-2 col-sm-2 control-label">Nama</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="nama" name="nama">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-lg-2 col-sm-2 control-label">Stock</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="stock" name="stock" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-lg-2 col-sm-2 control-label">Lokasi</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="lokasi" name="lokasi">
                                                </div>
                                            </div>
                                
                                                   
                                   
                                                                             
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                     <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
      <!-- /.row -->
    </section>
<script src="{{asset('js/app.js')}}"></script>
<script>

  $('#edit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var id = button.data('id') 
      var kode_barang = button.data('kode_barang') 
      var nama = button.data('nama')
      var stock = button.data('stock')
      var lokasi = button.data('lokasi')
      var join_date = button.data('join_date')
      var modal = $(this)
      modal.find('.modal-body #id').val(id);
      modal.find('.modal-body #kode_barang').val(kode_barang);
      modal.find('.modal-body #nama').val(nama);
      modal.find('.modal-body #stock').val(stock);
      modal.find('.modal-body #lokasi').val(lokasi);
      modal.find('.modal-body #join_date').val(join_date);
})

      $('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var id = button.data('id')
      var modal = $(this)
      modal.find('.modal-body #id').val(id);
      })
  </script>
    @endsection