<?php include "connect.php" ?>
<meta charset="utf-8">
<?php 
$username 	   = $_POST["name"];
$userpassword  = $_POST["password"];
// $again		   = $_POST["again"];
// $num 		   = strlen($userpassword);
date_default_timezone_set("Asia/chongqing");
$time		   =date("Y.m.d.h:i:sa");


 $sql4 = "SELECT username FROM login where username='$username' ";
 $res4 = $LINK->prepare($sql4);
 $res4->execute();
 if($cheshi = $res4->fetchAll(PDO::FETCH_ASSOC)){  //该判断句，结合了PDO查询数据的用法与if的判断，有值为1，执行；无值为0，执行else.(好句！！！)
 	echo "该用户名已被注册";
 }else{
  $password = MD5(MD5(MD5($userpassword)));
 $sql2 ="INSERT INTO login(username,userpassword,firsttime) values ('$username','$password','$time')";
 $res2 = $LINK->exec($sql2);
 echo "恭喜你成功注册";
 }

 header("refresh:1;url=main.html");


// 同时建立了两个表，不太简便

// $sql4 = "SELECT username FROM login where username='$username' ";
// $res4 = $LINK->prepare($sql4);
// $res4->execute();
// $cheshi = $res4->fetchAll(PDO::FETCH_ASSOC);

// $sql = "INSERT INTO test(username) values ('$username') ";
// $res = $LINK ->exec($sql);
// $sql1 = "SELECT username from test";
// $res1 = $LINK->prepare($sql1);
// $res1->execute();
// $ceshi = $res1->fetchAll(PDO::FETCH_ASSOC);

//  if($cheshi == $ceshi)
// {
// 	$sql5 = "DELETE FROM test";
// 	$res5 = $LINK->exec($sql5);
// 	echo "该用户名已被注册";
// }
// else
// {
// 	// if($num>5 && $num<17)
// 	// {
// 	// 	if($userpassword == $again)
// 	// 	{
// 	// 	$password = MD5(MD5(MD5($userpassword)));
// 	// 	$sql2 ="INSERT INTO login(username,userpassword,firsttime) values ('$username','$password','$time')";
// 	// 	$res2 = $LINK->exec($sql2);
// 	// 	$sql5 = "DELETE FROM test";
// 	// 	$res5 = $LINK->exec($sql5);
// 	// 	echo "恭喜你成功注册";
// 	// 	}

// 	// 	else
// 	// 	{
// 	// 	echo "两次密码不一致，请重新输入。";
// 	// 	}
// 	// }
// 	// else
// 	// {
//  // 	echo "密码字符长度不对，请重新输入";
// 	// }                                                  前端已经改进，不需要再这么进行

// $password = MD5(MD5(MD5($userpassword)));
// $sql2 ="INSERT INTO login(username,userpassword,firsttime) values ('$username','$password','$time')";
// $res2 = $LINK->exec($sql2);
// $sql5 = "DELETE FROM test";
// $res5 = $LINK->exec($sql5);
// echo "恭喜你成功注册";

// }
?>