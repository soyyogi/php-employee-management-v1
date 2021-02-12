<?php


// $employee = file_get_contents('employees.json');

// $getEmployeeContent = json_decode($employe, true);

// echo $getEmployeeContent[0];


require("employeeManager.php");

// if (isset($_GET['id'])){
// $employee = getEmployee($_GET['id']);
// }else if (isset($queryParameters['action'])){
//     if ($queryParameters['action'] == 'getAllEmployees' && $queryParameters['method'] == 'GET') {
//     header('Content-Type: application/json');
//     echo getAllEmployees();
//     }
// }



// getEmployee('1');
// $employee = getEmployee('1');

// print_r($employee['name']);


switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        echo getAllEmployees();
        break;
    
    default:
        # code...
        break;
}


