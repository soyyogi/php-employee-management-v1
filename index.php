<!-- TODO Application entry point. Login view -->
<?php
include_once('./src/library/sessionHelper.php');

// unset($_SESSION['userId']);
if (isset($_SESSION['userId'])) {
    header("Location: http://localhost/php-employee-management-v1/src/dashboard.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <title>EMS</title>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="https://assets.website-files.com/5d7ac47d34aefe1ecf290ce6/5d7ac68da9740c393a589ee7_logo_org_1.png" width="140" alt="" class="image-15">
            </div>

            <div class="fadeIn second">
                <p id="loginError"> <?php if(isset($_SESSION['loginErrorMessage'])) echo $_SESSION['loginErrorMessage']; ?> </p>
            </div>

            <!-- Login Form -->
            <form action="http://localhost/php-employee-management-v1/src/dashboard.php" method="POST">
                <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email address" required>
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required>
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Form footer -->
            <div id="formFooter" class="fadeIn fourth">
                <p>&copy; Assembler School 2019-2020</p>
            </div>

        </div>
    </div>
</body>

</html>

<?php
unset($_SESSION['loginErrorMessage']);