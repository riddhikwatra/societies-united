<?php
session_start();
session_unset();
session_destroy();
?>
<script>
    window.location = "../user/login.php";
</script>