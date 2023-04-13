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
        <title>Online Job Application | WS</title>

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
                    url(office/3.jpg);
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
            .mainpage .title h1 {
                font-size: 5rem;
                font-weight: bold;
            }
            .subtitle {
                font-size: 3rem;
                font-weight: bold;
            }
            .desc .about-title {
                font-weight: bold;
                font-size: 4rem;
            }
            .desc .para {
                font-size: 20px;
                text-align: justify;
            }
            .positions {
                background-color: #fff;
                padding: 4rem;
                margin: 50px auto;
            }
            .positions .container {
                text-align: center;
            }
            .positions .container > h4 {
                font-weight: bold;
                text-transform: uppercase;
                font-size: 16px;
            }
            .positions .icons {
                margin: 100px auto;
            }
            .positions .row {
                margin: 50px auto;
            }
            .positions .row .col i.fa-solid,
            .fa-sharp {
                font-size: 4rem;
                text-align: center;
                margin-bottom: 10px;
            }
            .positions .row .col p {
                font-size: 18px;
            }
            .opportunities .row .pos {
                display: flex;
                align-items: center;
                margin: 20px;
            }
            .opportunities .images {
                height: auto;
                width: 300px;
            }
            .opportunities .row .pos p {
                font-size: 16px;
                text-align: start;
                margin-left: 30px;
            }
            .application {
                margin: 100px auto;
                padding: 50px auto;
            }
            .application form {
                display: block;
                margin: auto;
                width: 50%;
                padding: 50px;
                background: linear-gradient(hsla(205, 24%, 82%, 0.3), #e2ebf0);
                border-radius: 10px;
                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
            }
            .application form h2 {
                font-size: 3rem;
                font-weight: bold;
                margin-bottom: 30px;
            }
            .application .container fieldset .row:first-child {
                margin-top: 50px;
            }
            .application form .row {
                margin: 30px auto;
            }
            .form-control:focus {
                box-shadow: none;
            }
            .buttons {
                display: flex;
                justify-content: space-between;
            }
            .butons .btn {
                width: 50%;
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
                }
                .navbar .nav-link {
                    font-size: 16px;
                }
                .mainpage {
                    margin-top: 50px;
                }
                .mainpage .title h1 {
                    font-size: 3rem;
                }
                .container .subtitle {
                    font-size: 1.5rem;
                }
                .desc .container .about-title {
                    font-size: 2.5rem;
                }
                .desc .container p {
                    font-size: 16px;
                }
                .positions .icons .row .col {
                    margin: 20px auto;
                }
                .positions .icons .row .col i.fa-solid {
                    font-size: 4rem;
                }
                .positions .icons .row .col p {
                    font-size: 16px;
                }
                .opportunities .row .pos {
                    display: block;
                    font-size: 16px;
                }
                .opportunities .row .images {
                    margin-bottom: 20px;
                }
                .application .container form {
                    width: 100%;
                }
                .application .container form h2 {
                    font-size: 3rem;
                }
                .application .container form .row .col {
                    display: flex;
                    flex-direction: column;
                }
                .buttons .btn {
                    width: 25%;
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
                .mainpage .title h1 {
                    font-size: 3.5rem;
                }
                .desc .container .about-title {
                    font-size: 3rem;
                }
                 .application .container form {
                    width: 100%;
                }
                .img {
                    width: 20px;
                }
            }
            @media only screen and (min-width: 768px) {
                .logo {
                    width: 70px;
                }
                .mainpage .title h1 {
                    font-size: 4rem;
                }
                .container .subtitle {
                    font-size: 2rem;
                }
                .desc .container .about-title {
                    font-size: 4rem;
                }
                .desc .container p {
                    font-size: 18px;
                }
                .positions .icons .row .col p {
                    font-size: 18px;
                }
                .opportunities .row .pos {
                    display: flex;
                    font-size: 18px;
                }
                 .application .container form {
                    width: 100%;
                }
                .buttons .btn {
                    width: 25%;
                }
                .img {
                    width: 23px;
                }
            }
            @media only screen and (min-width: 992px) {
                .logo {
                    width: 70px;
                }
                .navbar .nav-link {
                    font-size: 18px;
                }
                .mainpage .title h1 {
                    font-size: 4rem;
                }
                .positions .icons .row .col {
                    margin: 20px auto;
                }
                .positions .icons .row .col i.fa-solid {
                    font-size: 4rem;
                }
                .opportunities .row .pos {
                    display: block;
                }
                .application .container form {
                    width: 70%;
                }
                .application .container form h2 {
                    font-size: 3rem;
                }
                .buttons .btn {
                    width: 25%;
                }
            }
            @media only screen and (min-width: 1200px) {
                .logo {
                    width: 80px;
                }
                .navbar .nav-link {
                    font-size: 20px;
                }
                .mainpage .title h1 {
                    font-size: 5rem;
                }
                .container .subtitle {
                    font-size: 3rem;
                }
                .desc .container .about-title {
                    font-size: 4rem;
                }
                .desc .container p {
                    font-size: 20px;
                }
                .positions .icons .row .col {
                    margin: 20px auto;
                }
                .positions .icons .row .col i.fa-solid {
                    font-size: 4rem;
                }
                .positions .icons .row .col p {
                    font-size: 20px;
                }
                .opportunities .row .pos {
                    display: flex;
                    font-size: 20px;
                }
                .application .container form {
                    width: 50%;
                }
                .buttons .btn {
                    width: 25%;
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
                                    <a href="services.php" class="dropdown-item"
                                        >Bootcamp</a
                                    >
                                </li>
                                <li>
                                    <a href="services.php" class="dropdown-item"
                                        >Education</a
                                    >
                                </li>
                                <li>
                                    <a href="services.php" class="dropdown-item"
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
                            <a href="uiws.php" class="nav-link active">WS</a>
                        </li>
                        <li class="nav-item">
                            <a href="contacts.php" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="logout">
                    <button class="btn btn-dark">
                        <a
                            href="logout.php"
                            class="logout-button"
                            style="text-decoration: none; color: #fff"
                            >Log out</a
                        >
                    </button>
                </div>
            </div>
        </nav>
        <div class="container-fluid mainpage">
            <div class="container title">
                <h1>Online Job Application</h1>
                <div class="container">
                    <h2 class="subtitle">Working Students</h2>
                </div>
            </div>
            <br />
            <br />
            <div class="container desc">
                <div class="container">
                    <h3 class="about-title">About WS</h3>
                    <br />
                    <p class="para">
                        WS aims to support through integrating students in
                        various partnered companies of
                        the company here in Iloilo.
                    </p>
                    <p class="para">
                        This website also provides different job opportunities
                        for undergrad students of certain school, this includes both
                        part-time and full-time job depending on the applicant
                        and the company's agreement. This will help a lot of
                        students in terms of financial support, credentials,
                        experiences, social engineering, and different fields in
                        IT industry.
                    </p>
                    <p class="para">
                        We, the
                        <span class="highlight">company</span>
                        would like to lead our dear students into a brighter
                        future by honing their skills and developing IT
                        professionals to become a part of something BIG in
                        <span class="highlight">Industry</span>.
                    </p>
                    <p class="para">Fill up the form below to get you ready.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid positions">
            <div class="container">
                <h3 class="subtitle">OPPORTUNITIES</h3>
                <h4>Earn as you learn</h4>
            </div>
            <div class="container icons">
                <div class="row">
                    <div class="col">
                        <i class="fa-solid fa-handshake"></i>
                        <p>Gain Experience</p>
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-gears"></i>
                        <p>Enhance your Skills</p>
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-link"></i>
                        <p>Establish Connections</p>
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-cloud"></i>
                        <p>Gain Ideas</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <i class="fa-solid fa-user-graduate"></i>
                        <p>Develop your Career</p>
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-laptop"></i>
                        <p>Work from Home</p>
                    </div>
                    <div class="col">
                        <i class="fa-sharp fa-solid fa-laptop-file"></i>
                        <p>Be Job Ready</p>
                    </div>
                    <div class="col">
                        <i class="fa-sharp fa-solid fa-building-user"></i>
                        <p>Work in a Company</p>
                    </div>
                </div>
            </div>
            <div class="container opportunities">
                <div class="row">
                    <div class="col pos">
                        <img src="opportunities/1.jpg" alt="" class="images" />
                        <p>
                            Let's get you ready for a brighter future. Be with
                            us and be a part of something
                            <span class="highlight">BIG</span>. Collaborate with
                            different top companies here in Iloilo City.
                        </p>
                    </div>
                    <div class="col pos">
                        <img src="opportunities/2.jpg" alt="" class="images" />
                        <p>
                            Convenient and flexible working hours according to
                            your schedule.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pos">
                        <img src="opportunities/3.jpg" alt="" class="images" />
                        <p>
                            Gain experience as keep on learning from both
                            academics and industry.
                        </p>
                    </div>
                    <div class="col pos">
                        <img src="opportunities/4.jpg" alt="" class="images" />
                        <p>Be job ready and be a part of the IT industry.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container application">
            <div class="container">
                <form
                    action="workingstudent.php"
                    method="post"
                    enctype="multipart/form-data"
                >
                    <fieldset>
                        <legend><h2>Let's get you ready.</h2></legend>
                        <div class="row">
                            <div class="col">
                                <input
                                    type="text"
                                    name="lname"
                                    class="form-control"
                                    placeholder="Last Name"
                                    maxlength="50"
                                    required
                                />
                            </div>
                            <div class="col">
                                <input
                                    type="text"
                                    name="fname"
                                    class="form-control"
                                    placeholder="First Name"
                                    maxlength="50"
                                    required
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input
                                    type="tel"
                                    name="phone"
                                    class="form-control"
                                    placeholder="Phone Number"
                                    maxlength="14"
                                    required
                                />
                            </div>
                            <div class="col">
                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    placeholder="Email"
                                    maxlength="50"
                                    required
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input
                                    type="file"
                                    name="resume"
                                    class="form-control"
                                    placeholder="Resume"
                                    required
                                />
                            </div>
                            <div class="col">
                                <input
                                    type="text"
                                    name="pos"
                                    class="form-control"
                                    placeholder="Position"
                                    required
                                    maxlength="50"
                                    list="position"
                                />
                                <datalist id="position">
                                    <option value="Research Assistant">Research Assistant</option>
                                    <option value="Freelance Developer">Freelance Developer</option>
                                    <option value="JavaScript Developer">JavaScript Developer</option>
                                    <option value="Video Editor">Video Editor</option>
                                    <option value="Graphic Designer">Graphic Designer</option>
                                    <option value="Data Entry">Data Entry</option>
                                    <option value="Online Researcher">Online Researcher</option>
                                    <option value="Virtual Assistant">Virtual Assistant</option>
                                    <option value="Photo Editor">Photo Editor</option>
                                    <option value="Student Assistant">Student Assistant</option>
                                </datalist>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input
                                    type="text"
                                    name="address"
                                    class="form-control"
                                    placeholder="Complete Address"
                                    maxlength="100"
                                    required
                                />
                            </div>
                        </div>
                        <div class="container buttons mt-2">
                            <button type="reset" class="btn btn-dark w-25">
                                Reset
                            </button>
                            <button
                                type="submit"
                                name="submit"
                                class="btn btn-primary w-25"
                            >
                                Submit
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <br />
        <br />
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
