<!DOCTYPE html>
<html>
    <head>
        <title>Student Information Display</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
        </head>
    <body>
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">PTSIS</a>
                <div class='navbar-right'>
                    <a href="teacher_display.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Dashboard</a>
                    <a href="inbox_teacher.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Inbox</a>
                    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
                </div>
            </div>

        <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="teacher_display.php" class="w3-bar-item w3-button w3-padding-large">Dashboard</a>
                <a href="inbox_teacher.php" class="w3-bar-item w3-button w3-padding-large">Inbox</a>
                <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
            </div>
        </div>
        
        <center>
            <div class="w3-container w3-center" style="padding-top: 100px; max-width:700px">
                <div class="w3-container w3-card w3-text-teal" >
                    <h3>Send Message</h3><br>
                    <form class='w3-container' action="messsage_teacher_backend.php" method="post">
                        <div class="w3-section">
                            <label style="font-size: 18px"><b> Department name </b> </label>
                            <select class = 'w3-select' name="department">
                                <option value="" disabled selected>Choose your option</option>
                                <?php
								include('connection.php');
								session_start();
								$sql="select department_id from department";
								$result=mysqli_query($con,$sql);
								if(!$result)
								{
									echo mysqli_error($con);
								}
								else
								{
									while($row=mysqli_fetch_assoc($result))
									{
										$department_name=$row['department_id'];
										print " <option value='$department_name'>$department_name</option> ";
									}
								}
								?>
                            </select>
                            <br><br>
                            
                            <label style="font-size: 18px"><b>Select Year</b></label>
                            <select class = 'w3-select' name="year">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="0">All years</option>
                                <option value="1">1st year</option>
                                <option value="2">2nd year</option>
                                <option value="3">3rd year</option>
                                <option value="4">4th year</option>
                            </select>
                            <br><br>
                            
                            <label style="font-size: 18px"><b>Select Section</b></label>
                            <select class = 'w3-select' name="section">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="all">All sections</option>
                                <option value="A">Section A</option>
                                <option value="B">Section B</option>
                                <option value="C">Section C</option>
                            </select>
                            <br><br>
                            
                            <label style="font-size: 18px"><b>Select Students</b></label>
                            <select class = 'w3-select' name="student_id" id="student">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="all">All students</option>
                                <option value="stu1">Student 1</option>
                                <option value="stu2">Student 2</option>
                                <option value="stu3">Student 3</option>
                            </select>
                            <br><br>
                            
                            <label style="font-size: 18px"><b>Message</b></label>
                            <textarea class="w3-input" rows="5" cols="40" placeholder="Write your message here."></textarea>
                            <br>
                            <button id = 'submit' class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Send</button>
                            <br>
                        </div>
                    </form>
                    </form>
                </div>
            </div>
        </center>
	<script>
	function f(){
		
	}
	</script>
    </body>
</html>