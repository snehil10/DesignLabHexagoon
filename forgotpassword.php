<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Send Message</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    </head>
    <body onload="p()">
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">PTSIS</a>
                <div class='navbar-right'>
                    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
                </div>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-teal w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
            </div>
        </div>

    <center>
        <div class="w3-container w3-center" style="padding-top: 100px; max-width:700px">
            <div class="w3-container w3-card w3-text-teal" >
                <h3>Forgot Password</h3><hr>
                <form class='w3-container' method="post" action="forgotpassword_backend.php">
                    <div class="w3-section">
                        <label> I'm a: </label>
                        <select class = 'w3-select' name="option">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                            <option value="parents">Parent</option>
                        </select>
                        <br><br>
                        <h4>Enter your details:</h4><br>
                        
                        <label>Email-id</label>
                        <input class='w3-input w3-bordered' placeholder="Enter your email id" name="email" type="email">
                        <br>

                        <label>Mobile Number</label>
                        <input class='w3-input w3-bordered' placeholder="Enter your mobile no." name="number" type="text">
                        <br>

                        <button id = 'submit' class="w3-button w3-block w3-teal w3-section w3-padding" name="submit" type="submit">Send</button>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </center>

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
		function p(){
			<?php 
			if(isset($_SESSION['fgtpwd']))
				if($_SESSION['fgtpwd']==1)
					echo "alert('Email-id or Phone number incorrect')";
			?>
		}
    </script>
</body>
</html>