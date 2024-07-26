<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/./images/./AD-icon.png" sizes="16x16">
    <title> ADRIAN.IO</title>

    <!-- MAIN CSS--->
    <link rel="stylesheet" href="./assets/main.css">
    <link rel="stylesheet" href="./assets/./css/./logos-slide.css" />


    <style>
        .nav__list {
            list-style: none;
            display: flex;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .nav__list li {
            margin: 0 10px;
            color: #fff;

        }


        .nav__listed {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .nav__social ion-icon {
            font-size: 15px;
            cursor: pointer;
        }

        .p-logo .MagicScroll {
            display: flex;
            justify-content: center;
            align-items: center;
            /* Align items to the start (top) of the container */
            flex-wrap: nowrap;
            width: 100%;
            height: 14rem;
            background-color: #232323;
        }


        .p-logo .MagicScroll img {
            max-width: 100%;
            height: 100px;
            margin: 0 10px;
            margin-top: 30%;

        }


        /*footer*/
        .abovethefooter {
            height: 20rem;
            width: 100%;
            background-color: #313131;

        }

        .section {
            width: 100%;
            height: 0;
            padding: 5%;
            margin-left: 12rem;
        }

        .abovethefooter p {
            color: #fff;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
        }



        .footer {
            height: 5rem;
            width: 100%;
            background-color: #353535;
            padding: 20px;

        }

        #f-row {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #f-col {
            flex: 1;
            /* Each column takes up equal space */
            padding: 0 10px;
            /* Optional: Add padding between columns */
        }

        .footer p {
            color: #777777;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            margin: 0;
            text-align: center;
        }

        .f-nav__social-icons ion-icon {
            color: #fff;
        }

        .f-contact {
            font-weight: normal;
        }

        .f-name,
        .f-email,
        .f-number {
            margin-bottom: 5px;
            /* Adjust spacing between paragraphs */
        }

        /* Responsive styles (optional) */
        @media (max-width: 768px) {
            .row {
                flex-direction: column;
                text-align: center;
            }

            .col {
                padding: 10px 0;
                /* Adjust padding for better spacing on small screens */
            }
        }

        .content {
            max-width: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            white-space: nowrap;
        }

        .text-list a {
            color: #070D1F;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            font-weight: 500;
        }
    </style>
</head>

<body>

    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>

    <header class="header">
        <a href="#" class="header__logo">ADRIAN</a>

        <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

        <nav class="nav" id="nav-menu">
            <div class="nav__content bd-grid">
                <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>

                <div class="nav__perfil">
                    <div>
                        <a href="#" class="nav__name">
                            <img src="./assets/./images/./AD.png" alt="" style="height:40px; width: 90px;">
                        </a>
                    </div>
                </div>

                <div class="nav__listed">
                    <ul class="nav__list">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#wp-container">Project</a></li>
                        <li><a href="#about">About Me</a></li>
                        <li><a href="https://drive.google.com/drive/folders/1hPGXbu3hpDvAp5_QfDZlzfTZgKiItfZ8?usp=sharing" target="_blank">CV</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>

    <!--Content-->

    <div class="content">
        <?php

        include('./content.php');

        ?>
    </div>


    <!--FOOTER-->
    <div class="logos">
        <div class="logos-slide">
            <img src="./assets/./images/./bxtra.png">
            <img src="./assets/./images/./Comfort zone.png">
            <img src="./assets/./images/./hole in one.png">
            <img src="./assets/./images/./jrt.png">
            <img src="./assets/./images/./parkdev.png">
            <img src="./assets/./images/./pdy.png">
            <img src="./assets/./images/./sds.png">
            <img src="./assets/./images/./wbc.png">
        </div>
    </div>

    <div class="abovethefooter">
        <div class="section">
            <p class="f-contact">Contact</p>
            <img src="./assets/./images/Adrian M.png" alt="" style="height:4rem; width: 20rem; margin-bottom: 10px;">
            <p class="f-name">Adrian Rodrigo Makiling</p>
            <p class="f-email">makilingadrian19@gmail.com</p>
            <p class="f-number">(+63) 976-377-0372 </p>
        </div>
    </div>


    <div class="footer">
        <div class="row" id="f-row">
            <div class="col" id="f-col">
                <p>©Yea, I also made this website</p>
            </div>

            <div class="col" id="f-col">
                <div class="nav__listed">
                    <ul class="nav__list">
                        <li class="f-nav__social">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </li>
                        <li class="f-nav__social">
                            <ion-icon name="logo-github"></ion-icon>
                        </li>
                        <li class="f-nav__social">
                            <ion-icon name="mail-outline"></ion-icon>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <script src="../assets/js/script.js"></script>
    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <!--===== MAIN JS =====-->
    <script src="./assets/./js/./main.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>