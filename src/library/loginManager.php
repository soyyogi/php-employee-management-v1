<?php
include_once('./sessionHelper.php');

$userJSON = file_get_contents($rootPath . '/resources/users.json');

$userData = json_decode($userJSON, true);

function validateUser($email, $password)
{
    global $userData;
    global $rootPath;
    if (
        $email === $userData['users'][0]['email']
        && password_verify($password, $userData['users'][0]['password'])
    ) {
        $_SESSION['userId'] = $userData['users'][0]['userId'];
    } else {
        $_SESSION['loginErrorMessage'] = 'Incorrect credentials!';
    }
    header("Location: $rootPath");
}

function logoutUser ($action) {
    global $rootPath;
    if($action === "logout") {
        session_destroy();
        header("Location: $rootPath");
    }
}