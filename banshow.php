<?php include"connect.php" ?>

<?php
$sql1 = " SELECT * FROM  messageboard ";
$res1 = $LINK->prepare($sql1);
$res1->execute();
$messageboard = $res1->fetchAll(PDO::FETCH_ASSOC);
?>
