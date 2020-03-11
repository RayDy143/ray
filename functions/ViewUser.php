<?php
    require '../../functions/dbconfig.php';
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
                echo '<td><a class="pink btn text-white" href="../../functions/Deactivate.php?id='.$row['UserID'].'">Deactivate</a></td>';
            echo '</tr>';
        }else{
            echo '<tr>';
                echo '<td>'.$row['UserID'].'</td>';
                echo '<td>'.$row['Username'].'</td>';
                echo '<td>'.$row['Firstname'].' '.$row['Lastname'].'</td>';
                echo '<td>'.$row['UserType'].'</td>';
                echo '<td class="pink">Not Active</td>';
                echo '<td><a class="green btn text-white" href="../../functions/Activate.php?id='.$row['UserID'].'">Activate</a></td>';
            echo '</tr>';
        }
    }
?>
