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
            <a href="#" class="text-center side-nav-btn text-black">Products</a>
            <a href="#" class="text-center side-nav-btn active text-black">Users</a>
        </div>
        <div class="content">
            <div class="nav">
                <a href="#" class="text-white nav-btn">Profile</a>
                <a href="#" class="text-white nav-btn">Logout</a>
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
                                $servername="localhost";
                                $username="root";
                                $password="";
                                $dbname="ray";

                                $conn= new mysqli($servername,$username,$password,$dbname);
                                $sql="SELECT * FROM user";
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
                                            echo '<td><a class="pink btn text-white" href="Deactivate.php?id='.$row['UserID'].'">Deactivate</a></td>';
                                        echo '</tr>';
                                    }else{
                                        echo '<tr>';
                                            echo '<td>'.$row['UserID'].'</td>';
                                            echo '<td>'.$row['Username'].'</td>';
                                            echo '<td>'.$row['Firstname'].' '.$row['Lastname'].'</td>';
                                            echo '<td>'.$row['UserType'].'</td>';
                                            echo '<td class="pink">Not Active</td>';
                                            echo '<td><a class="green btn text-white" href="Activate.php?id='.$row['UserID'].'">Activate</a></td>';
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
