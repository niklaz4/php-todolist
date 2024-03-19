<?php
// Include database connection
include 'db_connection.php';

// Get task ID from URL parameter
$id = $_GET['id'];

// Update task status to completed in database
$sql = "UPDATE tasks SET status = 'completed' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php"); // Redirect back to main page
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
