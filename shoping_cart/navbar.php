<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style type="text/css">
    th{
      color: red;
    }
  </style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<nav class="navbar navbar-dark bg-dark justify-content-between">
  <a class="navbar-brand">Cart</a>

  <form class="form-inline" action="search.php" method="post">
    <input class="form-control mr-sm-5" type="search" name = "search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    <?php
    session_start();
      $name = $_SESSION["name"];
      if($_SESSION["name"]) {
     
       
     
      }else{

      
      }

   
    ?>
    <?php
    session_start();
    if($_SESSION["name"]) {
    ?>
   <li> <?php  echo "<a href=''>Hi, $name</a>"; ?>  </li>
    <li><a class="  my-2 my-sm-0" href="logout.php" tite="Logout">Logout</li>
    <?php
    }else echo "<a href='login.php'>Login</a>";

    ?>
  </form>
</nav>
</head>
<body>

</body>
</html>