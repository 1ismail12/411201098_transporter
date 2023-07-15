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
        <form action="{{ route('simpan-kurir') }}" method="POST">
            
            @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" name="name" placeholder="name"  value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email" placeholder="email"  value="{{ old('email') }}">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="text" class="form-control" name="password" placeholder="password"  value="{{ old('Password') }}">
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