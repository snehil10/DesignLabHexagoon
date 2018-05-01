<?php
session_start();
include('connection.php');
$teacher_id=$_GET['q'];
$sql="select t.name,c.course_name from student s join courses c on s.semester=c.semester and c.department_id=s.stream join teacher t on c.teacher_id=t.username where s.username='".$_SESSION['username']."' and t.username='".$teacher_id."'";
$res=mysqli_query($con,$sql);
if(!$res)
{
	echo mysqli_error($con);
	exit();
}
else{
	$row=mysqli_fetch_assoc($res);
	$teacher_name=$row['name'];
	$course_name= $row['course_name'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Teacher Evaluation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="navbar_style.css">

        <style>
            input[type=radio] {
                border: 0px;
                width: 100%;
                height: 1.2em;
            }
            #content-card {
                padding-bottom: 30px;
                margin-bottom: 70px;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-teal w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">PTSIS</a>
                <div class='navbar-right'>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Results</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Inbox</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Teacher</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
                </div>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-teal w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="#" class="w3-bar-item w3-button w3-padding-large">About</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Log In</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Admin Corner</a>
            </div>
        </div>

    <center>
        <div id="content" class="w3-container" style="padding-top: 100px; max-width: 1000px">
            <div id="content-card" class="w3-container w3-card">
                <div class="w3-container">
                    <h3 class="text-center">Teacher Evaluation</h3><hr>
                    <div class="col-sm-4">
                        <h4>Teacher Name</h4>
                        <h4>Course Name</h4>
                        <br><hr>
                    </div>
                    <div class="col-sm-8"> 
                        <h4><?php echo $teacher_name ?></h4>
                        <h4><?php echo $course_name?></h4>
                        <br><hr>
                    </div>

                    <form method="post" action="teacher_evaluation_backend.php">
                        <table class="w3-table w3-bordered">
                            <tr>
                                <th>Question</th>
                                <th>Strongly Agree</th>
                                <th>Agree</th>
                                <th>Uncertain</th>
                                <th>Disagree</th>
                                <th>Strongly Disagree</th>
                            </tr>
                            <tr>
                                <td>The teacher is always well prepared for each class</td>
                                <td><input type="radio" name="q1" value=5></td>
                                <td><input type="radio" name="q1" value=4></td>
                                <td><input type="radio" name="q1" value=3></td>
                                <td><input type="radio" name="q1" value=2></td>
                                <td><input type="radio" name="q1" value=1></td>
                            </tr>
                            <tr>
                                <td>The teacher demonstrates good knowledge of the subject</td>
                                <td><input type="radio" name="q2" value=5></td>
                                <td><input type="radio" name="q2" value=4></td>
                                <td><input type="radio" name="q2" value=3></td>
                                <td><input type="radio" name="q2" value=2></td>
                                <td><input type="radio" name="q2" value=1></td>
                            </tr>
                            <tr>
                                <td>The teacher utilizes the knowledge gained through wide reading to increase effectiveness of teaching </td>
                                <td><input type="radio" name="q3" value=5></td>
                                <td><input type="radio" name="q3" value=4></td>
                                <td><input type="radio" name="q3" value=3></td>
                                <td><input type="radio" name="q3" value=2></td>
                                <td><input type="radio" name="q3" value=1></td>
                            </tr>
                            <tr>
                                <td>The teacher delivers the subject matter effectively with clarity and coherence </td>
                                <td><input type="radio" name="q4" value=5></td>
                                <td><input type="radio" name="q4" value=4></td>
                                <td><input type="radio" name="q4" value=3></td>
                                <td><input type="radio" name="q4" value=2></td>
                                <td><input type="radio" name="q4" value=1></td>
                            </tr>
                            <tr>
                                <td>The teacher has high enthusiasm </td>
                                <td><input type="radio" name="q5" value=5></td>
                                <td><input type="radio" name="q5" value=4></td>
                                <td><input type="radio" name="q5" value=3></td>
                                <td><input type="radio" name="q5" value=2></td>
                                <td><input type="radio" name="q5" value=1></td>
                            </tr>
                            <tr>
                                <td>The teacher is responsive to questions </td>
                                <td><input type="radio" name="q6" value=5></td>
                                <td><input type="radio" name="q6" value=4></td>
                                <td><input type="radio" name="q6" value=3></td>
                                <td><input type="radio" name="q6" value=2></td>
                                <td><input type="radio" name="q6" value=1></td>
                            </tr>
                            <tr>
                                <td>The teacher is receptive to new ideas and disagreement </td>
                                <td><input type="radio" name="q7" value=5></td>
                                <td><input type="radio" name="q7" value=4></td>
                                <td><input type="radio" name="q7" value=3></td>
                                <td><input type="radio" name="q7" value=2></td>
                                <td><input type="radio" name="q7" value=1></td>
                            </tr>
                            <tr>
                                <td>The teacher is sensitive to student problems</td>
                                <td><input type="radio" name="q8" value=5></td>
                                <td><input type="radio" name="q8" value=4></td>
                                <td><input type="radio" name="q8" value=3></td>
                                <td><input type="radio" name="q8" value=2></td>
                                <td><input type="radio" name="q8" value=1></td>
                            </tr>
                            <tr>
                                <td>The teacher completes the whole course  </td>
                                <td><input type="radio" name="q9" value=5></td>
                                <td><input type="radio" name="q9" value=4></td>
                                <td><input type="radio" name="q9" value=3></td>
                                <td><input type="radio" name="q9" value=2></td>
                                <td><input type="radio" name="q9" value=1></td>
                            </tr>
                            <tr>
                                <td>The teacher is available during the specified office hours and for after class consultations  </td>
                                <td><input type="radio" name="q10" value=5></td>
                                <td><input type="radio" name="q10" value=4></td>
                                <td><input type="radio" name="q10" value=3></td>
                                <td><input type="radio" name="q10" value=2></td>
                                <td><input type="radio" name="q10" value=1></td>
                            </tr>
                            <tr>
                                <td>Pays attention to all the students irrespective of their abilities or personality characteristics.  </td>
                                <td><input type="radio" name="q11" value=5></td>
                                <td><input type="radio" name="q11" value=4></td>
                                <td><input type="radio" name="q11" value=3></td>
                                <td><input type="radio" name="q11" value=2></td>
                                <td><input type="radio" name="q11" value=1></td>
                            </tr>
                            <tr>
                                <td>The teacher shows respect towards students and encourages class participation </td>
                                <td><input type="radio" name="q12" value=5></td>
                                <td><input type="radio" name="q12" value=4></td>
                                <td><input type="radio" name="q12" value=3></td>
                                <td><input type="radio" name="q12" value=2></td>
                                <td><input type="radio" name="q12" value=1></td>
                            </tr>
                            <tr>
                                <td>The teacher arrives on time and leaves on time</td>
                                <td><input type="radio" name="q13" value=5></td>
                                <td><input type="radio" name="q13" value=4></td>
                                <td><input type="radio" name="q13" value=3></td>
                                <td><input type="radio" name="q13" value=2></td>
                                <td><input type="radio" name="q13" value=1></td>
                            </tr>
                        </table>
						<textarea class="w3-input" rows="3" placeholder="Write Message here" name="teacher_id" style="display:none"><?php echo $teacher_id?></textarea>
                        <br><br>
                        <label class="w3-text w3-large">Additional Comments</label>
                        <textarea class="w3-input" rows="3" placeholder="Write Message here" name="message"></textarea>
                        <br><br>
                        <div class="col-sm-6">
                            <button class="w3-button w3-teal" name="submit" type="submit">Submit</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="w3-button w3-teal" type="reset">Reset</button>
                        </div>
                    </form>
                    <br><br>
                </div>
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