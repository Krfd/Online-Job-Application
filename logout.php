<?php

include "register.php";

session_start();
session_destroy();

?>
<script>
    alert("Logging out");
    window.location.href = "login.html";
</script>
<?php

?>