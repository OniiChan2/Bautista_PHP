<?php

session_start();

session_unset();

session_destroy();

header("Location: http://localhost/Test/Bautista_PHP/Iza_Login_Page.php");

?>
