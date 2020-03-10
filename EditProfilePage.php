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
                <form class="" action="functions/UpdateProfile.php" method="post" name="UserForm">
                    <h2 class="text-white text-center">UPDATE PROFILE</h1>
                    <div class="row">
                        <span class="text-white">UserID</span>
                        <input type="text" readonly class="center" placeholder="ID" value="<?php echo $_SESSION['UserID']; ?>" name="UserID"/>
                    </div>
                    <div class="row">
                        <span class="text-white">Username</span>
                        <input type="text" value="<?php echo $_SESSION['Username']; ?>" class="center" placeholder="Username" name="Username"/>
                    </div>
                    <div class="row">
                        <span class="text-white">Firstname</span>
                        <input type="text" class="center" value="<?php echo $_SESSION['Firstname']; ?>" placeholder="Firstname" name="Firstname"/>
                    </div>
                    <div class="row">
                        <span class="text-white">Lastname</span>
                        <input type="text" class="center" value="<?php echo $_SESSION['Lastname']; ?>" placeholder="Lastname" name="Lastname"/>
                    </div>
                    <button type="submit" name="btnSubmit" class="btn green text-white center">SUBMIT</button>
                    <button type="button" onclick="window.location='ChangePasswordPage.php'" class="btn blue text-white center">CHANGE PASSWORD</button>
                    <button type="button" onclick="window.location='AdminUserView.php'" class="btn pink text-white center">CANCEL</button>
                </form>
            </div>
        </main>
        <footer>
        </footer>
    </body>
</html>
