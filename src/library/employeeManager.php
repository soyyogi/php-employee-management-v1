<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

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
// TODO implement it
$users = json_decode(file_get_contents("../../resources/employees.json"), true);
    foreach ($users as $value){
        if ($value["id"] == $id) {
        // $employee = $value;
        return $value;
    }
}
}
function getAllEmployees(){
    $data = file_get_contents("../../resources/employees.json");
    return $data;
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

