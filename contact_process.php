<?php

include "conn.php";


// for contact form
if(isset($_POST['submit'])) {
    $lastname = $_POST['lname'];
    $firstname = $_POST['fname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $insert = mysqli_query($conn, "SELECT * FROM contact WHERE phone = '$phone' AND email = '$email'");
    $validate_data = mysqli_num_rows($insert);

    if($validate_data > 0) {
        ?>
        <script>
            alert("The data you entered is already used.");
            window.location.href = "contacts.php";
        </script>
        <?php
    } else {
        $insert = mysqli_query($conn, "INSERT INTO contact VALUES ('0','$lastname', '$firstname', '$phone', '$email', '$address')");
        if($insert) {
            ?>
            <script>
                alert("Thank you for your response! We'll get back to you soon!");
                window.location.href = "contacts.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Contact failed. Please try again!");
                window.location.href = "contacts.php";
            </script>
                <?php
        }
    }
}

?>