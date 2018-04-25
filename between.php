<?php
session_start();

if($_SESSION['check']==0)
header("Location:printd.php");
else
header("Location:bdetails.php");
?>