<?php $__env->startSection('content'); ?>
<section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo e(asset('img/logoyolalandscape.png')); ?>" alt="logo" width="150">
            </div>

            <div class="card card-primary">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger border-left-danger" role="alert">
                            Periksa Kembali NIP dan Password Anda
                    </div>
                <?php endif; ?>
              <div class="card-body">
                <form method="POST" action="<?php echo e(route('login')); ?>" class="needs-validation" novalidate="">
                  <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                        <div class="invalid-feedback">
                            Silahkan isi email Anda
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                            <div class="float-right">
                                <a href="#" class="text-primary text-small toggle-password" toggle="#password">
                                    <b>Tampilkan Password</b>
                                </a>
                            </div>
                        </div>
                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="invalid-feedback">
                            Silahkan isi password Anda
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block" tabindex="4">
                        Login
                        </button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.querySelector('#password');
        const togglePasswordButton = document.querySelector('.toggle-password');

        togglePasswordButton.addEventListener('click', function () {
            const passwordType = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', passwordType);

            // Update the button text
            const buttonText = passwordType === 'password' ? 'Tampilkan Password' : 'Sembunyikan Password';
            togglePasswordButton.innerHTML = `<b>${buttonText}</b>`;
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yoladigital\resources\views/auth/login.blade.php ENDPATH**/ ?>