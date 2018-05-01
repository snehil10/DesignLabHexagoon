<?php
session_start();
include('connection.php');
if(isset($_COOKIE['user']))
{
	$x=explode('_',$_COOKIE['user']);
	echo $x[0];
	$_SESSION['username']=$_COOKIE['user'];
	if($x[0]=='st')
		header('location:student_display.php');
	if($x[0]=='t')
		header('location:teacher_display.php');
	if($x[0]=='pt')
		header('location:parent_display.php');
}
?>
<!DOCTYPE html>
<html>
    <title>PTSIS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar_style.css">
    <style>
        
    </style>
    
    <body onload="afunction()">
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">PTSIS</a>
                <div class='navbar-right'>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log In</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin Corner</a>
                </div>
            </div>

        <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="#" class="w3-bar-item w3-button w3-padding-large">About</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Log In</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Admin Corner</a>
            </div>
        </div>

        <!-- Header -->
        <div id='headerMain'>
            <header id="main_page_header" class="w3-container w3-teal w3-center" style="padding:128px 16px">
                <h1 class="w3-margin w3-jumbo">Welcome!</h1>
                <p class="w3-xlarge">Let's get started.</p>
                <button class="w3-button w3-teal w3-padding-large w3-large w3-margin-top" 
                    onclick="document.getElementById('login_modal').style.display='block'" >Get Started</button>
            </header>
        </div>
        
        <!-- User Login Modal -->
        <div id="login_modal" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('login_modal').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">x</span>
                    <img src="img_avatar.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
                </div>

                <form class="w3-container" action="login_backend.php" method="post">
                    <div class="w3-section">
                        <label><b> I'm a: </b> </label>
                        <select class = 'w3-select' name="option">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                            <option value="parents">Parent</option>
                        </select>
                        
                        <br><br><label><b>Username</b></label>
                        <input class="w3-input w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
                        <label><b>Password</b></label>
                        <input class="w3-input " type="password" placeholder="Enter Password" name="psw" required>
                        <input class="w3-check w3-margin-top" type="checkbox" name="remmember" checked="checked"> Remember me
						<button id = 'login' class="w3-button w3-block w3-teal w3-section w3-padding" name="submit" type="submit">Login</button>
                        </div>
                    </form>

                    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                        <button id = 'cancel' onclick="document.getElementById('login_modal').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
                        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
                    </div>
                </div>
            </div>
        
        <!-- Admin Modal -->
        <div id="admin_modal" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('login_modal').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">x</span>
                    <img src="img_avatar.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
                </div>

                <form class="w3-container" action="" method="post">
                    <div class="w3-section">
                        <label><b>Username</b></label>
                        <input class="w3-input w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
                        <label><b>Password</b></label>
                        <input class="w3-input " type="password" placeholder="Enter Password" name="psw" required>
                        <input class="w3-check w3-margin-top" type="checkbox" name="remmember" checked="checked"> Remember me
						<button id = 'login' class="w3-button w3-block w3-teal w3-section w3-padding" name="submit" type="submit">Login</button>
                        </div>
                    </form>

                    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                        <button id = 'cancel' onclick="document.getElementById('login_modal').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
                        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
                    </div>
                </div>
            </div>

        <!-- First Grid -->
        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <div class="w3-twothird">
                    <h1>Lorem Ipsum</h1>
                    <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

                    <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="w3-third w3-center">
                    <i class="fa fa-anchor w3-padding-64 w3-text-teal"></i>
                </div>
            </div>
        </div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-teal w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Lorem Ipsum</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
function afunction(){
	<?php
		
		if(isset($_SESSION['loginstatus']))
		{
			if($_SESSION['loginstatus']==1)
				print "alert('Username or Password incorrect');";
				session_destroy();
		}

	?>
}
</script>

</body>
</html>
