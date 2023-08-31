<?php

session_start();

$_SESSION['login'] = false;
unset($_SESSION['login']);
unset($_SESSION['usuario']);

header('location:../index.php');
