<?php
session_start();
session_destroy();
header("location:login.php");  // redirects to login.php when session is destroyed
?>