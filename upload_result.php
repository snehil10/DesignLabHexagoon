<?php
session_start();
include('connection.php');
$department=$_POST['department'];
$semester=$_POST['semester'];
$course=$_POST['course'];
$exam_type=$_POST['exam_type'];
$count=0;
$table_name=$semester."_".$department;
$pro_img = explode(".",$_FILES["fileToUpload"]["tmp_name"]);
		//$detination_file = $_FILES["fileToUpload"]["name"];
		//$upload_file = '/Images';
		//echo $tmp_name;
		//rename("uploads/shubham.xlsx","uploads/5.xlsx");

		if(file_exists("uploads/".$_FILES["fileToUpload"]["name"]))
		{
			echo $_FILES["fileToUpload"]["name"]."already exits";
			$img= $_FILES["fileToUpload"]["name"];
			
		}
		else{
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"uploads/".$_FILES["fileToUpload"]["name"]);
			echo "stored in:"."Images/".$_FILES["fileToUpload"]["name"];
			$img= $_FILES["fileToUpload"]["name"];
			echo $img;
			//$x=rand(0,1000000000);
			//rename("uploads/5.xlsx","uploads/shubham.xlsx");

		set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
		include 'PHPExcel/IOFactory.php';

		// This is the file path to be uploaded.
		$inputFileName = "uploads/".$img; 

		try {
		$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
		} catch(Exception $e) {
		die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
		}


		$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
		$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet
		for($i=2;$i<=$arrayCount;$i++)
		{
			$student_id=trim($allDataInSheet[$i]["A"]);
			$exam_type=trim($allDataInSheet[$i]["A"]);
			$marks=trim($allDataInSheet[$i]["A"]);
			$sql="select * from $table_name where student_id='".$student_id."' and exam_type='".$exam_type."'";
			$result=mysqli_query(con,$sql);
			if(!$result)
			{
				echo mysqli_error($con);
				die();
			}
			else
			{
				if(mysqli_num_rows($result)>0)
				{
					$sql2="update $table_name set $course=$marks where student_id='".$student_id."' and exam_type='".$exam_type."'";
					$result2=mysqli_query($con,$sql2);
					if(!$result2)
					{
						echo mysqli_error($con);
						die();
					}
					else
					{
						echo "YES";
					}
				}
				else
				{
					$sql2="insert into $table_name ($course,student_id,exam_type) values ($marks,'".$student_id."','".$exam_type."')";
					$result2=mysqli_query($con,$sql2);
					if(!$result2)
					{
						echo mysqli_error($con);
						die();
					}
					else
					{
						echo "YES";
					}
				}
			}
		}
	}
?>