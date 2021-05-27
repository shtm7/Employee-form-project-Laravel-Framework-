<?php $__env->startSection('content'); ?>
<nav class="nav navbar">
<div class="nav-itme"><h3>Company Logo<h3></div>
</nav>
</header>
<div class="topnav">
<div class="search-container">
<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($employee->employee_id); ?>

<?php echo e($employee->employee_name); ?>

    <form action="<?php echo e(route('post.action_page')); ?>" method="get">
    <?php echo csrf_field(); ?>
      <input type="text"  placeholder="Search" name="search" style="width: 50; display: inline;">
      <button type="submit">Search</button>
    </form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\xampp\htdocs\Employee-sh\resources\views/employees/action_page.blade.php ENDPATH**/ ?>