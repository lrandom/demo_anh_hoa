<?php 
session_start();
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
          );
if(isset($_GET['id'])){
  foreach ($products as $r) {
      if($r['id']==$_GET['id']){
        if(isset($_SESSION['cart'])){
            $cart = $_SESSION['cart'];
            array_push($cart,$r);//them sp vao gio hang
            $_SESSION['cart']=$cart;
        }else{
            $cart = [
                $r
            ];
            $_SESSION['cart']=$cart;
        }
        break;
      }
  }
}

header('Location:index.php');
?>