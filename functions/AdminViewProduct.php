<?php
    require '../../functions/dbconfig.php';

    $query=mysqli_query($conn,"SELECT * FROM product");

    foreach ($query as $row) {
        echo '<tr>';
            echo '<td>'.$row['ProductID'].'</td>';
            echo '<td>'.$row['ProductName'].'</td>';
            echo '<td>'.$row['Description'].'</td>';
            echo '<td><a class="text-black" href="../../EditProductPage.php?id='.$row['ProductID'].'&pname='.$row['ProductName'].'&quantity='.$row['Quantity'].'&price='.$row['Price'].'&description='.$row['Description'].'">Edit</a>|<a class="text-black" href="../../functions/DeleteProduct.php?id='.$row['ProductID'].'">Remove</a></td>';
        echo '</tr>';
    }
 ?>
