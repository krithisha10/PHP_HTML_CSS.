<html>
<head>
    <title>Student Details</title>
    <link rel="stylesheet" href="display.css">
</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $studentName = htmlspecialchars($_POST["studentName"]);
    $registerNumber = htmlspecialchars($_POST["registerNumber"]);
    $department = htmlspecialchars($_POST["department"]);
    $year = htmlspecialchars($_POST["year"]);
    $email = htmlspecialchars($_POST["email"]);
    $phoneNumber = htmlspecialchars($_POST["phoneNumber"]);

?>

<div class="container">

    <h2>Student Details</h2>

    <p class="success">
        Student details submitted successfully!
    </p>

    <table>

        <tr>
            <th>Field</th>
            <th>Details</th>
        </tr>

        <tr>
            <td>Student Name</td>
            <td><?php echo $studentName; ?></td>
        </tr>

        <tr>
            <td>Register Number</td>
            <td><?php echo $registerNumber; ?></td>
        </tr>

        <tr>
            <td>Department</td>
            <td><?php echo $department; ?></td>
        </tr>

        <tr>
            <td>Year</td>
            <td><?php echo $year; ?></td>
        </tr>

        <tr>
            <td>Email Address</td>
            <td><?php echo $email; ?></td>
        </tr>

        <tr>
            <td>Phone Number</td>
            <td><?php echo $phoneNumber; ?></td>
        </tr>

    </table>

    <div class="button">
        <a href="index.html">
            <button>Back to Form</button>
        </a>
    </div>

</div>

<?php
}
else
{
?>

<div class="container">

    <h2>Error</h2>

    <p class="error">
        No data submitted! Please fill out the student details form first.
    </p>

    <div class="button">
        <a href="index.html">
            <button>Go to Form</button>
        </a>
    </div>

</div>

<?php
}
?>

</body>
</html>