<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=width-device,initial-scale=1.0">
        <link rel="stylesheet" href="css/mystyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Admin Layout</title>
    </head>
    <body>
        <div class="s-layout">
            <!-- Sidebar -->
            <div class="s-layout__sidebar">
              <a class="s-sidebar__trigger" href="#0">
                 <i class="fa fa-bars"></i>
              </a>

              <nav class="s-sidebar__nav">
                 <ul>
                    <li>
                       <a class="s-sidebar__nav-link" href="#0">
                          <i class="fa fa-home"></i><em>Home</em>
                       </a>
                    </li>
                    <li>
                       <a class="s-sidebar__nav-link" href="#0">
                         <i class="fa fa-user"></i><em>My Profile</em>
                       </a>
                    </li>
                    <li>
                       <a class="s-sidebar__nav-link" href="#0">
                          <i class="fa fa-camera"></i><em>Camera</em>
                       </a>
                    </li>
                 </ul>
              </nav>
            </div>

            <!-- Content -->
            <main class="s-layout__content">
                <div class="topnav" id="myTopnav">
                    <a href="functions/Logout.php">Logout</a>
                    <a href="EditProfilePage.php">Profile</a>
                  </a>
                </div>
            </main>
        </div>
    </body>
</html>
