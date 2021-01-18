<?php
session_start();
session_destroy();
echo '<script>alert("LOGGED OUT SUCESSFULLY")</script>';
header("refresh:1; url=index.php");
?>