<?php
session_start();
include('connection.php');
$sql="select * from parents where username='".$_SESSION['username']."'";
$res=mysqli_query($con,$sql);
if(!$res)
{
	echo "Could not successfully run query ($sql) from DB: " . mysqli_error($con);
	exit;
}
else
{
	$row=mysqli_fetch_assoc($res);
	$name=$row['name'];
	$email=$row['email_id'];
	$phone_no=$row['mobile_number'];
	$student_id=$row['student_id'];
}
$sql2="select name,stream,reg_id,univ_roll,year,semester,section,class_roll,mobile_number,address from student where username='".$student_id."'";
$result2=mysqli_query($con,$sql2);
if(!$result2)
{
	echo mysqli_error($con);
	exit();
}
else
{
	$row2=mysqli_fetch_assoc($result2);
	$student_name=$row2['name'];
	$stream=$row2['stream'];
	$reg_id=$row2['reg_id'];
	$univ_roll=$row2['univ_roll'];
	$year=$row2['year'];
	$semester=$row2['semester'];
	$section=$row2['section'];
	$class_roll=$row2['class_roll'];
	$mobile_number=$row2['mobile_number'];
	$address=$row2['address'];
}
?>
<!DOCTYPE html>
<html>
    <title>Student Information Display</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style_display.css">
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    
    <body id = 'student_info' class="w3-light-grey">
        
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">PTSIS</a>
                <div class='navbar-right'>
                    <a href="parent_display.php#course" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Results</a>
                    <a href="parent_display.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Dashboard</a>
                    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
                </div>
            </div>

        <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="parent_display.php#course" class="w3-bar-item w3-button w3-padding-large">View Results</a>
                <a href="parent_display.php" class="w3-bar-item w3-button w3-padding-large">Dashboard</a>
                <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
            </div>
        </div>
        
        <!-- Page Container -->
        <div class="w3-content w3-margin-top" style="max-width:1400px; padding-top: 70px">

            <!-- The Grid -->
            <div class="w3-row-padding">
  
                <!-- Left Column -->
                <div class="w3-third" style='position: fixed; height: 100%'>
    
                    <div class="w3-white w3-text-grey w3-card-4" style='width: 300px'>
                        <div class="w3-display-container">
                        <img src="img_avatar.png" style="width:100%;" alt="Avatar">
                    </div>
                    
                        <div class="w3-container">
                        <p><h2><?php echo $name?></h2></p>
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email?></p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $address?></p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone_no?></p>
                        <a href="edit_parent.php"><p><i class="fa fa-pencil-square-o fa-fw w3-margin-right w3-large w3-text-teal"></i>Edit Your Info</p></a>
                        <hr>
                        </div>
                    </div><br>

                <!-- End Left Column -->
                </div>

            <!-- Right Column -->
            <div class="w3-twothird" style='margin-left: 350px;' >
        
                
                
            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Student Info</h2>
                <div id='info' class="w3-container w3-center">
                    <table class="w3-table w3-bordered">
                        <tr>
                            <td>Name</td>
                            <td><?php echo $student_name?></td>
                        </tr>
                        <tr>
                            <td>Stream</td>
                            <td><?php echo $stream?></td>
                        </tr>
                        <tr>
                            <td>University Registration No.</td>
                            <td><?php echo $reg_id?></td>
                        </tr>
                        <tr>
                            <td>University Roll No.</td>
                            <td><?php echo $univ_roll?></td>
                        </tr>
                        <tr>
                            <td>Year</td>
                            <td><?php echo $year?></td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td><?php echo $semester?></td>
                        </tr>
                        <tr>
                            <td>Section</td>
                            <td><?php echo $section?></td>
                        </tr>
                        <tr>
                            <td>Class Roll No.</td>
                            <td><?php echo $class_roll?></td>
                        </tr>
                        <tr>
                            <td>Mobile No.</td>
                            <td><?php echo $mobile_number?></td>
                        </tr>
                    </table>
                    
                </div>
                <br>
            </div>
                
                <div class="w3-container w3-card w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16">
                    <i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Parent Info</h2>
                <div id='info' class="w3-container w3-center">
                    <table class="w3-table w3-bordered">
                        <tr>
                            <td>Name</td>
                            <td><?php echo $name?></td>
                        </tr>                      
                        <tr>
                            <td>Mobile No.</td>
                            <td><?php echo $phone_no?></td>
                        </tr>
                    </table>
                    
                </div>
                <br>
            </div>

         <div class="w3-container w3-card w3-white w3-margin-bottom">
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Courses</h2>
                <div id='course' class="w3-container">
                    <table class="w3-table w3-bordered">
                        <tr>
                            <th>Course Id</th>
                            <th>Couse Name</th>
                            <th>Teachers</th>
                            <th>Results</th>
                            <th>Contact</th>
							<th>Attendance</th>
							
                        </tr>
						<?php
						
									$sql2="select t.username,t.name,c.course_name,c.course_id from student s join courses c on s.semester=c.semester and c.department_id=s.stream join teacher t on c.teacher_id=t.username where s.username='".$student_id."'";
									$result2=mysqli_query($con,$sql2);
									if(!$result2)
									{
										echo mysqli_error($con);
										exit();
									}
									else
									{
										while($row=mysqli_fetch_assoc($result2))
										{
											echo "<tr>
										<td>".$row['course_id']."</td>
										<td>".$row['course_name']."</td>
										<td>".$row['name']."</td>
										<td><button class='w3-button w3-teal' id='".$row['course_id']."' onclick='view(this.id)'>View Results</button></td>
										<td><button class='w3-button w3-teal' id='".$row['username']."' onclick='inbox(this.id)'>Message</button></td>
										<td><button class='w3-button w3-teal'><a href='uploads/".$stream."_".$semester."_".$section."_".$row['course_id'].".xlsx' download style='text-decoration: none'>Attedance</a></button></td>
										</tr>";
										}
										
									}
								?>
                </table>
                </div><br>
         </div>
	 
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  
</footer>
<script>
function inbox(id){
				var q=id;
				window.location.href="inbox_parent.php?q="+q;
			}
function view(id){
	var q=id;
	window.location.href="view_results_parent.php?q="+q;
}

</script>

</body>
</html>
