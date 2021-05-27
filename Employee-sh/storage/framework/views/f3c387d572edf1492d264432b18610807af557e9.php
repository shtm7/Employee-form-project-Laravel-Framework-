<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
          a  {
  float: center;
  text-align: center;
  padding: 12px ;
  background-color:LightGray;
  color: gray ;
  text-decoration: none;
  font-size: 15px;
  font-weight: bold;
}

/* Navbar links on mouse-over */
a:hover {

  background-color: #000;
}

        
    </style>
    <title>Employee Table</title>
  </head>
  <body>
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
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($employee->id); ?></th>
      <td align="center"><?php echo e($employee->employee_name); ?></td>
      <td align="center"><?php echo e($employee->employee_id); ?></td>
      <td align="center"><?php echo e($employee->phone_number); ?></td>
      <td align="center"><?php echo e($employee->city); ?></td>
      <td align="center" ><?php echo e($employee->gender); ?></td>
      <td align="center">
      <a class="employees" href='/employees/destroy/<?php echo e($employee->id); ?>' onclick="return confirm('Are you sure?')">Delete</a>
      <?php echo method_field('DELETE'); ?>
      <?php echo csrf_field(); ?>
      
    <form action="<?php echo e(url('/employees/destroy',['id'=>$employee->id])); ?>" method="POST">
    <?php echo method_field('DELETE'); ?>
    <?php echo csrf_field(); ?> 
    <button type="submit">delete</button>
    </form>
    </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use.strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
 <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
</body>
</html><?php /**PATH C:\xampp\htdocs\Employee-sh\resources\views/employees/master.blade.php ENDPATH**/ ?>