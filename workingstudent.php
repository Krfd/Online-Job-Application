<?php

include "conn.php";

if(isset($_POST['submit'])) {
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $position = $_POST['pos'];
    $address = $_POST['address'];

    $doc_type = "Document";
    $fileName = $_FILES['resume']['name'];
    $fileTmpName = $_FILES['resume']['tmp_name'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('png','jpg','jpeg','gif', 'webp', 'pdf', 'doc', 'docx', 'txt');

    $check = mysqli_query($conn, "SELECT * FROM workingstudent WHERE lastname = '$lname' AND firstname = '$fname' AND email = '$email'");
    $checkrows = mysqli_num_rows($check);

    if($checkrows > 2) {
        ?>
        <script>
            alert("You have already applied.\nPlease wait for the result.");
            window.location.href = "uiws.php";
        </script>
        <?php
    } else if (in_array($fileActualExt, $allowed)) {

        $resume = $fileName;
        $fileStorage = 'workingstudent/resume/'.$resume;

        $insert = mysqli_query($conn, "INSERT INTO workingstudent VALUES('0', '$lname', '$fname', '$phone', '$email', '$resume', '$position', '$address')");
        if($insert == TRUE) {
            move_uploaded_file($fileTmpName, $fileStorage);
            ?>
            <script>
                alert("Application submitted successfully.\nWe'll email your for the result.");
                window.location.href = "uiws.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Error in Submitting Application\n Please try again.");
                window.location.href = "uiws.php";
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("Unsupported File Type\n Please Upload a Valid File");
            window.location.href = "uiws.php";
        </script>
        <?php
    }
}
?>