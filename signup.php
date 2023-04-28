<?php

include("connect.php");

if (isset($_POST['submit'])) {
    $query = mysqli_query(
        $conn,
        "INSERT INTO user_info SET Username ='" . $_POST["Username"] . "',Email ='" . $_POST["Email"] . "',
            password ='". $_POST["pwd"] . "'        "
    );

?>
    <script>
        alert('You Registered Successfully,Now Sign In to continue !!');
    </script>
<?php
}
?>
<html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://kit.fontawesome.com/00ee24977f.js" crossorigin="anonymous"></script>
    <title>Sign Up</title>
</head>

<nav>
            <h3 class="logo"> <a href="index.html"><span class="pedal">Pedal</span>पे
                <p> <span class="pedal">ZERO EMISSION,</span>ZERO EXCUSES</p>
                </a>
            </h3>

            <div class="navbar">
                <ul>
                    <li> <a href="index.html">Home</a> </li>
                       
                  
                    <li><a href="login.php"> Login</a></li>
                    <li><a href="about.html">About</a></li>
                </ul>
            </div>
</nav>

<div class="container">
            <div class="left column">
                <img src="img/otp.png" alt="">
            </div>
            <div class="right column ">
                <div class="login">
                    <h1>Create your account</h1>

<body>
    <!-- <a href="login.php" style="font-size:30px; float:right;">
        Login
    </a> -->
    <form method="post" action="signup.php" name="frm1">

 
            <table >
                <tr>
                    <td><input type="text" name="Username" id="Username" required placeholder="Username" pattern="^[a-zA-Z]{2,}$" title="Must contain at least two letters">
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="Email" id="Email" required placeholder="Email" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
                    </td>
                </tr>
                <tr>

                    <td><input type="password" name="pwd" id="pwd" required placeholder="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=!])(?!.*\s).{8,}$" title="Must contain minimum eight and at least one uppercase letter, one lowercase letter, one number and one special character" required>
                    </td>
                </tr>
                <tr>
                    <td height="40" colspan="2"><input type="submit" name="submit" value="Create my account"></td>
                    </td>
                    <td>
                      
                    
                    </td>
                </tr>
                </tr>
            </table>
            <p>Already have an account? <a href="login.php">Sign In</a></p>
            
         
    </form>
</body>

</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://kit.fontawesome.com/00ee24977f.js" crossorigin="anonymous"></script>
    <title>Sign Up</title>
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
                        <li> <a href="wallet.html"> Wallet</a></li>
                    <li>Stands</li>
                    <li>Login</li>
                    <li>About</li>
                </ul>
            </div>
        </nav>
            
         <div class="container">
            <div class="left column">
                <img src="img/otp.png" alt="">
            </div>
            <div class="right column ">
                <div class="login">
                    <h1>Create your account</h1>
                    
                    <form method="post" action="signup.php" name="frm1">
                       
                        <input type="text" required placeholder="Username" label for="Username">
                        <input type="text" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required placeholder="Email" id="Email" label for="Email">
                        <input type="password" name="Password" placeholder="Password" required id="Password" label for="Username">
                        <input type="checkbox" name="terms" id="" style="font-size: 0.5rem;" required> I agree to the Terms & Conditions
                        <input type="submit" value="Create my account" value="User_info">
                        <p>Already have an account? <a href="signin.html">Sign In</a></p>
                       
                    </form>
                </div>
            </div>
         </div>
    
    
</body>
</html> -->