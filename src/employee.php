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
        const employeeArray = <?php if ($employeeArray) {
                                    echo json_encode($employeeArray);
                                } else {
                                    echo json_encode([]);
                                } ?>;
    </script>
    <script defer src="../assets/js/index.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>

    <?php require_once("../assets/html/header.html"); ?>
    <form class="container">
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputName4">Name</label>
                <input required type="text" class="form-control" id="inputName4" name="name" placeholder="Name">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputLastName4">Last Name</label>
                <input required type="text" class="form-control" id="inputLastName4" name="lastName" placeholder="Last Name">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputEmail4">Email</label>
                <input required type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputGender">Gender</label>
                <select required id="inputGender" name="gender" class="form-control">
                    <option ></option>
                    <option value="man">Male</option>
                    <option value="woman">Female</option>
                    <option value="other">Other</option>
                    <option value="na">I don't want to specify</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputCity4">City</label>
                <input required type="text" class="form-control" id="inputCity4" name="city" placeholder="Barcelona">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputAddress4">Street Address</label>
                <input required type="text" class="form-control" id="inputAddress4" name="streetAddress" placeholder="Carrer de ...">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputState4">State</label>
                <input required type="text" class="form-control" id="inputState4" name="state" placeholder="Barcelona">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputAge4">Age</label>
                <input required type="number" class="form-control" id="inputAge4" min="16" max="67" name="age" placeholder="24">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputPostal4">Postal Code</label>
                <input required type="number" class="form-control" id="inputPostal4" min="10000" max="99999" name="postalCode" placeholder="08001">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputPhone4">Phone Number</label>
                <input required type="tel" class="form-control" id="inputPhone4" name="phoneNumber" placeholder="692 222 555">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary">Return</button>
            </div>
        </div>
    </form>
</body>

</html>