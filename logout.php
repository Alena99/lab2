<?php session_start();
session_destroy();
header("Location: http://test:81/login.php");