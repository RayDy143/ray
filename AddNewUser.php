

<script type="text/javascript" src="functions/User.php"></script>
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
                <form class="" action="AddUser.php" method="post" name="UserForm">
                    <h2 class="text-white text-center">ADD NEW USER</h1>
                    <div class="row">
                        <input type="text" class="center" placeholder="Username" name="Username"/>
                    </div>
                    <div class="row">
                        <input type="text" class="center" placeholder="Firstname" name="Firstname"/>
                    </div>
                    <div class="row">
                        <input type="text" class="center" placeholder="Lastname" name="Lastname"/>
                    </div>
                    <button type="submit" class="btn green text-white center" name="btnSubmit">SUBMIT</button>
                    <button type="button" onclick="window.location='AdminUserView.php'" class="btn pink text-white center">CANCEL</button>
                </form>
            </div>
        </main>
        <footer>
        </footer>
    </body>
</html>
