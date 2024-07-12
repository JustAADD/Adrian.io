<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- MAIN CSS--->
    <link rel="stylesheet" href="assets\css\main.css">
    <title> ADRIAN.IO</title>
</head>

<body>
    <header class="header">
        <a href="#" class="header__logo">ADRIAN</a>

        <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

        <nav class="nav" id="nav-menu">
            <div class="nav__content bd-grid">

                <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>

                <div class="nav__perfil">
                    <div>
                        <a href="#" class="nav__name"><img src="assets/images/AD.png" alt="" style="height:40px; width: 90px;"></a>
                        <!-- <span class="nav__profesion">Web designer  </span> -->
                    </div>
                </div>

                <div class="nav__menu">
                    <ul class="nav__list">


                        <div class="nav__socialidad">
                            <a href="https://www.linkedin.com/in/adrian-makiling-74477928b/" class="nav__social-icon"><ion-icon name="logo-linkedin"></ion-icon></a>
                            <a href="https://github.com/JustAADD" class="nav__social-icon"><ion-icon name="logo-github"></ion-icon></a>
                            <a href="mailto:makilingadrian19@gmail.com" class="nav__social-icon"><ion-icon name="mail"></ion-icon></a>
                        </div>
                    </ul>
                </div>


            </div>
        </nav>
    </header>

    <!--THE CONTENT-->

    <div class="ediwap">
        <?php

        include('content.php');

        ?>
    </div>

    <script src="../assets/js/script.js"></script>
    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>

</body>

</html>