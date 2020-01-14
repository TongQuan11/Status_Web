<?php
	session_start();
	require "../database/db.php";
	if(isset($_POST["name"]) && isset($_POST["pass"])){
		echo "Quan";
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$fullname = $_POST['fullname'];
		$target_file = "../images/".basename($_FILES["fileToUpload"]["name"]);
		
	    $sql = "insert into users values(null,'$name','$pass','$fullname','$target_file')";
	    $db->query($sql);
	    $_SESSION['success'] = 1;
	    header("location: ../view/login.php");
	}
?>