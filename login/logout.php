<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["active"]);
header("Location: ../index.php");
?>