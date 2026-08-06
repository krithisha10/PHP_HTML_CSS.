<html>
<head>
<title>Validation Result</title>
<link rel="stylesheet" href="validation.css">
</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name = htmlspecialchars(trim($_POST["name"]));
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);
$mobile = trim($_POST["mobile"]);

$emailValid = filter_var($email, FILTER_VALIDATE_EMAIL);

$passwordValid = preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/", $password);

$mobileValid = preg_match("/^[0-9]{10}$/", $mobile);

?>

<div class="container">

<h2>Applicant Validation Result</h2>

<table>

<tr>
<th>Field</th>
<th>Status</th>
</tr>

<tr>
<td>Applicant Name</td>
<td><?php echo $name; ?></td>
</tr>

<tr>
<td>Email ID</td>
<td>
<?php
if($emailValid)
{
    echo "✅ Valid Email";
}
else
{
    echo "❌ Invalid Email";
}
?>
</td>
</tr>

<tr>
<td>Password</td>
<td>
<?php
if($passwordValid)
{
    echo "✅ Strong Password";
}
else
{
    echo "❌ Password must contain at least 8 characters, one uppercase letter, one lowercase letter, one digit and one special character.";
}
?>
</td>
</tr>

<tr>
<td>Mobile Number</td>
<td>
<?php
if($mobileValid)
{
    echo "✅ Valid Mobile Number";
}
else
{
    echo "❌ Invalid Mobile Number";
}
?>
</td>
</tr>

</table>

<div class="button">
<a href="index.html">
<button>Validate Another Applicant</button>
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
Please submit the application form first.
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