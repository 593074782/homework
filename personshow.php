<?php include"connect.php" ?>
<?php 
$sql2 = " SELECT * FROM person ";
$res2 = $LINK->prepare($sql2);
$res2->execute();
$person = $res2->fetchAll(PDO::FETCH_ASSOC);
 ?>