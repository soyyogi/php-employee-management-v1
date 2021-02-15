<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php
require_once('./library/sessionHelper.php');
require_once('./library/employeeController.php');
if (!isset($_SESSION['userId'])) {
    header("Location: http://localhost/php-employee-management-v1");
    $_SESSION['loginErrorMessage'] = 'Authentication required!';
}
// include_once('./library/loginManager.php');
// require_once('./library/loginController.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>EMS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
</head>

<body>
    <!-- header -->
    <?php require_once("../assets/html/header.html"); ?>
    <div id="jsGrid"></div>





    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <!-- JS-Gris script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
    <script>
        const employeesArray = <?php if ($employeesArray) {
            echo json_encode($employeesArray);
        } else {
            echo json_encode([]);
        } ?>;
    </script>
    <script src="../assets/js/index.js"></script>
</body>
</html>