<style type="text/css">
         body {background-color: #FFE4E1;}
         h1   {color:	DarkSlateGray ;}
         h2  {color: gray;}
        p    {color: pink;}
        
        table {
          border-collapse: collapse; 
          width: 100%;
          }
        thead{
            background-color: Gainsboro;
            color:#606060;
          }
        th{
            border: 1px solid black;
          height: 50px;
          }
        table, td  {
            background-color:#F0F0F0;
            color:gray;
          border: 1px solid black;
          height: 50px;
          }
</style>
<h1 align="center">Employee Table</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Employee Name</th>
      <th scope="col">ID Number</th>
      <th scope="col">Phone Number</th>
      <th scope="col">City</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($employee->id); ?></th>
      <td><?php echo e($employee->employee_name); ?></td>
      <td><?php echo e($employee->employee_id); ?></td>
      <td><?php echo e($employee->phone_number); ?></td>
      <td><?php echo e($employee->city); ?></td>
      <td><?php echo e($employee->gender); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<?php /**PATH C:\xampp\htdocs\Employee-sh\resources\views/employees/search.blade.php ENDPATH**/ ?>