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
        <form action="{{ route('simpan-barang') }}" method="POST">
            
            @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Kode Barang</label>
              <input type="text" class="form-control" name="kode_barang" placeholder="Kode Barang"  value="{{ old('kode_barang') }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang"  value="{{ old('nama_barang') }}">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="deskripsi"  value="{{ old('deskripsi') }}">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Stok Barang</label>
                <input type="text" class="form-control" name="stok_barang" placeholder="Stok Barang"  value="{{ old('stok_barang') }}">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Harga Barang</label>
                <input type="text" class="form-control" name="harga_barang" placeholder="Harga Barang"  value="{{ old('harga_barang') }}">
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