<?php
include_once('./library/sessionHelper.php');
include_once('./library/employeeManager.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id']))
        $employeeArray = getEmployee($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && !isset($_POST['action'])) {
        updateEmployee($_POST);
        header("HTTP/1.1 200 OK");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && $_POST['action'] == 'delete') {
        deleteEmployee($_POST['id']);
        header("HTTP/1.1 200 OK");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && !isset($_POST['action'])) {
        addEmployee($_POST);
        header("HTTP/1.1 200 OK");
    }
}