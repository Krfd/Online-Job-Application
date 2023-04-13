<?php

include "conn.php";

// login
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = mysqli_query($conn, "SELECT * FROM employer WHERE email = '$email' AND password = '$password'");
    $check_rows = mysqli_num_rows($check);

    if($check_rows != 1) {
        ?>
        <script>
            alert("Access Denied!");
            window.location.href = "employer_login.html";
        </script>
    <?php
    } else {
        session_start();
        $_SESSION['employer'] = $email;
        ?>
        <script>
            alert("Access Granted!");
            window.location.href = "employer_page.php";
        </script>
        <?php
    }
}

// registration
if(isset($_POST['register'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm'];

    $encrypt = md5($password, TRUE);

    if($password == $confirm_password) {
        $insert = mysqli_query($conn, "SELECT * FROM employer WHERE email = '$email' AND password = '$password'");
        $validate_data = mysqli_num_rows($insert);

        if($validate_data > 1) {
            ?>
            <script>
                alert("The data you entered is already used.");
                window.location.href = "employer_login.html";
            </script>
            <?php
        } else {
            $insert = mysqli_query($conn, "INSERT INTO employer VALUES ('0', '$firstname', '$lastname', '$email', '$address', '$encrypt')");
            if($insert) {
                ?>
                <script>
                    alert("Successfully Registered!");
                    window.location.href = "employer_login.html";
                </script>
                <?php
                } else {
                    ?>
                    <script>
                        alert("Registration failed! Please try again!");
                        window.location.href = "employer_login.html";  
                    </script>
                    <?php
                }
            }
        } else {
            ?>
            <script>
                alert("Password does not match!");
                window.location.href = "employer_login.html";
            </script>
            <?php
        }
}

?>