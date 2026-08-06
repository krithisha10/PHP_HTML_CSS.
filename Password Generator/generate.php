<?php
$length = $_POST['length'];
$uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$lowercase = "abcdefghijklmnopqrstuvwxyz";
$numbers = "0123456789";
$special = "@#$%&*!";
$allCharacters = $uppercase . $lowercase . $numbers . $special;
$password = "";
$password .= $uppercase[rand(0, strlen($uppercase)-1)];
$password .= $lowercase[rand(0, strlen($lowercase)-1)];
$password .= $numbers[rand(0, strlen($numbers)-1)];
$password .= $special[rand(0, strlen($special)-1)];

for($i = 4; $i < $length; $i++)
{
    $password .= $allCharacters[rand(0, strlen($allCharacters)-1)];
}

$password = str_shuffle($password);

if($length >= 16)
{
    $strength = "Very Strong";
    $color = "#00ff88";
}
else if($length >= 12)
{
    $strength = "Strong";
    $color = "#00c3ff";
}
else
{
    $strength = "Medium";
    $color = "#ffc107";
}

?>

<html>
<head>
<title>Password Generated</title>
<link rel="stylesheet" href="style.css">
<style>
.result-box{
    margin-top:25px;
    background:rgba(255,255,255,0.08);
    padding:25px;
    border-radius:20px;
}

.password{
    margin:20px 0;
    padding:15px;
    background:#081426;
    border-radius:12px;
    font-size:22px;
    color:#00d4ff;
    word-break:break-all;
    border:1px solid #1e73be;
}

.strength{
    font-size:18px;
    font-weight:bold;
    color:<?php echo $color; ?>;
}

.copy-btn{
    margin-top:15px;
    padding:12px 20px;
    border:none;
    border-radius:10px;
    background:#00c853;
    color:white;
    cursor:pointer;
    font-size:15px;
}

.copy-btn:hover{
    transform:scale(1.05);
}

.back{
    display:block;
    margin-top:20px;
    text-decoration:none;
    color:white;
    background:#007bff;
    padding:12px;
    border-radius:10px;
}
</style>
</head>
<body>
<div class="container">
<div class="security-icon">
🔐
</div>
<h1>Password<br>Generated</h1>
<p class="subtitle">
Your secure password has been created successfully
</p>
<div class="result-box">
<h3>Your Password</h3>
<div class="password" id="password">
<?php echo $password; ?>
</div>
<button class="copy-btn" onclick="copyPassword()">
📋 Copy Password
</button>
<h3 style="margin-top:20px;">
Security Level</h3>
<div class="strength">
<?php echo $strength; ?>
</div>
</div>
<a href="index.html" class="back">
Generate Another Password</a>
</div>
<script>
function copyPassword(){
    let password =
    document.getElementById("password").innerText;
    navigator.clipboard.writeText(password);
    alert("Password copied successfully 🔐");
}
</script>
</body>
</html>