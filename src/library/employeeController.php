<?php
include_once('./library/sessionHelper.php');
include_once('./library/employeeManager.php');

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['id']))
    $employeeArray = getEmployee($_GET['id']);
}