<?php
    require '../functions/dbconfig.php';
    $query=mysqli_query($conn,"SELECT * FROM product");
    $data = array();
    foreach ($query as $row) {
        $data[]=$row;
    }
    echo json_encode($data);
 ?>