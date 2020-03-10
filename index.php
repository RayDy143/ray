<?php
    session_start();
    if(isset($_SESSION['UserID'])){
        if($_SESSION['UserType']=="Admin"){
            header("location:AdminUserView.php");
        }else{
            header("location:CustomerProductViewPage.php");
        }
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
                <form action="functions/Login.php" method="post">
                    <h2 class="text-white text-center">LOGIN ACCOUNT</h1>
                    <div class="row">
                        <input type="text" class="center" placeholder="Username" name="Username"/>
                    </div>
                    <div class="row">
                        <input type="password" class="center" placeholder="Password" name="Password"/>
                    </div>
                    <button type="submit" class="btn pink text-white center" name="btnSubmit">SUBMIT</button>
                </form>

            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>
