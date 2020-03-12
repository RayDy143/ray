<div id="UpdateProfileModal" class="modal" style="background-color:#0569a0">
    <h3 class="text-white">UPDATE PROFILE</h3>
    <form class="" id="frmUpdateProfile" action="#" method="post" name="ProfileForm">
        <div class="row">
            <span class="text-white">UserID</span>
            <input type="text" readonly class="center" placeholder="ID" value="<?php echo $_SESSION['UserID']; ?>" name="UserID"/>
        </div>
        <div class="row">
            <span class="text-white">Username</span>
            <input id="txtUpdateProfileUsername" type="text" value="<?php echo $_SESSION['Username']; ?>" class="center" placeholder="Username" name="Username"/>
        </div>
        <div class="row">
            <span class="text-white">Firstname</span>
            <input id="txtUpdateProfileFirstname" type="text" class="center" value="<?php echo $_SESSION['Firstname']; ?>" placeholder="Firstname" name="Firstname"/>
        </div>
        <div class="row">
            <span class="text-white">Lastname</span>
            <input id="txtUpdateProfileLastname" type="text" class="center" value="<?php echo $_SESSION['Lastname']; ?>" placeholder="Lastname" name="Lastname"/>
        </div>
        <button type="submit" name="btnSubmit" class="btn green text-white center">SUBMIT</button>
        <button type="button" id="btnChangePassword" class="btn pink text-white center">CHANGE PASSWORD</button>
    </form>
</div>
<div class="modal" id="ChangePasswordModal" style="background-color:#0569a0">
    <h3 class="text-white">CHANGE PASSWORD</h3>
    <form method="post" id="frmChangePassword" name="ChangePasswordForm">
        <div class="row">
            <span class="text-white">Current Password</span>
            <input type="password" id="txtChangePassCurrent" class="center" placeholder="Enter Current Password" name="CurrentPassword"/>
        </div>
        <div class="row">
            <span class="text-white">New Password</span>
            <input type="password" id="txtChangePassNewPassword" class="center" placeholder="Enter New Password" name="NewPassword"/>
        </div>
        <div class="row">
            <span class="text-white">Confirm New Password</span>
            <input type="password" id="txtChangePassConfirmPassword" class="center" placeholder="Re-type new Password" name="ConfirmPassword"/>
        </div>
        <button type="submit" class="btn green text-white center" name="btnSubmit">CHANGE PASSWORD</button>
    </form>
</div>
