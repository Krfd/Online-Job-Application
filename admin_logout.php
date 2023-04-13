<?php

session_start();
session_destroy();

?>
<script>
    alert("Logging out");
    window.location.href = "admin.html";
</script>
<?php

?>