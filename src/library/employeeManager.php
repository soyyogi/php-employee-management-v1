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
}


function updateEmployee(array $updateEmployee)
{
    print_r($updateEmployee);
    global $employeesArray;
    global $rootPath;
    foreach ($employeesArray as $employee => $array) {
        if ($array["id"] == $updateEmployee["id"]) {
            $employeesArray[$employee] = $updateEmployee;
        }
    }
    $arrayToJSON = json_encode($employeesArray);
    file_put_contents( '../resources/employees.json', $arrayToJSON);

    // try {
    //     file_put_contents( '../resources/employees.json', $arrayToJSON);
    // } catch (Exception $e) {
    //     return 'Exception ' . $e->getMessage();
    // }
//     $jsonFile = fopen($rootPath . "/resources/employees.json", "w");
//     fwrite($jsonFile, $arrayToJSON);
//     fclose($jsonFile);
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


// function getQueryStringParameters(): array
// {
// // TODO implement it
// }

// function getNextIdentifier(array $employeesCollection): int
// {
// // TODO implement it
// }
