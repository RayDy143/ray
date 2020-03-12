<?php
    require 'dbconfig.php';
    $query=mysqli_query($conn,"SELECT * FROM ray_tbluser where tbluser_usertype!='Admin' ORDER BY tbluser_userid DESC");
    $data = array();
    foreach ($query as $row) {
        $data[]=$row;
    }
    echo json_encode($data);
 ?>
