<?php

include "conn.php";

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM admin1 WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    ?>
    <script>
        alert("Admin Deleted");
        window.location.href = "admin_page.php";
    </script>

<?php
}
?>