 <?php require '../handle/home_handle.php';?>
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
     <link rel="stylesheet" type="text/css" href="../css/home.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>

 <body>
     <div class="container">
        <?php require 'header.php'; ?>
         <div class="symbol">
             <img src="<?php echo($_SESSION['image']);?>">
             <h3>
                 <?php
                if(isset($_SESSION['name']) && isset($_SESSION['pass'])){
                    echo "WELCOME"." ".strtoupper($_SESSION['fullname'])." COME TO ";
                } ?>
             </h3>
             <h3>
                 STATUS WEB - PLACE TO MAKE YOU HAPPY</h3>
         </div>

         <form class="post" action="" method='post' enctype="multipart/form-data">
             <img src="<?php echo($_SESSION['image']);?>">
             <input type="text" name="status" placeholder="   What are you thinking?">
             <div class="image-upload">
                 <label for="fileToUpload">
                     <i class="fa fa-file-image-o"></i>
                     <b>Photo</b>
                 </label>
                 <input id="fileToUpload" type="file" name="fileToUpload" />
             </div>
             <div class="emotion">
                 <select name="select" id="select">
                     <option value="Normal">Normal</option>
                     <option value="Happiness">Happiness</option>
                     <option value="Sadness">Sadness</option>
                     <option value="Fear">Fear</option>
                     <option value="Disgust">Disgust</option>
                     <option value="Anger">Anger</option>
                     <option value="Sadness">Sadness</option>
                     <option value="Sursprise">Sursprise</option>
                 </select>
                 <b>Emotion</b>
             </div>
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name='post'><b>POST</b></button>
         </form>

         <?php require 'displaystatus.php'; ?>

     </div>
 </body>
 </html>