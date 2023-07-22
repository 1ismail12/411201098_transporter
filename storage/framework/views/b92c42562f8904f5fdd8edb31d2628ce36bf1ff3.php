  <?php $__env->startSection('title','Dahboard'); ?>
  <?php $__env->startSection('page-title','Home'); ?>
  <?php $__env->startSection('content'); ?>
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
        <form action="<?php echo e(route('simpan-barang')); ?>" method="POST">
            
            <?php echo csrf_field(); ?>
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Kode Barang</label>
              <input type="text" class="form-control" name="kode_barang" placeholder="Kode Barang"  value="<?php echo e(old('kode_barang')); ?>">
              <?php if(count($errors) > 0): ?>
                <div style="width: auto; color:crimson; margin-top: 0.25rem;">
                    <?php echo e($errors->first('kode_barang')); ?>

                </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang"  value="<?php echo e(old('nama_barang')); ?>">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="deskripsi"  value="<?php echo e(old('deskripsi')); ?>">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Stok Barang</label>
                <input type="text" class="form-control" name="stok_barang" placeholder="Stok Barang"  value="<?php echo e(old('stok_barang')); ?>">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Harga Barang</label>
                <input type="text" class="form-control" name="harga_barang" placeholder="Harga Barang"  value="<?php echo e(old('harga_barang')); ?>">
              </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="<?php echo e(route('kurir.index')); ?>" class="btn btn-danger">Kembali</a>

          </div>
        </form>
      </div>
    </div>
  </div>
      <!-- /.box -->

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_web\resources\views/barang/create.blade.php ENDPATH**/ ?>