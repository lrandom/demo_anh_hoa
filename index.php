<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       define("NAM",1);
       define("NU",0);

       $name = "Nguyễn Thành Luân"; 
       $age = 28;
       $address = "Quảng Ninh";

       echo NAM;
       echo NU;

       
    ?>

    <?php
       $salary = 2000;
    ?>

    <table>
      <tr>
         <td>Họ tên</td>
         <td>Tuổi</td>
         <td>Địa chỉ</td>
      </tr>

      <tr>
         <td><?php //echo $name; ?></td>
         <td><?php //echo $age; ?></td>
         <td><?php //echo $address; ?></td>
      </tr>
    </table>

    <?php
      $age = 10;
      switch ($age) {
              case 10:
                echo 'Mày ko đủ tuổi';
              break;
          
              case 16:
                echo 'Hai tuổi nữa ms đủ tuổi';
              break;

              case 18:
                echo 'Welcome';
              break;

              default:
                echo 'Ko biết';
              break;
      }
    ?>
</body>
</html>