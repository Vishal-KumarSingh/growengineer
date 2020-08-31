<?php
session_start();
$_SESSION["message"]="<h1>Error 404, Page not found</h1>The page you are trying to visit doesn't exist";
header("Location: index.php");
?>