<html>
<head>
    <title>Customer Invoice</title>
    <link rel="stylesheet" href="invoice.css">
</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $customerName = htmlspecialchars($_POST["customerName"]);
    $productName = htmlspecialchars($_POST["productName"]);
    $quantity = $_POST["quantity"];
    $unitPrice = $_POST["unitPrice"];
    $discount = $_POST["discount"];
    $gst = $_POST["gst"];

    $totalAmount = $quantity * $unitPrice;
    $discountAmount = ($totalAmount * $discount) / 100;
    $amountAfterDiscount = $totalAmount - $discountAmount;
    $gstAmount = ($amountAfterDiscount * $gst) / 100;
    $finalAmount = $amountAfterDiscount + $gstAmount;

?>

<div class="container">

    <h2>Customer Invoice</h2>

    <p class="success">
        Invoice Generated Successfully!
    </p>

    <table>

        <tr>
            <th>Field</th>
            <th>Details</th>
        </tr>

        <tr>
            <td>Customer Name</td>
            <td><?php echo $customerName; ?></td>
        </tr>

        <tr>
            <td>Product Name</td>
            <td><?php echo $productName; ?></td>
        </tr>

        <tr>
            <td>Quantity</td>
            <td><?php echo $quantity; ?></td>
        </tr>

        <tr>
            <td>Unit Price</td>
            <td>₹ <?php echo number_format($unitPrice,2); ?></td>
        </tr>

        <tr>
            <td>Total Amount</td>
            <td>₹ <?php echo number_format($totalAmount,2); ?></td>
        </tr>

        <tr>
            <td>Discount (<?php echo $discount; ?>%)</td>
            <td>- ₹ <?php echo number_format($discountAmount,2); ?></td>
        </tr>

        <tr>
            <td>Amount After Discount</td>
            <td>₹ <?php echo number_format($amountAfterDiscount,2); ?></td>
        </tr>

        <tr>
            <td>GST (<?php echo $gst; ?>%)</td>
            <td>₹ <?php echo number_format($gstAmount,2); ?></td>
        </tr>

        <tr>
            <th>Final Amount</th>
            <th>₹ <?php echo number_format($finalAmount,2); ?></th>
        </tr>

    </table>

    <div class="button">
        <a href="index.html">
            <button>Generate New Invoice</button>
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
        No billing information found. Please enter product details first.
    </p>

    <div class="button">
        <a href="index.html">
            <button>Go to Billing Form</button>
        </a>
    </div>

</div>

<?php
}
?>

</body>
</html>