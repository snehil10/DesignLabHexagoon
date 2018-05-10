<?php
session_start();
include('connection.php');
	$semester=$_POST['semester'];
	$course_id=$_POST['course'];
	$section=$_POST['section'];
	$department=$_POST['department'];
	$pro_img = explode(".",$_FILES["fileToUpload"]["tmp_name"]);
		//$detination_file = $_FILES["fileToUpload"]["name"];
		//$upload_file = '/Images';
		//echo $tmp_name;
		//rename("uploads/shubham.xlsx","uploads/5.xlsx");

		if(file_exists("uploads/".$department."_".$semester."_".$section."_".$course_id.".xlsx"))
		{
			unlink("uploads/".$department."_".$semester."_".$section."_".$course_id.".xlsx");
			
		}
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"uploads/".$_FILES["fileToUpload"]["name"]);
			echo "stored in:"."Uploads/".$_FILES["fileToUpload"]["name"];
			$img= $_FILES["fileToUpload"]["name"];
			echo $img;
			//$x=rand(0,1000000000);
			rename("uploads/".$img,"uploads/".$department."_".$semester."_".$section."_".$course_id.".xlsx");

		set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
		include 'PHPExcel/IOFactory.php';

		// This is the file path to be uploaded.
		

?>