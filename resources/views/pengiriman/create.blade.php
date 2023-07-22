@extends('layouts.app')
  @section('title','Dahboard')
  @section('page-title','Home')
  @section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Kategori</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('simpan-pengiriman') }}" method="POST">
            
            @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">No Pengiriman</label>
              <input type="text" class="form-control" name="no_pengiriman" placeholder="No Pengiriman"  value="{{ old('no_pengiriman') }}">

              @if (count($errors) > 0)
                <div style="width: auto; color:crimson; margin-top: 0.25rem;">
                    {{ $errors->first('no_pengiriman') }}
                </div>
                
                
              @endif
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" placeholder="Tanggal"  value="{{ old('tanggal') }}">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Lokasi id</label>
                <input type="text" class="form-control" name="lokasi_id" placeholder="Lokasi id"  value="{{ old('lokasi_id') }}">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Barang id</label>
                <input type="text" class="form-control" name="barang_id" placeholder="Barang id"  value="{{ old('barang_id') }}">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Barang</label>
                <input type="text" class="form-control" name="jumlah_barang" placeholder="Jumlah Barang"  value="{{ old('jumlah_barang') }}">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Harga Barang</label>
                <input type="text" class="form-control" name="harga_barang" placeholder="Harga Barang"  value="{{ old('harga_barang') }}">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Kurir id</label>
                <input type="text" class="form-control" name="kurir_id" placeholder="Kurir id"  value="{{ old('kurir_id') }}">
              </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('kurir.index') }}" class="btn btn-danger">Kembali</a>

          </div>
        </form>
      </div>
    </div>
  </div>
      <!-- /.box -->

  @endsection