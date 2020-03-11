<?php include '../../functions/AdminSession.php'; ?>
<?php include '../Layout/header.php'; ?>

<div class="sidenav">
  <a href="#" class="text-bold text-white" style="background-color:#0c618f;">ADMINISTRATOR</a>
  <a href="#services" class="text-white">Dashboard</a>
  <a href="product_view.php" class="text-white">Products</a>
  <a href="#" class="text-white">Users</a>
</div>
<div class="topnav" id="myTopnav">
    <a href="../../functions/Logout.php">Logout</a>
    <a href="../../EditProfilePage.php">Profile</a>
  </a>
</div>
<div class="main">
    <div class="row">
        <h3 class="left" style="display:inline;">User Page</h3>
        <!-- <button type="button" onclick="window.location='../../AddNewUser.php'" class="right green text-white" style="border-radius: 5px;
        border: none;padding:5px;">Add User</button> -->
    </div>
    <div class="row" style="margin-bottom:50px;">
        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>User Type</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include '../../functions/ViewUser.php'; ?>
            </tbody>
        </table>
    </div>
  </div>

  <?php include '../Layout/footer.php'; ?>
