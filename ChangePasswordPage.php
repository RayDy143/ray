<?php
    session_start();
    if(!isset($_SESSION['UserID'])){
        header("location:index.php");
    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=width-device,initial-scale=1.0">
        <link rel="stylesheet" href="css/mystyle.css">

        <title>Login</title>
    </head>
    <body>
        <header>

        </header>
        <main>
            <div class="login-box center">
                <form class="" action="functions/ChangePassword.php" method="post" name="UserForm">
                    <h2 class="text-white text-center">Change Password</h2></h1>

                    <div class="row">
                        <span class="text-white">Current Password</span>
                        <input type="password" class="center" placeholder="Enter Current Password" name="CurrentPassword"/>
                    </div>
                    <div class="row">
                        <span class="text-white">New Password</span>
                        <input type="password" class="center" placeholder="Enter New Password" name="NewPassword"/>
                    </div>
                    <div class="row">
                        <span class="text-white">Confirm New Password</span>
                        <input type="password" class="center" placeholder="Re-type new Password" name="ConfirmPassword"/>
                    </div>
                    <button type="submit" class="btn green text-white center" name="btnSubmit">CHANGE PASSWORD</button>
                    <button type="button" onclick="window.location='index.php'" class="btn pink text-white center">CANCEL</button>
                </form>
            </div>
        </main>
        <footer>
        </footer>
    </body>
</html>
