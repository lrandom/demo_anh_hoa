<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      for ($i=0; $i < 10; $i++) { 
        //echo $i; //0123456789
      }

      $index = 0;
      while ($index <= 10) {
         //echo $index;
         $index++;
      }

      do {
        //echo $index;
        $index++;
      } while ($index <= 10);
      
      //Cách tạo mảng một chiều
      /*$mang = [
          10,
          "Luan",
          "Nam"
      ];*/
      $mang = array(
          10,"Luan","Nam"
      );
      $mang[0]; //10
      $mang[1];//Luan

      $mang = array();
    //   $mang[0]=10;
    //   $mang[1]="Luan";
    //   $mang[2]="Nam";

      $mang[]=10;
      $mang[]="Luan";
      $mang[]="Nam";

      /*$mang2d = [
        [9,4,5],
        [2,3,5]
      ];*/

      $mang2d =array(
          array(9,4,5),
          array(2,3,5)
      );

      $mang2d[0][0];
      $mang2d[1][2];

      $mang3d = [
          [
              [1,2,3],
              [3,4,5]
          ],
          [
              [5,6,7],
              [7,8,9]
          ]
      ];

      $mang3d[1][1][2];//2
      
      //mảng liên hợp
      $mangLienHop = [
          "name"=>"Luan",
          "address"=>"Ha Long"
      ];
      $mangLienHop["name"]; //Luan
      $mangLienHop["address"];//Ha Long

      $mangLienHop2 =array(
          array("name"=>"Luan"),
          array("address"=>"Ha Long")
      );
      
      $mangLienHop3["name"]= "Luan";


      $mangLienHopNhieuChieu = [
          [
              "name"=>"Luan",
              "address"=>[
                  "line1"=>"Ha Phong, Ha Long",
                  "line2"=>"Quang Ninh"
              ]
          ]
      ];

      $mangLienHopNhieuChieu[0]["address"]["line2"];// Quang Ninh


      $mangMotChieu = array(0,1,2,3,4,5,6);
      for ($i=0; $i < count($mangMotChieu); $i++) { 
         echo $mangMotChieu[$i];
      }

      foreach ($mangMotChieu as $r) {
          echo $r;
      }

      $mangLienHop = array(
          'name'=>'Luan',
          'adress'=>'Ha Long'
      );
      echo '<br>';
      foreach ($mangLienHop as $k => $v) {
         echo $k. ' '.$v .'<br>';
      }


    ?>
</body>
</html>