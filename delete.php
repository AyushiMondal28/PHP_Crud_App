<?php include "db.php"; ?>

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
<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted!";
    }
}
?>
</div>
<script src="script.js"></script>
</body>
</html>
