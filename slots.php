<?php

// connection to the server and database
$conn = mysqli_connect("localhost", "root", "", "");

$db = mysqli_select_db($conn, "phinma");

// add position
if(isset($_POST['add'])) {
    $analyst = $_POST['analyst'];
    $infosec = $_POST['infosec'];
    $support = $_POST['support'];
    $programmer = $_POST['programmer'];

    $technician = $_POST['technician'];
    $specialist = $_POST['specialist'];
    $web = $_POST['web'];
    $network = $_POST['network'];

    $administrator = $_POST['administrator'];
    $comsci = $_POST['comsci'];
    $director = $_POST['director'];
    $system = $_POST['system'];

    $security = $_POST['security'];
    $designer = $_POST['designer'];
    $architect = $_POST['architect'];
    $software = $_POST['software'];

    $insert = mysqli_query($conn, "INSERT INTO slots VALUES('0', '$analyst', '$infosec', '$support', '$programmer', '$technician', '$specialist', '$web', '$network', '$administrator', '$comsci', '$director', '$system', '$security', '$designer', '$architect', '$software')");

    if($insert == TRUE) {
        ?>
        <script>
            alert("Successfully Added!");
            window.location.href = "admin_page.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Failed to Add!\nPlease Try Again.");
            window.location.href = "admin_page.php";
        </script>
        <?php
    }
}

?>