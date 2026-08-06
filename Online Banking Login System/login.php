<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customer Dashboard</title>

<link rel="stylesheet" href="dashboard.css">

</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $customerid = $_POST["customerid"];
    $password = $_POST["password"];

    $validCustomerId = "CUST1001";
    $validPassword = "Bank@123";

    if($customerid == $validCustomerId && $password == $validPassword)
    {

?>

<div class="container">

<div class="header">

<h1>🏦 Secure Bank</h1>

<p>Welcome to Your Customer Dashboard</p>

</div>

<table>

<tr>
<th>Customer Information</th>
<th>Details</th>
</tr>

<tr>
<td>Customer ID</td>
<td><?php echo $customerid; ?></td>
</tr>

<tr>
<td>Customer Name</td>
<td>Krithisha Chandra Sekar</td>
</tr>

<tr>
<td>Account Number</td>
<td>456789123456</td>
</tr>

<tr>
<td>Account Type</td>
<td>Savings Account</td>
</tr>

<tr>
<td>Branch</td>
<td>Coimbatore Main Branch</td>
</tr>

<tr>
<td>Available Balance</td>
<td>₹ 1,25,000</td>
</tr>

</table>

<div class="button">

<a href="index.html">
<button>Logout</button>
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

<h1>❌ Login Failed</h1>

<p>Authentication Unsuccessful</p>

</div>

<p class="error">

Invalid Customer ID or Password.

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

Please login first.

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