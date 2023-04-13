<?php

include "register.php";

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM registration WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    ?>
    <script>
        alert("Registration record deleted successfully");
        window.location.href = "admin_page.php";
    </script>

<?php
}

?>