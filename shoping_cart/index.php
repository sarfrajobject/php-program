<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    th{
      color: red;
    }
    h1{
      text-align: center;
      padding-top: 200px;
    }
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="show.php">Cart <span class="sr-only">(current)</span></a>
      </li>
 
      <li class="nav-item active">
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
      <?php 
      echo "<li class='nav-item active'>
          <a class='nav-link' href='login.php'>Hi, $name<span class='sr-only'>(current)</span></a>
        </li>";

      ?>
      <li class='nav-item active'>
          <a class='nav-link' href='logout.php'>logout <span class='sr-only'>(current)</span></a>
        </li>

      <?php
      }else echo "<li class='nav-item active'>
          <a class='nav-link' href='login.php'>login <span class='sr-only'>(current)</span></a>
        </li>";

      ?>
      </li>

     


    </ul>
  </div>
</nav>
</head>
<body>
 <div><h1 >Welcome to cart Hi, <?php echo $name; ?></h1></div>
</body>
</html>