<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<link rel="stylesheet" href="ban.css">
</head>
<body>
	<div class="main" id="height">

    <!--  这里的留言给到的是那个大的div里面 -->
    <form method="POST" action="banget.php">
      <textarea name="liuyan" type="text" placeholder="请输入留言内容" class="liuyan" id="liuyan"></textarea>
      <input type="submit" value="发表" class="btn">
    </form>
	 
      <!-- 这里放大的留言的内容 -->
    <div class="big">
      <?php include "banshow.php" ?>
      <?php foreach($messageboard as $key => $value){?>

      <div class = "style"> 
        <?php echo $value['message'] ?>
      </div>
      <a href="#" class="reply" >回复</a> 
      <div class = "style1">这里是对留言的回复 点击那个回复的按钮 提交的东西放在这个div里面 </div>
      <div class = "style1">这里是对留言的回复 </div>
              
      <!-- 楼中楼回复 <-->
      <form class="form1" method="POST" action="banget.php" >
        <textarea class="rpy" name="reply"> </textarea>
        <input type="submit" value="发表" class="btn1" disabled="disabled"> 
      </form>

      <?php } ?>

    </div> 
  </div>
  <script type="text/javascript">
     var oa = document.getElementsByTagName("a");
     var oform = document.getElementsByTagName("form");
     var oinput = document.getElementsByTagName("input");
     var otext = document.getElementsByTagName("textarea");
        function ban(index){
            oa[index].onclick = function(){
               if(oform[index+1].style.display == "none"){
                  oform[index+1].style.display = "block";
               }
               else{
                  oform[index+1].style.display = "none";
               }
            }
        }
         function oban(){
          for(i = 0 ; i < oa.length ; i++){
             ban(i);
          }
         }
         // 设置disabled属性
       
           // 非空
         function nonull(x){
                otext[x].onblur = function(){
                   if( otext[x].value == "" ){
                      oinput[x].disabled = true;
                   }
                   else{
                    oinput[x].disabled = false;
                   }
                 }
         }
          function notnull(){
                   for (i = 0 ;i < otext.length ; i++ ){
                    nonull(i);
                  }
        }
      // oreply.onclick = function(){
      //   if(oform1.style.display == "none"){
      //      oform1.style.display = "block"; 
      //   }
      //   else{
      //     oform1.style.display = "none"; 
      //   }
           
      // }

      oban();
      notnull();
  </script>
</body>
</html>