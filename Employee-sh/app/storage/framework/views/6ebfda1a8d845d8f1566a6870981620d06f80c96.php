<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style type="text/css">
         body {background-color: pink;}
         h1   {color: page;}
         h2   {color: gray;}
        p    {color: pink;}
        .div .form{
        margin-top: 10px;
        border: 2px solid powderblue;
        padding: 300px;
        }
        input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  transition: width 0.4s ease-in-out;
}
        .topnav .search-container button {
            float: right;
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
            }
            .topnav .search-container {
                float: right;
                }
                .topnav .search-container button:hover {
                    background: #ccc;
                    }
                    </style>
   <title>Company website</title>
  </head>
  <body>
  <nav class="nav navbar">
<div class="nav-itme"><h3>Company Logo<h3></div>
</nav>
</header>
<div class="topnav">
<div class="search-container">
    <form action="<?php echo e(url('/employees/search)); ?>" method="get">
    <?php echo csrf_field(); ?>
      <input type="text"  placeholder="search_text" name="search_text" style="width: 50; display: inline;">
      <button type="submit">Search</button>
    </form>
</div>
</div>
<?php echo $__env->make('employees.employeeForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<nav class="navbar navbar-light bg-light">
  <a class="employees" href="<?php echo e(url('/employees/master')); ?>">Display Employee Table</a>
  <?php echo csrf_field(); ?>
</nav> 
 <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
</body>
</html> ?><?php /**PATH C:\xampp\htdocs\Employee-sh\resources\views//employees/index.blade.php ENDPATH**/ ?>