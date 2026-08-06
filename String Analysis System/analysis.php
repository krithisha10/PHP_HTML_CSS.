<html>
<head>
    <title>String Analysis Report</title>
    <link rel="stylesheet" href="analysis.css">
</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $title = htmlspecialchars($_POST["title"]);

    $vowels = 0;
    $consonants = 0;
    $digits = 0;
    $special = 0;

    $length = strlen($title);

    for($i=0; $i<$length; $i++)
    {
        $ch = $title[$i];

        if(ctype_alpha($ch))
        {
            if(strpos("AEIOUaeiou", $ch) !== false)
            {
                $vowels++;
            }
            else
            {
                $consonants++;
            }
        }
        elseif(ctype_digit($ch))
        {
            $digits++;
        }
        elseif($ch != " ")
        {
            $special++;
        }
    }

?>

<div class="container">

    <h2>String Analysis Report</h2>

    <p class="success">
        String Analyzed Successfully!
    </p>

    <table>

        <tr>
            <th>Analysis</th>
            <th>Result</th>
        </tr>

        <tr>
            <td>Entered Title</td>
            <td><?php echo $title; ?></td>
        </tr>

        <tr>
            <td>Total Characters</td>
            <td><?php echo $length; ?></td>
        </tr>

        <tr>
            <td>Number of Vowels</td>
            <td><?php echo $vowels; ?></td>
        </tr>

        <tr>
            <td>Number of Consonants</td>
            <td><?php echo $consonants; ?></td>
        </tr>

        <tr>
            <td>Number of Digits</td>
            <td><?php echo $digits; ?></td>
        </tr>

        <tr>
            <td>Number of Special Characters</td>
            <td><?php echo $special; ?></td>
        </tr>

    </table>

    <div class="button">
        <a href="index.html">
            <button>Analyze Another String</button>
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
        No input received. Please enter a title first.
    </p>

    <div class="button">
        <a href="index.html">
            <button>Go to Analysis Form</button>
        </a>
    </div>

</div>

<?php
}
?>

</body>
</html>