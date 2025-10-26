<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php"); // Redirect back to form
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    header("Location: index.php");
    exit;
}
