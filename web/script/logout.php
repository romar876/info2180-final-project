<?php

session_start();
unset($_SEESION["Email"]);
unset($_SEESION["Password"]);
session_destroy();

header("location:login.php");
exit();

?>