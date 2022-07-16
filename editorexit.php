<?php
session_start();
unlink($_SESSION['user'].".php");
unlink($_SESSION['user'].".txt");
$_SESSION=array();
session_destroy();
header("location:panellogin.php");
