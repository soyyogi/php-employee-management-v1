<?php

/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */
include_once('./library/sessionHelper.php');

$employeesJSON = file_get_contents($rootPath . '/resources/employees.json');

$employeesArray = json_decode($employeesJSON, true);

function addEmployee(array $newEmployee)
{
    // TODO implement it
}


function deleteEmployee(string $id)
{
    // TODO implement it
    global $employeesArray;
    global $deletedEmployee;
    foreach ($employeesArray as $employee => $array) {
        if ($array["id"] == $id) {
            $deletedEmployee = [$employee => $employeesArray[$employee]];
        }
    }
    $newEmployeesArray = array_diff_assoc($employeesArray,$deletedEmployee);
    $newEmployeesArray = array_values($newEmployeesArray);

    $arrayToJSON = json_encode($newEmployeesArray);
    file_put_contents( '../resources/employees.json', $arrayToJSON);

}


function updateEmployee(array $updateEmployee)
{
    global $employeesArray;
    foreach ($employeesArray as $employee => $array) {
        if ($array["id"] == $updateEmployee["id"]) {
            $employeesArray[$employee] = $updateEmployee;
        }
    }
    $arrayToJSON = json_encode($employeesArray);
    file_put_contents( '../resources/employees.json', $arrayToJSON);

}


function getEmployee(string $id)
{
    global $employeesArray;
    foreach ($employeesArray as $employee => $employeeArray) {
        $employeeArray['id'] == $id ? $result = $employeeArray : null;
    }
    return $result;
}


function removeAvatar($id)
{
    // TODO implement it
}


function getQueryStringParameters(): array
{
// TODO implement it
$_REQUEST['method'] = $_SERVER['REQUEST_METHOD'];
return $_REQUEST;

}

function getNextIdentifier(array $employeesCollection): int
{
// TODO implement it
return count($employeesCollection) + 1;
}
