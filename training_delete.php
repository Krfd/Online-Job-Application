<?php

include "conn.php";

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM training WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    ?>
    <script>
        alert("Training application deleted successfully");
        window.location.href = "admin_page.php";
    </script>

<?php
}

?>