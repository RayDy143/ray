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
  <a href="product_view.php" class="text-white">Products</a>
</div>
<div class="topnav" id="myTopnav">
    <a href="../../Controller/Logout.php">Logout</a>
    <a href="#UpdateProfileModal" rel="modal:open">Profile</a>
    <a id="btnHamburger" style="float:left;">|||</a>

  </a>
</div>
<div class="main">
    <div class="row" style="overflow: auto;">
        <h3 class="left" style="display:inline;">Product View</h3>
    </div>
  <div class="row">
      <table id="tblProducts" style="width:100%">
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

          </tbody>
      </table>
  </div>
  <?php include '../Layout/updateprofilemodal.php'; ?>
  <?php include '../Layout/jquerylibrary.php'; ?>
  <script type="text/javascript">
      getProducts();
      function getProducts() {
          $.ajax({
              url:'../../Controller/GetProduct.php/',
              type:'POST',
              dataType:'json',
              success:function(response) {
                  $('#tblProducts').DataTable({
                      "data": response,
                      "bPaginate": false,
                      "bLengthChange": false,
                      "bFilter": true,
                      "bInfo": false,
                      "searching":false,
                      responsive:true,
                      "bDestroy": true,
                      "columns": [
                        { "data": "tblproduct_productid" },
                        { "data": "tblproduct_productname" },
                        { "data": "tblproduct_quantity" },
                        { "mData": function (data, type, dataToSet) {
                              return "₱ "+data.tblproduct_price;
                        }},
                        { "data": "tblproduct_description" }
                      ]
                  });
              }
          });
      }
  </script>
  <?php include '../Layout/updateprofilejquery.php'; ?>

  <?php include '../Layout/footer.php'; ?>
