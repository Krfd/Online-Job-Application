<?php

include "conn.php";

// insertion of data
if(isset($_POST['apply'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $doc_type = "Document";
    $fileName = $_FILES['resume']['name'];
    $fileTmpName = $_FILES['resume']['tmp_name'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('png','jpg','jpeg','gif', 'webp', 'pdf', 'doc', 'docx', 'txt');

    if(in_array($fileActualExt, $allowed)){

        $fileNameNew = $fileName;
        $fileDestination = 'specialist/resume/'.$fileNameNew;

        $insert = mysqli_query($conn, "INSERT INTO specialist VALUES('0', '$firstname', '$lastname', '$email', '$contact', '$city', '$address', '$message', '$fileNameNew')");

        if($insert == TRUE){
            move_uploaded_file($fileTmpName, $fileDestination);
            ?>
            <script>
                alert("Your Application has been Submitted");
                window.location.href = "specialist.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Error in Submitting Application\n Please try again.");
                window.location.href = "specialist.php";
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("Unsupported File Type\n Please Upload a Valid File");
            window.location.href = "specialist.php";
        </script>
        <?php
    }
}
?>