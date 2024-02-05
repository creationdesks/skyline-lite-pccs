<?php
session_start();
// Set session variables
$_SESSION["regd"] = $_POST;
$_SESSION["regd"]["priceType"] = $_GET["input.priceActive.attr('name')"];
?>

