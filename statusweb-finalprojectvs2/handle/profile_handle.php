<?php 
	require '../database/db.php';
	session_start();
    if(empty($_SESSION['name']) && empty($_SESSION['pass'])){
        header("location: ../view/login.php");
    }
    $name = $_SESSION['name'];
    
	$sql = "SELECT u.image, u.fullname, p.status, p.image, p.emotion, p.id from users as u, posts as p where u.fullname = p.fullname and u.name='".$name."'order by p.id DESC;";
	 $post = $db->query($sql)->fetch_all();
?>