<html>
<head>
<title>Sales Report</title>

<link rel="stylesheet" href="sales.css">

</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $customer = htmlspecialchars($_POST["customer"]);
    $product = htmlspecialchars($_POST["product"]);
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];

    function calculateSales($qty, $rate)
    {
        return $qty * $rate;
    }

    $totalSales = calculateSales($quantity, $price);

?>

<div class="container">

<div class="header">

<h1>🧾 Sales Report</h1>

<p>Sales Value Calculated Successfully</p>

</div>

<table>

<tr>
<th>Particular</th>
<th>Details</th>
</tr>

<tr>
<td>Customer Name</td>
<td><?php echo $customer; ?></td>
</tr>

<tr>
<td>Product Name</td>
<td><?php echo $product; ?></td>
</tr>

<tr>
<td>Quantity</td>
<td><?php echo $quantity; ?></td>
</tr>

<tr>
<td>Price per Product</td>
<td>₹ <?php echo number_format($price,2); ?></td>
</tr>

<tr>
<td><strong>Total Sales Value</strong></td>
<td><strong>₹ <?php echo number_format($totalSales,2); ?></strong></td>
</tr>

</table>

<div class="button">

<a href="index.html">
<button>Calculate Another Sale</button>
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
Please fill in the sales form first.
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