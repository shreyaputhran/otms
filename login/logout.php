<?php
session_start();
// Destroying All Sessions
session_destroy();
session_unset();

// Redirecting To Home Page
header("Location:index.php");

?>