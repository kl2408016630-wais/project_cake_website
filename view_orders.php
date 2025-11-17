<?php
include('database.php'); // your connection file

$sql = "SELECT * FROM orders ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Orders - Heavenly Bites</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fffaf2;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #6b2f0b;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #f7c59f;
            color: white;
        }
        tr:hover {
            background-color: #fff2e5;
        }
        .back {
            display: block;
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
            color: #6b2f0b;
        }
    </style>
</head>
<body>

<h2>All Orders</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Cake</th>
        <th>Quantity</th>
        <th>Date Ordered</th>
    </tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["cake"] . "</td>
                <td>" . $row["quantity"] . "</td>
                <td>" . $row["created_at"] . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No orders yet</td></tr>";
}
?>

</table>

<a href="index.html" class="back">← Back to Home</a>

</body>
</html>

<?php $conn->close(); ?>
