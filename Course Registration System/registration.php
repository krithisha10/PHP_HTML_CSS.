<html>
<head>
    <title>Course Registration Details</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $studentName = htmlspecialchars($_POST["studentName"]);
    $registerNumber = htmlspecialchars($_POST["registerNumber"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $department = htmlspecialchars($_POST["department"]);
    $course = htmlspecialchars($_POST["course"]);
    $semester = htmlspecialchars($_POST["semester"]);

?>

<div class="container">

    <h2>Course Registration Details</h2>

    <p class="success">
        Course Registered Successfully!
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
            <td>Email Address</td>
            <td><?php echo $email; ?></td>
        </tr>

        <tr>
            <td>Phone Number</td>
            <td><?php echo $phone; ?></td>
        </tr>

        <tr>
            <td>Department</td>
            <td><?php echo $department; ?></td>
        </tr>

        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>

        <tr>
            <td>Semester</td>
            <td><?php echo $semester; ?></td>
        </tr>

    </table>

    <div class="button">

        <a href="index.html">
            <button>Register Another Course</button>
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
        No registration details found. Please fill out the registration form first.
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