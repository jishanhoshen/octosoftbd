<?php
include './resource/auth.php';
$auth = new auth();
$auth->logout();
header('location:/admin');
?>