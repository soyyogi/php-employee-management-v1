<!-- TODO Application entry point. Login view -->
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

            <!-- Login Form -->
            <form action="./src/library/loginController.php" method="POST">
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