<?php 
  session_start();
  if(isset($_GET['action'])){
      $action = $_GET['action'];
      switch ($action) {
          case 'delete_item':
              //array_splice()
              break;
          
          case 'delete_all':
              unset($_SESSION['cart']);//xoa gio hang
              break;
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
    <?php 
      if(isset($_SESSION['cart'])){
         foreach ($_SESSION['cart'] as $r) {
             ?>
                <div>
                  <div><?php echo $r['name']; ?></div>
                  <div><?php echo $r['price']; ?></div>
                  <div><img src="<?php echo $r['image']; ?>" style="width:100px"></div>
                  <a href="?action=delete_item&id=<?php echo $r['id']; ?>"></a>
                </div>      
             <?php
         } 
      }
    ?>

    <a href="?action=delete_all">Xoa toan bo sp</a>
</body>
</html>