<?php include "db.php"; ?>

<?php
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        $successMessage = "Record added successfully!";
    } else {
        $successMessage = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<button onclick="goBack()">🏠</button>
<button class="theme-toggle" onclick="toggleTheme()"><span id="theme-icon">🌙</span></button>
<div class="container">

<h2>Add Data</h2>
<?php if ($successMessage): ?>
    <p style="color: green;"><?= $successMessage ?></p>
    <a href="index.php"><button>Go Back</button></a>
<?php else: ?>
    <form method="POST">
        Name: <input type="text" name="name" required>
        Email: <input type="email" name="email" required>
        <button type="submit">Add</button>
    </form>
<?php endif; ?>
</div>
<script src="script.js"></script>
</body>
</html>
