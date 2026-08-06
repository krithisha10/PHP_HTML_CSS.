<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee Profile</title>

<link rel="stylesheet" href="employee.css">

</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $name = htmlspecialchars(trim($_POST["name"]));
    $empid = htmlspecialchars(trim($_POST["empid"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $mobile = htmlspecialchars(trim($_POST["mobile"]));
    $department = htmlspecialchars(trim($_POST["department"]));
    $designation = htmlspecialchars(trim($_POST["designation"]));

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $error = "Invalid Email Address.";
    }
    elseif(!preg_match("/^[0-9]{10}$/",$mobile))
    {
        $error = "Mobile Number must contain exactly 10 digits.";
    }
    else
    {
        $error = "";
    }

    if($error=="")
    {

?>

<div class="container">

<div class="header">

<h1>👨‍💼 Employee Profile</h1>

<p>Employee Information Processed Successfully</p>

</div>

<table>

<tr>
<th>Employee Details</th>
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
<td>Email Address</td>
<td><?php echo $email; ?></td>
</tr>

<tr>
<td>Mobile Number</td>
<td><?php echo $mobile; ?></td>
</tr>

<tr>
<td>Department</td>
<td><?php echo $department; ?></td>
</tr>

<tr>
<td>Designation</td>
<td><?php echo $designation; ?></td>
</tr>

</table>

<div class="button">

<a href="index.html">
<button>Register Another Employee</button>
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

<h1>❌ Validation Failed</h1>

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