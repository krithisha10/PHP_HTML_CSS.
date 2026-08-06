<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customer Registration Success</title>

<link rel="stylesheet" href="register.css">

</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name = htmlspecialchars(trim($_POST["name"]));
$email = htmlspecialchars(trim($_POST["email"]));
$mobile = htmlspecialchars(trim($_POST["mobile"]));
$address = htmlspecialchars(trim($_POST["address"]));
$city = htmlspecialchars(trim($_POST["city"]));
$pincode = htmlspecialchars(trim($_POST["pincode"]));

$error = "";

if(empty($name))
{
    $error = "Customer Name is required.";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $error = "Invalid Email Address.";
}
elseif(!preg_match("/^[0-9]{10}$/",$mobile))
{
    $error = "Mobile Number must contain exactly 10 digits.";
}
elseif(empty($address))
{
    $error = "Address cannot be empty.";
}
elseif(empty($city))
{
    $error = "City is required.";
}
elseif(!preg_match("/^[0-9]{6}$/",$pincode))
{
    $error = "Pincode must contain exactly 6 digits.";
}

if($error=="")
{

?>

<div class="container">

<div class="header">

<h1>🎉 Registration Successful</h1>

<p>Customer information has been registered successfully.</p>

</div>

<table>

<tr>
<th>Customer Details</th>
<th>Information</th>
</tr>

<tr>
<td>Customer Name</td>
<td><?php echo $name; ?></td>
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
<td>Address</td>
<td><?php echo $address; ?></td>
</tr>

<tr>
<td>City</td>
<td><?php echo $city; ?></td>
</tr>

<tr>
<td>Pincode</td>
<td><?php echo $pincode; ?></td>
</tr>

</table>

<div class="button">

<a href="index.html">
<button>Register Another Customer</button>
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

Please submit the registration form first.

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