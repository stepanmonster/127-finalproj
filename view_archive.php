<?php
$conn = new mysqli('localhost', 'root', '', 't');
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$res = $conn->query("SELECT * FROM savedtrips ORDER BY DateCreated DESC, TimeCreated DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Saved Routes Archive - Sakay na Iloilo!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="logo-title">
        <img src="logo.png" alt="Logo" class="logo">
        <h1>Sakay na Iloilo!</h1>
    </div>
</header>

<nav class="main-nav">
    <button onclick="location.href='index.php'">Home</button>
    <button onclick="location.href='find_route.php'">Find Route</button>
</nav>

<h2>Saved Routes Archive</h2>
<table border="1">
    <thead>
    <tr>
        <th>Route</th>
        <th>Pickup</th>
        <th>Drop-off</th>
        <th>Type</th>
        <th>Fare</th>
        <th>Est. Time</th>
        <th>Date</th>
        <th>Time</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($row = $res->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['RouteName']) ?></td>
            <td><?= htmlspecialchars($row['PickupPoint']) ?></td>
            <td><?= htmlspecialchars($row['DropoffPoint']) ?></td>
            <td><?= htmlspecialchars($row['PassengerType']) ?></td>
            <td>₱<?= number_format($row['Fare'], 2) ?></td>
            <td><?= $row['EstimatedTime'] ?> mins</td>
            <td><?= $row['DateCreated'] ?></td>
            <td><?= $row['TimeCreated'] ?></td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
</body>
</html>
<?php $conn->close(); ?>
