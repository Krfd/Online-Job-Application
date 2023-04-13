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
        <title>Online Job Application | About</title>

        <!-- JavaScript Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"
        ></script>

        <!-- CSS only -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
            crossorigin="anonymous"
        />

        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Playball&family=Roboto:ital,wght@1,900&display=swap"
            rel="stylesheet"
        />

        <!-- Bootstrap -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />

        <!-- Font Awesome-->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        />

        <!-- icon -->
        <link type="icon" rel="icon" href="background/Information Technology.png" />

        <style>
            :root {
                --primary: hsla(100, 100%, 100%, 0.8);
                --primary-light: hsla(100, 100%, 100%, 0.5);
                --primary-lighter: hsla(100, 100%, 100%, 0.3);
                --secondary: hsla(0, 0%, 0%, 0.8);
                --secondary-light: hsla(0, 0%, 0%, 0.5);
                --secondary-lighter: hsla(0, 0%, 0%, 0.3);
                --blanch: hsla(36, 100%, 90%, 0.5);
            }
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
                    url(office/5.jpg);
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
                padding: 5%;
            }
            .title {
                font-size: 8rem;
                font-weight: bold;
            }
            .highlight {
                font-weight: bold;
            }
            .main-content {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 50px;
                margin-bottom: 40px;
            }
            .contacts {
                display: block;
                width: 30%;
                margin-right: 30px;
            }
            .para {
                font-size: 20px;
                color: hsl(0, 0%, 50%);
            }
            .para1 {
                font-size: 22px;
                color: hsl(0, 0%, 30%);
            }
            .email {
                text-decoration: 2px solid underline;
                color: #000;
                font-weight: bold;
            }
            .about-content {
                display: block;
                width: 70%;
                margin-left: 30px;
            }
            .btn-dark:focus {
                box-shadow: none;
            }
            .company-title {
                font-size: 6rem;
                font-weight: bold;
            }
            .companies {
                display: flex;
            }
            .companies .col {
                padding: 30px;
            }
            .companies .col > .col {
                display: flex;
                background: hsla(100, 100%, 100%, 0.5);
                margin: 30px auto;
                align-items: center;
                justify-content: space-around;
                box-shadow: 2px 2px 8px 0px hsla(0, 0%, 0%, 0.2),
                    2px 2px 8px 0px hsla(0, 0%, 0%, 0.2);
            }
            .companies .col .logos {
                height: 50px;
                width: 200px;
            }
            .rev h3 {
                padding: 20px;
                align-self: center;
            }
            .companies button:focus {
                box-shadow: none;
            }
            /* Modal */
            .company-logo {
                height: auto;
                width: 300px;
            }
            .modal-body {
                margin: 50px auto;
            }
            .sub-title {
                font-weight: bold;
            }
            .modal-body .content p {
                text-align: justify;
            }
            .map {
                width: 100%;
            }
            /* Blog */
            .blog-title {
                font-size: 6rem;
                font-weight: bold;
            }
            .flexbox {
                display: flex;
                margin: 50px auto;
            }
            .carousel {
                width: 80%;
                margin-right: 5px;
            }
            .column {
                width: 50%;
                display: flex;
                flex-direction: column;
                row-gap: 5px;
            }
            .blog2 {
                background: url(blog/4.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                color: #fff;
                padding: 100px 100px 10px 30px;
                height: 50%;
            }
            .blog3 {
                background: url(blog/2.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                color: #fff;
                padding: 100px 100px 10px 30px;
                height: 50%;
            }
            .blog2 .content,
            .blog3 .content {
                align-self: flex-end;
                margin-top: 20px;
            }
            /* Stack */
            .stack {
                font-weight: bold;
            }
            .stack a {
                text-decoration: none;
                color: #fff;
            }
            .row {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 15px 0px;
            }
            .pl {
                height: auto;
                width: 120px;
                padding: 25px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 2px 2px 8px 0px hsla(0, 0%, 0%, 0.2),
                    2px 2px 8px 0px hsla(0, 0%, 0%, 0.2);
            }
            .footer {
                display: flex;
                justify-content: space-between;
                border-top: 3px solid #fff;
                padding: 2% 0% 5% 0%;
            }
            .img {
                height: auto;
                width: 25px;
                margin: 0px 3px;
            }
            @media only screen and (max-width: 600px) {
                .logo {
                    height: auto;
                    width: 50px;
                    border-radius: 50%;
                }
                .navbar .nav-link {
                    font-size: 16px;
                }
                .title {
                    font-size: 2.5rem;
                }
                .content h2 {
                    font-size: 20px;
                }
                .main-content {
                    display: block;
                    margin-top: 50px;
                }
                .main-content .contacts {
                    display: block;
                    width: 100%;
                    font-size: 16px;
                }
                .para {
                    font-size: 16px;
                }
                .stack a {
                    font-size: 16px;
                }
                .para1 {
                    font-size: 16px;
                }
                .about-content {
                    display: block;
                    width: 100%;
                    margin: 50px auto;
                    text-align: justify;
                }
                .company-content .company-title {
                    font-size: 3rem;
                }
                .company-content .companies .col > .col {
                    display: flex;
                    flex-direction: column;
                }
                .companies {
                    display: block;
                }
                .companies .col .logos {
                    height: 40px;
                    width: auto;
                }
                .rev h3 {
                    border-left: none;
                }
                /* Modal */
                .modal-title {
                    font-size: 3rem;
                }
                .company-logo {
                    height: auto;
                    width: 300px;
                }
                .modal-body {
                    margin: 50px auto;
                }
                .modal-body p {
                    text-align: justify;
                }
                .map {
                    width: 100%;
                }
                /* Blog */
                .blog-content .blog-title {
                    font-size: 3rem;
                }
                .flexbox {
                    display: block;
                    margin: 50px auto;
                }
                .carousel {
                    width: 100%;
                }
                .column {
                    width: 100%;
                    display: block;
                }
                .column .content button {
                    font-size: 16px;
                    margin-bottom: 10px;
                }
                .blog2 {
                    background: url(blog/4.jpg);
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    color: #fff;
                }
                .blog3 {
                    background: url(blog/2.jpg);
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    color: #fff;
                }
                /* Stack */
                .stack {
                    font-size: 16px;
                    margin: 20px auto;
                }
                .technology-stack .row .row {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: row;
                }
                .technology-stack .row .col .pl {
                    height: auto;
                    width: 90px;
                    margin: 5px;
                    padding: 20px;
                }
                .img {
                    height: auto;
                    width: 17px;
                    margin: 0px 3px;
                }
            }
            @media only screen and (min-width: 600px) {
                .logo {
                    height: auto;
                    width: 70px;
                }
                .title {
                    font-size: 3.5rem;
                }
                .main-content {
                    display: block;
                    margin-top: 50px;
                }
                .main-content .contacts {
                    display: block;
                    width: 100%;
                    font-size: 16px;
                }
                .company-content .company-title {
                    font-size: 4rem;
                }
                .companies .col {
                    padding: 20px;
                }
                /* Blog */
                .blog-content .blog-title {
                    font-size: 4.5rem;
                }
                /* Stack */
                .technology-stack .row .col .pl {
                    height: auto;
                    width: 100px;
                }
                .img {
                    height: auto;
                    width: 20px;
                }
            }
            @media only screen and (min-width: 768px) {
                .title {
                    font-size: 5rem;
                }
                .main-content {
                    display: block;
                }
                .main-content .contacts .para {
                    font-size: 18px;
                }
                .stack a {
                    font-size: 16px;
                }
                .para1 {
                    font-size: 18px;
                }
                .about-content {
                    display: block;
                    width: 100%;
                    margin: 50px auto;
                    text-align: justify;
                }
                .company-content .company-title {
                    font-size: 4.5rem;
                }
                .companies {
                    display: block;
                }
                .companies .col .logos {
                    height: 40px;
                    width: auto;
                }
                /* Blog */
                .blog-content .blog-title {
                    font-size: 4rem;
                }
                .flexbox {
                    display: block;
                    margin: 50px auto;
                }
                .carousel {
                    width: 100%;
                }
                .column {
                    width: 100%;
                    display: block;
                }
                .column .content button {
                    font-size: 16px;
                    margin-bottom: 10px;
                }
                .blog2 {
                    background: url(blog/4.jpg);
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    padding: 100px 100px 10px 30px;
                    height: 50%;
                }
                .blog3 {
                    background: url(blog/2.jpg);
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    padding: 100px 100px 10px 30px;
                    height: 50%;
                }
                /* Stack */
                .stack {
                    font-size: 16px;
                    margin: 20px auto;
                }
                .technology-stack .row .row {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: row;
                }
                .technology-stack .row .col .pl {
                    height: auto;
                    width: 110px;
                    margin: 5px;
                    padding: 20px;
                }
                .img {
                    height: auto;
                    width: 23px;
                    margin: 0px 3px;
                }
            }
            @media only screen and (min-width: 992px) {
                .logo {
                    height: auto;
                    width: 70px;
                }
                .navbar .nav-link {
                    font-size: 18px;
                }
                .title {
                    font-size: 6.5rem;
                }
                .main-content {
                    display: flex;
                    justify-content: center;
                    align-items: baseline;
                    margin-top: 50px;
                    margin-bottom: 40px;
                }
                .main-content .contacts {
                    display: block;
                    width: 100%;
                }
                .main-content .contacts .para {
                    font-size: 18px;
                }
                .stack a {
                    font-size: 18px;
                }
                .para1 {
                    font-size: 18px;
                }
                .about-content {
                    width: 100%;
                    margin: 50px auto;
                    text-align: justify;
                }
                .company-content .company-title {
                    font-size: 5rem;
                }
                .companies {
                    display: flex;
                }
                .companies .col .logos {
                    height: 40px;
                    width: auto;
                }
                /* Blog */
                .blog-content .blog-title {
                    font-size: 5rem;
                }
                .flexbox {
                    display: block;
                    margin: 50px auto;
                }
                .carousel {
                    width: 100%;
                }
                .column {
                    width: 100%;
                    display: block;
                }
                .column .content button {
                    font-size: 18px;
                    margin-bottom: 10px;
                }
                .blog2 {
                    background: url(blog/4.jpg);
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    padding: 100px 100px 10px 30px;
                    height: 50%;
                }
                .blog3 {
                    background: url(blog/2.jpg);
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    padding: 100px 100px 10px 30px;
                    height: 50%;
                }
                /* Stack */
                .stack {
                    font-size: 18px;
                    margin: 20px auto;
                }
                .technology-stack .row .row {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: row;
                }
                .technology-stack .row .col .pl {
                    height: auto;
                    width: 120px;
                    margin: 5px;
                    padding: 20px;
                }
                .img {
                    height: auto;
                    width: 23px;
                    margin: 0px 3px;
                }
            }
            @media only screen and (min-width: 1200px) {
                .logo {
                    height: auto;
                    width: 80px;
                }
                .navbar .nav-link {
                    color: hsla(0, 0%, 0%, 0.5);
                    font-size: 20px;
                    font-weight: bold;
                    text-transform: uppercase;
                }
                .content {
                    padding: 5%;
                }
                .title {
                    font-size: 8rem;
                }
                .main-content {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 50px;
                }
                .main-content .contacts {
                    display: block;
                    width: 30%;
                    margin-right: 30px;
                    font-size: 20px;
                }
                .main-content .contacts .para {
                    font-size: 20px;
                }
                .para1 {
                    font-size: 22px;
                }
                .about-content {
                    display: block;
                    width: 70%;
                    margin-left: 30px;
                }
                .company-title {
                    font-size: 6rem;
                }
                .companies {
                    display: flex;
                }
                .companies .col {
                    padding: 30px;
                }
                .companies .col > .col {
                    display: flex;
                    margin: 30px auto;
                    align-items: center;
                    justify-content: space-around;
                    box-shadow: 2px 2px 8px 0px hsla(0, 0%, 0%, 0.2),
                        2px 2px 8px 0px hsla(0, 0%, 0%, 0.2);
                }
                .companies .col .logos {
                    height: 50px;
                    width: 200px;
                }
                .rev h3 {
                    padding: 20px;
                    align-self: center;
                    border-left: 3px solid grey;
                }
                .rev h3 {
                    border-left: none;
                }
                /* Modal */
                .modal-title {
                    font-size: 3rem;
                    font-weight: bold;
                }
                .company-logo {
                    height: auto;
                    width: 300px;
                }
                .modal-body {
                    margin: 50px auto;
                }
                .sub-title {
                    font-weight: bold;
                }
                .modal-body .content p {
                    text-align: justify;
                }
                .map {
                    width: 100%;
                }
                /* Blog */
                .blog-title {
                    font-size: 6rem;
                    font-weight: bold;
                }
                .flexbox {
                    display: flex;
                    margin: 50px auto;
                }
                .carousel {
                    width: 100%;
                    margin-right: 5px;
                }
                .column {
                    width: 50%;
                    display: flex;
                    flex-direction: column;
                    row-gap: 5px;
                }
                .blog2 {
                    background: url(blog/4.jpg);
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    padding: 100px 100px 10px 30px;
                    height: 50%;
                }
                .blog3 {
                    background: url(blog/2.jpg);
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    padding: 100px 100px 10px 30px;
                    height: 50%;
                }
                .blog2 .content,
                .blog3 .content {
                    align-self: flex-end;
                    margin-top: 20px;
                }
                /* Stack */
                .row {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin: 15px 0px;
                }
                .technology-stack .row .col .pl {
                    height: auto;
                    width: 100px;
                    padding: 25px;
                }
                .img {
                    height: auto;
                    width: 25px;
                    margin: 0px 3px;
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
                            <a href="about.php" class="nav-link active"
                                >About</a
                            >
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
                            <a href="offerings.php" class="nav-link"
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
            <h1 class="title">About</h1>
            <h2>
                Hi! Welcome to
                <span class="highlight"
                    >Online Job Application</span
                >, specifying job opportunities for all
                <span class="highlight">IT</span> graduates.
            </h2>
            <div class="main-content">
                <div class="contacts">
                    <div class="con">
                        <h4>Contact</h4>
                        <p class="para">
                            Looking for help and inquiries? Feel free to send me
                            an
                            <a href="https://www.gmail.com" class="email"
                                >email</a
                            >
                            and we'll get back to you soon.
                        </p>
                    </div>
                    <div class="event">
                        <h4>Looking for an event and programs?</h4>
                        <p class="para">
                            Search for an event from different companies and
                            organizations and be a part of it.
                        </p>
                    </div>
                    <div class="freelance">
                        <h4>Searching for a client as a freelancer?</h4>
                        <p class="para">
                            Send us your portfolio so we can discuss about your
                            project.
                        </p>
                    </div>
                    <button class="btn btn-dark stack">
                        <i class="bi bi-discord"></i>
                        Join our
                        <a
                            href="https://discord.com"
                            class="highlight community"
                            target="_blank"
                            >Discord Community</a
                        >
                    </button>
                </div>
                <div class="about-content">
                    <p class="para1">
                        This website aims to provide a search engine for all
                        <span class="highlight">IT graduates</span> here in
                        <span class="highlight"
                            >Iloilo</span
                        >
                        in terms of job opportunities for their own convenience
                        and freedom to choose what's suited for their
                        capabilities.
                    </p>
                    <p class="para1">
                        Unlike any other online job application such as
                        <span class="highlight">linked in</span>, this website
                        integrates Companies, Universities, Institutions and
                        Organizations with our
                        <span class="highlight">company</span> not just for job
                        application but also for other events and programs held
                        by the mentioned groups. We are now building a strong
                        connection that would contribute in the innovation of
                        technology for both Software and Hardware. Let us help
                        each other, develop solutions and accelerate the changes
                        in our economy.
                    </p>
                    <p class="para1">
                        This will serve as the first online job application which supports 
                        <span class="highlight">freelancing</span> and <span class="highlight">internship</span> for all IT graduates.
                        as we impart our
                        gratitude to all IT graduates and prepared them in the
                        field of reality in
                        <span class="highlight">IT Industry</span>.
                    </p>
                </div>
            </div>
            <!-- Companies -->
            <div class="partnered-companies">
                <div class="company-content">
                    <h2 class="company-title">Companies</h2>
                    <div class="companies">
                        <div class="col">
                            <div class="rev col">
                                <img
                                    src="logos/Transcom_Logo_Blue.png"
                                    alt=""
                                    class="logos"
                                />
                                <h3>Transcom</h3>
                                <button
                                    class="btn btn-primary"
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#transcom"
                                >
                                    Review
                                </button>
                            </div>
                            <!-- Transcom Modal -->
                            <div class="modal fade" id="transcom">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-fullscreen"
                                >
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <!-- Modal Title -->
                                            <div
                                                class="container modal-logo modal-title"
                                            >
                                                <img
                                                    src="logos/Transcom_Logo_Blue.png"
                                                    alt=""
                                                    class="transcom company-logo"
                                                />
                                            </div>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                            ></button>
                                        </div>
                                        <!-- Modal Body -->
                                        <div class="container modal-body">
                                            <h1>
                                                About
                                                <span class="sub-title"
                                                    >Transcom</span
                                                >
                                            </h1>
                                            <div class="container-content">
                                                <p>
                                                    Transcom is a global
                                                    customer experience
                                                    specialist that provides
                                                    customer care, technical
                                                    support, customer
                                                    acquisition, digital
                                                    solutions, analytics,
                                                    back-office and other
                                                    specialized services to many
                                                    of the world's best-known
                                                    brands. We are passionate
                                                    about delivering exceptional
                                                    customer experiences that
                                                    build brand loyalty,
                                                    increase customer lifetime
                                                    value and drive growth for
                                                    our clients.
                                                </p>
                                                <p>
                                                    Transcom has over 40 years
                                                    of experience in delivering
                                                    customer experience
                                                    management solutions. We
                                                    have approximately 50,000
                                                    employees in 30 countries
                                                    and deliver services in more
                                                    than 50 languages. We are
                                                    listed on Nasdaq Stockholm.
                                                </p>
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.232265972536!2d122.54536253252189!3d10.716560293705452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee5305eafbcd3%3A0xf3770ac55d31de20!2sTranscom!5e0!3m2!1sen!2sph!4v1671178461452!5m2!1sen!2sph"
                                                    width="600"
                                                    height="450"
                                                    class="map"
                                                    style="border: 0"
                                                    allowfullscreen=""
                                                    loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade"
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rev col">
                                <img
                                    src="logos/iQor-trans.png"
                                    alt=""
                                    class="logos"
                                />
                                <h3>iQor</h3>
                                <button
                                    class="btn btn-primary"
                                    type="buttons"
                                    data-bs-toggle="modal"
                                    data-bs-target="#iqor"
                                >
                                    Review
                                </button>
                            </div>
                            <!-- iQor Modal -->
                            <div class="modal fade" id="iqor">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-fullscreen"
                                >
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <!-- Modal Title -->
                                            <div
                                                class="container modal-logo modal-title"
                                            >
                                                <img
                                                    src="logos/iQor-trans.png"
                                                    alt=""
                                                    class="iqor company-logo"
                                                />
                                            </div>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                            ></button>
                                        </div>
                                        <!-- Modal Body -->
                                        <div class="container modal-body">
                                            <h1>
                                                About
                                                <span class="sub-title"
                                                    >iQor</span
                                                >
                                            </h1>
                                            <p>
                                                iQor is a global provider of
                                                customer care and
                                                technology-enabled solutions. We
                                                help our clients deliver
                                                exceptional customer experiences
                                                by combining the speed and
                                                accuracy of automation with the
                                                empathy and personal touch of
                                                highly skilled agents. We are
                                                passionate about helping our
                                                clients build brand loyalty,
                                                increase customer lifetime value
                                                and drive growth.
                                            </p>
                                            <p>
                                                iQor has over 40 years of
                                                experience in delivering
                                                customer experience management
                                                solutions. We have approximately
                                                50,000 employees in 30 countries
                                                and deliver services in more
                                                than 50 languages. We are listed
                                                on Nasdaq Stockholm.
                                            </p>
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.255477832238!2d122.54440628340015!3d10.714767551941897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee5dc5bd43f07%3A0xecf38aa2f856eb6c!2siQor%20Philippines%20-%20Iloilo!5e0!3m2!1sen!2sph!4v1671178731644!5m2!1sen!2sph"
                                                width="600"
                                                height="450"
                                                class="map"
                                                style="border: 0"
                                                allowfullscreen=""
                                                loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"
                                            ></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rev col">
                                <img
                                    src="logos/wns(2).png"
                                    alt=""
                                    class="logos"
                                />
                                <h3>WNS</h3>
                                <button
                                    class="btn btn-primary"
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#wns"
                                >
                                    Review
                                </button>
                            </div>
                            <div class="modal fade" id="wns">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-fullscreen"
                                >
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <!-- MWNS Modal -->

                                            <div
                                                class="container modal-logo modal-title"
                                            >
                                                <img
                                                    src="logos/wns(2).png"
                                                    alt=""
                                                    class="wns company-logo"
                                                />
                                            </div>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                            ></button>
                                        </div>
                                        <!-- Modal Body -->
                                        <div class="container modal-body">
                                            <h1>
                                                About
                                                <span class="sub-title"
                                                    >WNS</span
                                                >
                                            </h1>
                                            <p>
                                                WNS (Holdings) Limited is a
                                                global business process
                                                management company. It provides
                                                business value to 400+ global
                                                clients by combining operational
                                                excellence with deep domain
                                                expertise in key industry
                                                verticals including Travel,
                                                Insurance, Banking and Financial
                                                Services, Manufacturing, Retail
                                                and Consumer Packaged Goods,
                                                Shipping and Logistics and
                                                Healthcare and Utilities.
                                            </p>
                                            <p>
                                                WNS delivers an entire spectrum
                                                of business process management
                                                services such as finance and
                                                accounting, customer care,
                                                technology solutions, research
                                                and analytics and industry
                                                specific back office and front
                                                office processes. WNS takes a
                                                unique approach to
                                                transformation by combining deep
                                                industry expertise with a global
                                                delivery model that consistently
                                                delivers operational excellence
                                                and superior value to clients.
                                            </p>
                                            <p>
                                                WNS has over 40,000
                                                professionals across 50 delivery
                                                centers worldwide including
                                                China, Costa Rica, India,
                                                Philippines, Poland, Romania,
                                                South Africa, Sri Lanka, United
                                                Kingdom and the United States.
                                                WNS is listed on the New York
                                                Stock Exchange (NYSE) and is a
                                                constituent of the S&P BSE
                                                SENSEX and the MSCI India
                                                indices.
                                            </p>
                                            <p>
                                                WNS is a global business process
                                                management company that delivers
                                                operational excellence to
                                                clients by combining deep domain
                                                expertise with a global delivery
                                                model.
                                            </p>
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7840.518914158008!2d122.54071837787565!3d10.714460189545878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1swns%20megaworld%20iloilo!5e0!3m2!1sen!2sph!4v1671179219705!5m2!1sen!2sph"
                                                width="600"
                                                height="450"
                                                class="map"
                                                style="border: 0"
                                                allowfullscreen=""
                                                loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"
                                            ></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rev col">
                                <img
                                    src="logos/legato.png"
                                    alt=""
                                    class="logos"
                                />
                                <h3>Legatto</h3>
                                <button
                                    class="btn btn-primary"
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#legato"
                                >
                                    Review
                                </button>
                            </div>
                            <div class="modal fade" id="legato">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-fullscreen"
                                >
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <!-- Modal Title -->
                                            <div
                                                class="container modal-logo modal-title"
                                            >
                                                <img
                                                    src="logos/legato.png"
                                                    alt=""
                                                    class="legato company-logo"
                                                />
                                            </div>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                            ></button>
                                        </div>
                                        <!-- Modal Body -->
                                        <div class="container modal-body">
                                            <h1>
                                                About
                                                <span class="sub-title"
                                                    >Legato</span
                                                >
                                            </h1>
                                            <p>
                                                Legato is a global provider of
                                                business process management
                                                services. We help our clients
                                                achieve their business goals by
                                                providing them with the
                                                flexibility to focus on their
                                                core business while we take care
                                                of their non-core processes. We
                                                are a team of over 10,000
                                                professionals across 20+
                                                locations in 10 countries. We
                                                have been providing business
                                                process management services to
                                                our clients for over 20 years.
                                            </p>
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3911.81229526489!2d122.54384314362679!3d10.711727635442859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee5c313d60925%3A0xb00b8a5dd2b26452!2sLegato%20Iloilo%20Health%20Technologies!5e0!3m2!1sen!2sph!4v1671179495595!5m2!1sen!2sph"
                                                width="600"
                                                height="450"
                                                class="map"
                                                style="border: 0"
                                                allowfullscreen=""
                                                loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"
                                            ></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="rev col">
                                <img src="logos/exl.png" alt="" class="logos" />
                                <h3>EXL</h3>
                                <button
                                    class="btn btn-primary"
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#exl"
                                >
                                    Review
                                </button>
                            </div>
                            <!-- EXL Modal -->
                            <div class="modal fade" id="exl">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-fullscreen"
                                >
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <!-- Modal Title -->
                                            <div
                                                class="container modal-logo modal-title"
                                            >
                                                <img
                                                    src="logos/exl.png"
                                                    alt=""
                                                    class="exl company-logo"
                                                />
                                            </div>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                            ></button>
                                        </div>
                                        <!-- Modal Body -->
                                        <div class="container modal-body">
                                            <h1>
                                                About
                                                <span class="sub-title"
                                                    >EXL</span
                                                >
                                            </h1>
                                            <div class="container-content">
                                                <p>
                                                    EXL is a leading operations
                                                    management and analytics
                                                    company that designs and
                                                    enables agile,
                                                    customer-centric operating
                                                    models. EXL's 40,000
                                                    professionals deliver
                                                    transformational impact to
                                                    clients across 30+
                                                    industries through digital
                                                    and analytics-driven
                                                    insights, automation and
                                                    decisioning, and intelligent
                                                    operations. EXL has
                                                    consistently been recognized
                                                    as a leader in the industry
                                                    by Everest Group,
                                                    NelsonHall, HfS, and others.
                                                </p>
                                                <p>
                                                    EXL's clients include 75 of
                                                    the top 100 global insurance
                                                    companies, 50 of the top 100
                                                    global banks, 50 of the top
                                                    100 global retailers, and 50
                                                    of the top 100 global
                                                    healthcare payers. EXL has
                                                    over 100 global delivery
                                                    centers across the US,
                                                    Europe, Asia, and Australia.
                                                </p>
                                                <p>
                                                    EXL is headquartered in New
                                                    York, with offices in
                                                    Bangalore, Buenos Aires,
                                                    Chicago, Dallas, Denver,
                                                    Dublin, London, Manila,
                                                    Mexico City, Mumbai, New
                                                    Delhi, Philadelphia,
                                                    Phoenix, Pittsburgh, Pune,
                                                    San Diego, San Francisco,
                                                    Seattle, Singapore,
                                                    Stamford, Sydney, and
                                                    Toronto.
                                                </p>
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.515478065484!2d122.57001855826901!3d10.6946664322048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee56531804a2b%3A0xe74fe06145703664!2sExL%20EXPRESS!5e0!3m2!1sen!2sph!4v1671178037882!5m2!1sen!2sph"
                                                    width="600"
                                                    height="450"
                                                    class="map"
                                                    style="border: 0"
                                                    allowfullscreen=""
                                                    loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade"
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rev col">
                                <img
                                    src="logos/TeleTech-Logo.png"
                                    alt=""
                                    class="logos"
                                />
                                <h3>Teletech</h3>
                                <button
                                    class="btn btn-primary"
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#teletech"
                                >
                                    Review
                                </button>
                            </div>
                            <!-- Teletech Modal -->
                            <div class="modal fade" id="teletech">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-fullscreen"
                                >
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <!-- Modal Title -->
                                            <div
                                                class="container modal-logo modal-title"
                                            >
                                                <img
                                                    src="logos/TeleTech-Logo.png"
                                                    alt=""
                                                    class="teletech company-logo"
                                                />
                                            </div>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                            ></button>
                                        </div>
                                        <!-- Modal Body -->
                                        <div class="container modal-body">
                                            <h1>
                                                About
                                                <span class="sub-title"
                                                    >Teletech</span
                                                >
                                            </h1>
                                            <div class="container-content">
                                                <p>
                                                    Teletech is a global leader
                                                    in customer experience,
                                                    engagement and growth
                                                    solutions. We help brands
                                                    make every customer
                                                    experience a profitable one.
                                                </p>
                                                <p>
                                                    We are a global company with
                                                    50,000 employees in 18
                                                    countries and 100+ contact
                                                    centers around the world. We
                                                    provide customer experience
                                                    solutions to the world's
                                                    most respected brands,
                                                    including many of the
                                                    Fortune 100.
                                                </p>
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.442770594761!2d122.55689942890791!3d10.70029134606893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee542585c3309%3A0x2a0b4be6c012590c!2sTeletech!5e0!3m2!1sen!2sph!4v1671177270016!5m2!1sen!2sph"
                                                    width="600"
                                                    height="450"
                                                    class="map"
                                                    style="border: 0"
                                                    allowfullscreen=""
                                                    loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade"
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rev col">
                                <img
                                    src="logos/inspiro.png"
                                    alt=""
                                    class="logos"
                                />
                                <h3>Inspiro</h3>
                                <button
                                    class="btn btn-primary"
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#inspiro"
                                >
                                    Review
                                </button>
                            </div>
                            <!-- Inspiro Modal -->
                            <div class="modal fade" id="inspiro">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-fullscreen"
                                >
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <!-- Modal Title -->
                                            <div
                                                class="container modal-logo modal-title"
                                            >
                                                <img
                                                    src="/logos/inspiro.png"
                                                    alt=""
                                                    class="inspiro company-logo"
                                                />
                                            </div>

                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                            ></button>
                                        </div>
                                        <!-- Modal Body -->
                                        <div class="container modal-body">
                                            <h1>
                                                About
                                                <span class="sub-title"
                                                    >Inspiro</span
                                                >
                                            </h1>
                                            <div class="container-content">
                                                <p>
                                                    Inspiro is a global business
                                                    process outsourcing company
                                                    that provides
                                                    customer-centric solutions
                                                    to Fortune 500 companies. We
                                                    deliver a wide range of
                                                    services including customer
                                                    care, technical support,
                                                    back-office operations, and
                                                    digital marketing.
                                                </p>
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.4772905403483!2d122.54199730368435!3d10.697621122239166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee5518654181f%3A0xb78562399e747d9d!2sInspiro!5e0!3m2!1sen!2sph!4v1671176445636!5m2!1sen!2sph"
                                                    width="600"
                                                    height="450"
                                                    class="map"
                                                    style="border: 0"
                                                    allowfullscreen=""
                                                    loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade"
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rev col">
                                <img src="logos/hgs.jpg" alt="" class="logos" />
                                <h3>HGS</h3>
                                <button
                                    class="btn btn-primary"
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#hgs"
                                >
                                    Review
                                </button>
                            </div>
                            <!-- HGS Modal -->
                            <div class="modal fade" id="hgs">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-fullscreen"
                                >
                                    <div class="modal-content">
                                        <!-- Modal Header -->

                                        <div class="modal-header">
                                            <!-- Modal Title -->
                                            <div
                                                class="container modal-logo modal-title"
                                            >
                                                <img
                                                    src="logos/hgs.jpg"
                                                    alt=""
                                                    class="hgs company-logo"
                                                />
                                            </div>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                            ></button>
                                        </div>
                                        <!-- Modal Body -->
                                        <div class="container modal-body">
                                            <h1>
                                                About
                                                <span class="sub-title"
                                                    >HGS</span
                                                >
                                            </h1>
                                            <div class="container-content">
                                                <p>
                                                    Hinduja Global Solutions
                                                    (HGS) is a global business
                                                    process management (BPM)
                                                    company with over 45,000
                                                    employees across 75 contact
                                                    centers in 6 continents. HGS
                                                    combines operational
                                                    excellence with deep domain
                                                    expertise in automotive,
                                                    banking and financial
                                                    services, insurance,
                                                    healthcare, retail, consumer
                                                    goods and travel,
                                                    transportation and logistics
                                                    to deliver transformational
                                                    impact to clients. HGS takes
                                                    a holistic approach to each
                                                    client engagement,
                                                    underpinned by its unique
                                                    Global Delivery Model, to
                                                    drive customer satisfaction
                                                    and business results. HGS
                                                    operates out of India, the
                                                    Philippines, Sri Lanka,
                                                    Jamaica, Kenya, Tanzania,
                                                    Uganda, South Africa, the
                                                    United Kingdom, the United
                                                    States, Canada, Mexico,
                                                    Brazil, Argentina, Colombia,
                                                    Australia, New Zealand and
                                                    Singapore.
                                                </p>
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6359.483494206539!2d122.54790334176725!3d10.705275366953838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shgs%20iloilo!5e0!3m2!1sen!2sph!4v1671175487059!5m2!1sen!2sph"
                                                    width="600"
                                                    height="450"
                                                    class="map"
                                                    style="border: 0"
                                                    allowfullscreen=""
                                                    loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade"
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog -->
            <div class="blog">
                <div class="blog-content">
                    <h2 class="blog-title">Blog</h2>
                </div>
                <div class="flexbox">
                    <!-- Carousel -->
                    <div
                        id="blog"
                        class="carousel slide"
                        data-bs-ride="carousel"
                    >
                        <!-- Carousel Indicators -->
                        <div class="carousel-indicators">
                            <button
                                type="button"
                                data-bs-target="blog"
                                data-bs-slide-to="0"
                                class="active"
                            ></button>
                            <button
                                type="button"
                                data-bs-target="blog"
                                data-bs-slide-to="1"
                            ></button>
                            <button
                                type="button"
                                data-bs-target="blog"
                                data-bs-slide-to="2"
                            ></button>
                            <button
                                type="button"
                                data-bs-target="blog"
                                data-bs-slide-to="3"
                            ></button>
                        </div>
                        <!-- The Carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img
                                    src="blog/1.jpg"
                                    alt=""
                                    class="d-block"
                                    style="width: 100%"
                                />
                                <div class="carousel-caption">
                                    <h3>
                                        Be one of the innovators of technology
                                        and contribute something BIG in your
                                        economy
                                    </h3>
                                    <p>By Karl Fredriech Getuya - Information Technology</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img
                                    src="blog/3.jpg"
                                    alt=""
                                    class="d-block"
                                    style="width: 100%"
                                />
                                <div class="carousel-caption">
                                    <h3>
                                        Join our networking team and hone your
                                        skills in hardware
                                    </h3>
                                    <p>By Karl Fredriech Getuya - Information Technology</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img
                                    src="blog/5.jpg"
                                    alt=""
                                    class="d-block"
                                    style="width: 100%"
                                />
                                <div class="carousel-caption">
                                    <h3>
                                        Be one of the developers and earn the
                                        most paying job of all times
                                    </h3>
                                    <p>By Karl Fredriech Getuya - Information Technology</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img
                                    src="blog/6.jpg"
                                    alt=""
                                    class="d-block"
                                    style="width: 100%"
                                />
                                <div class="carousel-caption">
                                    <h3>
                                        Engage yourself in terms of information
                                        dissemination and learn something new
                                    </h3>
                                    <p>By Karl Fredriech Getuya - Information Technology</p>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <button
                            class="carousel-control-prev"
                            type="button"
                            data-bs-target="#blog"
                            data-bs-slide="prev"
                        >
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button
                            class="carousel-control-next"
                            type="button"
                            data-bs-target="#blog"
                            data-bs-slide="next"
                        >
                            <div class="carousel-control-next-icon"></div>
                        </button>
                    </div>
                    <!-- End of carousel -->

                    <div class="column">
                        <div class="blog2">
                            <div class="container content">
                                <button
                                    type="button"
                                    class="btn btn-light"
                                    onclick="window.location.href = ''"
                                >
                                    Learn More
                                </button>
                                <h6>
                                    Expand the growing network of IT Industry
                                </h6>
                            </div>
                        </div>
                        <div class="blog3">
                            <div class="container content">
                                <button
                                    type="button"
                                    class="btn btn-light"
                                    onclick="window.location.href = ''"
                                >
                                    Learn More
                                </button>
                                <h6>Discover the catalyst of Technology</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Stack -->
            <button class="btn btn-dark stack">Technology Stack</button>
            <div class="technology-stack">
                <div class="row">
                    <div class="col">
                        <img src="icons/c-.png" alt="C++" class="pl" />
                    </div>
                    <div class="col">
                        <img src="icons/c-sharp.png" alt="C#" class="pl" />
                    </div>
                    <div class="col">
                        <img src="icons/java.png" alt="Java" class="pl" />
                    </div>
                    <div class="col">
                        <img src="icons/python.png" alt="Python" class="pl" />
                    </div>

                    <div class="col">
                        <img src="icons/r.png" alt="R" class="pl" />
                    </div>
                    <div class="col">
                        <img src="icons/azure.png" alt="Azure" class="pl" />
                    </div>
                    <div class="col">
                        <img
                            src="icons/photoshop.png"
                            alt="Photoshop"
                            class="pl"
                        />
                    </div>
                    <div class="col">
                        <img src="icons/figma.png" alt="Figma" class="pl" />
                    </div>
                    <div class="col">
                        <img src="icons/html.png" alt="HTML" class="pl" />
                    </div>
                    <div class="col">
                        <img src="icons/css-3.png" alt="CSS" class="pl" />
                    </div>
                    <div class="col">
                        <img src="icons/js.png" alt="JavaScript" class="pl" />
                    </div>
                    <div class="col">
                        <img src="icons/php.png" alt="PHP" class="pl" />
                    </div>
                    <div class="col">
                        <img
                            src="icons/bootstrap.png"
                            alt="Bootstrap"
                            class="pl"
                        />
                    </div>
                    <div class="col">
                        <img src="icons/nodejs.png" alt="NodeJs" class="pl" />
                    </div>
                    <div class="col">
                        <img src="icons/docker.png" alt="Docker" class="pl" />
                    </div>
                    <div class="col">
                        <img src="icons/mysql.png" alt="MySQL" class="pl" />
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
                            href="https://www.facebook.com"
                            ><img
                                src="icons/fb.png"
                                alt="Facebook"
                                class="fb img"
                        /></a>
                        <a href="https://www.instagram.com"
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
