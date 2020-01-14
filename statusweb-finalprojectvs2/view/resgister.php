<?php
require '../handle/resgister_handle.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/resgister.css">
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
