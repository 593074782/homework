<?php include"connect.php" ?>
<meta charset="utf-8">
 <?php 

 $rs = $LINK->query("SELECT * FROM diary");
 $result_arr = $rs->fetchAll();
 print_r($result_arr);  
 



  ?>