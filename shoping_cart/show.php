<?php
session_start();
if($_SESSION["name"]) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "navbar.php";
    ?>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Item Details</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New Item</a>
                    </div>
                    <?php
                    session_start();

					$host = "localhost";
					$username = "root";
					$password = "devil@123";
					$db = "cart";


					$conn = new mysqli($host, $username, $password, $db);

					if($conn->connect_error){

						die("connection failed ".$conn->connect_error);

					}


					$query = "SELECT id, username, password FROM cart ORDER BY id";
					$result = $conn->query($query);
                    
                    // Attempt select query execution
                    $query = "SELECT * FROM cart";
                    if($result = $conn->query($query)){
                        if($result->num_rows > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Image</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Price</th>";
                                     
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>". "<img src = 'images/".$row['image']."'width='50' height='30'></img></td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['price'] . "</td>";
                                        

                                 
                                        echo "<td>";
                                            
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            $result->free();
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                    }
                    
                    // Close connection
                    $mysqli->close();
                    ?>

                </div>
            </div>        
        </div>
    </div>
</body>
</html>
<?php
    }else header("location:login.php");    
?>
