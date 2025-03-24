<?php include "db.php"; ?>

<?php
$successMessage = "";
$showForm = true; // Controls form visibility

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        $successMessage = "Record updated successfully!";
        $showForm = false; // Hide form after update
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<button onclick="goBack()">🏠</button>
<button class="theme-toggle" onclick="toggleTheme()"><span id="theme-icon">🌙</span></button>
<div class="container">    
    <?php if (!$showForm): ?>
    <p style="color: green;"><?= $successMessage ?></p>
    <button onclick="window.location.href='update.php?id=<?= $id ?>'">Update More</button>
    <button onclick="window.location.href='index.php'">Go Back</button>
<?php else: ?>
    <form method="POST">
        Name: <input type="text" name="name" value="<?= $row['name'] ?>" required>
        Email: <input type="email" name="email" value="<?= $row['email'] ?>" required>
        <button type="submit">Update</button>
    </form>
<?php endif; ?>
</div>
<script src="script.js"></script>
</body>
</html>