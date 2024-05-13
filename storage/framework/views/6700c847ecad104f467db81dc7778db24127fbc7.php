<?php $__env->startSection('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <div class="section-header-back">
            <a href="<?php echo e(route('cms-admin.data.layanan')); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"> Kembali</i></a>
        </div>
        <h1>Form Layanan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="#">Menu</a></div>
            <div class="breadcrumb-item"><a href="#">Form Edit Layanan</a></div>
        </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Form Edit Layanan</h2>
            <p class="section-lead">
                Lengkapi data berikut, untuk memperbarui layanan Anda
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                            <div class="card-body">
                            <?php $__currentLoopData = $detaillayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <form action="<?php echo e(route('cms-admin.data.detail.layanan.updatelayanan', $data->id_layanan)); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo method_field('PATCH'); ?>
                                <?php echo csrf_field(); ?>
                                <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Layanan :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input id="namalayanan" type="text" name="Nama" class="form-control" value="<?php echo e($data->nama_layanan ?? ''); ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan Layanan :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="Keterangan" style="height: 250px;" class="form-control" required><?php echo e($data->keterangan_layanan ?? ''); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button id="submit" type="submit" class="btn btn-success">Update Data Layanan</button>
                                </div>
                            </div>
                            </form>                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                                <?php $__currentLoopData = $detaillayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($data->foto_layanan == 'Tidak Ada'): ?>
                                <form action="<?php echo e(route('cms-admin.data.detail.layanan.upload-foto', $data->id_layanan)); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo method_field('PATCH'); ?>
                                <?php echo csrf_field(); ?>
                                <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Layanan</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" name="Foto" class="form-control" required>
                                        <div class="form-text text-muted">Tipe/Format yang diizinkan .WEBP, .PNG, .JPG, .JPEG dengan maksimal ukuran 1MB.</div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button id="submit" type="submit" class="btn btn-success">Upload Foto Layanan</button>
                                </div>
                                </form>
                                <?php else: ?>
                                <div class="card-body">
                                    <div class="form-group d-flex justify-content-center">
                                        <img src="<?php echo e(url('uploads/layanan/')); ?>/<?php echo e($data->foto_layanan); ?>" alt="Foto Layanan" style="max-width: 300px;">
                                    </div>
                                    <form action="<?php echo e(route('cms-admin.data.detail.layanan.hapus-foto',$data->id_layanan)); ?>" method="POST">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button class="btn btn-danger" type="submit">
                                                <a class="fa fa-trash"><?php echo csrf_field(); ?> <?php echo method_field('PATCH'); ?> Hapus Foto Layanan</a>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yoladigital\resources\views/cms-admin/data/detail/layanan.blade.php ENDPATH**/ ?>