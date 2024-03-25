<?php
session_start();
setcookie('logged_in', '', time() - 3600, '/');
session_unset();
//unset(_$_SESSION[''])
session_destroy();
header("Location: ../index.php");
exit;
?>