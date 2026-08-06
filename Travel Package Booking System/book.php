<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$package = $_POST['package'] ?? '';
$persons = $_POST['persons'] ?? '';
$date = $_POST['date'] ?? '';

$bookingID = "TRV" . rand(10000,99999);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Booking Confirmation</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:linear-gradient(135deg,#0077b6,#00b4d8,#90e0ef);
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    padding:20px;
}

.card{
    width:650px;
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 15px 35px rgba(0,0,0,.2);
}

.header{
    background:linear-gradient(135deg,#0077b6,#00b4d8);
    color:white;
    text-align:center;
    padding:25px;
}

.header h1{
    margin-bottom:10px;
}

.header p{
    font-size:18px;
}

.content{
    padding:30px;
}

.booking{
    background:#e3f2fd;
    color:#023e8a;
    padding:15px;
    border-radius:10px;
    text-align:center;
    font-size:20px;
    font-weight:bold;
    margin-bottom:25px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#0077b6;
    color:white;
    padding:14px;
    font-size:18px;
}

td{
    padding:14px;
    border-bottom:1px solid #ddd;
    font-size:17px;
}

tr:nth-child(even){
    background:#f5fbff;
}

.button{
    text-align:center;
    margin-top:30px;
}

.button a{
    text-decoration:none;
    background:#0077b6;
    color:white;
    padding:14px 35px;
    border-radius:30px;
    display:inline-block;
    transition:.3s;
}

.button a:hover{
    background:#023e8a;
}

@media(max-width:700px){

.card{
    width:100%;
}

th,
td{
    font-size:15px;
}

}

</style>

</head>

<body>

<div class="card">

<div class="header">

<h1>Travel Booking Confirmation</h1>

<p>Your booking has been confirmed successfully.</p>

</div>

<div class="content">

<div class="booking">
Booking ID : <?php echo $bookingID; ?>
</div>

<table>

<tr>
<th>Particular</th>
<th>Details</th>
</tr>

<tr>
<td>Customer Name</td>
<td><?php echo htmlspecialchars($name); ?></td>
</tr>

<tr>
<td>Email Address</td>
<td><?php echo htmlspecialchars($email); ?></td>
</tr>

<tr>
<td>Phone Number</td>
<td><?php echo htmlspecialchars($phone); ?></td>
</tr>

<tr>
<td>Selected Package</td>
<td><?php echo htmlspecialchars($package); ?></td>
</tr>

<tr>
<td>Number of Persons</td>
<td><?php echo htmlspecialchars($persons); ?></td>
</tr>

<tr>
<td>Travel Date</td>
<td><?php echo htmlspecialchars($date); ?></td>
</tr>

</table>

<div class="button">
<a href="index.html">Book Another Trip</a>
</div>

</div>

</div>

</body>
</html>