<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Appointment Confirmation</title>

<link rel="stylesheet" href="register.css">

</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$parent = htmlspecialchars(trim($_POST["parent"]));
$student = htmlspecialchars(trim($_POST["student"]));
$class = htmlspecialchars(trim($_POST["class"]));
$teacher = htmlspecialchars(trim($_POST["teacher"]));
$date = $_POST["date"];
$slot = htmlspecialchars(trim($_POST["slot"]));

$error = "";

if(empty($parent))
{
    $error = "Parent Name is required.";
}
elseif(empty($student))
{
    $error = "Student Name is required.";
}
elseif(empty($class))
{
    $error = "Please select the class.";
}
elseif(empty($teacher))
{
    $error = "Please select the teacher.";
}
elseif(empty($date))
{
    $error = "Please select the meeting date.";
}
elseif(empty($slot))
{
    $error = "Please select a meeting slot.";
}

if($error=="")
{

?>

<div class="container">

<div class="header">

<h1>✅ Appointment Confirmed</h1>

<p>Your Parent–Teacher Meeting has been booked successfully.</p>

</div>

<table>

<tr>
<th>Appointment Details</th>
<th>Information</th>
</tr>

<tr>
<td>Parent Name</td>
<td><?php echo $parent; ?></td>
</tr>

<tr>
<td>Student Name</td>
<td><?php echo $student; ?></td>
</tr>

<tr>
<td>Class</td>
<td><?php echo $class; ?></td>
</tr>

<tr>
<td>Teacher</td>
<td><?php echo $teacher; ?></td>
</tr>

<tr>
<td>Meeting Date</td>
<td><?php echo date("d-m-Y", strtotime($date)); ?></td>
</tr>

<tr>
<td>Meeting Time</td>
<td><?php echo $slot; ?></td>
</tr>

</table>

<div class="button">

<a href="index.html">
<button>Book Another Appointment</button>
</a>

</div>

</div>

<?php

}
else
{

?>

<div class="container">

<div class="header">

<h1>❌ Registration Failed</h1>

</div>

<p class="error">

<?php echo $error; ?>

</p>

<div class="button">

<a href="index.html">
<button>Try Again</button>
</a>

</div>

</div>

<?php

}

}
else
{

?>

<div class="container">

<div class="header">

<h1>Access Denied</h1>

</div>

<p class="error">

Please submit the appointment form first.

</p>

<div class="button">

<a href="index.html">
<button>Go Back</button>
</a>

</div>

</div>

<?php

}

?>

</body>
</html>