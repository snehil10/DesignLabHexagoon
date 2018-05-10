<!DOCTYPE html>
<html>
    <title>Edit Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    
    <style>

    </style>

    <body onload>
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">PTSIS</a>
                <div class='navbar-right'>
                    <a href="view_results.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Results</a>
                    <a href="student_display.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Dashboard</a>
                    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
                </div>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="view_results.php" class="w3-bar-item w3-button w3-padding-large">View Results</a>
                <a href="student_display.php" class="w3-bar-item w3-button w3-padding-large">Dashboard</a>
                <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
            </div>
        </div>

        <center>
        <div class="w3-container w3-center" style="padding-top: 100px; max-width:700px">
            <div class="w3-container w3-card w3-text-teal" >
                <h3>Edit Information</h3><br>
				<?php
				include('connection.php');
				session_start();
				$sql="select * from student where username='".$_SESSION['username']."'";
				$result=mysqli_query($con,$sql);
				if(!$result)
				{
					echo mysqli_error($con);
					exit();
				}
				else
				{
					$row=mysqli_fetch_assoc($result);
					$name=$row['name'];
					$phone_number=$row['mobile_number'];
					$address=$row['address'];
					$email=$row['email_id'];
					$enroll_id=$row['enroll_id'];
					$univ_roll=$row['univ_roll'];
					$reg_id=$row['reg_id'];
					$class_roll=$row['class_roll'];
					$semester=$row['semester'];
					$section=$row['section'];
					$stream=$row['stream'];
					$password=$row['password'];
					
				}
				?>
                <form class='w3-container' method="post" action="edit_student_backend.php">
                    <div class="w3-section">
                        <label><b> Name </b> </label>
                        <input class="w3-input w3-margin-bottom" type="text" placeholder="" <?php echo "value='".$name."'";?> disabled name="name">
                        <br>
                        <label><b>Phone Number</b></label>
                        <input class="w3-input w3-margin-bottom" type="number" placeholder="" <?php echo "value='".$phone_number."'";?> name="phone">
                        <br>
                        <label><b>Address</b></label>
                        <input class="w3-input w3-margin-bottom" type="text" placeholder="" <?php echo "value='".$address."'";?> name="address">
                        <br>
                        <label><b>Email-id</b></label>
                        <input class="w3-input w3-margin-bottom" type="email" placeholder="" <?php echo "value='".$email."'";?> name="email">
                        <br>
						<label><b>Password</b></label>
                        <input class="w3-input w3-margin-bottom" type="text" placeholder="" <?php echo "value='".$password."'";?>  name="password">
                        <br>
						<label><b>Enrollment Id</b></label>
                        <input class="w3-input w3-margin-bottom" type="email" placeholder="" <?php echo "value='".$enroll_id."'";?> disabled name="enroll_id">
                        <br>
						<label><b>University Roll </b></label>
                        <input class="w3-input w3-margin-bottom" type="email" placeholder="" <?php echo "value='".$univ_roll."'";?> disabled name="univ_roll">
                        <br>
						<label><b>Registration Number</b></label>
                        <input class="w3-input w3-margin-bottom" type="email" placeholder="" <?php echo "value='".$reg_id."'";?> disabled name="reg_id">
                        <br>
						<label><b>Class Roll</b></label>
                        <input class="w3-input w3-margin-bottom" type="email" placeholder="" <?php echo "value='".$class_roll."'";?> disabled name="class_roll">
                        <br>
						<label><b>Semester</b></label>
                        <input class="w3-input w3-margin-bottom" type="email" placeholder="" <?php echo "value='".$semester."'";?> disabled name="semester">
                        <br>
						<label><b>Stream</b></label>
                        <input class="w3-input w3-margin-bottom" type="email" placeholder="" <?php echo "value='".$stream."'";?> disabled name="stream">
                        <br>
						<label><b>Section</b></label>
                        <input class="w3-input w3-margin-bottom" type="email" placeholder="" <?php echo "value='".$section."'";?> disabled name="section">
                        <br>
                        <button id = 'submit' class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Submit</button>
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

        </script>

    </body>
</html>
