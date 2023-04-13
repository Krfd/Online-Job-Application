<?php

include "register.php";

session_start();

if(empty($_SESSION)) {
    ?>
    <script>
        alert("Session expired\nPlease login again.");
        window.location.href = "login.html";
    </script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Online Job Application | Offerings</title>

        <!-- JavaScript Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"
        ></script>

        <!-- CSS only -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
            crossorigin="anonymous"
        />

        <!-- Bootstrap -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />

        <!--Google Fonts-->
        <link rel="preconnect" href="https//fonts.googleapis.com" />
        <link rel="preconnect" href="https//fonts.gstatic.com" crossorigin />
        <link
            href="https//fonts.googleapis.com/css2?family=Playball&family=Robotoital,wght@1,900&display=swap"
            rel="stylesheet"
        />

        <!-- Font Awesome-->
        <link
            rel="stylesheet"
            href="https//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        />

        <!-- CDNJS -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        />

        <link type="icon" rel="icon" href="background/Information Technology.png" />

        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body {
                background: linear-gradient(
                        hsla(217, 96%, 81%, 0.8),
                        hsla(199, 88%, 87%, 0.8)
                    ),
                    url(office/4.jpg);
                background-attachment: fixed;
                background-position: fixed;
                background-size: cover;
                background-repeat: no-repeat;
                scroll-behavior: smooth;
            }
            .navbar {
                margin: 20px;
            }
            .navbar-brand {
                height: auto;
                width: 100px;
            }
            .logo {
                height: auto;
                width: 80px;
                border-radius: 50%;
            }
            .navbar-collapse {
                display: block;
                justify-content: center;
                align-items: center;
            }
            .navbar .nav-link {
                color: hsla(0, 0%, 0%, 0.5);
                font-size: 20px;
                font-weight: bold;
                text-transform: uppercase;
            }
            .navbar .nav-link:hover {
                color: #000;
                transition: 0.5s;
            }
            .nav-item {
                margin: 0px 10px;
                font-size: 1.2rem;
                position: relative;
                text-decoration: none;
            }
            .nav-item::after {
                content: "";
                position: absolute;
                background: #000;
                height: 3px;
                width: 0%;
                left: 0;
                bottom: 3px;
                transition: 0.5s;
            }
            .nav-item:hover::after {
                width: 100%;
            }
            .dropdown-menu li a {
                opacity: 0.8;
            }
            .dropdown-menu li a:hover {
                opacity: 1;
            }
            .content {
                margin-top: 30px;
            }
            .main-content {
                margin: 50px auto;
            }
            .title {
                font-size: 8rem;
                font-weight: bold;
            }
            .offerings .col {
                background-color: #fff;
                margin: 20px;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
                    0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }
            .offerings .col:hover {
                background-color: rgb(239, 238, 238);
            }
            .col a {
                text-decoration: none;
                color: #000;
            }
            .col a:hover {
                color: var(--bs-link-color);
            }
            .col h5 {
                font-weight: bold;
            }
            .bi:hover {
                animation-name: arrow;
                animation-direction: normal;
                animation-fill-mode: both;
                animation-duration: 1s;
                transition: all ease 1s;
            }
            .footer {
                display: flex;
                justify-content: space-between;
                border-top: 3px solid #fff;
                padding: 2% 0% 5% 0%;
            }
            .highlight {
                font-weight: bold;
            }
            .img {
                height: auto;
                width: 25px;
                margin: 0px 3px;
            }
            @media only screen and (max-width: 600px) {
                .logo {
                    width: 50px;
                    border-radius: 50%;
                }
                .navbar .nav-link {
                    font-size: 16px;
                }
                .content {
                    margin-top: 30px;
                }
                .main-content {
                    margin: 50px auto;
                }
                .title {
                    font-size: 2.5rem;
                }
                .img {
                    height: auto;
                    width: 17px;
                    margin: 0px 3px;
                }
            }
            @media only screen and (min-width: 600px) {
                .logo {
                    width: 70px;
                }
                .title {
                    font-size: 3rem;
                }
                .img {
                    width: 20px;
                }
            }
            @media only screen and (min-width: 768px) {
                .title {
                    font-size: 4rem;
                }
                .img {
                    width: 23px;
                }
            }
            @media only screen and (min-width: 992px) {
                .navbar .nav-link {
                    font-size: 18px;
                }
            }
            @media only screen and (min-width: 1200px) {
                .logo {
                    width: 80px;
                }
                .navbar .nav-link {
                    font-size: 20px;
                }
                .title {
                    font-size: 8rem;
                }
                .img {
                    width: 25px;
                }
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm" id="navbar">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <img src="background/Information Technology.png" class="logo" alt="logo" />
                </div>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navs"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navs">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                href="services.php"
                                type="button"
                                class="nav-link dropdown-toggle"
                                role="button"
                                data-bs-toggle="dropdown"
                                >Services</a
                            >
                            <ul class="dropdown-menu">
                                <li>
                                    <a
                                        href="services.php"
                                        class="dropdown-item"
                                        >Bootcamp</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="services.php"
                                        class="dropdown-item"
                                        >Education</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="services.php"
                                        class="dropdown-item"
                                        >Training</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="offerings.php" class="nav-link active"
                                >Offerings</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="uiws.php" class="nav-link">WS</a>
                        </li>
                        <li class="nav-item">
                            <a href="contacts.php" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="logout">
                    <button class="btn btn-dark">
                        <a href="logout.php" class="logout-button" style="text-decoration: none; color: #fff;">Log out</a>
                    </button>
                </div>
            </div>
        </nav>
        <div class="container content">
            <div class="container">
                <h1 class="title">Apply Now!</h1>
                <div class="main-content">
                    <div class="offerings">
                        <div class="row">
                            <div class="col">
                                <h5>System Analyst</h5>
                                <h6>
                                    <a href="analyst.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i
                                    ></a>
                                </h6>
                            </div>
                            <div class="col">
                                <h5>Information Security</h5>
                                <h6>
                                    <a href="infosec.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i
                                    ></a>
                                </h6>
                            </div>
                            <div class="col">
                                <h5>Tech Support</h5>
                                <h6>
                                    <a href="support.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i
                                    ></a>
                                </h6>
                            </div>
                            <div class="col">
                                <h5>Computer Programmer</h5>
                                <h6>
                                    <a href="programmer.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i
                                    ></a>
                                </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5>IT Technician</h5>
                                <h6>
                                    <a href="technician.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i
                                    ></a>
                                </h6>
                            </div>
                            <div class="col">
                                <h5>Support Specialist</h5>
                                <h6>
                                    <a href="specialist.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i
                                    ></a>
                                </h6>
                            </div>
                            <div class="col">
                                <h5>Web Developer</h5>
                                <h6>
                                    <a href="web.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </h6>
                            </div>
                            <div class="col">
                                <h5>Network Engineer</h5>
                                <h6>
                                    <a href="network.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i
                                    ></a>
                                </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5>Database Administrator</h5>
                                <h6>
                                    <a href="administrator.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i
                                    ></a>
                                </h6>
                            </div>
                            <div class="col">
                                <h5>Computer Scientist</h5>
                                <h6>
                                    <a href="scientist.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i
                                    ></a>
                                </h6>
                            </div>
                            <div class="col">
                                <h5>IT Director</h5>
                                <h6>
                                    <a href="director.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </h6>
                            </div>
                            <div class="col">
                                <h5>System Engineer</h5>
                                <h6>
                                    <a href="system.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i
                                    ></a>
                                </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5>IT Security Specialist</h5>
                                <h6>
                                    <a href="itsecurity.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i
                                    ></a>
                                </h6>
                            </div>
                            <div class="col">
                                <h5>UI/UX Designer</h5>
                                <h6>
                                    <a href="uiux.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i
                                    ></a>
                                </h6>
                            </div>
                            <div class="col">
                                <h5>Network Architect</h5>
                                <h6>
                                    <a href="architect.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i
                                    ></a>
                                </h6>
                            </div>
                            <div class="col">
                                <h5>Software Engineer</h5>
                                <h6>
                                    <a href="software.php" target="_blank">
                                        View Qualifications
                                        <i class="bi bi-arrow-right"></i
                                    ></a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="container">
            <div class="container">
                <div class="container footer">
                    <div class="phinma">
                        <span class="highlight">Karl.</span>
                    </div>
                    <div class="links">
                        <a
                            href="https//www.facebook.com"
                            ><img
                                src="icons/fb.png"
                                alt="Facebook"
                                class="fb img"
                        /></a>
                        <a href="https//www.instagram.com"
                            ><img
                                src="icons/ig.png"
                                alt="Instagram"
                                class="ig img"
                        /></a>
                        <a
                            href="https://discord.com"
                        >
                            <img
                                src="icons/discord.png"
                                alt="Discord"
                                class="disc img"
                        /></a>
                        <a href="mailto:karlfredriechgetuya@gmail.com"
                            ><img
                                src="icons/gmail.png"
                                alt="Gmail"
                                class="gmail img"
                        /></a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
