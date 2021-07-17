<?php
    session_start();
    unset($_SESSION["idm"]);
    unset($_SESSION["name"]);
    echo "<script> window.location='index.php'</script>";
?>