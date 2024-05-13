<?php $__env->startSection('content'); ?>
<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Data Pekerja</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Menu</a></div>
              <div class="breadcrumb-item"><a href="#">Data Pekerja</a></div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                          <h5 class="section-title">Pekerja di Yola Digital</h5>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 tombol">
                            <a class="btn btn-success" href="<?php echo e(route('cms-admin.form.tambahpekerja')); ?>"><i class="fa fa-plus"></i>Tambah Pekerja</a>
                        </div>
                    </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                          <th>
                              No
                            </th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $pekerja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                          <tr>
                            <td class="number"></td>
                            <td><?php echo e($data->nama_pekerja); ?></td>
                            <td><?php echo e($data->email); ?></td>
                            <td>0<?php echo e($data->no_telp_pekerja); ?></td>
                            <td>
                                <div class="row">
                                  <div class="col-6">
                                    <form action="<?php echo e(route('cms-admin.data.pekerja.hapuspekerja',$data->id_pekerja)); ?>" method="POST">
                                    <button type="submit" class="btn btn-xs btn-danger btn-flat hapus-laporan" data-toggle="tooltip" name="delete"><?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><i class="fa fa-trash"></i></button>
                                    </form>
                                  </div>
                                  <div class="col-6">
                                    <a class="btn btn-xs btn-success btn-flat" href="<?php echo e(route('cms-admin.data.detail.pekerja',$data->id_pekerja)); ?>"><i class="fa fa-pen"></i></a>
                                  </div>
                                </div>
                            </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yoladigital\resources\views/cms-admin/data/pekerja.blade.php ENDPATH**/ ?>