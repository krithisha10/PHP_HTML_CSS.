<html>
<head>
    <title>Electricity Bill</title>
    <link rel="stylesheet" href="bill.css">
</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $consumerName = htmlspecialchars($_POST["consumerName"]);
    $consumerNumber = htmlspecialchars($_POST["consumerNumber"]);
    $units = $_POST["units"];

    if($units <= 100)
    {
        $rate = 1.50;
    }
    elseif($units <= 200)
    {
        $rate = 2.50;
    }
    elseif($units <= 300)
    {
        $rate = 4.00;
    }
    else
    {
        $rate = 6.00;
    }

    $billAmount = $units * $rate;

?>

<div class="container">

    <h2>Electricity Bill</h2>

    <p class="success">
        Bill Generated Successfully!
    </p>

    <table>

        <tr>
            <th>Field</th>
            <th>Details</th>
        </tr>

        <tr>
            <td>Consumer Name</td>
            <td><?php echo $consumerName; ?></td>
        </tr>

        <tr>
            <td>Consumer Number</td>
            <td><?php echo $consumerNumber; ?></td>
        </tr>

        <tr>
            <td>Units Consumed</td>
            <td><?php echo $units; ?></td>
        </tr>

        <tr>
            <td>Rate per Unit</td>
            <td>₹<?php echo number_format($rate, 2); ?></td>
        </tr>

        <tr>
            <th>Total Bill Amount</th>
            <th>₹<?php echo number_format($billAmount, 2); ?></th>
        </tr>

    </table>

    <div class="button">
        <a href="index.html">
            <button>Calculate Another Bill</button>
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
        No bill details found. Please fill out the form first.
    </p>

    <div class="button">
        <a href="index.html">
            <button>Go to Bill Form</button>
        </a>
    </div>

</div>

<?php
}
?>

</body>
</html>