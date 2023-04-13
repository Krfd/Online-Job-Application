<?php

include "conn.php";

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM contact WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    ?>
    <script>
        alert("Contact Deleted Successfully");
        window.location.href = "admin_page.php";
    </script>

<?php
}

?>