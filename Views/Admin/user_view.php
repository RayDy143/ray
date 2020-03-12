<?php include '../../Controller/AdminSession.php'; ?>
<?php include '../Layout/header.php'; ?>

<div class="sidenav">
  <a href="#" class="text-bold text-white" style="background-color:#0c618f;">ADMINISTRATOR</a>
  <a href="#services" class="text-white">Dashboard</a>
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
    <div class="row">
        <h3>User Page</h3>
        <!-- <button type="button" onclick="window.location='../../AddNewUser.php'" class="right green text-white" style="border-radius: 5px;
        border: none;padding:5px;">Add User</button> -->
    </div>
    <div class="row" style="margin-bottom:50px;overflow:auto;">
        <table id="tblUser" style="width:100%;">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Date Created</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <?php include '../Layout/updateprofilemodal.php'; ?>

  </div>
  <?php include '../Layout/jquerylibrary.php'; ?>
  <script type="text/javascript">
      $(document).ready(function() {
        getUser();
        function getUser() {
            $.ajax({
                url:'../../Controller/GetUser.php',
                type:'POST',
                dataType:'json',
                success:function(response) {
                    $('#tblUser').DataTable({
                        "data": response,
                        "bPaginate": false,
                        "bLengthChange": false,
                        "bFilter": true,
                        "bInfo": false,
                        "searching":false,
                        "bDestroy": true,
                        "columns": [
                          { "data": "UserID" },
                          { "data": "Username" },
                          { "mData": function(data,type,dataToSet){
                              return data.Firstname+" "+data.Lastname;
                          }},
                          { "mData": function(data,type,dataToSet){
                              var d=new Date(data.date_added);
                              return d.toLocaleDateString();
                          }},
                          { "mData": function (data, type, dataToSet) {
                                if(data.IsActive==true){
                                    return "<span class='green'>Active</span>";
                                }else{
                                    return "<span class='pink'>Not Active</span>";
                                }
                          }},
                          { "mData": function (data, type, dataToSet) {
                                if(data.IsActive==true){
                                    return "<button style='padding:0px;margin:0px;' class='text-white activate pink btn' id='"+data.UserID+"'>Deactivate</button>";
                                }else{
                                    return "<button style='padding:0px;margin:0px;' class='text-white deact green btn' id='"+data.UserID+"'>Activate</button>";
                                }
                          }}
                        ]
                    });
                }
            });
        }

        $("#tblUser tbody").on("click","button",function() {
            var _action=$(this).text();
            var _id=$(this).attr("id");

            $.ajax({
                url:'../../Controller/UserChangeStatus.php',
                type:'POST',
                data:{
                    UserID:_id,
                    Action:_action
                },
                dataType:'json',
                success:function(response) {
                    if(response.success){
                        getUser();
                        if(response.action=="Activate"){
                            Swal.fire({
                              icon: 'success',
                              title: 'Account Activated',
                              showConfirmButton: false,
                              timer: 1500
                          });
                      }else{
                          Swal.fire({
                              icon: 'success',
                              title: 'Account deactivated',
                              showConfirmButton: false,
                              timer: 1500
                          });
                      }
                    }else{
                        alert("Error Occured. Contact you system administrator.");
                    }
                }
            });

        });

      });

  </script>
  <?php include '../Layout/updateprofilejquery.php'; ?>
  <?php include '../Layout/footer.php'; ?>
