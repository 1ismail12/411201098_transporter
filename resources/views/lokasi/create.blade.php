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
        <form action="{{ route('simpan-lokasi1') }}" method="POST">
            
            @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Kode Lokasi</label>
              <input type="text" class="form-control" name="kode_lokasi" placeholder="Kode Lokasi"  value="{{ old('kode_lokasi') }}">
              @if (count($errors) > 0)
                <div style="width: auto; color:crimson; margin-top: 0.25rem;">
                    {{ $errors->first('kode_lokasi') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Lokasi</label>
                <input type="text" class="form-control" name="nama_lokasi" placeholder="Nama Lokasi"  value="{{ old('nama_lokasi') }}">
              </div>

              
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('lokasi.index') }}" class="btn btn-danger">Kembali</a>

          </div>
        </form>
      </div>
    </div>
  </div>
      <!-- /.box -->

  @endsection