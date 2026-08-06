<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Salary Report</title>

<link rel="stylesheet" href="salary.css">

</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $name = htmlspecialchars($_POST["name"]);
    $empid = htmlspecialchars($_POST["empid"]);
    $department = htmlspecialchars($_POST["department"]);
    $basic = $_POST["basic"];

    function calculateSalary($basic)
    {
        $hra = $basic * 0.20;
        $da = $basic * 0.10;
        $gross = $basic + $hra + $da;

        $pf = $basic * 0.12;
        $tax = 500;

        $net = $gross - $pf - $tax;

        return array($hra,$da,$gross,$pf,$tax,$net);
    }

    list($hra,$da,$gross,$pf,$tax,$net) = calculateSalary($basic);

?>

<div class="container">

<div class="header">

<h1>💼 Employee Salary Report</h1>

<p>Payroll Processed Successfully</p>

</div>

<table>

<tr>
<th>Salary Details</th>
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
<td>Basic Salary</td>
<td>₹ <?php echo number_format($basic,2); ?></td>
</tr>

<tr>
<td>House Rent Allowance (20%)</td>
<td>₹ <?php echo number_format($hra,2); ?></td>
</tr>

<tr>
<td>Dearness Allowance (10%)</td>
<td>₹ <?php echo number_format($da,2); ?></td>
</tr>

<tr>
<td>Gross Salary</td>
<td><strong>₹ <?php echo number_format($gross,2); ?></strong></td>
</tr>

<tr>
<td>Provident Fund (12%)</td>
<td>₹ <?php echo number_format($pf,2); ?></td>
</tr>

<tr>
<td>Professional Tax</td>
<td>₹ <?php echo number_format($tax,2); ?></td>
</tr>

<tr>
<td>Net Salary</td>
<td><strong>₹ <?php echo number_format($net,2); ?></strong></td>
</tr>

</table>

<div class="button">

<a href="index.html">
<button>Process Another Employee</button>
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

Please submit the salary details first.

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