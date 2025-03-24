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
    
    <h2>User List</h2>
<table >
<tr>
        <?php
        // Fetch column names dynamically
        $result = $conn->query("SHOW COLUMNS FROM users");
        while ($column = $result->fetch_assoc()) {
            echo "<th>{$column['Field']}</th>";
        }
        ?>
        <th>Actions</th>
    </tr>

    <?php
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "<td>
                <a href='update.php?id={$row['id']}'class='rd-btn'>✏️</a> 
                <a href='delete.php?id={$row['id']}'class='rd-btn delete-btn'>🗑️</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>

</div>
<script src="script.js"></script>
</body>
</html>
