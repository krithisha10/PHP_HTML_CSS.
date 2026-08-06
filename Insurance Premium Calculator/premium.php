<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Policy Summary</title>

<link rel="stylesheet" href="premium.css">

</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $name = htmlspecialchars($_POST["name"]);
    $age = $_POST["age"];
    $term = $_POST["term"];
    $coverage = $_POST["coverage"];

    function calculatePremium($age, $term, $coverage)
    {
        $basePremium = $coverage * 0.05;
        if($age < 30)
        {
            $ageCharge = 0;
        }
        elseif($age <= 45)
        {
            $ageCharge = $basePremium * 0.10;
        }
        else
        {
            $ageCharge = $basePremium * 0.20;
        }

        switch($term)
        {
            case 10:
                $discount = 0;
                break;

            case 15:
                $discount = $basePremium * 0.05;
                break;

            case 20:
                $discount = $basePremium * 0.10;
                break;

            case 25:
                $discount = $basePremium * 0.15;
                break;

            case 30:
                $discount = $basePremium * 0.20;
                break;

            default:
                $discount = 0;
        }

        $finalPremium = ($basePremium + $ageCharge) - $discount;

        return array($basePremium,$ageCharge,$discount,$finalPremium);
    }

    list($basePremium,$ageCharge,$discount,$finalPremium)=calculatePremium($age,$term,$coverage);

?>

<div class="container">

<div class="header">

<h1>🛡️ Policy Summary</h1>

<p>Your Insurance Premium has been calculated successfully.</p>

</div>

<table>

<tr>
<th>Policy Details</th>
<th>Information</th>
</tr>

<tr>
<td>Applicant Name</td>
<td><?php echo $name; ?></td>
</tr>

<tr>
<td>Age</td>
<td><?php echo $age; ?> Years</td>
</tr>

<tr>
<td>Policy Term</td>
<td><?php echo $term; ?> Years</td>
</tr>

<tr>
<td>Coverage Amount</td>
<td>₹ <?php echo number_format($coverage,2); ?></td>
</tr>

<tr>
<td>Base Premium (5%)</td>
<td>₹ <?php echo number_format($basePremium,2); ?></td>
</tr>

<tr>
<td>Age Loading</td>
<td>₹ <?php echo number_format($ageCharge,2); ?></td>
</tr>

<tr>
<td>Policy Discount</td>
<td>₹ <?php echo number_format($discount,2); ?></td>
</tr>

<tr>
<td><strong>Premium Amount</strong></td>
<td><strong>₹ <?php echo number_format($finalPremium,2); ?></strong></td>
</tr>

</table>

<div class="button">

<a href="index.html">
<button>Calculate Another Policy</button>
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

Please submit the insurance details first.

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