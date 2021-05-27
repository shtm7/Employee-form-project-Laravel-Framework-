<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style type="text/css">
         body {background-color: #FFE4E1;}
         h1   {color:	DarkSlateGray ;}
         h2  {
           text-align:center;
           line-height:4;
           color: #606060;}
         h3 {color:White;}
        p    {color: pink;}
        
         .topnav .search-container {
                float: right;
                }
                    
        .navbar {
  width: 20%;
  background-color: #555;
  overflow: auto;
}
input[type=text],input[type=integer], select, textarea {
  display: block;
  width: 50%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  resize:horizontal ;
}
​​label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 5px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 5px;
}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Navbar links */
.navbar a  {
  float: left;
  text-align: center;
  padding: 12px;
  background-color:LightGray;
  color: gray ;
  text-decoration: none;
  font-size: 15px;
  font-weight: bold;
}

/* Navbar links on mouse-over */
.navbar a:hover {
  background-color: #000;
}

/* Current/active navbar link */
.active {
  background-color: #4CAF50;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    background-color:#FFE4E1;
    display: block;
  }
}
</style>
   <title>Company website</title>
  </head>
  <body>
<nav class="nav navbar">
<div class="nav-itme"><h3>Company Logo<h3></div>
</nav>
<div class="topnav">
<ul>
<div class="search-container">
    <form action="{{url('/employees/search')}}" method="get">
    @csrf
      <input type="text"  placeholder="search_text" name="search_text" required>
      <button type="submit">Search</button>
    </form>
</div>
</ul>
</div>
@include('employees.employeeForm')
@yield('content')
<ul>
<nav class="navbar navbar-light bg-light">
<a class="employees" href="{{url('/employees/master')}}">Display Employee Table</a>
@csrf
</nav>
</ul>
 <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>