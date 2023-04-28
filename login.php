<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://kit.fontawesome.com/00ee24977f.js" crossorigin="anonymous"></script>
    <title>Sign In</title>
</head>
<body>
        <nav>
            <h3 class="logo"> <a href="index.html"><span class="pedal">Pedal</span>पे
                <p> <span class="pedal">ZERO EMISSION,</span>ZERO EXCUSES</p>
                </a>
            </h3>
        </nav>
</body>
</html>



<?php
session_start();
include("connect.php");

if(isset($_POST['login'])) 
{
	$email=$_POST['email'];
	$sql = mysqli_query($conn,
	"SELECT * FROM User_info WHERE Email= '$email' AND
	password='" . $_POST["pwd"] . "' ");

	$num = mysqli_num_rows($sql);

	if($num > 0) {
		$row = mysqli_fetch_array($sql);
		$_SESSION['Email']=$email;

		// header("location:startride.php");
		// exit();

		if ($row ['status1'] == 1) {
            header("Location: endride.php");
        } else if ($row['status1'] == 0) {
            header("Location: startride.php");
        }
		exit();
	}
	else {
?>
<hr>
<font color="red"><b>
		<h3>Sorry Invalid Username and Password<br>
			Please Enter Correct Credentials</br></h3>
	</b>
</font>
<hr

<?php
	}
}
?>
<html>

<head>
	<style>
		th {
			text-align: left;
		}

		td {
			text-align: center;
		}

		a {
			text-decoration: none;
		}
	</style>
</head>

<body>
	<form method="post" action="login.php">
		
    <div class="signinbox">
                <h2 style="font-weight:lighter">Sign In</h2>
                <p>Login to your account</p>
			<table>
				<tr>
					<td><input type="text" name="email" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$"
							id="email" placeholder="Email" required>
						</td>
				</tr>
				<tr>
					<td><input type="password"
						name="pwd" id="pwd" placeholder="Password" required></td>
				</tr>
				<tr>
					<td colspan="2" height="40"><input
						type="submit" name="login"
						value="Login"></td>
				</tr>
			</table>
		
	</form>
</body>

</html>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://kit.fontawesome.com/00ee24977f.js" crossorigin="anonymous"></script>
    <title>Sign In</title>
</head>
<body>
        <nav>
            <h3 class="logo"> <a href="index.html"><span class="pedal">Pedal</span>पे
                <p> <span class="pedal">ZERO EMISSION,</span>ZERO EXCUSES</p>
                </a>
            </h3>
        </nav>

    
            <div class="signinbox">
                <h2 style="font-weight:lighter">Sign In</h2>
                <p>Login to your account</p>
                <form action="post">
                    <input type="text"  pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required placeholder="Email">
                    <input type="password" placeholder="Password" required>
                    <br>
                    <input type="checkbox" name="rememberme" id="remember" required> remember me
                    <br>
                    <input type="submit" value="Sign In">
                
                </form>
            </div>
            <div class="center">
                <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
                <p><a href="#">Forgot password</a></p>
            </div>
            
        
        
        
    
</body>
</html> -->