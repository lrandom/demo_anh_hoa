<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      $products = array(
          array(
              'id'=>1,
              'name'=>'Iphone 8',
              'price'=>18000000,
              'image'=>'https://sudospaces.com/mobilecity-vn/images/2019/12/iphone11-pro-max.jpg'
          ),
          array(
              'id'=>2,
              'name'=>'Vsmart',
              'price'=>4000000,
              'image'=>'https://product.hstatic.net/1000370939/product/vsmart-active-3-400x460-1-400x460_c287f1fb3d1549e189aff5041c618190.png'
          ),
          array(
              'id'=>3,
              'name'=>'Xiaomi',
              'price'=>5000000,
              'image'=>'https://fptshop.com.vn/Uploads/Originals/2020/5/1/637239291106885380_xiaomi-redmi-note-10-lite-xam-1.png'
          )
      )
    ?>


    <?php 
      foreach ($products as $r) {
         ?>
            <div>
              <img src='<?php echo $r['image']; ?>' style="width:100px"/>
              <div><?php echo $r['price']; ?></div>
              <div><?php echo $r['name']; ?></div>
              <a href="add_to_cart.php?id=<?php echo $r['id'] ?>">Add to cart</a>
            </div>
         <?php
      }
    ?>

    <a href="cart.php">Xem gio hang</a>
</body>
</html>