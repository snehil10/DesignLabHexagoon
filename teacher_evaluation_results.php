<?php
session_start();
include('connection.php');
$sql = "select t.name from teacher t where t.username='" . $_SESSION['username'] . "'";
$res = mysqli_query($con, $sql);
if (!$res) {
    echo mysqli_error($con);
    exit();
} else {
    $row = mysqli_fetch_assoc($res);
    $teacher_name = $row['name'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Teacher Evaluation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/navbar_style.css">

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
                <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">PTSIS</a>
                <div class='navbar-right'>
                    <a href="teacher_display.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">DashBoard</a>
                    <a href="inbox_teacher.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Inbox</a>
                    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
                </div>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-teal w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="teacher_display.php" class="w3-bar-item w3-button w3-padding-large">Dashboard</a>
                <a href="inbox_teacher.php" class="w3-bar-item w3-button w3-padding-large">Inbox</a>
                <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
            </div>
        </div>

    <center>
        <div id="content" class="w3-container" style="padding-top: 100px; max-width: 1000px">
            <div id="content-card" class="w3-container w3-card">
                <div class="w3-container">
                    <h3 class="text-center">Teacher Evaluation</h3><hr>
                    <div class="row" style="padding-left: 50px; padding-right: 50px;">
                        <div class="col-sm-4 text-left">
                            <?php
                            $sql2 = "select * from teacher_evaluation where teacher_id='" . $_SESSION['username'] . "'";
                            $result2 = mysqli_query($con, $sql2);
                            if (!$result2) {
                                echo mysqli_error($con);
                                die();
                            } else {
                                $row = mysqli_fetch_assoc($result2);
                                $num = $row['no_of_students'];
                                $eval1 = $row['eval_1'];
                                $eval2 = $row['eval_2'];
                                $eval3 = $row['eval_3'];
                                $eval4 = $row['eval_4'];
                                $eval5 = $row['eval_5'];
                                $eval6 = $row['eval_6'];
                                $eval7 = $row['eval_7'];
                                $eval8 = $row['eval_8'];
                                $eval9 = $row['eval_9'];
                                $eval10 = $row['eval_10'];
                                $eval11 = $row['eval_11'];
                                $eval12 = $row['eval_12'];
                                $eval13 = $row['eval_13'];
                            }
                            ?>




                            <h4>Teacher Name</h4>
                            <h4>No. of students evaluated</h4>
                            <br>
                        </div>
                        <div class="col-sm-8 text-left"> 
                            <h4><?php echo $teacher_name ?></h4>
                            <h4><?php echo $num ?></h4>
                            <h4></h4>
                            <br>
                        </div>
                    </div>
                    <p><i> 5.0 - 4.01 Amazing
                            | 4.0 - 3.01 Good 
                            | 2.01 - 3.00 Average
                            | 1.01 - 2.00 Not Satisfactory
                            | 0.00 - 1.00 Not fit to teach
                        </i> </p>

                    <form method="post" action="teacher_evaluation_backend.php">
                        <table class="w3-table w3-bordered">
                            <col width="50%">
                            <col width="40%">
                            <col width="10%">
                            <tr>
                                <th>Question</th>
                                <th>Your Score</th>
                                <th>x/5</th>
                            </tr>
                            <tr>
                                <td>The teacher is always well prepared for each class</td>
                                <td>
                                    <div class="w3-white" style="width: 100%; border: 0.1px solid teal">
                                        <div class="w3-teal w3-center" 
<?php
if ($num == 0)
    $num += 1;
$percentage = (($eval1 / $num) / 5) * 100;
echo "style='width:" . $percentage . "%; height: 20px;'"
?> ></div>
                                    </div>
                                </td>
                                <td><?php echo $eval1 / $num ?></td>
                            </tr>
                            <tr>
                                <td>The teacher demonstrates good knowledge of the subject</td>
                                <td>
                                    <div class="w3-white" style="width: 100%; border: 0.1px solid teal">
                                        <div class="w3-teal w3-center" 
<?php
$percentage = (($eval2 / $num) / 5) * 100;
echo "style='width:" . $percentage . "%; height: 20px;'"
?> ></div>
                                    </div>
                                </td>
                                <td><?php echo $eval2 / $num ?></td>
                            </tr>
                            <tr>
                                <td>The teacher utilizes the knowledge gained through wide reading to increase effectiveness of teaching </td>
                                <td>
                                    <div class="w3-white" style="width: 100%; border: 0.1px solid teal">
                                        <div class="w3-teal w3-center" 
<?php
$percentage = (($eval3 / $num) / 5) * 100;
echo "style='width:" . $percentage . "%; height: 20px;'"
?> ></div>
                                    </div>
                                </td>
                                <td><?php echo $eval3 / $num ?></td>
                            </tr>
                            <tr>
                                <td>The teacher delivers the subject matter effectively with clarity and coherence </td>
                                <td>
                                    <div class="w3-white" style="width: 100%; border: 0.1px solid teal">
                                        <div class="w3-teal w3-center" 
<?php
$percentage = (($eval4 / $num) / 5) * 100;
echo "style='width:" . $percentage . "%; height: 20px;'"
?> ></div>
                                    </div>
                                </td>
                                <td><?php echo $eval4 / $num ?></td>
                            </tr>
                            <tr>
                                <td>The teacher has high enthusiasm </td>
                                <td>
                                    <div class="w3-white" style="width: 100%; border: 0.1px solid teal">
                                        <div class="w3-teal w3-center" 
<?php
$percentage = (($eval5 / $num) / 5) * 100;
echo "style='width:" . $percentage . "%; height: 20px;'"
?> ></div>
                                    </div>
                                </td>
                                <td><?php echo $eval5 / $num ?></td>
                            </tr>
                            <tr>
                                <td>The teacher is responsive to questions </td>
                                <td>
                                    <div class="w3-white" style="width: 100%; border: 0.1px solid teal">
                                        <div class="w3-teal w3-center" 
<?php
$percentage = (($eval6 / $num) / 5) * 100;
echo "style='width:" . $percentage . "%; height: 20px;'"
?> ></div>
                                    </div>
                                <td><?php echo $eval6 / $num ?></td>
                                </td>
                            </tr>
                            <tr>
                                <td>The teacher is receptive to new ideas and disagreement </td>
                                <td>
                                    <div class="w3-white" style="width: 100%; border: 0.1px solid teal">
                                        <div class="w3-teal w3-center" 
                                        <?php
                                        $percentage = (($eval7 / $num) / 5) * 100;
                                        echo "style='width:" . $percentage . "%; height: 20px;'"
                                        ?> ></div>
                                    </div>
                                </td>
                                <td><?php echo $eval7 / $num ?></td>
                            </tr>
                            <tr>
                                <td>The teacher is sensitive to student problems</td>
                                <td>
                                    <div class="w3-white" style="width: 100%; border: 0.1px solid teal">
                                        <div class="w3-teal w3-center" 
                                        <?php
                                        $percentage = (($eval8 / $num) / 5) * 100;
                                        echo "style='width:" . $percentage . "%; height: 20px;'"
                                        ?> ></div>
                                    </div>
                                </td>
                                <td><?php echo $eval8 / $num ?></td>
                            </tr>
                            <tr>
                                <td>The teacher completes the whole course  </td>
                                <td>
                                    <div class="w3-white" style="width: 100%; border: 0.1px solid teal">
                                        <div class="w3-teal w3-center" 
                                        <?php
                                             $percentage = (($eval9 / $num) / 5) * 100;
                                             echo "style='width:" . $percentage . "%; height: 20px;'"
                                             ?> ></div>
                                    </div>
                                </td>
                                <td><?php echo $eval9 / $num ?></td>
                            </tr>
                            <tr>
                                <td>The teacher is available during the specified office hours and for after class consultations  </td>
                                <td>
                                    <div class="w3-white" style="width: 100%; border: 0.1px solid teal">
                                        <div class="w3-teal w3-center" 
                                             <?php
                                             $percentage = (($eval10 / $num) / 5) * 100;
                                             echo "style='width:" . $percentage . "%; height: 20px;'"
                                             ?> ></div>
                                    </div>
                                </td>
                                <td><?php echo $eval10 / $num ?></td>
                            </tr>
                            <tr>
                                <td>Pays attention to all the students irrespective of their abilities or personality characteristics.  </td>
                                <td>
                                    <div class="w3-white" style="width: 100%; border: 0.1px solid teal">
                                        <div class="w3-teal w3-center" 
<?php
$percentage = (($eval11 / $num) / 5) * 100;
echo "style='width:" . $percentage . "%; height: 20px;'"
?> ></div>
                                    </div>
                                </td>
                                <td><?php echo $eval11 / $num ?></td>
                            </tr>
                            <tr>
                                <td>The teacher shows respect towards students and encourages class participation </td>
                                <td>
                                    <div class="w3-white" style="width: 100%; border: 0.1px solid teal">
                                        <div class="w3-teal w3-center" 
<?php
$percentage = (($eval12 / $num) / 5) * 100;
echo "style='width:" . $percentage . "%; height: 20px;'"
?> ></div>
                                    </div>
                                </td>
                                <td><?php echo $eval12 / $num ?></td>
                            </tr>
                            <tr>
                                <td>The teacher arrives on time and leaves on time</td>
                                <td>
                                    <div class="w3-white" style="width: 100%; border: 0.1px solid teal">
                                        <div class="w3-teal w3-center" 
<?php
$percentage = (($eval13 / $num) / 5) * 100;
echo "style='width:" . $percentage . "%; height: 20px;'"
?> ></div>
                                    </div>
                                </td>
                                <td><?php echo $eval13 / $num ?></td>
                            </tr>
                        </table>
                        <br><br>
                    </form>
                </div>
                <br><br>
                <h3>Unread Evaluation Remarks</h3><hr>
                <button class="w3-button w3-teal" onclick="read()">Mark messages as read</button>
                <div class="w3-container" style="height: 400px; overflow-y: scroll;">
                    <table class="w3-table w3-bordered">
                        <?php
                        $sql3 = "select * from message where receiver_id='" . $_SESSION['username'] . "' and message_type='evaluation' and status=0";
                        $res = mysqli_query($con, $sql3);
                        if (!$res) {
                            echo mysqli_error($con);
                            die();
                        } else {
                            while ($row = mysqli_fetch_assoc($res)) {
                                $message = $row['message_content'];
                                echo "<tr>
								<td class='w3-padding-32'>
									<div class='row'>
										<div class='col-sm-11'>$message</div>
										<div class='col-sm-1'>
											
									</div>
								</td>
								</tr> ";
                            }
                        }
                        ?>




                    </table>
                </div>

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
    function read()
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText == 1)
                    alert('Marked as read');
                else
                    alert(this.responseText);
            }
        };
        xhttp.open("GET", "mark_as_read.php", true);
        xhttp.send();
    }
</script>
</body>
</html>