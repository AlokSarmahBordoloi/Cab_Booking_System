<?php
session_start();
include("database.php");

if(isset($_POST['confirm'])){
    $ride_id = $_POST['r_id'];
    $driver_id = $_POST["driver_id"];
    $input_amount = $_POST["amount"];
    $car_no = $_POST["car_details"];
    $diver_name = $_POST["diver_name"];
    

    // Fetch rate details including amount per km and GST
    $rate_sql = "SELECT per_km, gst FROM rate";
    $rate_result = mysqli_query($conn, $rate_sql);
    $rate_row = mysqli_fetch_assoc($rate_result);
    $per_km = $rate_row['per_km'];
    $gst = $rate_row['gst'];

    // Calculate the amount
    $amount = $input_amount * $per_km;
    $gst_per = $amount * ($gst/100);
    $amount = $gst_per + $amount;
    

    $validate_driver_sql = "SELECT * FROM driver WHERE diver_id = ?";
    $validate_driver_stmt = mysqli_prepare($conn, $validate_driver_sql);
    mysqli_stmt_bind_param($validate_driver_stmt, "i", $driver_id);
    mysqli_stmt_execute($validate_driver_stmt);
    $validate_driver_result = mysqli_stmt_get_result($validate_driver_stmt);
    
    if(mysqli_num_rows($validate_driver_result) > 0) {
        // Proceed with the update if the driver_id exists in the driver table
        $sql = "UPDATE ride SET r_status = 'approved', diver_id = ?, diver_name = ?, car_no = ? ,amount = ?, ride_status = 'On the way' WHERE ride_id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "issdi", $driver_id, $diver_name, $car_no, $amount, $ride_id);
        $execute = mysqli_stmt_execute($stmt);

        if($execute){

            $_SESSION['status'] = "The Booking status has been Approved.";
            $_SESSION['status_code'] = "success";
            
            header('location:driverhome.php');

            

            exit(); // Terminate script after redirection
        } else {
            // Log or display detailed error information
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error: Driver ID does not exist.";
    }

    mysqli_close($conn);
}
?>


