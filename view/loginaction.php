<?php
include './resource/auth.php';
$auth = new auth();
$user = $auth->login($_POST['email'],$_POST['password']);
if($user){
    echo true;
}