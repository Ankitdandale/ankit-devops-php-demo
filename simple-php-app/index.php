<?php
include 'config.php';

// Fetch all users
$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>
<body>
<h2>User Form</h2>
<form method="post" action="insert.php">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" value="Add User">
</form>

<h2>Stored Users:</h2>
<?php
if (mysqli_num_rows($result) > 0) {
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>" . htmlspecialchars($row['name']) . " - " . htmlspecialchars($row['email']) . "</li>";
    }
    echo "</ul>";
} else {
    echo "No users found.";
}
?>
</body>
</html>
