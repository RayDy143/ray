<?php
    require 'dbconfig.php';
    $query=mysqli_query($conn,"SELECT * FROM ray_tblproduct where tblproduct_status!='Deleted'");
    $data = array();
    foreach ($query as $row) {
        $data[]=$row;
    }
    echo json_encode($data);
 ?>
