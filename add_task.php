<?php
// Include database connection
include 'db_connection.php';

// Get task from form
$task = $_POST['task'];

// Insert task into database
$sql = "INSERT INTO tasks (task, status) VALUES ('$task', 'pending')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php"); // Redirect back to main page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
