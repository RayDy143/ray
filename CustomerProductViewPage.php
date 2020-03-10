<?php
    session_start();
    if(!isset($_SESSION['UserID'])&&!$_SESSION['UserType']=="Customer"){
        header("location:index.php");
    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=width-device,initial-scale=1.0">
        <link rel="stylesheet" href="css/mystyle.css">

        <title>Admin Dashboard</title>
    </head>
    <body>
        <div class="side-nav">
            <a href="#" class="text-white text-bold brand-text text-center">CUSTOMER</a>
            <a href="#" class="text-center side-nav-btn text-black">Dashboard</a>
        </div>
        <div class="content">
            <!-- <div class="nav">
                <a href="EditProfilePage.php" class="text-white nav-btn">Profile</a>
                <a href="functions/Logout.php" class="text-white nav-btn">Logout</a>
            </div> -->
            <div class="topnav" id="myTopnav">
                <a href="functions/Logout.php">Logout</a>
                <a href="EditProfilePage.php">Profile</a>
              </a>
            </div>
            <div class="page-content">
                <div class="row">
                    <h3 class="left" style="display:inline;">Products Page</h3>

                </div>
                <div class="row" style="float:left;">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require 'functions/dbconfig.php';

                                $query=mysqli_query($conn,"SELECT * FROM product");

                                foreach ($query as $row) {
                                    echo '<tr>';
                                        echo '<td>'.$row['ProductID'].'</td>';
                                        echo '<td>'.$row['ProductName'].'</td>';
                                        echo '<td>'.$row['Quantity'].'</td>';
                                        echo '<td> ₱ '.$row['Price'].'</td>';
                                        echo '<td>'.$row['Description'].'</td>';
                                    echo '</tr>';
                                }
                             ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
