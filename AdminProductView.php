<?php
    session_start();
    if(!isset($_SESSION['UserID'])){
        header("location:index.php");
    }else if($_SESSION['UserType']!="Admin"){
        header("location:index.php");
    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=width-device,initial-scale=1.0">
        <link rel="stylesheet" href="css/mystyle.css">
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Admin Dashboard</title>
        <style>
        body {
          font-family: "Lato", sans-serif;
        }

        .sidenav {
          height: 100%;
          width: 200px;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #7bb4d3;
          overflow-x: hidden;
        }

        .sidenav a {
          text-decoration: none;
          font-size: 17px;
          padding: 14px 16px;
          display: block;
          text-align: center;
        }

        .sidenav a:hover {
          color: #f1f1f1;
        }

        .main {
          margin-left: 200px; /* Same as the width of the sidenav */
          font-size: 28px; /* Increased text to enable scrolling */
          padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>
    </head>
    <body>
        <!-- <div class="side-nav">
            <a href="#" class="text-white text-bold brand-text text-center">ADMINISTRATOR</a>
            <a href="#" class="text-center side-nav-btn text-black">Dashboard</a>
            <a href="#" class="text-center side-nav-btn active text-black">Products</a>
            <a href="AdminUserView.php" class="text-center side-nav-btn text-black">Users</a>
        </div> -->
        <div class="sidenav">
          <a href="#" class="text-bold text-white" style="background-color:#0c618f;">ADMINISTRATOR</a>
          <a href="#services" class="text-white">Dashboard</a>
          <a href="#clients" class="text-white">Products</a>
          <a href="#clients" class="text-white">Users</a>
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
                    <button type="button" class="right green text-white" style="border-radius: 5px;
                    border: none;padding:5px;" onclick="window.location='AddNewProductPage.php'">Add Product</button>
                </div>
                <div class="row" style="float:left;">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Option</th>
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
                                        echo '<td>'.$row['Description'].'</td>';
                                        echo '<td><a class="text-black" href="EditProductPage.php?id='.$row['ProductID'].'&pname='.$row['ProductName'].'&quantity='.$row['Quantity'].'&price='.$row['Price'].'&description='.$row['Description'].'">Edit</a>|<a class="text-black" href="functions/DeleteProduct.php?id='.$row['ProductID'].'">Remove</a></td>';
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
