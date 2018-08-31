<?php
session_start();
// session_unset();
// session_destroy();
unset($_SESSION['uid']);
header("Location:index.php");
exit();

?>