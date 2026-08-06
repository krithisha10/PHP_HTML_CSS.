<html>
<head>
    <title>Mobile Bill Summary</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php

function calculateBill($plan, $data, $calls, $sms)
{
    if($plan == "Basic")
    {
        $monthlyCharge = 199;
        $dataCharge = $data * 20;
        $callCharge = $calls * 1;
        $smsCharge = $sms * 0.50;
    }
    else
    {
        $monthlyCharge = 499;
        $dataCharge = $data * 10;
        $callCharge = $calls * 0.50;
        $smsCharge = $sms * 0.25;
    }

    $total = $monthlyCharge + $dataCharge + $callCharge + $smsCharge;

    return [
        "monthly" => $monthlyCharge,
        "data" => $dataCharge,
        "calls" => $callCharge,
        "sms" => $smsCharge,
        "total" => $total
    ];
}

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$data = $_POST['data'];
$calls = $_POST['calls'];
$sms = $_POST['sms'];
$plan = $_POST['plan'];

$bill = calculateBill($plan, $data, $calls, $sms);

?>

<h1>📱 Mobile Bill Summary</h1>

<div class="bill">

<h3>Customer Details</h3>

<p><b>Name:</b> <?php echo $name; ?></p>

<p><b>Mobile Number:</b> <?php echo $mobile; ?></p>

<p><b>Tariff Plan:</b> <?php echo $plan; ?></p>


<h3>Bill Details</h3>

<p>Monthly Charge: ₹<?php echo $bill['monthly']; ?></p>

<p>Data Usage Charge: ₹<?php echo $bill['data']; ?></p>

<p>Call Charge: ₹<?php echo $bill['calls']; ?></p>

<p>SMS Charge: ₹<?php echo $bill['sms']; ?></p>

<hr>

<h2>Total Bill: ₹<?php echo $bill['total']; ?></h2>

</div>


<a href="index.html">
<button>Generate New Bill</button>
</a>


</div>

</body>
</html>