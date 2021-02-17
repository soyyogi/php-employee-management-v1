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
// print_r($employeesArray);

function addEmployee(array $newEmployee)
{
    // TODO implement it
    global $employeesArray;
    foreach($employeesArray as $employee => $array){
        // if($array['id'] == $newEmployee){
        if(isset($_POST['name'])) {

            $id = (count($employeesArray));
            print_r($id);
            $id = $id - 1;

            $newEmployeeId = ($employeesArray[$id]['id']) + 1;

            $newEmployee = array(
                'id' => $newEmployeeId,
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'age' => $_POST['age'],
                'streetAddress' => $_POST['streetAddress'],
                'city' => $_POST['city'],
                'state' => $_POST['state'],
                'postalCode' => $_POST['postalCode'],
                'phoneNumber' => $_POST['phoneNumber']
            );

            $employeesArray[] = $newEmployee;
            $finalData = json_encode($employeesArray);
            file_put_contents('../../resources/employees.json', $finalData);
            print_r($finalData);
        }

        }




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
