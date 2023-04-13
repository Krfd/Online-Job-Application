<?php

include "conn.php";

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM bootcamp WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    ?>
    <script>
        alert("Bootcamp enrollment deleted successfully");
        window.location.href = "admin_page.php";
    </script>

<?php
}

?>