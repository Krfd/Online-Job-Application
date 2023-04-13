<?php 

include "conn.php";

// for bootcamp
if(isset($_POST['bootcamp'])) {
        
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $middlename = $_POST['mname'];
        $age = $_POST['age'];
        $birthdate = $_POST['birthdate'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $gfname = $_POST['emergency-fname'];
        $glname = $_POST['emergency-lname'];
        $relation = $_POST['relationship'];
        $gphone = $_POST['emergency-contact'];
    
        $insert = mysqli_query($conn, "SELECT * FROM bootcamp WHERE first_name = '$firstname' AND last_name = '$lastname' AND email = '$email' AND phone = '$phone'");
        $validate_data = mysqli_num_rows($insert);
    
        if($validate_data > 0) {
            ?>
            <script>
                alert("The data you entered is already used");
                window.location.href = "bootcamp.php";
            </script>
            <?php
        } else {
            $insert = mysqli_query($conn, "INSERT INTO bootcamp VALUES ('0', '$firstname', '$lastname', '$middlename', '$age', '$birthdate', '$phone', '$address', '$email', '$gfname', '$glname', '$relation', '$gphone')");
            if($insert) {
                ?>
                <script>
                    alert("We'll process your enrollment! check your email anytime soon!");
                    window.location.href = "bootcamp.php";
                </script>
                <?php

            } else {
                ?>
                <script>
                    alert("Registration failed. Please try again!");
                    window.location.href = "bootcamp.php";
                </script>
                <?php
            }
        }
}

// for education
if(isset($_POST['education'])) {
        
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $middlename = $_POST['mname'];
        $age = $_POST['age'];
        $birthdate = $_POST['birthdate'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $gfname = $_POST['emergency-fname'];
        $glname = $_POST['emergency-lname'];
        $relation = $_POST['relationship'];
        $gphone = $_POST['emergency-contact'];
    
        $insert = mysqli_query($conn, "SELECT * FROM education WHERE first_name = '$firstname' AND last_name = '$lastname' AND email = '$email' AND phone = '$phone'");
        $validate_data = mysqli_num_rows($insert);
    
        if($validate_data > 0) {
            ?>
            <script>
                alert("The data you entered is already used");
                window.location.href= "education.php";
            </script>
            <?php
        } else {
            $insert = mysqli_query($conn, "INSERT INTO education VALUES ('0', '$firstname', '$lastname', '$middlename', '$age', '$birthdate', '$phone', '$address', '$email', '$gfname', '$glname', '$relation', '$gphone')");
            if($insert) {
                ?>
                <script>
                    alert("We'll process your enrollment! check you email anytime soon!");
                    window.location.href = "education.php";
                </script> 
                <?php
            } else {
                ?>
                <script>
                    alert("Registration failed. Please try again!");
                    window.location.href = "education.php";
                </script>
                <?php
            }
        }
}

// for training
if(isset($_POST['training'])) {
        
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $middlename = $_POST['mname'];
        $age = $_POST['age'];
        $birthdate = $_POST['birthdate'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $gfname = $_POST['emergency-fname'];
        $glname = $_POST['emergency-lname'];
        $relation = $_POST['relationship'];
        $gphone = $_POST['emergency-contact'];
    
        $insert = mysqli_query($conn, "SELECT * FROM training WHERE first_name = '$firstname' AND last_name = '$lastname' AND email = '$email' AND phone = '$phone'");
        $validate_data = mysqli_num_rows($insert);
    
        if($validate_data > 0) {
            ?>
            <script>
                alert("The data you entered is already used");
                window.location.href = "training.php";
            </script>
            <?php
        } else {
            $insert = mysqli_query($conn, "INSERT INTO training VALUES ('0', '$firstname', '$lastname', '$middlename', '$age', '$birthdate', '$phone', '$address', '$email', '$gfname', '$glname', '$relation', '$gphone')");
            if($insert) {
                ?>
                <script>
                    alert("We'll process your enrollment! check you email anytime soon!");
                    window.location.href = "training.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Registration failed. Please try again!");
                    window.location.href = "training.php";
                </script>
                <?php
            }
        }
}

?>