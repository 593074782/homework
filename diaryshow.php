<?php include"connect.php" ?>
<?php 
		$id = $_GET['id'];
		$sql1 = " SELECT * FROM  diary where id='$id' ";
		$res1 = $LINK->prepare($sql1);
		$res1->execute();
		$allMessage = $res1->fetchAll(PDO::FETCH_ASSOC);
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>日志</title>
		 <link rel="stylesheet" href="diaryshow.css">
</head>
<body>
	<div class="main" id="height">
		<h1 align="center">
 		<?php foreach($allMessage as $key => $value){?>
			 <?php echo $value['title']; ?>
		 <?php } ?>
		</h1>
		<p style="text-indent:5em;">
		<?php foreach($allMessage as $key => $value){?>
			 <?php echo $value['memory']; ?>
		 <?php } ?>
		</p>
	</div>
	<script type="text/javascript">
	window.onload=function()
   {
     var ht=document.documentElement.clientHeight;
     var oheight=document.getElementById("height");
     oheight.style.height=ht+"px";
   }
   </script>
</body>
</html>