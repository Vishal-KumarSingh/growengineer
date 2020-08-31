<?php
session_start(;)

$_SESSION["android_user"]="yes";
header("Location: dashboard.php");
?>