<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Examination Result</title>

<link rel="stylesheet" href="result.css">

</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name = htmlspecialchars($_POST["name"]);
$regno = htmlspecialchars($_POST["regno"]);

$m1 = $_POST["m1"];
$m2 = $_POST["m2"];
$m3 = $_POST["m3"];
$m4 = $_POST["m4"];
$m5 = $_POST["m5"];

function calculateResult($m1,$m2,$m3,$m4,$m5)
{
    $total = $m1 + $m2 + $m3 + $m4 + $m5;
    $percentage = $total / 5;

    if($percentage >= 90)
    {
        $class = "🥇 Distinction";
    }
    elseif($percentage >= 75)
    {
        $class = "🥈 First Class";
    }
    elseif($percentage >= 60)
    {
        $class = "🥉 Second Class";
    }
    elseif($percentage >= 50)
    {
        $class = "✅ Pass Class";
    }
    else
    {
        $class = "❌ Fail";
    }

    return array($total,$percentage,$class);
}

list($total,$percentage,$class)=calculateResult($m1,$m2,$m3,$m4,$m5);

?>

<div class="container">

<div class="header">

<h1>🎓 Examination Result</h1>

<p>Result Processed Successfully</p>

</div>

<table>

<tr>
<th>Particular</th>
<th>Details</th>
</tr>

<tr>
<td>Student Name</td>
<td><?php echo $name; ?></td>
</tr>

<tr>
<td>Register Number</td>
<td><?php echo $regno; ?></td>
</tr>

<tr>
<td>Subject 1 Marks</td>
<td><?php echo $m1; ?></td>
</tr>

<tr>
<td>Subject 2 Marks</td>
<td><?php echo $m2; ?></td>
</tr>

<tr>
<td>Subject 3 Marks</td>
<td><?php echo $m3; ?></td>
</tr>

<tr>
<td>Subject 4 Marks</td>
<td><?php echo $m4; ?></td>
</tr>

<tr>
<td>Subject 5 Marks</td>
<td><?php echo $m5; ?></td>
</tr>

<tr>
<td><strong>Total Marks</strong></td>
<td><strong><?php echo $total; ?>/500</strong></td>
</tr>

<tr>
<td><strong>Percentage</strong></td>
<td><strong><?php echo number_format($percentage,2); ?>%</strong></td>
</tr>

<tr>
<td><strong>Class Obtained</strong></td>
<td><strong><?php echo $class; ?></strong></td>
</tr>

</table>

<div class="button">

<a href="index.html">
<button>Analyze Another Result</button>
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

Please submit the student details first.

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