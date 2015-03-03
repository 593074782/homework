<?php include "connect.php" ?>
<?php 
$liuyan =$_POST['liuyan'];
date_default_timezone_set("Asia/chongqing");
$time	= date("Y.m.d.h:i:sa");

$sql="INSERT INTO messageboard(people,message,time) values ('$people','$liuyan','$time')";
$res=$LINK->exec($sql);

 header("refresh:1;url=ban.php");

?>