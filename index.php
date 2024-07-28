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
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./assets/./css/./logos-slide.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
            overflow: hidden;
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
    <!-- 
    <div class="content">
       
    </div> -->

    <!-- BODY STARTS IN THIS LINE -->

    <div class="container-fluid p-0" id="home">
        <div class="row gx-5" id="hero-image">
            <div class="col" id="first-col">
                <div class="p-2">
                    <p class="text-start" id="name">Adrian Rodrigo Makiling</p>
                    <p class="text-start" id="role">Website Developer / Graphic Designer / UI,UX Designer</p>
                    <p class="text-start" id="role1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Eaque a deserunt,labore numquam vitae tempore itaque, nulla quis, perferendis <br>
                        natus labore numquam vitae tempore itaque, nulla quis,
                        doloribus! Magni.</p>
                    <button type="button" class="btn btn-dark" id="role-btn">WHO AM I</button>
                </div>
            </div>
            <div class="col">
                <div class="p-2">
                    <div class="image-wrapper">
                        <img class="img1" src="./assets/images/cover1.jpg" alt="" />
                        <img class="img2" src="./assets/images/cover1.jpg" alt="" />
                        <img class="img3" src="./assets/images/cover1.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- What i do -->

    <div class="container-fluid p-0" id="about">
        <div class="row align-items-center" id="whoiam">
            <div class="textto">
                <p class="text-center" id="centerText">ART IS NOT FOR PHILOSOPHY IT'S FOR LIFE</p>
                <p class="text-center" id="centerText2">WHAT I DO</p>
            </div>
            <div class="col g-0">
                <div class="card text-center">
                    <div class="card-body d-flex flex-column align-items-center">
                        <img src="./assets/./images//web-design.png" alt="icon" style="height:90px; width: 90px;">
                        <h5 class="card-title">GRAPHIC DESIGN</h5>
                        <p>I believe that great design<br>
                            leads to an exceptional user experience, <br>
                            which in turn fosters customer loyalty.<br>
                            Let’s design your future together.</p>
                    </div>
                </div>
            </div>
            <div class="col g-0">
                <div class="card text-center">
                    <div class="card-body d-flex flex-column align-items-center">
                        <img src="./assets/./images//design.png" alt="icon" style="height:90px; width: 90px;">
                        <h5 class="card-title">WEBSITE DESIGN</h5>
                        <p>Through my personal experience with <br>
                            past projects, I have found that effective<br>
                            website design helps you achieve <br>
                            and create impactful design outputs.</p>
                    </div>
                </div>
            </div>
            <div class="col g-0">
                <div class="card text-center">
                    <div class="card-body d-flex flex-column align-items-center">
                        <img src="./assets/./images//web-programming.png" alt="icon" style="height:90px; width: 90px;">
                        <h5 class="card-title">WEBSITE DEVELOPMENT</h5>
                        <p>With my experiencein website development<br>
                            I can help you create an efficient and <br>
                            effective online presence </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Website Client -->

    <div class="container" id="wp-container">
        <div class="wp-row">
            <div class="row">
                <p class="wp-text">WEBSITE PROJECT</p>
                <div class="card mb-4" style="width: 100%; height: 36vh; margin: 0; padding: 0; box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="img-container">
                                <img src="./assets/images/yoo-naa-cover.png" class="img-fluid rounded-start custom-img" alt="..." style="width: 100%; height: 100%;padding: 10px;">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body" id="wp-cardbody">
                                <h5 class="text-start">Ecommerce Website (Yoo-na)</h5>
                                <p class="text-start">Yoo-Naa is an Ecommerce website brings the business into the modern era with its unique fashion designs <br>
                                    and serve countries within less than a decade.
                                    <span class="details">
                                        <a href="#" class="text-decoration-none">See Details</a>
                                    </span>
                                </p>

                                <p class="card-text"><small class="text-muted">Created on June 26, 2023</small></p>
                                <div class="wp-tools">
                                    <div class="row">
                                        <div class="col" id="wp-btn">
                                            <button type="button" class="btn btn-dark me-2">PHP</button>
                                            <button type="button" class="btn btn-dark me-2">JS</button>
                                            <button type="button" class="btn btn-dark me-2">HTML</button>
                                            <button type="button" class="btn btn-dark ">JAVASCRIPT</button>

                                        </div>
                                        <div class="col" id="wp-btn">
                                            <button type="button" class="btn btn-dark me-2">CSS</button>
                                            <button type="button" class="btn btn-dark me-2">JQUERY</button>
                                            <button type="button" class="btn btn-dark me-2">JIRA SOFTWARE</button>
                                            <button type="button" class="btn btn-dark">IOS ANIMATION</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card" style="width: 100%; height: 36vh; margin: 0; padding: 0; box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="img-container">
                                <img src="./assets/images/dental-clinic-cover.png" class="img-fluid rounded-start custom-img" alt="..." style="width: 100%; height: 100%;padding: 10px;">

                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body" id="wp-cardbody">
                                <h5 class="text-start">Dental clinic Website (Dalino Dental Clinic)</h5>
                                <p class="text-start"> A Dental Clinic Website offers a variety of dental services, along with inventory management, reports <br>
                                    and sentiment analysis, also it supports multiple payment transactions.
                                    <span class="details">
                                        <a href="#" class="text-decoration-none">See Details</a>
                                    </span>

                                </p>
                                <p class="card-text"><small class="text-muted">Created on December 21, 2023 - February 20, 2024</small></p>
                                <div class="wp-tools">
                                    <div class="row">
                                        <div class="col" id="wp-btn">
                                            <button type="button" class="btn btn-dark me-2">PHP</button>
                                            <button type="button" class="btn btn-dark me-2">JS</button>
                                            <button type="button" class="btn btn-dark me-2">HTML</button>
                                            <button type="button" class="btn btn-dark ">JAVASCRIPT</button>

                                        </div>
                                        <div class="col" id="wp-btn">
                                            <button type="button" class="btn btn-dark me-2">CSS</button>
                                            <button type="button" class="btn btn-dark me-2">JQUERY</button>
                                            <button type="button" class="btn btn-dark me-2">JIRA SOFTWARE</button>
                                            <button type="button" class="btn btn-dark">IOS ANIMATION</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Programming Tools -->

    <div class="container-fluid " id="tools">
        <div class="technologies">
            <p class="text-center" id="centerText">TO NEW INNOVATIONS, THESE ESSENTIALS DRIVE <br>
                MY JOURNEY IN THE DIGITAL WORLD</p>
            <p class="text-center mb-5" id="centerText2">TECHNOLOGIES I USED</p>
            <div class="row g-2" id="tech-row">
                <div class="col-2" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/Figma.svg" alt="Figma" style="width: auto; height:200%;">
                        <span class="text">Figma</span>
                    </div>
                </div>
                <div class="col-3" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/Photoshop.svg" alt="Adobe Photoshop" style="width: auto; height:200%;">
                        <span class="text">Adobe Photoshop</span>
                    </div>
                </div>
                <div class="col-3" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/AI.svg" alt="Adobe Illustrator" style="width: auto; height:200%;">
                        <span class="text">Adobe Illustrator</span>
                    </div>
                </div>
                <div class="col-3" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/Canva.svg" alt="Canva" style="width: auto; height:200%;">
                        <span class="text">Canva</span>
                    </div>
                </div>

                <div class="col-3" id="tech-hover">
                    <div class="p-2 border" id="tech-col">
                        <img src="./assets/icons/Indesign.svg" alt="Indesign" style="width: auto; height:100%;">
                        <span class="text">Indesign</span>
                    </div>
                </div>
                <div class="col-2" id="tech-hover">
                    <div class="p-2 border" id="tech-col">
                        <img src="./assets/icons/Html.svg" alt="HTML" style="width: auto; height:100%;">
                        <span class="text">HTML</span>
                    </div>
                </div>
                <div class="col-3" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/Bootstrap.svg" alt="Bootsrap" style="width: auto; height:200%;">
                        <span class="text">Bootstrap</span>
                    </div>
                </div>
                <div class="col-2" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/Tailwind.svg" alt="Tailwind" style="width: auto; height:200%;">
                        <span class="text">Tailwind</span>
                    </div>
                </div>

                <div class="col-3" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/VScode.svg" alt="VScode" style="width: auto; height:200%;">
                        <span class="text">Vscode</span>
                    </div>
                </div>
                <div class="col-2" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/PHP.svg" alt="PHP" style="width: auto; height:200%;">
                        <span class="text">PHP</span>
                    </div>
                </div>
                <div class="col-3" id="tech-hover">
                    <div class="p-2 border" id="tech-col">
                        <img src="./assets/icons/Jquery.svg" alt="JQUERY" style="width: auto; height:100%;">
                        <span class="text">Jquery</span>
                    </div>
                </div>
                <div class="col-3" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/Jira.png" alt="JIRA Software" style="width: auto; height:200%;">
                        <span class="text">Jira Software</span>
                    </div>
                </div>

                <div class="col-2" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/Javascript.svg" alt="Javascript/Jquery" style="width: auto; height:200%;">
                        <span class="text">Javascript</span>
                    </div>
                </div>
                <div class="col-2" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/Lucidchart.svg" alt="Lucid Chart" style="width: auto; height:200%;">
                        <span class="text">Lucid Chart</span>
                    </div>
                </div>
                <div class="col-3" id="tech-hover">
                    <div class="p-2 border" id="tech-col">
                        <img src="./assets/icons/GSAP.svg" alt="GSAP Animation" style="width: auto; height:100%;">
                        <span class="text">GSAP Animation</span>
                    </div>
                </div>

                <div class="col-3" id="tech-hover">
                    <div class="p-2 border" id="tech-col">
                        <img src="./assets/icons/ionic-icon.svg" alt="Ionicon" style="width: auto; height:100%;">
                        <span class="text">Ionicon</span>
                    </div>
                </div>
                <div class="col-2" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/Wordpress.svg" alt="Wordpress" style="width: auto; height:200%;">
                        <span class="text">Wordpress</span>
                    </div>
                </div>
                <div class="col-3" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/Github.svg" alt="Github" style="width: auto; height:200%;">
                        <span class="text">Github</span>
                    </div>
                </div>

                <div class="col-3" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/Xampp.svg" alt="XAMPP" style="width: auto; height:200%;">
                        <span class="text">Xampp</span>
                    </div>
                </div>

                <div class="col-3" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/Mysql.svg" alt="mySQL" style="width: auto; height:200%;">
                        <span class="text">Mysql</span>
                    </div>
                </div>
                <div class="col-2" id="tech-hover">
                    <div class="p-3 border" id="tech-col">
                        <img src="./assets/icons/VB.NET_Logo.svg" alt="VBNET" style="width: auto; height:200%;">
                        <span class="text">VBnet</span>
                    </div>
                </div>


            </div>

        </div>
    </div>


    <!-- Projects -->

    <div class="container-fluid p-0" id="projects">
        <p class="text-center" id="centerText">LET'S COLLABORATE AND COLOR YOUR IDEA'S</p>
        <p class="text-center mb-5" id="centerText2">LATEST PROJECTS
        </p>
        <div class="rowing">
            <div class="row align-items-center" id="row-projects">
                <div class="col project-item">
                    <div class="project-content">
                        <img src="./assets//images//cz-cover.jpg" alt="">
                        <div class="project-info">
                            <h3>Comfort Zone</h3>
                            <p>Description of the project.</p>
                            <a href="#" class="btn btn-dark">View details</a>
                        </div>
                    </div>
                </div>
                <div class="col project-item">
                    <div class="project-content">
                        <img src="./assets//images//wbc-cover.jpg" alt="">
                        <div class="project-info">
                            <h3>Winner Boys Club</h3>
                            <p>Description of the project.</p>
                            <a href="#" class="btn btn-dark">View details</a>
                        </div>
                    </div>
                </div>
                <div class="col project-item">
                    <div class="project-content">
                        <img src="./assets//images//pdy-cover.jpeg" alt="">
                        <div class="project-info">
                            <h3>Payday Club</h3>
                            <p>Description of the project.</p>
                            <a href="#" class="btn btn-dark">View details</a>
                        </div>
                    </div>
                </div>
                <div class="col project-item">
                    <div class="project-content">
                        <img src="./assets//images//parkdev-cover.jpg" alt="">
                        <div class="project-info">
                            <h3>Payday Club</h3>
                            <p>Description of the project.</p>
                            <a href="#" class="btn btn-dark">View details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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