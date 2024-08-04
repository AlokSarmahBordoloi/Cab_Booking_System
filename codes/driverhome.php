<?php
session_start();
?>
<?php
include 'database.php';

if(isset($_SESSION["driver_email"])){
  $driver_email = $_SESSION["driver_email"];
  // $sql = "select * from driver where d_email = '$driver_email'";
  $sql = "SELECT * FROM `driver` inner join cab on driver.cab_id = cab.cab_id WHERE d_email = '$driver_email'";
  // SELECT * FROM `driver` inner join cab on driver.cab_id = cab.cab_id WHERE d_email = "jasonhunt@gmail.com";
  $execute = mysqli_query($conn, $sql);
  if($execute){
    $data = mysqli_fetch_assoc($execute);
    $driver_id = $data["diver_id"];
    $registration_no = $data["registration_no"];
    $divername = $data["diver_name"];
  }
}


?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>ApnaCab</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:500|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section ">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <span>
            Welcome to Apna Cab - 
              <?php
                //    if($execute){
                //     $data = mysqli_fetch_assoc($execute);
                //     //$customer_id = $data["customer_id"];
                //  echo $data["diver_name"];
                echo $divername;
                  // }
              ?>
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
          </button>
          <div class="collapse navbar-collapse ml-auto  " id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="index.html">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="why.html">Why Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li> -->
            </ul>
            <div class="#">
             
            <button  href="logout.php" class="tur"  type="button"  style="background-color: #ff7070; border-radius: 25px" >
            <a class="a" style="text-decoration:none; color:white;" href="logout.php">Logout</a>
            </button>
              
              <!-- <ul class="dropdown-menu" style="background-color: #ff7070;">
                <li><a class="dropdown-item"  href="log/hello/registration.php">User Signup</a></li>
                <li><a class="dropdown-item" href="log/hello/login.php">User Login  </a></li>
                <li><a class="dropdown-item" href="log/hello/registration.php">Driver Signup</a></li>
                <li><a class="dropdown-item" href="diver/index.html">Driver Login  </a></li>

              </ul> -->
            </div>
            <!-- <div class="user_option">
            <li><a href="#"> <i class="" > </i>Login / signUp</a> 
            
              <div class="sub-menu-1">
                <ul>
                  <li><a href="log/hello/registration.php">User Signup   </a></li>
                  <li><a href="log/hello/login.php">User Login    </a></li>
                  <li><a href="log/hello/registration.php">Driver Signup </a></li>
                  <li><a href="diver/index.html">Driver Login  </a></li>
                </ul>
              </div>
            
            </li> 
          </div>  -->
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->


    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="box">
        <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        Welcome To Apna Cab
                      </h1>
                      <p class="col-lg-11 px-0">
                        ApnaCabs is a government-licensed taxi aggregator that offers transparent and mandated fares. Founded by Bedanta Nath and Alok Sarma Bordoloi in 2024, it provides a refreshing alternative to traditional kaali-peeli taxis
                      </p>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="#">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        Safety and Security
                      </h1>
                      <p class="col-lg-11 px-0">
                        ApnaCabs ensures 100% security with GPS monitoring and a panic button for assistance.
                        Experience the safety of continuously monitored rides.
                      </p>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        Clean and Polite Service
                      </h1>
                      <p class="col-lg-11 px-0">
                        ApnaCabs promises spotless cabs with zero refusals.
                        Their chauffeurs are trained, cultured, and polite, ensuring a pleasant ride experience.
                      </p>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="carousel-btn-box">
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  <table class="table">
  
  <thead class="table-warning">
    <tr>
      <th scope="col">Ride ID</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Driver ID</th>
      <th scope="col">Driver Name</th>
      <th scope="col">Source</th>
      <th scope="col">Destination</th>
      <th scope="col">Pickup Time</th>
      <th scope="col">Approval Status</th>
      <th scope="col">No_of_Pasengers</th>
      <th scope="col">Car Number</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
      <th scope="col">Ride Status</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
$sql = "SELECT * FROM ride";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['ride_id'];
        $customerid = $row['customer_id'];
        $diverid = $row['diver_id'];
       
        $source = $row['source'];
        $destination = $row['destination'];
        $pickuptime = $row['pickuptime'];
        $r_status = $row['r_status'];
        $no_of_passengers = $row['no_of_patengers'];
        $car_number = $row['car_no'];
        $amount = $row['amount'];
        $date = $row['date'];
        $ride_status = $row['ride_status'];
?>

<tr>
    <th scope="row"><?php echo $id; ?></th>
    <td><?php echo $customerid; ?></td>
    <td><?php echo $diverid; ?></td>
    <td><?php echo $row['diver_name']; ?></td>
    <td><?php echo $source; ?></td>
    <td><?php echo $destination; ?></td>
    <td><?php echo $pickuptime; ?></td>
    <td><?php echo $r_status; ?></td>
    <td><?php echo $no_of_passengers; ?></td>
    <td><?php echo $car_number; ?></td>
    <td><?php echo $amount; ?></td>
    <td><?php echo $date; ?></td>
    <td><?php echo $ride_status; ?></td>
    
    <td>
    <?php if($r_status === "approved"): ?>
            <button type="button" class="btn btn-primary" disabled>
                Confirmed
            </button>
        <?php else: ?>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop_<?php echo $id; ?>">
                Confirm Ride
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel_<?php echo $id; ?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel_<?php echo $id; ?>">Insert Amount</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="confirm_ride.php" method="POST">
                                <input type="hidden" name="driver_id" value="<?php echo $driver_id ; ?>"> <!-- Include driver ID here -->
                                <input type="hidden" name="r_id" value="<?php echo $id; ?>">
                                <input type="hidden" name="car_details" value="<?php echo $registration_no; ?>">
                                <input type="hidden" name="diver_name" value="<?php echo $divername; ?>">
                                <input type="number" name="amount" class="form-control" placeholder="Enter Distance:">
                                <!-- <input type="text" name="car_details" class="form-control pt-3" placeholder="Enter Car Number:"> -->
                                <button type="submit" class="btn btn-primary mt-3" name="confirm">Approve</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </td>
    <td>
    <?php if($ride_status === "Not Started"): ?>
    <form action="complete_ride.php" method="GET" style="display: inline;">
        <input type="hidden" name="r_id" value="<?php echo $id; ?>">
        <button class="btn btn-success" type="submit" disbled>Complete_ride</button>

    </form>
    <?php else: ?>
      <form action="complete_ride.php" method="GET" style="display: inline;">
        <input type="hidden" name="r_id" value="<?php echo $id; ?>">
        <button class="btn btn-success" type="submit">Complete_ride</button>
        </form>
        <?php endif; ?>

      

    </td>
</tr>

<?php
    }
}
?>
  <div class = "container">





    

  <!-- book section -->

   <section class="book_section ">


    <div class="container d-flex">
 
      
            <div class="btn btn-warning">
              <button type="submit" class=""><a href="shortestdistencebetweentwolocation.html">See distance and rout on map</a></button>
            </div>
            <div class="btn btn-warning">
              <button type="submit" class=""><a href="https://www.google.com/maps/@26.1827561,92.6387837,14z?entry=ttu">See distance and rout on Google Map</a></button>
            </div>
            <div class="btn btn-warning">
              <button type="submit" class=""><a href="log\hello\displayrateforuser.php">See rates</a></button>
            </div>

      

      <!-- <div class="col-md-11 col=lg-9 mx-auto px-0">
        <div class="book_form "> 
        <form> -->
        <table class="table">
  
  <thead class="table-warning">
    <tr>
      <th scope="col">Ride ID</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Driver ID</th>
      <th scope="col">Source</th>
      <th scope="col">Destination</th>
      <th scope="col">Pickup Time</th>
      <th scope="col">R_Status</th>
      <th scope="col">No_of_Pasengers</th>
      <th scope="col">Car Number</th>
      <th scope="col">Amount</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $currentdate = date('20y-m-d');

   $currentdate;
$sql = "SELECT * FROM ride where date = '2024-05-17'";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['ride_id'];
        $customerid = $row['customer_id'];
        $diverid = $row['diver_id'];
        $source = $row['source'];
        $destination = $row['destination'];
        $pickuptime = $row['pickuptime'];
        $r_status = $row['r_status'];
        $no_of_passengers = $row['no_of_patengers'];
        $car_number = $row['car_no'];
        $amount = $row['amount'];
?>

<tr>
    <th scope="row"><?php echo $id; ?></th>
    <td><?php echo $customerid; ?></td>
    <td><?php echo $diverid; ?></td>
    <td><?php echo $source; ?></td>
    <td><?php echo $destination; ?></td>
    <td><?php echo $pickuptime; ?></td>
    <td><?php echo $r_status; ?></td>
    <td><?php echo $no_of_passengers; ?></td>
    <td><?php echo $car_number; ?></td>
    <td><?php echo $amount; ?></td>
    
    <td>
    <?php if($r_status === "approved"): ?>
            <button type="button" class="btn btn-primary" disabled>
                Confirmed
            </button>
        <?php else: ?>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop_<?php echo $id; ?>">
                Confirm Ride
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel_<?php echo $id; ?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel_<?php echo $id; ?>">Insert Distance</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="confirm_ride.php" method="POST">
                                <input type="hidden" name="driver_id" value="<?php echo $driver_id ; ?>"> <!-- Include driver ID here -->
                                <input type="hidden" name="r_id" value="<?php echo $id; ?>">
                                <input type="number" name="amount" class="form-control" placeholder="Enter distance:">
                                <input type="text" name="car_details" class="form-control pt-3" placeholder="Enter Car Number:">
                                <button type="submit" class="btn btn-primary mt-3" name="confirm">Approve</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </td>
    <td>
    <?php if($r_status === "approved"): ?>
    <form action="complete_ride.php" method="GET" style="display: inline;">
        <input type="hidden" name="r_id" value="<?php echo $id; ?>">
        <button class="btn btn-success" type="submit" >Complete_ride</button>

    </form>
    <?php else: ?>
      <form action="complete_ride.php" method="GET" style="display: inline;">
        <input type="hidden" name="r_id" value="<?php echo $id; ?>">
        <button class="btn btn-success" type="submit" disabled>Complete_ride</button>
        </form>
        <?php endif; ?>

      

    </td>
</tr>

<?php
    }
}
?>



          
           <!--  <div class="form-row">
              <div class="form-group col-md-6">
                <div class="input-group ">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-car" aria-hidden="true"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" id="inputDestination" placeholder="Car Type">
                </div>
              </div>
              <div class="form-group col-md-6">
                <div class="input-group ">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-clock-o" aria-hidden="true"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" id="inputDestination" placeholder="Pickup Time">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <div class="input-group ">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" id="inputDestination" placeholder="Pickup Location ">
                </div>
              </div>
              <div class="form-group col-md-6">
                <div class="input-group ">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" id="inputLocation" placeholder="Drop Location">
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="">Book Now</button>
            </div>
            <div class="btn-box">
              <button type="submit" class=""><a href="shortestdistencebetweentwolocation.html">Select on map</a></button>
            </div>-->
          <!-- </form> 
        </div> 
      </div>-->
    </div>
  </section>
 

  <!-- end book section -->


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Whether it’s a short ride within the city or a long-distance journey, ApnaCabs delivers convenience, reliability, and safety. 🚖🌟
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- why section -->

  <section class="why_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="why_container">
        <div class="row">
          <div class="col-md-4">
            <div class="box b1">
              <div class="img-box">
                <img src="images/w1.png" alt="" class="" />
              </div>
              <div class="detail-box">
                <h5>
                  Fast & Easy Booking
                </h5>
                <p>
                  Access cabs easily, currently through the website or the call center.
                  Choose from point-to-point, hourly, or daily rentals based on your needs.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box b2">
              <div class="img-box">
                <img src="images/w2.png" alt="" class="" />
              </div>
              <div class="detail-box">
                <h5>
                  Driving safety
                </h5>
                <p>
                  ApnaCabs ensures 100% security with GPS monitoring and a panic button for assistance.
                  Experience the safety of continuously monitored rides.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box b3">
              <div class="img-box">
                <img src="images/w3.png" alt="" class="" />
              </div>
              <div class="detail-box">
                <h5>
                  Full Satisfaction
                </h5>
                <p>
                  Treats customers with “apnapan” (like family).
                  Convenient payment options: cash or prepayment via credit/debit cards.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end why section -->

  <!-- app section -->

  <section class="app_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Download Our App
              </h2>
            </div>
            <p>
              We developing our ApnaCab mobile App and it will available soon.
            </p>
            <div class="btn-box">
              <a href="">
                <img src="images/app_store.png" alt="">
              </a>
              <a href="">
                <img src="images/google_play.png" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/app-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end app section -->

  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Latest From Blog
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/b1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6 class="blog_date">
                29 July 2023
              </h6>
              <h5>
                Jorhat Town
              </h5>
              <p>
                The major modes of transportation in Assam are roadways, railways, airways and inland waterways. At present, there are two road cum rail bridges and one road bridge over the river Brahmaputra.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/b2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6 class="blog_date">
                30 July 2023
              </h6>
              <h5>
                Transport
              </h5>
              <p>
                The major modes of transportation in Assam are roadways, railways, airways and inland waterways. At present, there are two road cum rail bridges and one road bridge over the river Brahmaputra.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          What Says Our Customers
        </h2>
      </div>
    </div>
    <div class="container">
      <div class="col-md-9 mx-auto px-0">
        <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExample2Controls" data-slide-to="0" class="active">
              <img src="images/d1.jpg" alt="">
            </li>
            <li data-target="#carouselExample2Controls" data-slide-to="1">
              <img src="images/c2.jpg" alt="">
            </li>
            <li data-target="#carouselExample2Controls" data-slide-to="2">
              <img src="images/c3.jpg" alt="">
            </li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="detail-box">
                <h5>
                  Abinash Bora
                </h5>
                <h6>
                  Official
                </h6>
                <p>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                  Apna Cab has been my go-to for hassle-free rides. The drivers are punctual, the cabs are clean, and the fares are reasonable. Whether it’s a quick airport transfer or a day-long trip, Apna Cab ensures a smooth journey. Highly recommended! ⭐⭐⭐⭐⭐
                 <i class="fa fa-quote-right" aria-hidden="true"></i>
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="detail-box">
                <h5>
                  Tikendrajit Das
                </h5>
                <h6>
                  Official
                </h6>
                <p>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                  From solo trips to family outings, Apna Cab has been my reliable travel companion. Their customer support is responsive, and the app is user-friendly. I’ve recommended it to friends, and they’ve all had positive experiences. Cheers to a great service! 🌟🌟🌟🌟🌟<i class="fa fa-quote-right" aria-hidden="true"></i>
                 <i class="fa fa-quote-right" aria-hidden="true"></i>
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="detail-box">
                <h5>
                  Chandrani Bora
                </h5>
                <h6>
                  Official
                </h6>
                <p>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                  Safety matters to me, especially during late-night rides. With Apna Cab, I feel secure. The drivers follow traffic rules, and the cabs are well-maintained. Plus, the app’s real-time tracking feature gives peace of mind. Kudos to the team! 👏🌟<i class="fa fa-quote-right" aria-hidden="true"></i>
                 <i class="fa fa-quote-right" aria-hidden="true"></i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- info section -->
  <section class="info_section ">

    <div class="container">
      <div class="info_top ">
        <div class="row ">
          <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="info_detail">
              <a href="">
                <h4>
                  ApnaCab
                </h4>
              </a>
              <p>
              In the hustle and bustle of the city, finding a reliable ride can feel like a dream. But with Apna Cab, booking a taxi is as sweet as mango lassi on a hot day. Their app is smooth and user-friendly, letting you call a car in just a tap, like dialing a friend for a pick-up.
              </p>
              <div class="social_box">
                <a href="https://www.facebook.com/bedantajesonnath.wakon">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://twitter.com/DJJasonHunt">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="https://www.linkedin.com/in/bedanta-nath-55a273214?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/jviomusic/">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
            <h4>
              Contact us
            </h4>
            <p>
            So, ditch the worry and hop on an Apna Cab. It's the sweetest way to navigate the city, leaving you free to cherish the moments that truly matter.
            </p>
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : 6001028021
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : jviomusic@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <h4>
                SIGN UP TO OUR NEWSLETTER
              </h4>
              <form action="">
                <input type="text" placeholder="Enter Your Email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://www.instagram.com/jviomusic/">MCACAB</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script src="js/sweetalert.js"></script>
  
    <?php
        if (isset($_SESSION['status']) && $_SESSION['status'] != ' ')
        {
          ?>
          <script>
              Swal.fire({
              // position: "top-end",
              icon: "<?php echo $_SESSION['status_code']; ?>",
              title: "<?php echo $_SESSION['status']; ?>",
              showConfirmButton: false,
              timer: 2800
              });
          </script>
          <?php
          unset($_SESSION['status']);
        }
    
    ?>
 
</body>

</html>