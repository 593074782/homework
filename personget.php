<?php include "connect.php" ?>
<?php
$name = $_POST['name'];
$sex = $_POST['sex'];
$bloodtype = $_POST['bloodtype'];
//$birthday = $_POST['birthday'];birthday='$birthday',
$constellation = $_POST['constellation'];
$work = $_POST['work'];
$sql="UPDATE  person SET name='$name',sex='$sex',bloodtype='$bloodtype',constellation='$constellation',work='$work'
		WHERE ID='1' ";  //ID是个变量，此处需要修改
$res=$LINK->exec($sql);


 header("refresh:1;url=person.php");
 ?>