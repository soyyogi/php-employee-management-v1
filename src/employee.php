<!-- TODO Employee view -->
<?php
require_once('./library/sessionHelper.php');
require_once('./library/employeeController.php');
if (!isset($_SESSION['userId'])) {
    header("Location: $rootPath");
    $_SESSION['loginErrorMessage'] = 'Authentication required!';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>EMS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <script defer src="../assets/js/index.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>

    <!-- header -->
    <?php require_once("../assets/html/header.html"); ?>

    <!-- employee form -->
    <form id="employee-form" class="container">
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputName4">Name</label>
                <input required type="text" class="form-control" id="inputName4" name="name" placeholder="Name" value=<?php if (isset($employeeArray)) echo ($employeeArray['name']); ?>>
            </div>
            <div class="form-group col-sm-6">
                <label for="inputLastName4">Last Name</label>
                <input required type="text" class="form-control" id="inputLastName4" name="lastName" placeholder="Last Name" value=<?php if (isset($employeeArray)) echo ($employeeArray['lastName']); ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputEmail4">Email</label>
                <input required type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" value=<?php if (isset($employeeArray)) echo ($employeeArray['email']); ?>>
            </div>
            <div class="form-group col-sm-6">
                <label for="inputGender">Gender</label>
                <select required id="inputGender" name="gender" class="form-control">
                    <?php if (isset($employeeArray) && $employeeArray['gender'] === 'man') {
                        echo '<option selected value="man">Man</option>
                        <option value="woman">Woman</option>';
                    } elseif (isset($employeeArray) && $employeeArray['gender'] === 'woman') {
                        echo '<option value="man">Man</option>
                        <option selected value="woman">Woman</option>';
                    } else {
                        echo '<option></option>
                        <option value="man">Man</option>
                        <option value="woman">Woman</option>';
                    } ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputCity4">City</label>
                <input required type="text" class="form-control" id="inputCity4" name="city" placeholder="Barcelona" value=<?php if (isset($employeeArray)) echo ($employeeArray['city']); ?>>
            </div>
            <div class="form-group col-sm-6">
                <label for="inputAddress4">Street Address</label>
                <input required type="text" class="form-control" id="inputAddress4" name="streetAddress" placeholder="Carrer de ..." value=<?php if (isset($employeeArray)) echo ($employeeArray['streetAddress']); ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputState4">State</label>
                <input required type="text" class="form-control" id="inputState4" name="state" placeholder="Barcelona" value=<?php if (isset($employeeArray)) echo ($employeeArray['state']); ?>>
            </div>
            <div class="form-group col-sm-6">
                <label for="inputAge4">Age</label>
                <input required type="number" class="form-control" id="inputAge4" min="16" max="67" name="age" placeholder="24" value=<?php if (isset($employeeArray)) echo ($employeeArray['age']); ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputPostal4">Postal Code</label>
                <input required type="number" class="form-control" id="inputPostal4" name="postalCode" placeholder="08001" value=<?php if (isset($employeeArray)) echo ($employeeArray['postalCode']); ?>>
            </div>
            <div class="form-group col-sm-6">
                <label for="inputPhone4">Phone Number</label>
                <input required type="tel" class="form-control" id="inputPhone4" name="phoneNumber" placeholder="692 222 555" value=<?php if (isset($employeeArray)) echo ($employeeArray['phoneNumber']); ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Return</button>
            </div>
        </div>
    </form>
</body>

</html>