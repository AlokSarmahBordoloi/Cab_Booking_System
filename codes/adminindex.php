<?php
include("database.php");
session_start();
?>
<?php
include("database.php");
if (isset($_SESSION["email"])) {
    $a_email = $_SESSION["email"];
    $sql = "select * from admin where a_email = '$a_email'";
    $execute = mysqli_query($conn, $sql);
  }
  
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Apna Cab Admin Dashboard</title>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"><link rel="stylesheet" href="./adminstyle1.css">

</head>
<body style="background-color:powderblue;">
<!-- partial:index.partial.html -->
<header>
  <ul class="breadcrumbs">
    <li><a href="index.html">Home</a></li>
    <li><a href="logout.php">Logout</a></li>
    <li><a href="https://www.instagram.com/jviomusic/">Contact Developers</a></li>
    <li><span>
              Hello - 
              <?php
                   if($execute){
                    $data = mysqli_fetch_assoc($execute);
                    
                 echo $data["a_name"];

                  }
              ?>

            </span>
    </li>
  </ul>
  
  <div class="credits">Apna Cab <a href="https: www.instagram.com/jviomusic/">Jvio Studio</a> -> <a href="https://www.instagram.com/jviomusic/">Apna Cab team</a></div>
</header>

<div class="content" style="background-image: url('images/about-img.png');width: 100%;
height: auto;">
  <p style="background-image: url('images/about-img.png');"></p>
  <div class="caption" style="color: #212020c5;text-decoration:none;">
    <h1 style="text-decoration:none">Apna Cab</h1>
    <h1 style="text-decoration:none"> </h1>
    <h1 style="text-decoration:none">Dashboard</h1>
    <!-- <span class="city">Location</span>
    <span class="country">Cities</span> -->
    <div class="test" style="height:250px;">

    </div>
    
  </div>
  
  <nav class="main-nav">
    <ul>
      <li class="weather">
        <div class="menuicon fa fa-bars"></div>
        <div class="ul-menu">
          <p>Settings</p>
            <ul>
              <li><a href="log\hello\displayuser.php">Manage Users</a></li>
              <li><a href="log/hello/adduser.php">Add Users</a></li>
              <li><a href="log\hello\showbill.php">Show Bill</a></li>
            </ul>
            <!-- <label for="weatherlocation">Serach</label>
            <input type="text" name="weatherlocation" placeholder="location" />
            <button>Show Users</button> -->
          <div class="ul-menu-close fa fa-times"></div>
        </div>
        <div class="icon fa fas fa fa-users fa-2x"></div>
        <span>Users</span>
      </li>
      
      
      <li class="gallery active">
        <div class="menuicon fa fa-bars"></div>
        <div class="ul-menu">
          <p>Settings</p>
            <ul>
              <li><a href="log\hello\displaydrivers.php">Manage Drivers</a></li>
              <li><a href="log\hello\driver_registration.php">Add Drivers</a></li>
              <li><a href="log\hello\displayrate.php">Update Rate</a></li>
            </ul>
            <!-- <input type = "range" min="0" max="100" onchange="rangevalue.value=value"/>
            <output id="rangevalue">50</output>
            <button>Show Drivers</button> -->
          <div class="ul-menu-close fa fa-times"></div>
        </div>
        <div class="icon fa fas fa fa-user fa-2x"></div>
        <span>Drivers</span>
      </li>
      
      
      <li class="history">
        <div class="menuicon fa fa-bars"></div>
        <div class="ul-menu">
          <p>Settings</p>
              <a href="log\hello\showcab.php"><button>Show Cabs</button>
          <div class="ul-menu-close fa fa-times"></div>
        </div>
        <div class="icon fa fas fa-car fa-2x"></div>
        <span>Cabs</span>
      </li>

      <li class="likes">
        <div class="menuicon fa fa-bars"></div>
        <div class="ul-menu">
          <p>Settings</p>
            <ul>
            <li><a href="log\hello\displayride.php">Show Rides</a></li>
             <li><a href="log\hello\displayride.php">Show Rides</a></li> 
              <li><a href="log\hello\addrate.php">Insert Rate</a></li>
              <li><a href="log\hello\displayrate.php">Show Rate</a></li>  
            </ul>
            <button>Show Rides</button>
            <a href="log\hello\displayride_copy.php"><button>Show Bill</button></a>
          <div class="ul-menu-close fa fa-times"></div>
        </div>
        <div class="icon fa far fa-file fa-2x"></div>
        <span>Bill</span>
      </li>
      
      <li class="comments">
        <div class="menuicon fa fa-bars"></div>
        <div class="ul-menu">
          <p>Settings</p>
            <ul>
            </ul>
            <a href="log\hello\showbill.php"><button>Show Bill</button></a>
          <div class="ul-menu-close fa fa-times"></div>
        </div>
        <div class="icon fa fa-map-marker fa-2x"></div>
        
        <span>Ride</span>
      </li>
    </ul>    
  </nav>
</div>

<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
