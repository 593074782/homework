<?php include "connect.php" ?>
<meta charset="utf-8">
<?php 
$title	       = $_POST["name"];
$memory        = $_POST["word"];
$classify      = $_POST["classify"];
date_default_timezone_set("Asia/chongqing");
$sendtime	   = date("Y.m.d.h:i:sa");

$sql="INSERT INTO diary(title,memory,classify,sendtime)
		 values
 		('$title','$memory','$classify','$sendtime')";

$res=$LINK->exec($sql);


 header("refresh:1;url=diary.php");

?>