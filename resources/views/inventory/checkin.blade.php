@extends('layouts.admin',['$notif'])

@section('content')
<section class="content-header">
      <h1>
        Check In
        <small>Barang</small>
      </h1>
     
    </section>

   <section class="content">
     <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
               <div class="row">
        
        
        
        <div class="col-xs-6">
          <form method="post" action="{{url('checkin/add')}}">
         {{csrf_field()}}
        <div class="form-group">
           
          <label>Kode barang</label>
          <select class="form-control select2" id="id_barang" name="id_barang" style="width: 100%;">
            <option selected="selected" value="">Pilih</option>
            @foreach($item as $items)
            <option value="{{$items->id}}">{{$items->kode_barang}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
        <label for="exampleFormControlSelect2">Stock</label>
        <input type="number" name="qty" id="qty" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">save changes</button>
    </form>   
       </div>
       <div class="col-xs-6">
       
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">Start Guide</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul>
               <p>Petunjuk penggunaan saat check in</p>
                  <ul>
                    <li>Pilihlah stock barang yang di inginkan</li>
                    <li>Cek nama barang apakah sesuai kode barang</li>
                    <li>masukan jumlah stock yang akan dimasukan</li>
                   
                  </ul>
               
              </ul>
            </div>
            <!-- /.box-body -->
       </div>
        </div>
         <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Jumlah checkin</th>
                  <th>tgl checkin</th>
                </tr>
                </thead>
                <tbody>
    <?php $i=1; ?>
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{$row->get_item->kode_barang}}</td>
      <td>{{$row->get_item->nama}}</td>
      <td>{{$row->qty}}</td>
      <td>{{$row->created_at}}</td>
    </tr>
    <?php $i++; ?>
    @endforeach

</tbody>
</table>


      </div>

</div>

  </div>

   </section>
    @endsection