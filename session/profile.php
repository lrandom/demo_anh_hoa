<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      if(isset($_SESSION['user'])){
          echo 'Hello'.$_SESSION['user']['username'];
      }else{
          header('Location:login.php');
      }
    ?>
</body>
</html>