
<?php
    session_start();
    ob_start();
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

        <title>Admin Dashboard</title>
    </head>
    <body>
        <div class="side-nav">
            <a href="#" class="text-white text-bold brand-text text-center">ADMINISTRATOR</a>
            <a href="#" class="text-center side-nav-btn text-black">Dashboard</a>
            <a href="AdminProductView.php" class="text-center side-nav-btn text-black">Products</a>
            <a href="#" class="text-center side-nav-btn active text-black">Users</a>
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
                    <h3 class="left" style="display:inline;">User Page</h3>
                    <button type="button" onclick="window.location='AddNewUser.php'" class="right green text-white" style="border-radius: 5px;
                    border: none;padding:5px;">Add User</button>
                </div>
                <div class="row" style="float:left;">
                    <table>
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>User Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require 'functions/dbconfig.php';
                                $sql="SELECT * FROM user WHERE NOT UserType='Admin'";
                                $query=mysqli_query($conn,$sql);
                                foreach ($query as $row) {
                                    $status="";
                                    if($row['IsActive']){
                                        echo '<tr>';
                                            echo '<td>'.$row['UserID'].'</td>';
                                            echo '<td>'.$row['Username'].'</td>';
                                            echo '<td>'.$row['Firstname'].' '.$row['Lastname'].'</td>';
                                            echo '<td>'.$row['UserType'].'</td>';
                                            echo '<td class="green">Active</td>';
                                            echo '<td><a class="pink btn text-white" href="functions/Deactivate.php?id='.$row['UserID'].'">Deactivate</a></td>';
                                        echo '</tr>';
                                    }else{
                                        echo '<tr>';
                                            echo '<td>'.$row['UserID'].'</td>';
                                            echo '<td>'.$row['Username'].'</td>';
                                            echo '<td>'.$row['Firstname'].' '.$row['Lastname'].'</td>';
                                            echo '<td>'.$row['UserType'].'</td>';
                                            echo '<td class="pink">Not Active</td>';
                                            echo '<td><a class="green btn text-white" href="functions/Activate.php?id='.$row['UserID'].'">Activate</a></td>';
                                        echo '</tr>';
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
