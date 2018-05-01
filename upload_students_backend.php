<?php
session_start();
include('connection.php');
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
		$username=trim($allDataInSheet[$i]["A"]);
		$enroll_id=trim($allDataInSheet[$i]["B"]);
		$univ_roll=trim($allDataInSheet[$i]["C"]);
		$reg_id=trim($allDataInSheet[$i]["D"]);
		$class_roll=trim($allDataInSheet[$i]["F"]);
		$name=trim($allDataInSheet[$i]["G"]);
		$parents_id=trim($allDataInSheet[$i]["I"]);
		$semester=trim($allDataInSheet[$i]["J"]);
		$stream=trim($allDataInSheet[$i]["K"]);
		$section=trim($allDataInSheet[$i]["L"]);
		$email_id=trim($allDataInSheet[$i]["M"]);
		$ph_no=trim($allDataInSheet[$i]["N"]);
		$date_of_birth=trim($allDataInSheet[$i]["O"]);
		$year="none";
		$address=trim($allDataInSheet[$i]["P"]);
		$password=trim($allDataInSheet[$i]["Q"]);
		$picture=trim($allDataInSheet[$i]["R"]);
		$year_of_admission=trim($allDataInSheet[$i]["E"]);
		$parents_email_id=trim($allDataInSheet[$i]["S"]);
		$parents_phone_no=trim($allDataInSheet[$i]["T"]);
		$parents_name=trim($allDataInSheet[$i]["U"]);
		$parents_password=trim($allDataInSheet[$i]["V"]);
		$sql1="insert into student (username,enroll_id,univ_roll,reg_id,class_roll,name,parents_id,semester,stream,section,email_id,ph_no,date_of_birth,year,address,password,picture,year_of_admission) values ('$username','$enroll_id','$univ_roll','$reg_id','$class_roll','$name','$parents_id','$semester','$stream','$section','$email_id','$ph_no','$date_of_birth','$year','$address','$password','$picture','$year_of_admission')";
		$result1=mysqli_query($con,$sql1);
		if(!$result1)
		{
			echo mysqli_error($con);
			exit();
		}
		else
		{
			$sql2="INSERT INTO parents (username,student_id,email_id,phone_no,name,password) VALUES ('$parents_id','$username','$parents_email_id','$parents_phone_no','$parents_name','$parents_password')";
			$result2=mysqli_query($con,$sql2);
			if(!$result2)
			{
				echo mysqli_error($con);
				exit();
			}
			else{
				echo "yes";
			}
		}
		}
		}



?>