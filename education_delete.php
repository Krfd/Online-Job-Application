<?php

include "conn.php";

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM education WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    ?>
    <script>
        alert("Education enrollment deleted successfully");
        window.location.href = "admin_page.php";
    </script>

<?php
}

?>