<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View Students</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
        
    </head>
    <style>
        #tablepad{
            padding: 70px 40px 0px 40px;            
            margin-left: 40px;
            margin-right: 40px;
        }
    </style>
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

        <div class="w3-container" id="tablepad">
            <br>

            <div class=" w3-card" id="mytable">

                <h2 class="w3-text-grey w3-padding-16">
                    <i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Students List</h2>
                <center>
                    <div id='course' class="w3-container">
                        <table class="w3-table-all w3-hoverable">
                            <tr>
                                <th>Name</th>
                                <th>Roll number</th>
                                <th>Message Student</th> 
                                <th>Message Parent</th>
                            </tr>
							<?php
								include('connection.php');
								
								$sql="select st.username,st.name,st.class_roll,st.parents_id from student as st join courses on st.semester=courses.semester and st.stream=courses.department_id where courses.teacher_id='".$_SESSION['username']."'";
								$res=mysqli_query($con,$sql);
								if(!$res)
								{
									echo mysqli_error($con);
								}
								else{
									while($row=mysqli_fetch_assoc($res))
									{
										echo "<tr>
                                <td>".$row['name']."</td>
                                <td>".$row['class_roll']."</td>
                                <td>
                                    <button class='w3-button w3-teal w3-medium' id='".$row['username']."' onclick='student(this.id)'display = 'block'>Message</button>
                                </td>                                
                                <td>
                                    <button class='w3-button w3-teal w3-medium' id='".$row['parents_id']."' onclick='parents(this.id)' display = 'block'>Message</button>
                                </td>
								</tr>";
									}
								}
								
							?>
                            
                            
                        </table>
                    </div><br>
                </center>
            </div>
        </div>   
	<script>
		function parents(id)
		{
			var q=id;
			window.location.href="view_students_inbox_parents.php?q="+q;
		}
		function student(id)
		{
			var q=id;
			window.location.href="view_students_inbox_student.php?q="+q;
		}
	</script>
    </body>
</html>
