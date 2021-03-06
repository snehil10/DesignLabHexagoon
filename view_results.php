<!DOCTYPE html>
<html>
    <head>
        <title>View Results</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    </head>
    <style>
        #examtype{
            padding-top: 90px;
        }
    </style>
    <body>
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
        <div class="w3-container" id="examtype" style="max-width: 1100px">
            <div class="w3-card text-center">  
				<form method="post" action="view_results.php">
                <div class="w3-container  w3-padding-16">
                    <div class="col-xs-3 text-center">
                        <h4>Select Exam:</h4>
                    </div>
                    <div class="col-xs-6">
			<select class = 'w3-select' name="exam_type">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="MidsemI">Mid Semester I</option>
                            <option value="MidsemII">Mid Semester II</option>
                            <option value="Online Test I">Online Test I</option>
                            <option value="Online Test II">Online Test II</option>
                            <option value="Semester">Semester</option>                    
                        </select>
                    </div>
                    <div class="col-xs-3">
                        <button class="w3-button w3-teal w3-medium" name="submit" display = 'block'>Submit</button>
                    </div>
                </div>
				</form>
            </div>    

            <br><br>

            <div class=" w3-card" id="mytable">

                <h2 class="w3-text-grey w3-padding-16">
                    <i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Results</h2>
                <center>
                    <div id='course' class="w3-container">
                        <table class="w3-table-all w3-hoverable">
                            <tr>
                                <th>Course Id</th>
                                <th>Course Name</th>                                
                                <th>Marks obtained</th>
                                <th>Full Marks</th>

                            </tr>
                            <?php
								error_reporting(E_ERROR | E_PARSE);
								include('connection.php');
								session_start();
								error_reporting(0);
								if(isset($_POST['submit']))
								{
									$exam_type=$_POST['exam_type'];
									if($exam_type=="MidsemI" or $exam_type=="MidsemII")
										$full_marks=50;
									else
										$full_marks=100;
									echo "<h3>".$exam_type."</h3>";
									$sql1="select student.semester,student.stream,course_name,course_id from student join courses on courses.department_id=student.stream and courses.semester=student.semester where student.username='".$_SESSION['username']."'";
									$result1=mysqli_query($con,$sql1);
									if(!$result1)
									{
										echo mysqli_error($con);
										exit();
										
									}
									else
									{
										while($row=mysqli_fetch_assoc($result1))
										{
										echo "<tr>
										<td>".$row['course_id']."</td>
										<td>".$row['course_name']."</td>";
										$table_name=$row['semester']."_".$row['stream'];
										$sql2="select ".$row['course_id']." from $table_name where student_id='".$_SESSION['username']."' and exam_type='".$exam_type."'";
										$res2=mysqli_query($con,$sql2);
										if(!$res2)
										{
											echo mysqli_error($con);
											die();
										}
										else
										{
											$row2=mysqli_fetch_assoc($res2);
											echo"<td>".$row2[$row['course_id']]."</td><td>$full_marks</td></tr>";
										}
										}
									}
								}
							?>
                        </table>
                    </div><br>
                </center>
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
