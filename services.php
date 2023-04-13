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
        <title>Online Job Application | Services</title>

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

        <!-- Bootstrap -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />

        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Playball&family=Roboto:ital,wght@1,900&display=swap"
            rel="stylesheet"
        />
        <!-- Font Awesome-->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        />

        <!-- Icon -->
        <link type="icon" rel="icon" href="background/Information Technology.png" />

        <!-- External JS -->
        <script src="services.js"></script>

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
                    url(office/2.jpg);
                background-attachment: fixed;
                background-position: center;
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
                text-transform: uppercase;
                font-weight: bold;
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
            .bootcamp {
                margin-top: 50px;
                padding: 3%;
            }
            .bootcamp-content {
                display: flex;
                justify-content: space-around;
            }
            .description {
                padding: 30px 10px;
            }
            .description p {
                font-size: 20px;
            }
            .posters {
                display: flex;
                margin-top: 100px;
            }
            .poster1 {
                margin: 200px -50px 0px 150px;
            }
            .poster {
                height: auto;
                width: 300px;
                object-fit: cover;
                box-shadow: 2px 4px 8px 0px hsla(0, 0%, 0%, 0.5),
                    2px 4px 8px 0px hsla(0, 0%, 0%, 0.5);
                transform: skew(-20deg, 20deg);
                position: absolute;
            }
            .languages li,
            .web li {
                list-style-type: square;
            }
            ul li {
                font-size: 18px;
            }
            .faqs-content {
                display: flex;
                justify-content: space-around;
                text-align: start;
            }
            .faqs-description {
                width: 50%;
                padding: 50px;
            }
            /* education */
            .education {
                padding: 3%;
            }
            .education .title {
                text-align: end;
            }
            .education-content {
                display: flex;
                justify-content: space-around;
            }
            .education-chart {
                display: flex;
                justify-content: start;
                padding: 50px;
            }
            .education-poster {
                height: auto;
                width: 300px;
                object-fit: cover;
                box-shadow: 2px 4px 8px 0px hsla(0, 0%, 0%, 0.5),
                    2px 4px 8px 0px hsla(0, 0%, 0%, 0.5);
                transform: skew(10deg, -10deg);
                z-index: 1;
                position: absolute;
            }
            .education-poster1 {
                margin: 200px -50px 0px 150px;
                height: auto;
                width: 300px;
                object-fit: cover;
                box-shadow: 2px 4px 8px 0px hsla(0, 0%, 0%, 0.5),
                    2px 4px 8px 0px hsla(0, 0%, 0%, 0.5);
                transform: skew(10deg, -10deg);
                position: absolute;
            }
            .education-chart,
            .education-description {
                width: 50%;
            }
            .education-description {
                padding: 30px 10px;
                text-align: start;
            }
            .education-description p {
                font-size: 20px;
            }
            .education-faqs {
                display: flex;
                justify-content: center;
                text-align: center;
            }
            .faqs-description {
                width: 40%;
            }
            .email {
                text-decoration: none;
            }
            /* training */
            .training {
                padding: 3%;
                margin-bottom: 50px;
            }
            .title h1 {
                font-size: 8rem;
                font-weight: bold;
            }
            .faqs {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .faqs .bottom-title {
                text-align: center;
            }
            .training-content {
                display: flex;
            }
            .training-description {
                padding: 30px 10px;
                width: 50%;
            }
            .training-description p {
                font-size: 20px;
            }
            .software li,
            .hardware li {
                list-style-type: square;
            }
            .training-faqs {
                display: flex;
                justify-content: space-around;
                text-align: start;
            }
            .faqs-description {
                width: 50%;
                padding: 50px;
            }
            .highlight {
                font-weight: bold;
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
            .display-bootcamp {
                background: url(services/images/2.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
                padding: 1.5rem;
                color: #fff;
                margin-bottom: 50px;
            }
            .display-education {
                background: url(services/images/2.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
                padding: 1.5rem;
                color: #fff;
                margin-bottom: 50px;
            }
            .display-training {
                background: url(services/images/2.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-attachment: fixed;
                padding: 1.5rem;
                color: #fff;
                margin-bottom: 50px;
            }
            h2.subtitle {
                font-size: 3rem;
            }
            @media only screen and (max-width: 600px) {
                .logo {
                    height: auto;
                    width: 50px;
                    border-radius: 50%;
                }
                .navbar .nav-link {
                    color: hsla(0, 0%, 0%, 0.5);
                    font-size: 16px;
                }
                .bootcamp {
                    margin-top: 50px;
                    padding: 3%;
                }
                .title h1 {
                    font-size: 3rem;
                }
                .bootcamp-content {
                    display: block;
                }
                .container .description {
                    padding: 30px 10px;
                }
                .container .description h3 {
                    font-size: 1.3rem;
                }
                .description p {
                    font-size: 16px;
                    text-align: justify;
                }
                .languages li,
                .web li {
                    list-style-type: square;
                }
                .description button {
                    font-size: 16px;
                }
                .posters {
                    display: none;
                }
                .display-bootcamp p {
                    text-align: justify;
                }
                .faqs-content {
                    display: block;
                }
                .faqs-description {
                    width: 100%;
                    padding: 20px;
                    text-align: justify;
                }
                /* education */
                .education {
                    padding: 3%;
                }
                .education .container h3 {
                    font-size: 1.3rem;
                }
                .education-content {
                    display: block;
                }
                .education .education-content p {
                    font-size: 16px;
                    text-align: justify;
                }
                .education-chart {
                    display: none;
                }
                .education-description {
                    width: 100%;
                    padding: 30px 10px;
                    text-align: start;
                }
                .education-description p {
                    font-size: 20px;
                }
                .display-education p {
                    text-align: justify;
                }
                .education-faqs {
                    display: block;
                }
                /* training */
                .training {
                    padding: 3%;
                }
                .training .container h3 {
                    font-size: 1.3rem;
                }
                .faqs {
                    display: block;
                    justify-content: center;
                    align-items: center;
                }
                .training-content {
                    display: block;
                }
                .training-description {
                    width: 100%;
                }
                .training-description p {
                    font-size: 16px;
                    text-align: justify;
                }
                .training-faqs {
                    display: block;
                }
                /* footer */
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
                    border-radius: 50%;
                }
                .navbar .nav-link {
                    color: hsla(0, 0%, 0%, 0.5);
                    font-size: 16px;
                    text-transform: uppercase;
                    font-weight: bold;
                }
                .bootcamp {
                    margin-top: 50px;
                    padding: 3%;
                }
                .bootcamp .title h1,
                .education .title h1,
                .training .title h1 {
                    font-size: 4.5rem;
                }
                .bootcamp-content {
                    display: block;
                }
                .container .description {
                    padding: 30px 10px;
                }
                .container .description p {
                    font-size: 16px;
                    text-align: justify;
                }
                .posters {
                    display: none;
                }
                .display-bootcamp p {
                    text-align: justify;
                }
                .faqs .container {
                    font-size: 16px;
                }
                .faqs-content {
                    display: block;
                }
                .faqs-content .faqs-description {
                    width: 100%;
                    text-align: justify;
                }
                /* end of bootcamp */
                .education {
                    padding: 3%;
                }
                .education-content {
                    display: block;
                    justify-content: space-around;
                }
                .education-chart {
                    display: none;
                }
                .education-description {
                    padding: 30px 10px;
                    text-align: start;
                    width: 100%;
                }
                .education-description p {
                    font-size: 16px;
                    text-align: justify;
                }
                .education-faqs .faqs-description {
                    width: 100%;
                }
                /* end of education */
                .training {
                    padding: 3%;
                    margin-bottom: 50px;
                }
                .training-content {
                    display: flex;
                }
                .training-description {
                    padding: 30px 10px;
                    width: 100%;
                }
                .training-description p {
                    font-size: 16px;
                    text-align: justify;
                }
                .software li,
                .hardware li {
                    list-style-type: square;
                }
                .training-faqs {
                    display: block;
                }
                .training-faqs .faqs-description {
                    width: 100%;
                    text-align: justify;
                }
                .img {
                    height: auto;
                    width: 20px;
                    margin: 0px 3px;
                }
            }
            @media only screen and (min-width: 768px) {
                .logo {
                    height: auto;
                    width: 70px;
                    border-radius: 50%;
                }
                .navbar .nav-link {
                    color: hsla(0, 0%, 0%, 0.5);
                    font-size: 18px;
                    text-transform: uppercase;
                    font-weight: bold;
                }
                .bootcamp {
                    margin-top: 50px;
                    padding: 3%;
                }
                .bootcamp-content {
                    display: flex;
                    justify-content: space-around;
                }
                .description {
                    padding: 30px 10px;
                    font-size: 20px;
                }
                /* education */
                .education {
                    padding: 3%;
                }
                .education-content {
                    display: flex;
                    justify-content: space-around;
                }
                .education-description {
                    padding: 30px 10px;
                    text-align: start;
                    width: 100%;
                }
                .education-description p {
                    font-size: 20px;
                }
                .faqs-description {
                    width: 100%;
                }
                .title h1 {
                    font-size: 4rem;
                }
                /* training */
                .training {
                    padding: 3%;
                }
                .training-content {
                    display: flex;
                }
                .training-description {
                    padding: 30px 10px;
                    width: 50%;
                    font-size: 50px;
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
                    width: 80px;
                }
                .navbar .nav-link {
                    color: hsla(0, 0%, 0%, 0.5);
                    font-size: 18px;
                    text-transform: uppercase;
                    font-weight: bold;
                }
                .bootcamp-content {
                    display: flex;
                    justify-content: space-around;
                }
                .description {
                    padding: 30px 10px;
                }
                .description p {
                    font-size: 20px;
                }
                .posters {
                    display: flex;
                    margin-top: 100px;
                }
                .poster1 {
                    margin: 200px -50px 0px 150px;
                }
                .poster {
                    height: auto;
                    width: 200px;
                    object-fit: cover;
                    box-shadow: 2px 4px 8px 0px hsla(0, 0%, 0%, 0.5),
                        2px 4px 8px 0px hsla(0, 0%, 0%, 0.5);
                    transform: skew(-20deg, 20deg);
                    position: absolute;
                }
                .faqs-content,
                .education-faqs,
                .training-faqs {
                    display: flex;
                    justify-content: space-around;
                    text-align: start;
                    font-size: 18px;
                }
                .faqs-description {
                    width: 50%;
                }
                .education {
                    padding: 3%;
                }
                .education-content {
                    display: flex;
                    justify-content: space-around;
                }
                .education-chart {
                    display: flex;
                    justify-content: start;
                    padding: 50px;
                }
                .education-poster {
                    height: auto;
                    width: 200px;
                    object-fit: cover;
                    box-shadow: 2px 4px 8px 0px hsla(0, 0%, 0%, 0.5),
                        2px 4px 8px 0px hsla(0, 0%, 0%, 0.5);
                    transform: skew(10deg, -10deg);
                    z-index: 1;
                    position: absolute;
                }
                .education-poster1 {
                    margin: 150px -50px 0px 100px;
                    height: auto;
                    width: 200px;
                    object-fit: cover;
                    box-shadow: 2px 4px 8px 0px hsla(0, 0%, 0%, 0.5),
                        2px 4px 8px 0px hsla(0, 0%, 0%, 0.5);
                    transform: skew(10deg, -10deg);
                    position: absolute;
                }
                .education-chart,
                .education-description {
                    width: 50%;
                }
                .education-description {
                    padding: 30px 10px;
                    text-align: start;
                }
                .education-description p {
                    font-size: 20px;
                }
                .education-faqs {
                    display: flex;
                    justify-content: center;
                    text-align: center;
                }
                .training {
                    padding: 3%;
                    margin-bottom: 50px;
                }
                .education .title {
                    text-align: end;
                }
                .faqs {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .faqs .bottom-title {
                    text-align: center;
                }
                .training {
                    padding: 3%;
                }
                .training-content {
                    display: flex;
                }
                .training-description {
                    padding: 30px 10px;
                    width: 50%;
                }
                .training-description p {
                    font-size: 20px;
                }
                .software li,
                .hardware li {
                    list-style-type: square;
                }
                .faqs-description {
                    width: 50%;
                    padding: 50px;
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
                    text-transform: uppercase;
                    font-weight: bold;
                }
                .title h1 {
                    font-size: 8rem !important;
                }
                .bootcamp-content .description p {
                    font-size: 20px;
                }
                .poster {
                    height: auto;
                    width: 300px;
                    object-fit: cover;
                    box-shadow: 2px 4px 8px 0px hsla(0, 0%, 0%, 0.5),
                        2px 4px 8px 0px hsla(0, 0%, 0%, 0.5);
                    transform: skew(-20deg, 20deg);
                    position: absolute;
                }
                .education-chart {
                    display: flex;
                    justify-content: start;
                    padding: 50px;
                }
                .education-poster {
                    height: auto;
                    width: 300px;
                    object-fit: cover;
                    box-shadow: 2px 4px 8px 0px hsla(0, 0%, 0%, 0.5),
                        2px 4px 8px 0px hsla(0, 0%, 0%, 0.5);
                    transform: skew(10deg, -10deg);
                    z-index: 1;
                    position: absolute;
                }
                .education-poster1 {
                    margin: 200px -50px 0px 150px;
                    height: auto;
                    width: 300px;
                    object-fit: cover;
                    box-shadow: 2px 4px 8px 0px hsla(0, 0%, 0%, 0.5),
                        2px 4px 8px 0px hsla(0, 0%, 0%, 0.5);
                    transform: skew(10deg, -10deg);
                    position: absolute;
                }
                .education-description {
                    padding: 30px 10px;
                    text-align: start;
                }
                .faqs-description {
                    width: 50%;
                    padding: 50px;
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
                <div class="collapse navbar-collapse topnav" id="navs">
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
                                class="nav-link dropdown-toggle active"
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
        <div class="container-fluid bootcamp" id="bootcamp">
            <div class="container">
                <div class="title">
                    <h1>Bootcamp</h1>
                </div>
                <div class="bootcamp-content">
                    <div class="container description">
                        <h3>
                            Our company offers both virtual and face-to-face
                            bootcamp for all aspiring students.
                        </h3>
                        <br />
                        <p>
                            We offer a wide range of bootcamps that will help
                            you develop your skills and knowledge in different
                            fields of technology. Various programming languages
                            and frameworks are available for you to choose from.
                        </p>
                        <p>
                            There are lots and lots of things to learn including
                            Computer Programming, Web Development, Networking,
                            Information System, Data Science, System Analysis
                            and many more.
                        </p>
                        <p>In Computer Programming, you will learn:</p>
                        <ul class="languages">
                            <li>Fundamentals of Programming</li>
                            <li>Conditional Statements</li>
                            <li>Functions and Methods</li>
                            <li>Object Oriented Programming</li>
                            <li>Data Structures</li>
                            <li>Application with User Interfaces</li>
                        </ul>
                        <br />
                        <p>In Web Development, you will learn:</p>
                        <ul class="web">
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>Bootstrap</li>
                            <li>JavaScript</li>
                            <li>Node Js</li>
                            <li>React Js</li>
                            <li>PHP</li>
                            <li>SQL</li>
                        </ul>
                        <button
                            class="btn btn-dark"
                            name="bootcamp"
                            type="button"
                            onclick="bootcamp()"
                        >
                            Enroll Now
                        </button>
                        <script>
                            function bootcamp() {
                                window.location.href = "services/bootcamp.php";
                            }
                        </script>
                    </div>
                    <div class="container posters">
                        <div class="poster1">
                            <img
                                src="poster/poster2.png"
                                alt="Poster"
                                class="poster img1"
                            />
                        </div>
                        <div class="poster2">
                            <img
                                src="poster/poster.png"
                                alt="Poster"
                                class="poster img2"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid display-bootcamp">
            <div class="container">
                <h2 class="subtitle">Bootcamp</h2>
                <p>
                    We offer a wide range of bootcamps that will help you
                    develop your skills and knowledge in different fields of
                    technology. Various programming languages and frameworks are
                    available for you to choose from. There are lots and lots of
                    things to learn including Computer Programming, Web
                    Development, Networking, Information System, Data Science,
                    System Analysis and many more.
                </p>
            </div>
        </div>
        <div class="faqs">
            <div class="container">
                <div class="bottom-title">
                    <h1>
                        FREQUENTLY ASKED <br />
                        QUESTIONS
                    </h1>
                </div>
                <div class="faqs-content">
                    <div class="faqs-description">
                        <h3>What language will be used?</h3>
                        <p>Primarily English and Filipino.</p>
                        <h3>What are the requirements to apply?</h3>
                        <p>
                            Basic understanding in any programming languages is
                            not required. All you need is strong commitment to
                            invest your time and effort to learn as we encourage
                            everyone to learn and grow together.
                        </p>
                        <h3>What's the tuition?</h3>
                        <p>
                            Zero tuition from the very start. We are confident
                            that our training and career support will lead you
                            to a high paying job that we now offer
                            Study-First-Pay-Later. With zero upfront payment,
                            the arrangement is when you get hired, you repay us
                            15% of your monthly salary for 1 year through our
                            income share agreement. This is our commitment of
                            making technology training more accessible to more
                            people.
                        </p>
                    </div>
                    <div class="faqs-description">
                        <h3>What will I receive at the end of the bootcamp?</h3>
                        <p>
                            You will receive a certificate of completion issued
                            by our company.
                        </p>
                        <h3>Why should I apply?</h3>
                        <p>
                            If you are interested in starting a career in IT
                            industry, this program is for you. We invite
                            beginners, career shifters, fresh graduates and
                            anyone who wants to kickstart their career as a
                            future software developer.
                        </p>
                        <h3>What are the scheduling option?</h3>
                        <p>
                            You can attend the full-time bootcamp where learning
                            is your top priority, and become job-ready in 4
                            months. Or juggle other commitments, with the
                            part-time bootcamp, and become job-ready in 6
                            months.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid education" id="education">
            <div class="container">
                <div class="title">
                    <h1>Education</h1>
                    <br />
                    <h3>
                        We offers an educational support in different fields in
                        IT.
                    </h3>
                </div>
                <div class="education-content">
                    <div class="education-chart">
                        <img
                            src="poster/1.png"
                            alt="Education"
                            class="education-poster"
                        />
                        <img
                            src="poster/2.png"
                            alt="Education"
                            class="education-poster1"
                        />
                    </div>
                    <div class="education-description">
                        <h3>Get real-time support from trainers</h3>
                        <p>
                            Learner's can, at any time, describe the problem
                            that they're facing, and then in real-time get
                            connected to an expert developer who can review
                            their code, talk them through the issue via live
                            texting and/or calls, and work on the code together.
                        </p>
                        <h3>
                            Daily discussion + Building real-world applications
                        </h3>
                        <p>
                            Everyday discuss with trainers and peers on projects
                            and assignments. By the time you graduate, you'll
                            have projects in your software engineering
                            portfolio. All your code will be on Github and built
                            with real-world libraries and methodologies, which
                            will be impressive to future employers.
                        </p>
                        <h3>Monitor your learning progress</h3>
                        <p>
                            Get visibility on your progress through video
                            completion status and activities.
                        </p>
                        <p>
                            Apart from being the highest job in the Philippines,
                            being an IT professional opens up great career paths
                            because of its high demand not only in the country
                            but also globally. Being digital in nature, enjoy
                            the benefits of working anywhere. Plus, building
                            impactful apps makes it fun and rewarding.
                        </p>
                        <button
                            class="btn btn-dark"
                            name="education"
                            type="button"
                            onclick="education()"
                        >
                            Enroll Now
                        </button>
                        <script>
                            function education() {
                                window.location.href =
                                    "services/education.php";
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid display-education">
            <div class="container">
                <h2 class="subtitle">Education</h2>
                <p>
                    We offer an educational support in different fields in IT.
                    We have a team of experts who are willing to help you in
                    your journey to become a professional IT. We have a wide
                    range of courses that you can choose from. We have a
                    different course for different levels of expertise. We offer
                    a free trial for you to experience our courses.
                </p>
            </div>
        </div>
        <div class="faqs">
            <div class="container">
                <div class="bottom-title">
                    <h1>
                        FREQUENTLY ASKED <br />
                        QUESTIONS
                    </h1>
                </div>
                <div class="education-faqs">
                    <div class="faqs-description">
                        <h3>How to register?</h3>
                        <p>
                            You can reserve a slot by sending an email to
                            <a
                                href="mailto:karlfredriechgetuya@gmail.com"
                                class="email"
                                >www.karlfredriechgetuya@gmail.com</a
                            >
                        </p>
                        <h3>Can I apply without a degree?</h3>
                        <p>
                            Of course! As long as you have a strong commitment
                            and passion for learning programming and a desire to
                            have a successful tech career.
                        </p>
                        <h3>
                            Will I receive a certificate at the end of the
                            class?
                        </h3>
                        <p>
                            Yes, all students who complete the program will
                            receive a certificate of completion issued by
                            our company.
                        </p>
                        <h3>What else will I receive after?</h3>
                        <p>
                            We will connect with our partner companies for
                            programming jobs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid training" id="training">
            <div class="container">
                <div class="title">
                    <h1>Training</h1>
                    <br />
                    <h3>Looking for experience in the of technology?</h3>
                </div>
                <div class="training-content">
                    <div class="training-description">
                        <h3>Acquire the skills you need</h3>
                        <p>
                            Trainees will be given a certificate of completion
                            at the end of the training. We also offer a 1-month
                            internship for those who are interested in working
                            with us.
                        </p>
                        <h3>Enjoy while learning</h3>
                        <p>
                            We offer a fun and interactive learning environment
                            where you can learn and grow together with your
                            peers and get the chance to work with our
                            professional trainers.
                        </p>
                        <h3>Enhance your skills</h3>
                        <p>
                            Learn the latest technologies and enhance your
                            skills and keep up with the latest trends in the
                            industry. Puzzle your way through our challenges and
                            get the chance to win additional learning materials.
                        </p>
                        <p>Software</p>
                        <ul class="software">
                            <li>Exclusive coding challenges</li>
                            <li>UI/UX Design</li>
                            <li>Prototyping</li>
                            <li>Coding</li>
                            <li>Project implementation and deployment</li>
                        </ul>
                        <p>Hardware</p>
                        <ul class="hardware">
                            <li>Assemble / disassemble</li>
                            <li>CISCO packet tracing</li>
                            <li>Network configuration</li>
                            <li>Technical support and troubleshooting</li>
                            <li>Network security</li>
                        </ul>
                    </div>
                    <div class="posters">
                        <div class="poster1">
                            <img
                                src="poster/TRAINING.png   "
                                alt=""
                                class="poster img1"
                            />
                        </div>
                        <div class="poster2">
                            <img
                                src="poster/3.png"
                                alt=""
                                class="poster img2"
                            />
                        </div>
                    </div>
                </div>
                <button
                    class="btn btn-dark"
                    name="training"
                    type="button"
                    onclick="training()"
                >
                    Apply Now
                </button>
                <script>
                    function training() {
                        window.location.href = "services/training.php";
                    }
                </script>
            </div>
        </div>
        <div class="container-fluid display-training">
            <div class="container">
                <h2 class="subtitle">Training</h2>
                <p>
                    Our <strong>Company</strong> does not only offers education
                    but it also offers every student an opportunity to be
                    prepared for their future career. We offer a fun and
                    interactive learning environment where you can learn and
                    grow together with your peers and fellow trainee and get the
                    chance to work with our professional trainers.
                </p>
            </div>
        </div>
        <div class="faqs">
            <div class="container">
                <div class="bottom-title">
                    <h1>
                        FREQUENTLY ASKED <br />
                        QUESTIONS
                    </h1>
                </div>
                <div class="training-faqs">
                    <div class="faqs-description">
                        <h3>What's next after training?</h3>
                        <p>
                            You can apply for a job in our company or you can
                            apply for a job in other companies.
                        </p>
                        <h3>What's for schedule?</h3>
                        <p>
                            We have a flexible schedule. You can choose the
                            schedule that suits you.
                        </p>
                        <h3>
                            How sure we can be qualified for a job after
                            training?
                        </h3>
                        <p>
                            We will provide you with a certificate of completion
                            at the end of the training which will serve as your
                            proof that you are qualified for a job.
                        </p>
                    </div>
                    <div class="faqs-description">
                        <h3>What will I receive after training?</h3>
                        <p>
                            You will receive a certificate of completion and a
                            chance to work with us. For oustanding performances
                            we provide additional certificates and rewards.
                        </p>
                        <h3>
                            What are the requirements to apply for training?
                        </h3>
                        <p>
                            You must be at least 18 years old and have a high
                            school diploma. You must also have a strong desire
                            to learn and grow. You must also be willing to work
                            hard and be committed to the training.
                        </p>
                        <h3>Who are the trainers?</h3>
                        <p>
                            Our trainers are professional programmers and
                            engineers who have years of experience in the
                            industry.
                        </p>
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
