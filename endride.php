<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="startride.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://kit.fontawesome.com/00ee24977f.js" crossorigin="anonymous"></script>
    <title>End Ride</title>
</head>

<nav>
            <h3 class="logo"> <a href="index.html"><span class="pedal">Pedal</span>पे
                <p> <span class="pedal">ZERO EMISSION,</span>ZERO EXCUSES</p>
                </a>
            </h3>

            <div class="navbar">
                <ul>
                    <li> <a href="index.html">Home</a> </li>
                        <li> <a href="wallet.php"> Wallet</a></li>
                        
                 
                    <li><a href="login.php"> Login</a></li>
                    <li><a href="about.html">About</a></li>
                </ul>
            </div>
</nav>

<body>

<?php
include("connect.php");
session_start(); 
// include("connect.php");
//     $sel ="SELECT * FROM user_info where Username=";
//     $query = mysqli_query($conn , $sel);
//     $resul = mysqli_fetch_assoc($query);
echo " WELCOME ".$_SESSION['Email'];
?>

         <img src="img/giphy.gif" alt="" class="startcycle">


<div class="timeOutput"></div>
</div>
</body>
</html>


<!-- <script>
document.getElementById("endButton").addEventListener("click", function() {
  // Send an AJAX request to the PHP script
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "updateCycleInfo.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Redirect to wallet.php
      window.location.replace("wallet.php");
    }
  };
  xhr.send();
});




</script> -->

<?php
if(isset($_POST['submit'])) {
    date_default_timezone_set('Asia/Kolkata');
    $currentTime = date("h:i:s ");
    //echo "The current time in IST is: ".$currentTime;
}
// Query the database to retrieve the start time

$query = "SELECT start_time FROM cycle_info WHERE Email = '{$_SESSION['Email']}'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$start_time = $row['start_time'];

// Calculate the time difference
$current_time = date("Y-m-d H:i:s"); // Get the current time
$start_timestamp = strtotime($start_time); // Convert the start time to a Unix timestamp
$current_timestamp = strtotime($current_time); // Convert the current time to a Unix timestamp
$time_diff = ($current_timestamp - $start_timestamp)/60; // Calculate the difference in seconds


// Output the time difference
echo "Duration:" . $time_diff . " minutes.";
$pay=$time_diff*0.5;
echo "Payment deducted: " . $pay ;
?>

<form method="post">
  <div class="buttons">
      <button type="submit" name="submit">END</button>
  </div>
  
</form>

