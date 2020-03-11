<?php
    session_start();
    if(!isset($_SESSION['UserID'])){
        header("location:../../index.php");
    }else if($_SESSION['UserType']!="Customer"){
        header("location:../../index.php");
    }
 ?>
<?php include '../Layout/header.php'; ?>
<div class="sidenav">
  <a href="#" class="text-bold text-white" style="background-color:#0c618f;">CUSTOMER</a>
  <a href="#services" class="text-white">Dashboard</a>
  <a href="#" class="text-white">Products</a>
</div>
<div class="topnav" id="myTopnav">
    <a href="../../functions/Logout.php">Logout</a>
    <a href="../../EditProfilePage.php">Profile</a>
  </a>
</div>
<div class="main">
    <div class="row" style="overflow: auto;">
        <h3 class="left" style="display:inline;">Product View</h3>
    </div>
  <div class="row">
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
                  require '../../functions/dbconfig.php';

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

  <?php include '../Layout/footer.php'; ?>
