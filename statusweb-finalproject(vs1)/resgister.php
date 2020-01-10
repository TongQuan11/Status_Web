<?php
	session_start();
	require "db.php";
	if(isset($_POST["name"]) && isset($_POST["pass"])){
		echo "Quan";
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$fullname = $_POST['fullname'];
		$target_file = "images_back/".basename($_FILES["fileToUpload"]["name"]);
		
	    $sql = "insert into users values(null,'$name','$pass','$fullname','$target_file')";
	    $db->query($sql);
	    $_SESSION['success'] = 1;
	    header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="resgister.css">
</head>
<body>
	<form class="form_resgister" action="" method="post" enctype="multipart/form-data">
		<h2>STATUS WEB</h2>
		<div class="inputs">
			<label>User Name</label>
			<input id = "user_name"type="text" name="name" placeholder="Username">
			<label>Password</label>
			<input type="password" name="pass" placeholder="Password">
			<label>Fullname</label>
			<input id = "fullname"type="text" name="fullname" placeholder="Fullname">
			<label>Image</label>
			<input type="file" name="fileToUpload" id="fileToUpload">
		</div>
		<button id="button_resgister" name="resgister">RESGISTER</button>
	</form>
</body>
</html>
