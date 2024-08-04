<?php
session_start();
if (isset($_SESSION["customer"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
            $cars = $_cars["cars"];
           $fullName = $_POST["fullname"];
           $dob = $_POST["dob"];
           $email = $_POST["email"];
           $phone = $_POST["phone"];
           $gender = $_POST["gender"];
           $password = $_POST["password"];
           $gender = $_POST["gender"];
           $address = $_POST["add"];
        //    $passwordRepeat = $_POST["repeat_password"];
           
        //    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
        //    if ($password!==$passwordRepeat) {
        //     array_push($errors,"Password does not match");
        //    }
           require_once "database.php";
           $sql = "SELECT * FROM driver WHERE c_email_id = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO driver (cab_id, deiver_name, d_dob, d_email_id, d_phone_no, d_gender, d_password, d_address) VALUES ( ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"isssisss",$cars, $fullName, $dob, $email, $phone, $gender, $password, $address);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
        }
        ?>

    

        <form action="registration.php" method="post">

            <h2>DRIVER REGISTATION</h2> <br>

            <div class="form-group">
            <label for="name">License Number</label>
            <input type="text" class="form-control" name="fullname" placeholder="Full Name:" required>
            </div>

            <div class="form-group">
            <label for="name">Car Number</label>
            <input type="text" class="form-control" name="fullname" placeholder="Full Name:" required>
            </div>

            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="fullname" placeholder="Full Name:" required>
            </div>

            <div class="form-group">
            <label for="gender">Gender</label> <br>
			<input type="radio"  name="gender" id="gender" value = "m" placeholder="gender" required>Male&nbsp; 
			<input type="radio"  name="gender" id="gender" value = "f" placeholder="gender" required>Female
            </div>

            <div class="form-group">
            <label for="name">DOB</label>
			<input type="date" name="dob" id="dob" class="form-control" placeholder="dd-mm-yyyy" required>
            </div>

            <div class="form-group">
            <label for="name">Phone</label>
			<input type="tel" name="phone" class="form-control" id="phone" placeholder="6004567890" pattern="[6789][0-9]{9}" required>
            </div>
            
			<div class="form-group">
            <label for="name">Address</label>
			<input type="text" name="add" class="form-control" id="add" placeholder="Enter your address" required>
            </div>

            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email"  pattern="[^ @]*@[^ @]*" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
            <label for="name">Password</label>
            <input type="password" class="form-control" name="password" placeholder="123Aa@#7" pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g" requried>
            </div>

            <!-- <div class="form-group">
            <label for="name">Confirm Password</label>
            <input type="password" class="form-control" name="passwordRepeat" placeholder="123Aa@#7" pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g" requried>
            </div> -->

            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
      </div>
    </div>
</body>
</html>