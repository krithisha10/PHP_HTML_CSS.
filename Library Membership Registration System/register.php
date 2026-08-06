<?php
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$address = trim($_POST['address'] ?? '');
$age = trim($_POST['age'] ?? '');
$gender = trim($_POST['gender'] ?? '');
$membership = trim($_POST['membership'] ?? '');
$errors = [];

if ($name == "") {
    $errors[] = "Name is required.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Enter a valid email address.";
}

if (!preg_match("/^[0-9]{10}$/", $phone)) {
    $errors[] = "Phone number must contain exactly 10 digits.";
}

if ($address == "") {
    $errors[] = "Address is required.";
}

if ($age < 5 || $age > 100) {
    $errors[] = "Age must be between 5 and 100.";
}

if ($gender == "") {
    $errors[] = "Please select your gender.";
}

if ($membership == "") {
    $errors[] = "Please select a membership type.";
}

// Generate Membership ID
$memberID = "LIB" . rand(10000,99999);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Membership Confirmation</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:linear-gradient(135deg,#0f4c81,#1f7a8c,#4cc9f0);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

.card{
    width:650px;
    max-width:100%;
    background:#fff;
    border-radius:20px;
    padding:35px;
    box-shadow:0 15px 35px rgba(0,0,0,0.25);
}

h1{
    text-align:center;
    color:#0f4c81;
    margin-bottom:15px;
}

.success{
    text-align:center;
    color:green;
    font-size:20px;
    margin-bottom:20px;
    font-weight:bold;
}

.id-box{
    background:#eaf6ff;
    color:#0f4c81;
    text-align:center;
    padding:15px;
    border-radius:12px;
    font-size:22px;
    font-weight:bold;
    margin-bottom:25px;
}

.details p{
    margin:12px 0;
    font-size:17px;
    color:#333;
}

.details span{
    font-weight:bold;
    color:#0f4c81;
}

.error{
    background:#ffe5e5;
    color:#c00000;
    padding:15px;
    border-radius:10px;
    margin-bottom:20px;
}

.btn{
    display:block;
    width:240px;
    margin:30px auto 0;
    text-align:center;
    text-decoration:none;
    background:#0f4c81;
    color:white;
    padding:14px;
    border-radius:30px;
    font-weight:bold;
    transition:.3s;
}

.btn:hover{
    background:#083358;
}

</style>

</head>
<body>

<div class="card">

<?php
if(count($errors)>0)
{
    echo "<div class='error'>";
    echo "<h3>Please correct the following:</h3><br>";

    foreach($errors as $e)
    {
        echo "• $e <br>";
    }

    echo "</div>";
    echo "<a href='index.html' class='btn'>Go Back</a>";
}
else
{
?>

<h1>📚 Library Membership Card</h1>

<p class="success">
✅ Registration Successful!
</p>

<div class="id-box">
Membership ID : <?php echo $memberID; ?>
</div>

<div class="details">

<p><span>Full Name :</span> <?php echo htmlspecialchars($name); ?></p>

<p><span>Email :</span> <?php echo htmlspecialchars($email); ?></p>

<p><span>Phone :</span> <?php echo htmlspecialchars($phone); ?></p>

<p><span>Address :</span> <?php echo htmlspecialchars($address); ?></p>

<p><span>Age :</span> <?php echo htmlspecialchars($age); ?></p>

<p><span>Gender :</span> <?php echo htmlspecialchars($gender); ?></p>

<p><span>Membership Type :</span> <?php echo htmlspecialchars($membership); ?></p>

</div>

<a href="index.html" class="btn">
Register Another Member
</a>

<?php
}
?>

</div>

</body>
</html>