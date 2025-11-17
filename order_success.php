<?php
include('database.php');  // Make sure this file exists and connects to MySQL

$name = $_POST['name'];
$phone = $_POST['phone'];
$cake = $_POST['cake'];
$quantity = $_POST['quantity'];
$message = $_POST['message'];

$sql = "INSERT INTO orders (name, phone, cake, quantity, message)
        VALUES ('$name', '$phone', '$cake', '$quantity', '$message')";

$conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Successful - Heavenly Bites Bakery</title>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #fffaf2;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .header {
        background-color: #f7c59f;
        padding: 25px;
        color: white;
        font-size: 28px;
        font-weight: bold;
    }

    .success-box {
        max-width: 600px;
        background: white;
        margin: 50px auto;
        padding: 35px;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    h2 {
        color: #6b2f0b;
        margin-bottom: 10px;
    }

    p {
        color: #5a4636;
        font-size: 18px;
    }

    a {
        display: inline-block;
        margin-top: 25px;
        padding: 12px 22px;
        background-color: #f7c59f;
        color: white;
        text-decoration: none;
        font-size: 18px;
        border-radius: 10px;
        transition: 0.3s;
    }

    a:hover {
        background-color: #e3a46e;
        transform: scale(1.05);
    }
</style>
</head>

<body>

<div class="header">Heavenly Bites Bakery</div>

<div class="success-box">
    <h2>Order Successful! 🎉</h2>
    <p>Thank you, <strong><?php echo $name; ?></strong>!</p>
    <p>Your order for <strong><?php echo $quantity . " x " . $cake; ?></strong> has been received.</p>
    <p>We will contact you soon at <strong><?php echo $phone; ?></strong>.</p>

    <a href="index.html">Return to Homepage</a>
</div>

</body>
</html>
