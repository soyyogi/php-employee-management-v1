<?php
include_once('./src/library/sessionHelper.php');
include_once('./src/library/employeeManager.php');

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['id']))
    $employeeArray = getEmployee($_GET['id']);
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['id'])) {
        updateEmployee($_POST);
        header("HTTP/1.1 200 OK");
    }
}
