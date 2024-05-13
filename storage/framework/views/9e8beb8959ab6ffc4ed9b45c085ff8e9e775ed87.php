<?php $__env->startSection('content'); ?>
<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Data Layanan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Menu</a></div>
              <div class="breadcrumb-item"><a href="#">Data Layanan</a></div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                          <h5 class="section-title">Layanan di Yola Digital</h5>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 tombol">
                            <a class="btn btn-success" href="<?php echo e(route('cms-admin.form.tambahlayanan')); ?>"><i class="fa fa-plus"></i>Tambah Layanan</a>
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
                            <th>Keterangan</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                          <tr>
                            <td class="number"></td>
                            <td><?php echo e($data->nama_layanan); ?></td>
                            <td><?php echo e($data->keterangan_layanan); ?></td>
                            <td>
                              <?php if($data->foto_layanan === 'Tidak Ada'): ?>
                                  <p>Tidak Ada Foto Layanan</p>
                              <?php else: ?>
                                  <a href="<?php echo e(url('uploads/layanan/' . $data->foto_layanan)); ?>" target="_blank">
                                      <img src="<?php echo e(url('uploads/layanan/' . $data->foto_layanan)); ?>" alt="<?php echo e($data->foto_layanan); ?>" style="width:100px;">
                                  </a>
                              <?php endif; ?>
                            </td>
                            <td>
                                <div class="row">
                                  <div class="col-6">
                                    <form action="<?php echo e(route('cms-admin.data.hapuslayanan',$data->id_layanan)); ?>" method="POST">
                                    <button type="submit" class="btn btn-xs btn-danger btn-flat" data-toggle="tooltip" name="delete"><?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><i class="fa fa-trash"></i></button>
                                    </form>
                                  </div>
                                  <div class="col-6">
                                    <a class="btn btn-xs btn-success btn-flat" href="<?php echo e(route('cms-admin.data.detail.layanan',$data->id_layanan)); ?>"><i class="fa fa-pen"></i></a>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yoladigital\resources\views/cms-admin/data/layanan.blade.php ENDPATH**/ ?>