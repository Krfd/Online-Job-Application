<?php 

include "conn.php";
session_start();

if(empty($_SESSION)) {
    ?>
<script>
    alert("Session expired\nPlease login again.");
    window.location.href = "../login.html";
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
        <title>Training | Application Form</title>

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
        <link type="icon" rel="icon" href="../background/Information Technology.png" />

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
            background-color: #fff;
        }
        header {
            background: url(images/9.jpg);
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            scroll-behavior: smooth;
            padding: 50px;
        }
        .logout {
            float: right;
        }
        .title {
            color: #fff;
        }
        .title h1 {
            font-size: 4rem;
            font-weight: bold;
        }

        .form {
            display: flex;
            justify-content: space-between;
            margin: 100px auto;
        }
        .enrollment-form {
            width: 60%;
            padding: 50px;
        }
        .form-control {
            outline: none;
            margin: 5px auto;
        }
        .form-control:focus {
            outline: none;
            box-shadow: none;
            border-color: black;
        }
        .side-content {
            background: url(images/9.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            scroll-behavior: smooth;
            width: 40%;
        }
        .side-content .side-content-title {
            padding: 50px;
            color: #fff;
        }
        .side-content-title p {
            width: 60%;
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
            .title h1 {
                font-size: 3rem;
                font-weight: bold;
            }
            .form {
                display: block;
                margin: 30px auto;
            }
            .enrollment-form {
                width: 100%;
                padding: 50px;
            }
            fieldset .row {
                display: flex;
                flex-direction: column;
            }
            .side-content {
                background: url(images/9.jpg);
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                scroll-behavior: smooth;
                width: 100%;
            }
            .side-content .side-content-title {
                padding: 50px;
            }
            .side-content-title p {
                width: 100%;
            }
            .img {
                height: auto;
                width: 17px;
                margin: 0px 3px;
            }
        }
        @media only screen and (min-width: 600px) {
            .title h1 {
                font-size: 3rem;
            }
            .form {
                display: block;
                margin: 30px auto;
            }
            .enrollment-form {
                width: 100%;
                padding: 50px;
            }
            fieldset .row {
                display: block;
            }
            .side-content {
                background: url(images/9.jpg);
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                scroll-behavior: smooth;
                width: 100%;
            }
            .side-content .side-content-title {
                padding: 50px;
            }
            .side-content-title p {
                width: 100%;
            }
            .img {
                height: auto;
                width: 20px;
                margin: 0px 3px;
            }
        }
        @media only screen and (min-width: 768px) {
            .title h1 {
                font-size: 3.5rem;
            }
            .form {
                display: block;
                margin: 30px auto;
            }
            .enrollment-form {
                width: 100%;
                padding: 50px;
            }
            fieldset .row {
                display: flex;
                flex-direction: row;
            }
            .side-content {
                background: url(images/9.jpg);
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                scroll-behavior: smooth;
                width: 100%;
            }
            .side-content .side-content-title {
                padding: 50px;
            }
            .side-content-title p {
                width: 100%;
            }
            .img {
                height: auto;
                width: 23px;
                margin: 0px 3px;
            }
        }
        @media only screen and (min-width: 992px) {
            .title h1 {
                font-size: 4rem;
            }
            .form {
                display: flex;
                justify-content: space-between;
                margin: 50px auto;
            }
            .enrollment-form {
                width: 100%;
                padding: 50px;
            }
            fieldset .row {
                display: flex;
                flex-direction: row;
            }
            .side-content {
                background: url(images/9.jpg);
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                scroll-behavior: smooth;
                width: 100%;
            }
            .side-content .side-content-title {
                padding: 50px;
            }
            .side-content-title p {
                width: 100%;
            }
            .img {
                height: auto;
                width: 23px;
                margin: 0px 3px;
            }
        }
        @media only screen and (min-width: 1200px) {
            .title h1 {
                font-size: 4rem;
            }
            .form {
                display: flex;
                margin: 100px auto;
            }
            .enrollment-form {
                width: 60%;
                padding: 50px;
            }
            fieldset .row {
                display: flex;
                flex-direction: row;
            }
            .side-content {
                background: url(images/9.jpg);
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                scroll-behavior: smooth;
                width: 40%;
            }
            .side-content .side-content-title {
                padding: 50px;
            }
            .side-content-title p {
                width: 60%;
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
        <div class="bootcamp">
            <div class="main-content">
                <header>
                    <div class="logout">
                        <button class="btn btn-dark">
                        <a href="../logout.php" class="logout-button" style="text-decoration: none; color: #fff;">Log out</a>
                    </button>
                    </div>
                    <div class="container title">
                        <h1>
                            Online Job Application<br />
                            | Training
                        </h1>
                        <h6>"Improve your skills"</h6>
                    </div>
                </header>
                <div class="container form">
                    <form
                        action="services.php"
                        method="post"
                        class="enrollment-form"
                    >
                        <fieldset>
                            <div class="row">
                                <div class="col">
                                    <label for="fname">First Name</label>
                                    <input
                                        type="text"
                                        name="fname"
                                        id="fname"
                                        placeholder="First Name"
                                        class="form-control"
                                        maxlength="50"
                                        required
                                    />
                                </div>
                                <div class="col">
                                    <label for="lname">Last Name</label>
                                    <input
                                        type="text"
                                        name="lname"
                                        id="lname"
                                        placeholder="Last Name"
                                        class="form-control"
                                        maxlength="50"
                                        required
                                    />
                                </div>
                                <div class="col">
                                    <label for="mname">Middle Name</label>
                                    <input
                                        type="text"
                                        name="mname"
                                        id="mname"
                                        placeholder="Middle Name"
                                        class="form-control"
                                        maxlength="50"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="age">Age</label>
                                    <input
                                        type="number"
                                        name="age"
                                        id="age"
                                        class="form-control"
                                        placeholder="0"
                                        step="1"
                                        required
                                        min="0"
                                        max="70"
                                    />
                                </div>
                                <div class="col">
                                    <label for="birthdate">Birthdate</label>
                                    <input
                                        type="date"
                                        name="birthdate"
                                        id="birthdate"
                                        class="form-control"
                                        required
                                    />
                                </div>
                                <div class="col">
                                    <label for="phone">Phone</label>
                                    <input
                                        type="tel"
                                        name="phone"
                                        id="phone"
                                        placeholder="Phone Number"
                                        class="form-control"
                                        maxlength="15"
                                    />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="address">Home Address</label>
                                    <input
                                        type="text"
                                        name="address"
                                        id="address"
                                        placeholder="Ex. 1234 Main St #123 Manila, 10001"
                                        class="form-control"
                                        required
                                        maxlength="50"
                                    />
                                </div>
                                <div class="col">
                                    <label for="email">Email</label>
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        placeholder="Ex. juandelacruz@gmail.com"
                                        class="form-control"
                                        required
                                        maxlength="50"
                                    />
                                </div>
                            </div>
                            <br />
                            <label for="emergency">Emergency Contact</label>
                            <div class="row">
                                <div class="col">
                                    <label for="emergency-fname"
                                        >First Name</label
                                    >
                                    <input
                                        type="text"
                                        name="emergency-fname"
                                        id="emergency-fname"
                                        class="form-control"
                                        placeholder="Ex. Jane"
                                        required
                                        maxlength="50"
                                    />
                                </div>
                                <div class="col">
                                    <label for="emergency-lname"
                                        >Last Name</label
                                    >
                                    <input
                                        type="text"
                                        name="emergency-lname"
                                        id="emergency-lname"
                                        class="form-control"
                                        placeholder="Ex. Doe"
                                        required
                                        maxlength="50"
                                    />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="relationship"
                                        >Relationship</label
                                    >
                                    <input
                                        type="text"
                                        name="relationship"
                                        id="relationship"
                                        placeholder="Ex. Mother"
                                        class="form-control"
                                        required
                                        maxlength="50"
                                    />
                                </div>
                                <div class="col">
                                    <label for="emergency-contact">Phone</label>
                                    <input
                                        type="tel"
                                        name="emergency-contact"
                                        id="emergency-contact"
                                        placeholder="Phone Number"
                                        class="form-control"
                                        maxlength="15"
                                    />
                                </div>
                            </div>
                            <br />
                            <div class="button">
                                <button
                                    class="btn btn-dark w-100"
                                    name="training"
                                    type="submit"
                                >
                                    Submit
                                </button>
                            </div>
                        </fieldset>
                    </form>
                    <div class="side-content">
                        <div class="side-content-title">
                            <h3>Acquire the skills you need</h3>
                            <p>
                                We offer a wide range of courses to help you
                                achieve your goals. We have courses for
                                professionals and students. We also offer
                                customized courses for companies.
                            </p>
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
                            href="https://www.facebook.com"
                            ><img
                                src="../icons/fb.png"
                                alt="Facebook"
                                class="fb img"
                        /></a>
                        <a href="https://www.instagram.com"
                            ><img
                                src="../icons/ig.png"
                                alt="Instagram"
                                class="ig img"
                        /></a>
                        <a
                            href="https://discord.com"
                        >
                            <img
                                src="../icons/discord.png"
                                alt="Discord"
                                class="disc img"
                        /></a>
                        <a href="mailto:karlfredriechgetuya@gmail.com"
                            ><img
                                src="../icons/gmail.png"
                                alt="Gmail"
                                class="gmail img"
                        /></a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
