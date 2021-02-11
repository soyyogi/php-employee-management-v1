<!-- TODO Employee view -->
<?php
require_once('./library/sessionHelper.php');
require_once('./library/employeeController.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>EMS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SCRIPT -->
    <script>
        const employeeArray = <?php if($employeeArray){echo json_encode($employeeArray);} else {echo json_encode([]);} ?>;
    </script>
    <script defer src="../assets/js/index.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>

<?php  
require_once("../assets/html/header.html");
?>
</body>

</html>