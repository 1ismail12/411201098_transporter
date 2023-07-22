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
        <form action="<?php echo e(route('simpan-kurir')); ?>" method="POST">
            
            <?php echo csrf_field(); ?>
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" name="name" placeholder="name"  value="<?php echo e(old('name')); ?>">
              <?php if(count($errors) > 0): ?>
                <div style="width: auto; color:crimson; margin-top: 0.25rem;">
                    <?php echo e($errors->first('name')); ?>

                </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email" placeholder="email"  value="<?php echo e(old('email')); ?>">
                <?php if(count($errors) > 0): ?>
                <div style="width: auto; color:crimson; margin-top: 0.25rem;">
                    <?php echo e($errors->first('email')); ?>

                </div>
                <?php endif; ?>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="text" class="form-control" name="password" placeholder="password"  value="<?php echo e(old('Password')); ?>">
                <?php if(count($errors) > 0): ?>
                <div style="width: auto; color:crimson; margin-top: 0.25rem;">
                    <?php echo e($errors->first('password')); ?>

                </div>
                <?php endif; ?>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_web\resources\views/kurir/create.blade.php ENDPATH**/ ?>