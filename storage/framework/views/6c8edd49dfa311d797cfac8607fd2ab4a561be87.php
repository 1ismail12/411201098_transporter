<?php $__env->startPush('customcss'); ?>
<script src="<?php echo e(asset('plugins/datatables/dataTables.bootstrap.css')); ?>"></script>
<?php $__env->stopPush(); ?>
  <?php $__env->startSection('title','Dahboard'); ?>
  <?php $__env->startSection('page-title','Barang'); ?>
  <?php $__env->startSection('content'); ?>
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Barang</h3>
      <div class="pull-right">
        <a href="<?php echo e(route('barang.create')); ?>" class="btn btn-info">Tambah</a>
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
        <?php $__currentLoopData = $dtBarang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($item->kode_barang); ?></td>
          <td><?php echo e($item->nama_barang); ?></td>
          <td><?php echo e($item->deskripsi); ?></td>
          <td><?php echo e($item->stok_barang); ?></td>
          <td><?php echo e($item->harga_barang); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  <?php $__env->startPush('datatables'); ?>
  <script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('plugins/datatables/datatables.bootstrap.min.js')); ?>"></script>
  <?php $__env->stopPush(); ?>
  <?php $__env->startPush('customdatatables'); ?>
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
  <?php $__env->stopPush(); ?>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_web\resources\views/barang/index.blade.php ENDPATH**/ ?>