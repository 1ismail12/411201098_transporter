@extends('layouts.app')
@push('customcss')
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}"></script>
@endpush
  @section('title','Barang')
  @section('page-title','Barang')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Barang</h3>
      <div class="pull-right">
        <a href="{{ route('barang.create') }}" class="btn btn-info">Tambah</a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Deskripsi</th>
          <th>Stok Barang</th>
          <th>Harga Barang</th>
        </tr>
        @foreach($dtBarang as $item)
        <tr>
          <td>{{ $item->kode_barang }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td>{{ $item->deskripsi }}</td>
          <td>{{ $item->stok_barang }}</td>
          <td>{{ $item->harga_barang }}</td>
        </tr>
        @endforeach
        
        
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  @push('datatables')
  <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables/datatables.bootstrap.min.js') }}"></script>
  @endpush
  @push('customdatatables')
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
  @endpush
  @endsection