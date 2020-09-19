<?php 
  setcookie('time_left','00:05',time()+3600);
  //thời gian lúc thực thi hàm time - 00:00:00 ngày 1 tháng 1 1970 -> giây
  if(isset($_COOKIE['time_left'])){
      echo $_COOKIE['time_left'];
      //setcookie('time_left',null,time()-3600);//xoá cookie
  }

?>