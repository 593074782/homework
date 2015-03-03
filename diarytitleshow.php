<?php include"connect.php" ?>

<?php
$sql1 = " SELECT * FROM  diary ";
$res1 = $LINK->prepare($sql1);
$res1->execute();
$allMessage = $res1->fetchAll(PDO::FETCH_ASSOC);
?>

