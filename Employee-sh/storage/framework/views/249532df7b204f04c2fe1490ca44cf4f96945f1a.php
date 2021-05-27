<div class="search">
 <div class="search-container container">
  <div>
   <?php echo e($employees); ?>

   </div>
   <div>
     <?php echo $__env->make('employees.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
 </div>
</div><?php /**PATH C:\xampp\htdocs\Employee-sh\resources\views//employees/search.blade.php ENDPATH**/ ?>