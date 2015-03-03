<?php 
$LINK= new PDO('mysql:host=localhost;dbname=web','root','');
$LINK-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$LINK->exec("set names utf8");
// $LINK->exec("Delete FROM `login` where ID=3 ");
// $LINK->exec("INSERT INTO login(username,userpassword,again) values ('a','a','a') ");
?>
<!-- if (!$LINK)
  {
  die('Could not connect: ' . mysql_error());
  }
  else
  	 {echo "成功！";
  }
<meta charset="utf-8"> -->
