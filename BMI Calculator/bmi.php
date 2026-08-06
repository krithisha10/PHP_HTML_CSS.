<html>
<head>
<title>BMI Report</title>

<link rel="stylesheet" href="bmi.css">

</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $name = htmlspecialchars($_POST["name"]);
    $height = $_POST["height"];
    $weight = $_POST["weight"];

    function calculateBMI($weight,$height)
    {
        return $weight / ($height * $height);
    }

    $bmi = calculateBMI($weight,$height);

    if($bmi < 18.5)
    {
        $status = "Underweight";
        $recommendation = "Increase your calorie intake with nutritious food and consult a healthcare professional if needed.";
    }
    elseif($bmi >= 18.5 && $bmi < 25)
    {
        $status = "Normal Weight";
        $recommendation = "Excellent! Maintain a balanced diet and exercise regularly.";
    }
    elseif($bmi >= 25 && $bmi < 30)
    {
        $status = "Overweight";
        $recommendation = "Exercise regularly, reduce junk food, and follow a healthy diet.";
    }
    else
    {
        $status = "Obese";
        $recommendation = "Consult a healthcare professional and follow a medically supervised fitness plan.";
    }

?>

<div class="container">

<div class="header">

<h1>💖 BMI Health Report</h1>

<p>Your BMI has been calculated successfully</p>

</div>

<table>

<tr>
<th>Particular</th>
<th>Details</th>
</tr>

<tr>
<td>Full Name</td>
<td><?php echo $name; ?></td>
</tr>

<tr>
<td>Height</td>
<td><?php echo $height; ?> m</td>
</tr>

<tr>
<td>Weight</td>
<td><?php echo $weight; ?> kg</td>
</tr>

<tr>
<td>BMI</td>
<td><?php echo number_format($bmi,2); ?></td>
</tr>

<tr>
<td>Health Status</td>
<td><?php echo $status; ?></td>
</tr>

<tr>
<td>Recommendation</td>
<td><?php echo $recommendation; ?></td>
</tr>

</table>

<div class="button">

<a href="index.html">
<button>Calculate Again</button>
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
Please enter your details first.
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