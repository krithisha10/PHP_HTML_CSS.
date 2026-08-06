<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee Evaluation Report</title>

<link rel="stylesheet" href="evaluation.css">

</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $name = htmlspecialchars(trim($_POST["name"]));
    $empid = htmlspecialchars(trim($_POST["empid"]));
    $department = htmlspecialchars(trim($_POST["department"]));
    $score = $_POST["score"];

    if($score >= 90)
    {
        $rating = "⭐ Outstanding";
        $remark = "Exceptional Performance";
    }
    elseif($score >= 80)
    {
        $rating = "🌟 Excellent";
        $remark = "Excellent Work Performance";
    }
    elseif($score >= 70)
    {
        $rating = "👍 Very Good";
        $remark = "Very Good Performance";
    }
    elseif($score >= 60)
    {
        $rating = "🙂 Good";
        $remark = "Good Performance";
    }
    elseif($score >= 50)
    {
        $rating = "⚠ Needs Improvement";
        $remark = "Needs Improvement in Performance";
    }
    else
    {
        $rating = "❌ Unsatisfactory";
        $remark = "Performance is Below Expectations";
    }

?>

<div class="container">

<div class="header">

<h1>📈 Employee Evaluation Report</h1>

<p>Performance Assessment Completed Successfully</p>

</div>

<table>

<tr>
<th>Evaluation Details</th>
<th>Information</th>
</tr>

<tr>
<td>Employee Name</td>
<td><?php echo $name; ?></td>
</tr>

<tr>
<td>Employee ID</td>
<td><?php echo $empid; ?></td>
</tr>

<tr>
<td>Department</td>
<td><?php echo $department; ?></td>
</tr>

<tr>
<td>Performance Score</td>
<td><?php echo $score; ?>/100</td>
</tr>

<tr>
<td>Performance Rating</td>
<td><strong><?php echo $rating; ?></strong></td>
</tr>

<tr>
<td>Remarks</td>
<td><?php echo $remark; ?></td>
</tr>

</table>

<div class="button">

<a href="index.html">
<button>Evaluate Another Employee</button>
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

Please submit the employee details first.

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