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
        <title>Online Job Application | home</title>

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

        <!-- CDNJS -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
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
                    url(office/7.jpg);
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
            .navbar .logout-button {
                text-decoration: none;
                color: #fff;
            }
            .mainpage {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 180px;
                text-align: center;
            }
            h1 {
                font-size: 4rem;
                font-weight: bold;
            }
            .tagline {
                font-size: 18px;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
            .apply {
                font-size: 20px;
            }
            .content {
                background-color: #fff;
                margin-top: 300px;
                padding-bottom: 100px;
            }
            .row {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .icons .col {
                height: auto;
                background-color: hsla(100, 100%, 100%, 1);
                margin: 0px 20px;
                text-align: center;
                padding: 30px 20px;
                box-shadow: 0 0 0 1px rgb(0 0 0 / 10%),
                    0 2px 4px 1px rgb(0 0 0 / 15%);
                margin-top: -100px;
            }
            .col i {
                font-size: 3rem;
            }
            .col .tag {
                margin-top: 20px;
            }
            .positions {
                background-color: #fff;
                padding: 50px;
                text-align: center;
            }
            .positions .slots {
                font-size: 3em;
                font-weight: bold;
                text-transform: uppercase;
            }
            .position-title {
                margin: 50px auto 100px;
            }
            .positions .row {
                margin: 20px auto;
            }
            .fa-solid {
                font-size: 4rem;
                margin: 10px auto;
            }
            .services .col h3 {
                font-size: 2.5rem;
                font-weight: bold;
            }
            .bootcamp {
                padding: 50px;
                background: linear-gradient(
                        -150deg,
                        #e970f6,
                        hsla(249, 88%, 65%, 0.8),
                        75%,
                        #d043de
                    ),
                    url(services/images/bootcamp.jpg);
                background-position: fixed;
                background-size: cover;
                background-repeat: no-repeat;
            }
            .education {
                padding: 50px;
                background: linear-gradient(
                        -150deg,
                        #000,
                        hsla(216, 87%, 64%, 0.8),
                        75%,
                        #000
                    ),
                    url(services/images/education.jpg);
                background-position: fixed;
                background-size: cover;
                background-repeat: no-repeat;
            }
            .training {
                padding: 50px;
                background: linear-gradient(
                        -150deg,
                        hsla(210, 90%, 65%, 0.8) 30%,
                        hsla(16, 80%, 54%, 0.8)
                    ),
                    url(services/images/training.jpg);
                background-position: fixed;
                background-size: cover;
                background-repeat: no-repeat;
            }
            .features {
                background: #fff;
                padding-top: 75px;
                padding-bottom: 50px;
                margin-bottom: 50px;
            }
            .features-title {
                font-size: 8rem;
                font-weight: bold;
            }
            .features-content {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .features-para {
                font-size: 20px;
                width: 100%;
            }
            /* Carousel */
            .slideshow {
                display: block;
                margin: 50px 20px;
                padding: 50px;
                width: 500px;
            }
            .slideshow .carousel {
                display: block;
                width: auto;
            }
            .slideshow .carousel .slides {
                height: auto;
                width: 500px;
                object-fit: cover;
            }
            .testimonial-title h3 {
                text-align: center;
                font-size: 6rem;
                font-weight: bold;
            }
            .testimonials .row {
                margin: 100px auto;
            }
            .testimonials .row .col {
                background: #fff;
                padding: 0px 50px 50px 50px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
                    0 6px 20px 0 rgba(0, 0, 0, 0.19);
                margin: auto 20px;
                height: 300px;
            }
            .persons {
                height: 150px;
                width: 150px;
                object-fit: cover;
                border-radius: 100%;
                padding: 5px;
                background-color: #fff;
                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2),
                    0 3px 10px 0 rgba(0, 0, 0, 0.19);
                display: block;
                margin: -80px auto auto;
            }
            .testimonials .row .col p {
                text-align: center;
                color: grey;
            }
            .socials {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .social {
                height: auto;
                width: 20px;
                margin: auto 5px;
            }
            .facebook:hover {
                content: url(icons/fb.png);
            }
            .twitter:hover {
                content: url(icons/tw.png);
            }
            .instagram:hover {
                content: url(icons/ig.png);
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
            @media only screen and (max-width: 600px) {
                .logo {
                    height: auto;
                    width: 50px;
                    border-radius: 50%;
                }
                .navbar .nav-link {
                    color: hsla(0, 0%, 0%, 0.5);
                    font-size: 14px;
                }
                .mainpage {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 100px;
                    text-align: center;
                }
                h1 {
                    font-size: 2rem;
                    font-weight: bold;
                }
                h2 {
                    font-size: 1.5rem;
                }
                .tagline {
                    font-size: 14px;
                    font-family: Verdana, Geneva, Tahoma, sans-serif;
                }
                .apply {
                    font-size: 14px;
                }
                .content {
                    background-color: #fff;
                    margin-top: 300px;
                    padding-bottom: 100px;
                }
                .row {
                    display: block;
                    justify-content: center;
                    align-items: center;
                    margin-top: -50px;
                }
                .icons .col {
                    height: auto;
                    background-color: hsla(100, 100%, 100%, 1);
                    margin: 50px 0px;
                    text-align: center;
                    padding: 30px 20px;
                    box-shadow: 0 0 0 1px rgb(0 0 0 / 10%),
                        0 2px 4px 1px rgb(0 0 0 / 15%);
                }
                .col i {
                    font-size: 1.5rem;
                }
                .positions {
                    padding: 30px;
                    text-align: center;
                }
                .positions .slots {
                    font-size: 1.5rem;
                }
                .position-title {
                    margin: 30px auto 70px;
                }
                .positions .row {
                    margin: 20px auto;
                }
                .fa-solid {
                    font-size: 1.5rem;
                    margin: 10px auto;
                }
                .services .col h3 {
                    font-size: 1.5rem;
                }
                .services .col .btn {
                    font-size: 14px;
                }
                .bootcamp {
                    padding: 30px;
                }
                .education {
                    padding: 30px;
                }
                .training {
                    padding: 30px;
                }
                .features {
                    padding: 50px;
                }
                .features-title {
                    font-size: 3rem;
                }
                .features-content {
                    display: block;
                }
                .features-para {
                    font-size: 16px;
                    width: 100%;
                }
                .features-para .btn {
                    font-size: 14px;
                }
                .slideshow {
                    display: block;
                    margin: 50px auto;
                    padding: 30px;
                    width: 300px;
                }
                .slideshow .carousel {
                    display: block;
                    width: auto;
                }
                .slideshow .carousel .slides {
                    height: auto;
                    width: 300px;
                    object-fit: cover;
                }
                .testimonial-title h3 {
                    text-align: center;
                    font-size: 3rem;
                }
                .testimonials .row {
                    margin: 100px auto 100px;
                }
                .testimonials .row .col {
                    background: #fff;
                    padding: 0px 50px 50px 50px;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
                        0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    margin: 100px auto;
                    height: auto;
                    padding-top: 20px;
                }
                .testimonials .persons {
                    height: 100px;
                    width: 100px;
                    object-fit: cover;
                    border-radius: 100%;
                    padding: 5px;
                    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2),
                        0 3px 10px 0 rgba(0, 0, 0, 0.19);
                    display: block;
                }
                .socials {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .social {
                    height: auto;
                    width: 17px;
                    margin: auto 5px;
                }
                .footer {
                    display: flex;
                    justify-content: space-between;
                    padding: 2% 0% 5% 0%;
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
                    border-radius: 50%;
                }
                .navbar .nav-link {
                    color: hsla(0, 0%, 0%, 0.5);
                    font-size: 16px;
                }
                .mainpage {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 150px;
                    text-align: center;
                }
                h1 {
                    font-size: 2.5rem;
                    font-weight: bold;
                }
                .tagline {
                    font-size: 16px;
                    font-family: Verdana, Geneva, Tahoma, sans-serif;
                }
                .apply {
                    font-size: 16px;
                }
                .content {
                    margin-top: 300px;
                    padding-bottom: 100px;
                }
                .content .icons .row {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .icons .col {
                    height: auto;
                    background-color: hsla(100, 100%, 100%, 1);
                    margin: 0px 20px;
                    text-align: center;
                    padding: 30px 20px;
                    box-shadow: 0 0 0 1px rgb(0 0 0 / 10%),
                        0 2px 4px 1px rgb(0 0 0 / 15%);
                    margin-top: -100px;
                }
                .col i {
                    font-size: 2rem;
                }
                .col .tag {
                    margin-top: 20px;
                }
                .positions {
                    padding: 50px;
                    text-align: center;
                }
                .positions .slots {
                    font-size: 2rem;
                }
                .position-title {
                    margin: 50px auto 100px;
                }
                .positions .row {
                    display: flex;
                    margin: 20px auto;
                }
                .positions .row .col {
                    margin: 20px auto;
                }
                .fa-solid {
                    font-size: 1.5rem;
                    margin: 10px auto;
                }
                .services .row {
                    display: block;
                }
                .services .col h3 {
                    font-size: 2rem;
                }
                .services .col .btn {
                    font-size: 16px;
                }
                .features {
                    padding-top: 75px;
                    padding-bottom: 50px;
                    margin-bottom: 50px;
                }
                .features-title {
                    font-size: 4rem;
                }
                .features-content {
                    display: block;
                    align-items: center;
                }
                .features-para {
                    font-size: 16px;
                    width: 100%;
                }
                .features .btn {
                    font-size: 16px;
                }
                .slideshow {
                    display: block;
                    margin: 50px auto;
                    padding: 50px;
                    width: 350px;
                }
                .slideshow .carousel {
                    display: block;
                    width: auto;
                }
                .slideshow .carousel .slides {
                    height: auto;
                    width: 350px;
                    object-fit: cover;
                }
                .testimonial-title h3 {
                    text-align: center;
                    font-size: 4rem;
                }
                .testimonials .row {
                    margin: 100px auto;
                    display: block;
                }
                .testimonials .row .col {
                    padding: 0px 50px 50px 50px;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
                        0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    margin: 100px auto 50px;
                    height: auto;
                    padding-top: 30px;
                }
                .persons {
                    height: 100px;
                    width: 100px;
                    border-radius: 100%;
                    padding: 5px;
                    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2),
                        0 3px 10px 0 rgba(0, 0, 0, 0.19);
                    display: block;
                    margin: -80px auto auto;
                }
                .socials {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .social {
                    height: auto;
                    width: 20px;
                    margin: auto 5px;
                }
                .footer {
                    display: flex;
                    justify-content: space-between;
                    padding: 2% 0% 5% 0%;
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
                    font-size: 16px;
                }
                .mainpage {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 150px;
                    text-align: center;
                }
                h1 {
                    font-size: 2.5rem;
                    font-weight: bold;
                }
                .tagline {
                    font-size: 18px;
                    font-family: Verdana, Geneva, Tahoma, sans-serif;
                }
                .apply {
                    font-size: 16px;
                }
                .content {
                    margin-top: 300px;
                    padding-bottom: 100px;
                }
                .content .icons .row {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .icons .col {
                    height: auto;
                    background-color: hsla(100, 100%, 100%, 1);
                    margin: 0px 20px;
                    text-align: center;
                    padding: 30px 20px;
                    box-shadow: 0 0 0 1px rgb(0 0 0 / 10%),
                        0 2px 4px 1px rgb(0 0 0 / 15%);
                    margin-top: -100px;
                }
                .col i {
                    font-size: 2.5rem;
                }
                .col .tag {
                    margin-top: 20px;
                }
                .positions {
                    padding: 50px;
                    text-align: center;
                }
                .positions .slots {
                    font-size: 2.5rem;
                }
                .position-title {
                    margin: 50px auto 100px;
                }
                .positions .row {
                    display: flex;
                    margin: 20px auto;
                }
                .positions .row .col {
                    margin: 20px auto;
                }
                .fa-solid {
                    font-size: 2rem;
                    margin: 10px auto;
                }
                .services .row {
                    display: block;
                }
                .services .col h3 {
                    font-size: 2rem;
                }
                .services .col .btn {
                    font-size: 16px;
                }
                .services .row {
                    display: flex;
                }
                .bootcamp {
                    padding: 30px;
                }
                .education {
                    padding: 30px;
                }
                .training {
                    padding: 30px;
                }
                .features {
                    padding-top: 75px;
                    padding-bottom: 50px;
                    margin-bottom: 50px;
                }
                .features-title {
                    font-size: 6rem;
                }
                .features-content {
                    display: block;
                    justify-content: space-between;
                    align-items: center;
                }
                .features-para {
                    font-size: 18px;
                    width: 100%;
                }
                .features .btn {
                    font-size: 16px;
                }
                .slideshow {
                    display: block;
                    margin: 50px auto;
                    padding: 50px;
                    width: 500px;
                }
                .slideshow .carousel {
                    display: block;
                    width: auto;
                }
                .slideshow .carousel .slides {
                    height: auto;
                    width: 500px;
                    object-fit: cover;
                }
                .testimonial-title h3 {
                    text-align: center;
                    font-size: 5rem;
                }
                .testimonials .row {
                    margin: 0px auto;
                    display: block;
                }
                .testimonials .row .col {
                    padding: 0px 50px 50px 50px;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
                        0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    margin: 100px auto 50px;
                    height: auto;
                    padding-top: 20px;
                }
                .persons {
                    height: 130px;
                    width: 130px;
                    border-radius: 100%;
                    padding: 5px;
                    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2),
                        0 3px 10px 0 rgba(0, 0, 0, 0.19);
                    display: block;
                    margin: -80px auto auto;
                }
                .socials {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .social {
                    height: auto;
                    width: 23px;
                    margin: auto 5px;
                }
                .footer {
                    display: flex;
                    justify-content: space-between;
                    padding: 2% 0% 5% 0%;
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
                    border-radius: 50%;
                }
                .navbar .nav-link {
                    color: hsla(0, 0%, 0%, 0.5);
                    font-size: 18px;
                }
                .mainpage {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 150px;
                    text-align: center;
                }
                h1 {
                    font-size: 3rem;
                }
                .tagline {
                    font-size: 18px;
                    font-family: Verdana, Geneva, Tahoma, sans-serif;
                }
                .apply {
                    font-size: 18px;
                }
                .content {
                    margin-top: 300px;
                    padding-bottom: 100px;
                }
                .content .icons .row {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .icons .col {
                    height: auto;
                    background-color: hsla(100, 100%, 100%, 1);
                    margin: 0px 20px;
                    text-align: center;
                    padding: 30px 20px;
                    box-shadow: 0 0 0 1px rgb(0 0 0 / 10%),
                        0 2px 4px 1px rgb(0 0 0 / 15%);
                    margin-top: -100px;
                }
                .col i {
                    font-size: 3rem;
                }
                .col .tag {
                    margin-top: 20px;
                }
                .positions {
                    padding: 50px;
                    text-align: center;
                }
                .positions .slots {
                    font-size: 3rem;
                }
                .position-title {
                    margin: 50px auto 100px;
                }
                .positions .row {
                    display: flex;
                    margin: 20px auto;
                }
                .positions .row .col {
                    margin: 20px auto;
                }
                .fa-solid {
                    font-size: 2rem;
                    margin: 10px auto;
                }
                .services .row {
                    display: block;
                }
                .services .col h3 {
                    font-size: 2rem;
                }
                .services .col .btn {
                    font-size: 18px;
                }
                .services .row {
                    display: flex;
                }
                .bootcamp {
                    padding: 50px;
                }
                .education {
                    padding: 50px;
                }
                .training {
                    padding: 50px;
                }
                .features {
                    padding-top: 75px;
                    padding-bottom: 50px;
                    margin-bottom: 50px;
                }
                .features-title {
                    font-size: 7rem;
                }
                .features-content {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                .features-para {
                    font-size: 18px;
                    width: 100%;
                }
                .features .btn {
                    font-size: 18px;
                }
                .slideshow {
                    display: block;
                    margin: 50px auto;
                    padding: 50px;
                    width: 450px;
                }
                .slideshow .carousel {
                    display: block;
                    width: auto;
                }
                .slideshow .carousel .slides {
                    height: auto;
                    width: 450px;
                }
                .testimonial-title h3 {
                    text-align: center;
                    font-size: 5rem;
                }
                .testimonials .row {
                    margin: 0px auto;
                    display: flex;
                }
                .testimonials .row .col {
                    padding: 0px 50px 50px 50px;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
                        0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    margin: 100px 20px 75px;
                    height: auto;
                }
                .persons {
                    height: 150px;
                    width: 150px;
                    border-radius: 50%;
                    padding: 5px;
                    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2),
                        0 3px 10px 0 rgba(0, 0, 0, 0.19);
                    display: block;
                    margin: -80px auto auto;
                }
                .socials {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .social {
                    height: auto;
                    width: 23px;
                    margin: auto 5px;
                }
                .footer {
                    display: flex;
                    justify-content: space-between;
                    padding: 2% 0% 5% 0%;
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
                }
                .mainpage {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 150px;
                    text-align: center;
                }
                h1 {
                    font-size: 4rem;
                }
                .tagline {
                    font-size: 18px;
                    font-family: Verdana, Geneva, Tahoma, sans-serif;
                }
                .apply {
                    font-size: 20px;
                }
                .content {
                    margin-top: 300px;
                    padding-bottom: 100px;
                }
                .content .icons .row {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .icons .col {
                    height: auto;
                    background-color: hsla(100, 100%, 100%, 1);
                    margin: 0px 20px;
                    text-align: center;
                    padding: 30px 20px;
                    box-shadow: 0 0 0 1px rgb(0 0 0 / 10%),
                        0 2px 4px 1px rgb(0 0 0 / 15%);
                    margin-top: -100px;
                }
                .col i {
                    font-size: 3rem;
                }
                .col .tag {
                    margin-top: 20px;
                }
                .positions {
                    padding: 50px;
                    text-align: center;
                }
                .positions .slots {
                    font-size: 3rem;
                }
                .position-title {
                    margin: 50px auto 100px;
                }
                .positions .row {
                    margin: 20px auto;
                }
                .fa-solid {
                    font-size: 4rem;
                    margin: 10px auto;
                }
                .services .col h3 {
                    font-size: 2.5rem;
                }
                .bootcamp {
                    padding: 50px;
                }
                .education {
                    padding: 50px;
                }
                .training {
                    padding: 50px;
                }
                .features {
                    padding-top: 75px;
                    margin-bottom: 50px;
                }
                .features-title {
                    font-size: 8rem;
                }
                .features-content {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                .features-para {
                    font-size: 20px;
                    width: 100%;
                }
                .slideshow {
                    display: block;
                    margin: 50px 20px;
                    padding: 50px;
                    width: 500px;
                }
                .slideshow .carousel .slides {
                    height: auto;
                    width: 500px;
                }
                .testimonial-title h3 {
                    text-align: center;
                    font-size: 6rem;
                }
                .testimonials .row .col {
                    padding: 0px 50px 50px 50px;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
                        0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    margin: 100px 15px 100px;
                    height: auto;
                }
                .persons {
                    height: 150px;
                    width: 150px;
                }
                .socials {
                    display: flex;
                    justify-content: center;
                    align-items: center;
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
                    <img
                        src="background/Information Technology.png"
                        class="logo"
                        alt="logo"
                    />
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
                            <a href="home.php" class="nav-link active">Home</a>
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
                            <a href="uiws.php" class="nav-link">UI-WS</a>
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
                <h1>
                    <span class="phinma"
                        >Online Job Application <br />
                        for IT Graduates</span
                    >
                </h1>
                <p class="tagline">Application made simple.</p>
                <button
                    type="button"
                    class="btn btn-dark apply"
                    onclick="window.location.href = 'offerings.php'"
                >
                    Apply Now!
                </button>
            </div>
        </div>
        <div class="container-fluid content">
            <div class="container">
                <div class="container icons">
                    <div class="row">
                        <div class="col">
                            <i class="fa-sharp fa-solid fa-window-restore"></i>
                            <p class="tag">
                                Search for what's best suited in your skills.
                            </p>
                        </div>
                        <div class="col">
                            <i class="fa-sharp fa-solid fa-computer"></i>
                            <p class="tag">
                                Gain experiences on your chosen career.
                            </p>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-database"></i>
                            <p class="tag">
                                Get to know more about technology and innovate.
                            </p>
                        </div>
                        <div class="col">
                            <i class="fa-sharp fa-solid fa-globe"></i>
                            <p class="tag">
                                Be a part of something big in the field of
                                technology.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid positions">
                    <?php 
                include "slots.php";

                $positions = "SELECT * FROM slots";
                $available = mysqli_query($conn, $positions);
                if($available) {
                    while($slots = mysqli_fetch_array($available)) {
                        $network = $slots['network'];
                        $software = $slots['software'];
                        $web = $slots['web'];
                        $admin = $slots['administrator'];
                        $analyst = $slots['analyst'];
                        $support = $slots['support'];
                        $programmer = $slots['programmer'];
                        $security = $slots['security'];
                    }
                }
                ?>
                    <div class="position-title">
                        <h3 class="slots">Boosting job opportunities</h3>
                        <p>We offers different job positions for you</p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <i class="fa-solid fa-diagram-project"></i>
                            <h4>Network Engineer</h4>
                            <p>
                                <?php echo $network; ?>
                                open positions
                            </p>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-brands fa-aws"></i>
                            <h4>Software Engineer</h4>
                            <p>
                                <?php echo $software; ?>
                                open positions
                            </p>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-user-tie"></i>
                            <h4>System Analyst</h4>
                            <p>
                                <?php echo $web; ?>
                                open positions
                            </p>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-database"></i>
                            <h4>Data Administrator</h4>
                            <p>
                                <?php echo $admin; ?>
                                open positions
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <i class="fa-solid fa-code"></i>
                            <h4>Web Developer</h4>
                            <p>
                                <?php echo $analyst ?>
                                open positions
                            </p>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-users"></i>
                            <h4>Tech Support</h4>
                            <p>
                                <?php echo $support; ?>
                                open positions
                            </p>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-laptop"></i>
                            <h4>Programmer</h4>
                            <p>
                                <?php echo $programmer; ?>
                                open positions
                            </p>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-user-shield"></i>
                            <h4>Information Security</h4>
                            <p>
                                <?php echo $security; ?>
                                open positions
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid services">
            <div class="row">
                <div class="col bootcamp">
                    <h3>Bootcamp</h3>
                    <p>
                        We offer a bootcamp for those who are interested in
                        learning more about technology. We have different
                        courses that our student can choose from.
                    </p>
                    <button
                        type="button"
                        class="btn btn-dark"
                        onclick="window.location.href = 'services.php'"
                    >
                        Learn More
                    </button>
                </div>
                <div class="col education">
                    <h3>Education</h3>
                    <p>
                        We offer a wide range of courses that you can choose
                        from in terms of technology. PHINMA also supports a
                        program that will help you in your career.
                    </p>
                    <button
                        type="button"
                        class="btn btn-dark"
                        onclick="window.location.href = 'services.php'"
                    >
                        Learn More
                    </button>
                </div>
                <div class="col training">
                    <h3>Training</h3>
                    <p>
                        We also offers a training program for those who are
                        interested in technology.
                        <strong>Online Job Application</strong>
                        serves a quality training to get you ready in IT
                        industry.
                    </p>
                    <button
                        type="button"
                        class="btn btn-dark"
                        onclick="window.location.href = 'services.php'"
                    >
                        Learn More
                    </button>
                </div>
            </div>
        </div>
        <div class="container-fluid features">
            <div class="container">
                <h3 class="features-title">Features</h3>
                <div class="features-content">
                    <div class="features-para">
                        <p>
                            Looking for a job? We got you covered. We have a
                            wide range of job offerings that you can choose from
                            and apply for, specifically for technology related
                            positions. We also have a list of companies that you
                            can choose from various partners that we have.
                        </p>
                        <p>
                            This website aims to provide a convenient and
                            quality job application for IT graduates. This is a
                            platform for companies to post their job openings
                            and for IT graduates to apply for the job that they
                            are interested in.
                        </p>
                        <p>
                            We also offers different kinds of services that
                            would help you acquire the qualifications of your
                            chosen job. Our services offers a study-now
                            pay-later scheme, where you can pay for the service
                            after you get the job.
                        </p>
                        <button
                            class="btn btn-dark"
                            onclick="window.location.href = 'services.php'"
                        >
                            Enroll Now!
                        </button>
                    </div>
                    <div class="container slideshow">
                        <!-- Carousel -->
                        <div
                            class="carousel slide"
                            id="carousel"
                            data-bs-ride="carousel"
                        >
                            <!-- Indicators / dots -->
                            <div class="carousel-indicators">
                                <button
                                    type="button"
                                    data-bs-target="#carousel"
                                    data-bs-slide-to="0"
                                    class="active"
                                ></button>
                                <button
                                    type="button"
                                    data-bs-target="#carousel"
                                    data-bs-slide-to="1"
                                ></button>
                                <button
                                    type="button"
                                    data-bs-target="#carousel"
                                    data-bs-slide-to="2"
                                ></button>
                                <button
                                    type="button"
                                    data-bs-target="#carousel"
                                    data-bs-slide-to="3"
                                ></button>
                            </div>
                            <!-- the slideshow carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        src="office/1.jpg"
                                        alt=""
                                        class="slides"
                                    />
                                </div>
                                <div class="carousel-item">
                                    <img
                                        src="office/2.jpg"
                                        alt=""
                                        class="slides"
                                    />
                                </div>
                                <div class="carousel-item">
                                    <img
                                        src="office/3.jpg"
                                        alt=""
                                        class="slides"
                                    />
                                </div>
                                <div class="carousel-item">
                                    <img
                                        src="office/4.jpg"
                                        alt=""
                                        class="slides"
                                    />
                                </div>
                            </div>
                            <!-- left and right controls / icons -->
                            <button
                                class="carousel-control-prev"
                                type="button"
                                data-bs-target="#carousel"
                                data-bs-slide="prev"
                            >
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button
                                class="carousel-control-next"
                                type="button"
                                data-bs-target="#carousel"
                                data-bs-slide="next"
                            >
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid testimonials">
            <div class="container">
                <div class="testimonial-title">
                    <h3>Testimonials</h3>
                </div>
                <br />
                <div class="row">
                    <div class="col">
                        <img
                            src="reviews/2.jpg"
                            alt="person 1"
                            class="persons rounded-circle"
                        />
                        <br />
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Magni numquam, minima quasi nemo unde sit?
                        </p>
                        <hr />
                        <div class="socials">
                            <a href="https://www.facebook.com"
                                ><img
                                    src="icons/fb-dark.png"
                                    class="facebook social"
                                    alt=""
                            /></a>
                            <a href="https://www.twitter.com"
                                ><img
                                    src="icons/tw-dark.png"
                                    class="twitter social"
                                    alt=""
                            /></a>
                            <a href="https://www.instagram.com">
                                <img
                                    src="icons/ig-dark.png"
                                    class="instagram social"
                                    alt=""
                            /></a>
                        </div>
                    </div>
                    <div class="col">
                        <img
                            src="reviews/3.jpg"
                            alt="person 2"
                            class="persons rounded-circle"
                        />
                        <br />
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Illum, labore. Nobis ad nostrum tempore minus!
                        </p>
                        <hr />
                        <div class="socials">
                            <a href="https://www.facebook.com"
                                ><img
                                    src="icons/fb-dark.png"
                                    class="facebook social"
                                    alt=""
                            /></a>
                            <a href="https://www.twitter.com"
                                ><img
                                    src="icons/tw-dark.png"
                                    class="twitter social"
                                    alt=""
                            /></a>
                            <a href="https://www.instagram.com">
                                <img
                                    src="icons/ig-dark.png"
                                    class="instagram social"
                                    alt=""
                            /></a>
                        </div>
                    </div>
                    <div class="col">
                        <img
                            src="reviews/4.jpg"
                            alt="person 3"
                            class="persons rounded-circle"
                        />
                        <br />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Ducimus possimus nostrum nobis debitis non
                            nemo.
                        </p>
                        <hr />
                        <div class="socials">
                            <a href="https://www.facebook.com"
                                ><img
                                    src="icons/fb-dark.png"
                                    class="facebook social"
                                    alt=""
                            /></a>
                            <a href="https://www.twitter.com"
                                ><img
                                    src="icons/tw-dark.png"
                                    class="twitter social"
                                    alt=""
                            /></a>
                            <a href="https://www.instagram.com">
                                <img
                                    src="icons/ig-dark.png"
                                    class="instagram social"
                                    alt=""
                            /></a>
                        </div>
                    </div>
                    <div class="col">
                        <img
                            src="reviews/5.jpg"
                            alt="person 4"
                            class="persons rounded-circle img-fluid"
                        />
                        <br />
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Nemo, nostrum ab! Animi ut tempore minus!
                        </p>
                        <hr />
                        <div class="socials">
                            <a href="https://www.facebook.com"
                                ><img
                                    src="icons/fb-dark.png"
                                    class="facebook social"
                                    alt=""
                            /></a>
                            <a href="https://www.twitter.com"
                                ><img
                                    src="icons/tw-dark.png"
                                    class="twitter social"
                                    alt=""
                            /></a>
                            <a href="https://www.instagram.com">
                                <img
                                    src="icons/ig-dark.png"
                                    class="instagram social"
                                    alt=""
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="container">
            <div class="container">
                <div class="container footer">
                    <div class="phinma">
                        <span class="highlight">PHINMA.</span>
                    </div>
                    <div class="links">
                        <a href="https://www.facebook.com"
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
                        <a href="https://discord.com">
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
