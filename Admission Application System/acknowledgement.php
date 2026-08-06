<html>
<head>
    <title>Admission Acknowledgement</title>
    <link rel="stylesheet" href="acknowledgement.css">
</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $applicantName = htmlspecialchars($_POST["applicantName"]);
    $dob = htmlspecialchars($_POST["dob"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $course = htmlspecialchars($_POST["course"]);
    $address = htmlspecialchars($_POST["address"]);

?>

<div class="container">

    <h2>Admission Acknowledgement</h2>

    <p class="success">
        Your admission application has been submitted successfully!
    </p>

    <table>

        <tr>
            <th>Field</th>
            <th>Details</th>
        </tr>

        <tr>
            <td>Applicant Name</td>
            <td><?php echo $applicantName; ?></td>
        </tr>

        <tr>
            <td>Date of Birth</td>
            <td><?php echo $dob; ?></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td><?php echo $gender; ?></td>
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
            <td>Course Applied</td>
            <td><?php echo $course; ?></td>
        </tr>

        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>

    </table>

    <div class="button">

        <a href="index.html">
            <button>Back to Application Form</button>
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
        No application data found. Please fill out the admission form first.
    </p>

    <div class="button">

        <a href="index.html">
            <button>Go to Application Form</button>
        </a>

    </div>

</div>

<?php
}
?>

</body>
</html>