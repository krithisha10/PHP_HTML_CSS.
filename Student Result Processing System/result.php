<html>
<head>
    <title>Student Result</title>
    <link rel="stylesheet" href="result.css">
</head>
<body>

<?php

function calculateTotal($html, $css, $php, $mysql, $javascript)
{
    return $html + $css + $php + $mysql + $javascript;
}

function calculateAverage($total)
{
    return $total / 5;
}

function calculateGrade($average)
{
    if($average >= 90)
    {
        return "A+";
    }
    elseif($average >= 80)
    {
        return "A";
    }
    elseif($average >= 70)
    {
        return "B";
    }
    elseif($average >= 60)
    {
        return "C";
    }
    elseif($average >= 50)
    {
        return "D";
    }
    else
    {
        return "Fail";
    }
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $studentName = htmlspecialchars($_POST["studentName"]);
    $registerNumber = htmlspecialchars($_POST["registerNumber"]);

    $htmlMarks = $_POST["htmlMarks"];
    $cssMarks = $_POST["cssMarks"];
    $phpMarks = $_POST["phpMarks"];
    $mysqlMarks = $_POST["mysqlMarks"];
    $javascriptMarks = $_POST["javascriptMarks"];

    $totalMarks = calculateTotal(
        $htmlMarks,
        $cssMarks,
        $phpMarks,
        $mysqlMarks,
        $javascriptMarks
    );

    $averageMarks = calculateAverage($totalMarks);

    $grade = calculateGrade($averageMarks);

?>

<div class="container">

    <h2>Student Result</h2>

    <p class="success">
        Result Generated Successfully!
    </p>

    <table>

        <tr>
            <th>Field</th>
            <th>Details</th>
        </tr>

        <tr>
            <td>Student Name</td>
            <td><?php echo $studentName; ?></td>
        </tr>

        <tr>
            <td>Register Number</td>
            <td><?php echo $registerNumber; ?></td>
        </tr>

        <tr>
            <td>HTML Marks</td>
            <td><?php echo $htmlMarks; ?></td>
        </tr>

        <tr>
            <td>CSS Marks</td>
            <td><?php echo $cssMarks; ?></td>
        </tr>

        <tr>
            <td>PHP Marks</td>
            <td><?php echo $phpMarks; ?></td>
        </tr>

        <tr>
            <td>MySQL Marks</td>
            <td><?php echo $mysqlMarks; ?></td>
        </tr>

        <tr>
            <td>JavaScript Marks</td>
            <td><?php echo $javascriptMarks; ?></td>
        </tr>

        <tr>
            <td>Total Marks</td>
            <td><?php echo $totalMarks; ?></td>
        </tr>

        <tr>
            <td>Average Marks</td>
            <td><?php echo number_format($averageMarks,2); ?></td>
        </tr>

        <tr>
            <th>Grade</th>
            <th><?php echo $grade; ?></th>
        </tr>

    </table>

    <div class="button">

        <a href="index.html">
            <button>Calculate Another Result</button>
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
        No student data found. Please fill out the result form first.
    </p>

    <div class="button">

        <a href="index.html">
            <button>Go to Result Form</button>
        </a>

    </div>

</div>

<?php
}
?>

</body>
</html>