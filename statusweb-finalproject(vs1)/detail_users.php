<?php
	require 'db.php';
	session_start();
    if(empty($_SESSION['name']) && empty($_SESSION['pass'])){
        header("location: login.php");
    }
    $name = $_SESSION['name'];
    $sql = "SELECT * from users as u, post as p where u.fullname = p.fullname and u.name='".$name."'";
    $result = $db->query($sql)->fetch_all();
    var_dump($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
</body>
</html>