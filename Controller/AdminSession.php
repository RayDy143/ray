<?php
    session_start();
    if(!isset($_SESSION['UserID'])){
        header("location:../../index.php");
    }else if($_SESSION['UserType']!="Admin"){
        header("location:../../index.php");
    }
 ?>
