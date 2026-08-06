<html>
<head>
    <title>Patient Registration Confirmation</title>
    <link rel="stylesheet" href="confirmation.css">
</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $patientName = htmlspecialchars($_POST["patientName"]);
    $age = htmlspecialchars($_POST["age"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $bloodGroup = htmlspecialchars($_POST["bloodGroup"]);
    $address = htmlspecialchars($_POST["address"]);

?>

<div class="container">

    <h2>Patient Registration Confirmation</h2>

    <p class="success">
        Patient Registered Successfully!
    </p>

    <table>

        <tr>
            <th>Field</th>
            <th>Details</th>
        </tr>

        <tr>
            <td>Patient Name</td>
            <td><?php echo $patientName; ?></td>
        </tr>

        <tr>
            <td>Age</td>
            <td><?php echo $age; ?></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td><?php echo $gender; ?></td>
        </tr>

        <tr>
            <td>Phone Number</td>
            <td><?php echo $phone; ?></td>
        </tr>

        <tr>
            <td>Email Address</td>
            <td><?php echo $email; ?></td>
        </tr>

        <tr>
            <td>Blood Group</td>
            <td><?php echo $bloodGroup; ?></td>
        </tr>

        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>

    </table>

    <div class="button">

        <a href="index.html">
            <button>Register Another Patient</button>
        </a>

    </div>

</div>

<?php
}
else
{
?>

<div class="container">

    <h2>Access Denied</h2>

    <p class="error">
        No patient details found. Please fill out the registration form first.
    </p>

    <div class="button">

        <a href="index.html">
            <button>Go to Registration Form</button>
        </a>

    </div>

</div>

<?php
}
?>

</body>
</html>