<?php
session_start();
include("database.php");

$ride_id = $_GET['ride_id'];

// Check if ride_id is received correctly
if (empty($ride_id)) {
    die("Error: ride_id is not set.");
}

// Debugging output
echo "ride_id: " . htmlspecialchars($ride_id) . "<br>";

// Corrected SQL statement
$sql = "UPDATE ride SET r_status = 'cancelled' WHERE ride_id = ?";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {
    die("Error in preparing statement: " . mysqli_error($conn));
}

// Bind the ride_id parameter to the statement
mysqli_stmt_bind_param($stmt, "i", $ride_id);

// Execute the statement
$execute = mysqli_stmt_execute($stmt);

if ($execute) {
    // Check how many rows were affected
    $affected_rows = mysqli_stmt_affected_rows($stmt);
    if ($affected_rows > 0) {
        // Optionally set a session variable or flash message
        // $_SESSION['cancelled'] = true;
        $_SESSION['status'] = "The booking status has been cancelled.";
        $_SESSION['status_code'] = "success";
        header('location:customerhome.php');
        exit();
    } else {
        echo "No rows were updated. The ride_id may not exist or is already cancelled.";
    }
} else {
    echo "Error in executing statement: " . mysqli_error($conn);
}

// Close the statement and the database connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
