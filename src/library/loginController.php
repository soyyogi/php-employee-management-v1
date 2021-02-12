<?php
include_once('./library/sessionHelper.php');
include_once('./library/loginManager.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    validateUser($_POST['email'], $_POST['password']);
}

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action'])){
    logoutUser($_GET['action']);
}

?>