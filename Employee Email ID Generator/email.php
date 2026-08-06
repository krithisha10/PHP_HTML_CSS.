<html>
<head>
    <title>Employee Email ID</title>
    <link rel="stylesheet" href="email.css">
</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $employeeId = htmlspecialchars($_POST["employeeId"]);
    $department = htmlspecialchars($_POST["department"]);

    $first = strtolower(str_replace(" ", "", $firstName));
    $last = strtolower(str_replace(" ", "", $lastName));

    $id = substr($employeeId, -3);

    $email = $first . "." . $last . $id . "@company.com";

?>

<div class="container">

    <h2>Employee Email ID Generator</h2>

    <p class="success">
        Employee Email ID Generated Successfully!
    </p>

    <table>

        <tr>
            <th>Field</th>
            <th>Details</th>
        </tr>

        <tr>
            <td>First Name</td>
            <td><?php echo $firstName; ?></td>
        </tr>

        <tr>
            <td>Last Name</td>
            <td><?php echo $lastName; ?></td>
        </tr>

        <tr>
            <td>Employee ID</td>
            <td><?php echo $employeeId; ?></td>
        </tr>

        <tr>
            <td>Department</td>
            <td><?php echo $department; ?></td>
        </tr>

        <tr>
            <th>Generated Email ID</th>
            <th><?php echo $email; ?></th>
        </tr>

    </table>

    <div class="button">

        <a href="index.html">
            <button>Generate Another Email ID</button>
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
        No employee details found. Please fill out the form first.
    </p>

    <div class="button">

        <a href="index.html">
            <button>Go to Employee Form</button>
        </a>

    </div>

</div>

<?php
}
?>

</body>
</html>