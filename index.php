<!-- TODO Application entry point. Login view -->
<?php
include_once('./src/library/sessionHelper.php');

// unset($_SESSION['userId']);

if (!isset($_SESSION['userId'])) {
    include_once('./src/login.php');
} else {
    include_once('./src/dashboard.php');
}

unset($_SESSION['loginErrorMessage']);
?>