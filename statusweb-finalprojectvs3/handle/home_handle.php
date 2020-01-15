<?php
    require '../database/db.php';
    session_start();
    if(empty($_SESSION['name']) && empty($_SESSION['pass'])){
        header("location:../view/login.php");
    }
    if(isset($_POST['post'])){
        if(isset($_POST['status'])== null){
            header("location: ../view/home.php");
        }
        else{

            $fullname = $_SESSION['fullname'];
            $status = $_POST['status'];
            $target_file = "../images/".basename($_FILES["fileToUpload"]["name"]);
            $emotion = $_POST['select'];
            $sql = "insert into posts values(null,'$fullname','$status','$target_file','$emotion')";
            $db->query($sql); 
        }
    }
    if(isset($_POST['delete'])){
        $sql = "DELETE from posts where id=".$_POST['delete'];
        $db->query($sql);
    }
    $sql = "SELECT u.image, u.fullname, p.status, p.image, p.emotion, p.id from users as u, posts as p
            where u.fullname = p.fullname
            order by p.id DESC;";
    $post = $db->query($sql)->fetch_all();
?>