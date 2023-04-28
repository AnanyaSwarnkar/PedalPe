<?php
include("connect.php");
session_start(); // start the session
if (isset($_POST['submit'])) {
  //  $row['status'] = 1;
    $query = mysqli_query(
        $conn,
        "INSERT INTO cycle_info SET Cycle_Id ='" . $_POST["cid"] . "', Email='" . $_SESSION["Email"] . "'"
    ); // insert the cycle id and the user's email from the session into the cycle_info table
    // update user_info table
    $update_query = mysqli_query(
        $conn,
        "UPDATE user_info SET status1 = 1 WHERE Email = '" . $_SESSION["Email"] . "'"
    );
?>
    <script>
        alert('YOUR TIME STARTS NOW!!,Logout to continue');
    </script>
<?php
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="120;url=http://localhost/PP/signup.php" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="startride.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://kit.fontawesome.com/00ee24977f.js" crossorigin="anonymous"></script>
    <title>Start Ride</title>
</head>
<body>
        <nav>
            <h3 class="logo"> <a href="index.html"><span class="pedal">Pedal</span>पे
                <p> <span class="pedal">ZERO EMISSION,</span>ZERO EXCUSES</p>
                </a>
            </h3>
            <div class="navbar">
            <ul>
            <li> <a href="index.html">Home</a> </li>
            <li> <a href="signup.php">Login</a></li>
            <li><a href="wallet.php">Wallet</a></li>
                <li><a href="about.html">About</a></li>
                
            <?php 
            // include("connect.php");
            //     $sel ="SELECT * FROM user_info where Username=";
            //     $query = mysqli_query($conn , $sel);
            //     $resul = mysqli_fetch_assoc($query);
            echo "WELCOME ".$_SESSION['Email'];
            ?>
            <!-- <h3 class="nav-item dropdown no-arrow"> 
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                        
                    </span>
                </a>
            </h3> -->
            <form method="post" action="logout.php">
                <div class="buttons end">
                    <button type="submit" name="logout">Logout</button>
                </div>
                
            </form>
        </nav>
        <form method="post" action="startride.php" name="frm2">
        <table>
                <tr>
                    <td>
                        <div class="cycleid">
                            <input type="text" name="cid" id="cid" required placeholder="Enter cycle id and click on start">
                        </div>
                        
                    </td>
                </tr>
                <tr>
                     <div class="buttons">
                        <td height="40" colspan="2"><input type="submit" name="submit" value="Start Ride"></td>
                    </div>
                    </td>
                </tr>
        </table>
    </form>
        <!-- <div class="cycleid">
            <input type="text" name="Cycle_Id", id="Cycle_Id" placeholder="Enter cycle id and click on start">
        </div> -->
        <img src="img/giphy.gif" alt="" class="startcycle">

       
        <div class="timeOutput"></div>
        <div class="timer">
            <h2>Time Left</h2>
            <br>
            <br>
            <br>
            <img src="img/Timer.gif" alt="" class="countdown" >
        </div>
        
</body>
</html>
<!-- <script
let startTime, endTime;

document.getElementById("start").addEventListener("click", function(){
  startTime = new Date().getTime();
});

document.getElementById("end").addEventListener("click", function(){
  endTime = new Date().getTime();
  const totalTimeInSeconds = (endTime - startTime) / 1000;
  document.getElementById("timeOutput").innerHTML = `Total time: ${totalTimeInSeconds} seconds`;
});
</script> -->
