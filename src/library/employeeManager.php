<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */
include_once('./sessionHelper.php');

$employeesJSON = file_get_contents($rootPath . '/resources/employees.json');

$employeesArray = json_decode($employeesJSON, true);

function addEmployee(array $newEmployee)
{
// TODO implement it
}


function deleteEmployee(string $id)
{
// TODO implement it
}


function updateEmployee(array $updateEmployee)
{
// TODO implement it
}


function getEmployee(string $id)
{
    global $employeesArray;
    foreach($employeesArray as $employee => $employeeArray) {
        $employeeArray['id'] == $id ? $result = $employeeArray : null;
    }
    return $result;
}


function removeAvatar($id)
{
// TODO implement it
}


// function getQueryStringParameters(): array
// {
// // TODO implement it
// }

// function getNextIdentifier(array $employeesCollection): int
// {
// // TODO implement it
// }
