<?php

include "conn.php";

// login
if(isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['password'];
    $encrypted = md5($password, TRUE);

    $check_data = mysqli_query($conn, "SELECT * FROM admin1 WHERE username = '$username' AND password = '$encrypted'");
    $validate = mysqli_num_rows($check_data);

    if($validate > 1) {
        ?>
        <script>
            alert("Access Denied!");
            window.location.href = "admin.html";
        </script>
        <?php
    } else {
        session_start();
        $_SESSION['admin1'] = $username;
        ?>
        <script>
            alert("Access Granted!");
            window.location.href = "admin_page.php";
        </script>
        <?php
    }
}

// Registration
if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['pword'];
    $confirm_password = $_POST['confirm'];
    $encrypt = md5($password, TRUE);

    if($password == $confirm_password) {
        
            $validate = mysqli_query($conn, "SELECT * FROM admin1 WHERE username = '$username' AND password = '$encrypt'");
            $confirm = mysqli_num_rows($validate);
            if($confirm == 1) {
                ?>
                <script>
                    alert("The username or password is already taken.\nPlease try another username or password")
                    window.location.href = "admin.html";
                </script>
                <?php
                } else {
                    $insert = mysqli_query($conn, "INSERT INTO admin1 VALUES('0', '$username', '$encrypt')");
                        if($insert) {
                            ?>
                            <script>
                                alert("Successfully Registered!");
                                window.location.href = "admin.html";
                            </script>
                        <?php
                    } else {
                        ?>
                        <script>
                            alert("Registration failed! Please try again!");
                            window.location.href = "admin.html";
                        </script>
                        <?php
                    }       
                } 
            } else {
        ?>
        <script>
            alert("Password Mismatch");
            window.location.href = "admin.html";
        </script>
        <?php
    }
}
?>