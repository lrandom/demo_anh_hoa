<?php 
  session_start();
  if(isset($_POST['username'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      if($username=='admin' && $password=='admin'){
          //đăng nhập thành công
         $_SESSION['user'] = array(
             'username'=>$username
         );
         header('Location: profile.php');
      }else{
          //đăng nhập thất  bại 
          $error = 'Đăng nhập thất bại';
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <?php
          if(isset($error)){
              echo $error;
          }
        ?>
        <input type="text" name="username"/>
        <input type="password" name="password"/>
        <input type="submit" value="Login"/>
    </form>
</body>
</html>