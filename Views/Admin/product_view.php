<?php include '../../Controller/AdminSession.php'; ?>
<?php include '../Layout/header.php'; ?>
<div class="sidenav">
  <a href="#" class="text-bold text-white" style="background-color:#0c618f;">ADMINISTRATOR</a>
  <a href="#" class="text-white">Dashboard</a>
  <a href="product_view.php" class="text-white">Products</a>
  <a href="user_view.php" class="text-white">Users</a>
</div>
<div class="topnav" id="myTopnav">
    <a href="../../Controller/Logout.php">Logout</a>
    <a href="#UpdateProfileModal" rel="modal:open">Profile</a>
    <a id="btnHamburger" style="float:left;">|||</a>
  </a>
</div>
<div class="main">
    <div id="AddModal" class="modal" style="background-color:#0569a0">
        <h3 class="text-white">ADD NEW PRODUCT</h3>
        <form id="frmAddProduct" method="post" name="ProductForm">
            <div class="row">
                <input type="text" class="center" id="txtProductName" placeholder="Product name" name="ProductName"/>
            </div>
            <div class="row">
                <input type="number" class="center" id="txtQuantity" placeholder="Quantity" name="Quantity"/>
            </div>
            <div class="row">
                <input type="number" class="center" id="txtPrice" placeholder="Price" name="Price"/>
            </div>
            <div class="row">
                <input type="text" class="center" id="txtDescription" placeholder="Description" name="Description"/>
            </div>
            <button type="submit" class="btn pink text-white center" name="btnSubmit">ADD</button>
        </form>
    </div>
    <div id="UpdateModal" class="modal" style="background-color:#0569a0">
        <h3 class="text-white">UPDATE PRODUCT</h3>
        <form id="frmUpdateProduct" method="post" name="ProductForm">
            <div class="row">
                <input type="hidden" class="center" id="txtUpdateProductID" name="ProductID"/>
            </div>
            <div class="row">
                <input type="text" class="center" id="txtUpdateProductName" placeholder="Product name" name="ProductName"/>
            </div>
            <div class="row">
                <input type="number" class="center" id="txtUpdateQuantity" placeholder="Quantity" name="Quantity"/>
            </div>
            <div class="row">
                <input type="number" class="center" id="txtUpdatePrice" placeholder="Price" name="Price"/>
            </div>
            <div class="row">
                <input type="text" class="center" id="txtUpdateDescription" placeholder="Description" name="Description"/>
            </div>
            <button type="submit" class="btn pink text-white center" name="btnSubmit">UPDATE</button>
        </form>
    </div>
    <div class="row" style="overflow: auto;">
        <h3 class="left" style="display:inline;">Product View</h3>
        <button type="button" id="btnAddProduct" class="right green text-white" style="border-radius: 5px;
        border: none;padding:10px;">ADD PRODUCT</button>
    </div>
  <div class="row">
      <table id="tblProducts" style="width:100%;">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>Option</th>
              </tr>
          </thead>
          <tbody>

          </tbody>
      </table>
  </div>
  <?php include '../Layout/updateprofilemodal.php'; ?>
  <?php include '../Layout/jquerylibrary.php'; ?>
<script type="text/javascript">
    $(document).ready(function() {
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
                          { "data": "ProductID" },
                          { "data": "ProductName" },
                          { "data": "Description" },
                          { "mData": function (data, type, dataToSet) {
                                return "<button style='padding:0px;margin:0px;width:50%;' class='text-white activate green btn edit' id="+ data.ProductID + ">EDIT</button><button style='padding:0px;margin:0px;width:50%;' class='text-white activate pink btn delete' class='delete' id="+ data.ProductID + ">DELETE</button>";
                            }}

                        ]
                    });
                }
            });
        }
        $("#btnAddProduct").click(function() {
            $("#AddModal").modal({
                fadeDuration: 100
            });
        });
        $("#frmAddProduct").submit(function(e) {
            e.preventDefault();
            $.ajax({
                url:'../../Controller/AddProduct.php/',
                type:'POST',
                data:{
                    ProductName:$("#txtProductName").val(),
                    Quantity:$("#txtQuantity").val(),
                    Price:$("#txtPrice").val(),
                    Description:$("#txtDescription").val()
                },
                dataType:'json',
                success:function(response) {
                    $.modal.close();
                    Swal.fire(
                      'Added!',
                      'Product has been added.',
                      'success'
                  );
                    getProducts();
                }
            });
        });

        $("#frmUpdateProduct").submit(function(e) {
            e.preventDefault();
            $.ajax({
                url:'../../Controller/UpdateProduct.php',
                type:'POST',
                data:{
                    ProductID:$("#txtUpdateProductID").val(),
                    ProductName:$("#txtUpdateProductName").val(),
                    Quantity:$("#txtUpdateQuantity").val(),
                    Price:$("#txtUpdatePrice").val(),
                    Description:$("#txtUpdateDescription").val()
                },
                dataType:'json',
                success:function(response) {
                    if(response.success){
                        $.modal.close();
                        Swal.fire(
                          'Updated!',
                          'Product has been updated.',
                          'success'
                      );
                        getProducts();
                    }
                }
            });
        });
        $('#tblProducts tbody').on( 'click', 'button.delete', function () {
            var _id=$(this).attr('id');
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.value) {
                  $.ajax({
                      url:'../../Controller/DeleteProduct.php',
                      type:'POST',
                      data:{
                          ProductID:_id
                      },
                      dataType:'json',
                      success:function(response) {
                          if(response.success){
                              getProducts();
                              Swal.fire(
                                'Deleted!',
                                'Product has been deleted.',
                                'success'
                            );
                          }else{
                              alert("Error Occured. Contact you system administrator.");
                          }
                      }
                  });
              }
          });



        });
        $('#tblProducts tbody').on( 'click', 'button.edit', function () {
            $("#UpdateModal").modal({
                fadeDuration: 100
            });
            var _id=$(this).attr('id');
            $.ajax({
                url:'../../Controller/GetProductByID.php',
                type:'POST',
                data:{
                    ProductID:_id
                },
                dataType:'json',
                success:function(response) {
                    $("#txtUpdateProductID").val(response.ProductID);
                    $("#txtUpdateProductName").val(response.ProductName);
                    $("#txtUpdateQuantity").val(response.Quantity);
                    $("#txtUpdatePrice").val(response.Price);
                    $("#txtUpdateDescription").val(response.Description);
                }
            });
        });

    });
</script>
<?php include '../Layout/updateprofilejquery.php'; ?>

<?php include '../Layout/footer.php'; ?>
