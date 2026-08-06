<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Attendance Report</title>

<link rel="stylesheet" href="attendance.css">

</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $name = htmlspecialchars($_POST["name"]);
    $regno = htmlspecialchars($_POST["regno"]);
    $totaldays = $_POST["totaldays"];
    $presentdays = $_POST["presentdays"];

    function calculateAttendance($present, $total)
    {
        return ($present / $total) * 100;
    }

    $percentage = calculateAttendance($presentdays, $totaldays);

    if($percentage >= 75)
    {
        $status = "Eligible";
        $remark = "You are eligible to appear for the examination.";
    }
    else
    {
        $status = "Not Eligible";
        $remark = "Your attendance is below 75%. You are not eligible for the examination.";
    }

?>

<div class="container">

<div class="header">

<h1>🎓 Attendance Report</h1>

<p>Attendance Processed Successfully</p>

</div>

<table>

<tr>
<th>Particular</th>
<th>Details</th>
</tr>

<tr>
<td>Student Name</td>
<td><?php echo $name; ?></td>
</tr>

<tr>
<td>Register Number</td>
<td><?php echo $regno; ?></td>
</tr>

<tr>
<td>Total Working Days</td>
<td><?php echo $totaldays; ?></td>
</tr>

<tr>
<td>Days Present</td>
<td><?php echo $presentdays; ?></td>
</tr>

<tr>
<td>Attendance Percentage</td>
<td><?php echo number_format($percentage,2); ?>%</td>
</tr>

<tr>
<td>Examination Eligibility</td>
<td><?php echo $status; ?></td>
</tr>

<tr>
<td>Remarks</td>
<td><?php echo $remark; ?></td>
</tr>

</table>

<div class="button">

<a href="index.html">
<button>Check Another Student</button>
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

<h1>Access Denied</h1>

</div>

<p class="error">
Please submit the attendance form first.
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