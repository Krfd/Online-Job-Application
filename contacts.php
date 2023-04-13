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
        <title>Online Job Application | Contact</title>

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
                    url(office/8.jpg);
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
            .mainpage {
                margin-top: 50px;
            }
            .title {
                position: relative;
            }
            h1 {
                font-size: 8rem;
                font-weight: bold;
            }
            .contacts {
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                margin-top: 50px;
            }
            form {
                padding: 20px;
                width: 100%;
            }
            .socials {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            label {
                font-weight: bold;
            }
            .input {
                background: hsla(0, 0%, 100%, 0.7);
                outline: 1px solid hidden;
                border: none;
                margin-bottom: 10px;
                transition: all ease 0.3s;
                width: 100%;
                padding: 10px;
            }
            .input:focus {
                outline: 1px solid cornflowerblue;
            }
            .btn-dark:focus {
                box-shadow: none;
            }
            .fa-solid {
                margin: 10px;
                font-size: 1.5rem;
            }
            .details {
                text-decoration: none;
                color: black;
            }
            .map .location {
                display: block;
                width: 80%;
                margin: 50px auto 100px;
                box-shadow: 2px 2px 8px 0px hsla(0, 0%, 0%, 0.2),
                    2px 2px 8px 0px hsla(0, 0%, 0%, 0.2);
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
                .mainpage {
                    margin-top: 50px;
                }
                h1 {
                    font-size: 2.5rem;
                }
                .contacts {
                    display: block;
                    align-items: center;
                    margin-top: 50px;
                }
                form {
                    padding: 20px;
                    width: 100%;
                }
                form .row {
                    display: block;
                }
                .socials {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                .connect {
                    margin: 50px auto 20px;
                }
                .fa-solid {
                    margin: 10px;
                    font-size: 1rem;
                }
                .map .location {
                    width: 100%;
                    margin: 50px auto 50px;
                }
                .img {
                    height: auto;
                    width: 17px;
                }
            }
            @media only screen and (min-width: 600px) {
                .logo {
                    width: 70px;
                }
                h1 {
                    font-size: 3.5rem;
                }
                .img {
                    height: auto;
                    width: 20px;
                }
            }
            @media only screen and (min-width: 768px) {
                .logo {
                    width: 70px;
                }
                h1 {
                    font-size: 5rem;
                }
                .contacts {
                    display: block;
                    align-items: flex-start;
                    margin-top: 50px;
                }
                form .row {
                    display: flex;
                }
                .connect {
                    width: 100%;
                }
                .img {
                    height: auto;
                    width: 23px;
                }
            }
            @media only screen and (min-width: 992px) {
                .navbar .nav-link {
                    font-size: 18px;
                }
                h1 {
                    font-size: 6.5rem;
                }
                .contacts {
                    display: flex;
                    align-items: flex-start;
                    margin-top: 50px;
                }
                .fa-solid {
                    margin: 10px;
                    font-size: 1.5rem;
                }
                .map .location {
                    width: 100%;
                    margin: 50px 0 50px;
                }
            }
            @media only screen and (min-width: 1200px) {
                .logo {
                    width: 80px;
                }
                .navbar .nav-link {
                    font-size: 20px;
                }
                h1 {
                    font-size: 8rem;
                }
                .img {
                    height: auto;
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
                            <a href="offerings.php" class="nav-link"
                                >Offerings</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="uiws.php" class="nav-link">WS</a>
                        </li>
                        <li class="nav-item">
                            <a href="contacts.php" class="nav-link active"
                                >Contact</a
                            >
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
        <div class="container-fluid mainpage">
            <div class="container title">
                <h1>Contact</h1>
                <div class="container">
                    <p class="tagline">
                        <strong
                            >Keep in touch with our social media
                            accounts.</strong
                        >
                    </p>
                </div>
            </div>
            <div class="container contacts">
                <form action="contact_process.php" method="post">
                    <fieldset>
                        <div class="row">
                            <div class="col">
                                <label for="lname">Last Name</label><br />
                                <input
                                    type="text"
                                    name="lname"
                                    id="lname"
                                    class="input"
                                    required
                                    maxlength="50"
                                />
                            </div>
                            <div class="col">
                                <label for="fname">First Name</label><br />
                                <input
                                    type="text"
                                    name="fname"
                                    id="fname"
                                    class="input"
                                    required
                                    maxlength="50"
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="phone">Phone</label><br />
                                <input
                                    type="tel"
                                    name="phone"
                                    id="phone"
                                    class="input"
                                    required
                                    maxlength="13"
                                />
                            </div>
                            <div class="col">
                                <label for="email">Email</label><br />
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="input"
                                    required
                                    maxlength="50"
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="address">Address</label>
                                <br />
                                <input
                                    type="address"
                                    name="address"
                                    id="address"
                                    class="input"
                                    required
                                    maxlength="100"
                                />
                            </div>
                        </div>
                        <div class="row col">
                            <div class="col-12">
                                <button
                                    class="btn btn-dark w-100 mt-3"
                                    type="submit"
                                    name="submit"
                                >
                                    Submit
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <div class="connect">
                    <h4>Details:</h4>
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i
                        ><a
                            href="https://www.facebook.com"
                            class="details"
                            >Iloilo City, Philippines</a
                        >
                    </div>
                    <div class="number">
                        <i class="fa-solid fa-phone"></i>0985 224 7470
                    </div>
                    <div class="email">
                        <i class="fa-solid fa-envelope"></i
                        ><a href="mailto:karlfredriechgetuya@gmail.com" class="details"
                            >karlfredriechgetuya@gmail.com</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="container-fluid map">
            <div class="container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1797.578040113422!2d122.56860000421426!3d10.692367611844428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee5255345f11b%3A0xb32057bb6b1d39c8!2sPHINMA%20UNIVERSITY%20OF%20ILOILO!5e0!3m2!1sen!2sph!4v1668318762427!5m2!1sen!2sph"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    class="location"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
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
