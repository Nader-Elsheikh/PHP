<?php 
session_start();
$_SESSION["userid"] = null; // or unset($_SESSION["userid"]);
session_destroy();
header("Location: index.php");
exit; // Always include exit after header to prevent further execution
?>







