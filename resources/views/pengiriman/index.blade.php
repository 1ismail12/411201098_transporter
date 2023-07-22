@extends('layouts.app')
@push('customcss')
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}"></script>
@endpush
  @section('title','Pengiriman')
  @section('page-title','Pengiriman')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Pengiriman</h3>
      <div class="pull-right">
        <a href="{{ route('pengiriman.create') }}" class="btn btn-info">Tambah</a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No Pengiriman</th>
          <th>Tanggal</th>
          <th>Lokasi id</th>
          <th>Barang id</th>
          <th>Jumlah Barang</th>
          <th>Harga Barang</th>
          <th>Kurir id</th>
        </tr>
        @foreach($dtPengiriman as $item)
        <tr>
          <td>{{ $item->no_pengiriman }}</td>
          <td>{{ $item->tanggal }}</td>
          <td>{{ $item->lokasi_id }}</td>
          <td>{{ $item->barang_id }}</td>
          <td>{{ $item->jumlah_barang }}</td>
          <td>{{ $item->harga_barang }}</td>
          <td>{{ $item->kurir_id }}</td>
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