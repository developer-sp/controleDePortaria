<?php
require 'config.php';
session_start();

 unset($_SESSION['Loginadm']);
 unset($_SESSION['Login']);
 header('location:'.BASE_URL."login.php");
?>