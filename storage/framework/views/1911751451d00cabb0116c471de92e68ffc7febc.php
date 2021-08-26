<?php $__env->startSection('main'); ?>
    <!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">REGISTER</div>
  </div>
  <div class="form">
    <h2>Login To Your Account</h2>
    <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
      <input type="text" name="email" placeholder="Username"/>
      <input type="password" name="password" placeholder="Password"/>
      <button type="submit">LOGIN</button>
    </form>
  </div>
  <div class="form">
    <h2>Create An Account</h2>
    <form action="<?php echo e(route('register')); ?>" method="POST">
        <?php echo csrf_field(); ?>
      <input type="text" name="name" placeholder="Full Name"/>
      <input type="email" name="email" placeholder="Email Address"/>
      <input type="password" name="password" placeholder="Password"/>
      <input type="password" name="password_confirmation" placeholder="Confirm Password"/>
      <button type="submit">REGISTER</button>
    </form>
  </div>
  <div class="cta"><a href="#">LOGIN BLOG</a></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partial.logintemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-blog\resources\views/auth/login.blade.php ENDPATH**/ ?>