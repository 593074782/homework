<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>日志</title>
	<link rel="stylesheet" href="diary.css">
</head>
<body>
	<div class="main" id="height">  
		<div class="top" id="top" ><!-- 主页面 -->
      <form>
         <input type="submit" value="点击搜索" class="sch1">
         <input type="text" placeholder="请输入你要找的标题" class="sch">
      </form>
		  	
      <button class="write"   onclick="owrite();" >写日志</button> 

      <!-- 显示日志的标题 -->
      <?php include"diarytitleshow.php" ?>
      <?php foreach($allMessage as $key => $value) {?>  
      <div class="rizhi">
        <a href="diaryshow.php?id=<?php echo $value['id'] ?>">
        <?php echo $value["title"]; echo " - - - - - ";echo $value["sendtime"];?>
        </a>
      </div>

      <?php } ?>

      <div  style="margin-top: 15px; text-align: center;">
      <span onclick = "turn(0)";>首页</span>
      <span onclick = "turn(curIndex-1)";>上一页</span>
      <span onclick = "turn(curIndex+1)";>下一页</span>
      <span >尾页</span> 第<span ></span>页/共<span></span>页
      </div>
		</div>

    <div class="xie" id="xie">  <!-- 写日志的界面 -->
      <form method="post" action="diaryget.php" class="form">
        <div>
          <input type="text" name="name" placeholder="请输入日志标题" class="title" id="title" onblur="text();" onkeydown="text();" >
          <br/>
          <textarea type="text" name="word" placeholder="请输入日志内容" class="word" id="word" onblur="text();" onkeydown="text();"></textarea>

          <div>
            <span>分类:</span>
            <select name="classify">
              <option value ="个人日记">个人日记  </option>
              <option value ="娱乐"    >娱乐      </option>
              <option value="天下杂侃" >天下杂侃  </option>
              <option value="生活情感" >生活情感  </option>
            </select>
          </div>

          <div>
             <input   type="submit" value="发表" class="put" id="get"  onclick="oget1()"  disabled="disabled">
            <input   type="button" value="取消" class="put" id="cancel" onclick="ocancel()" > 
          </div>

        </div>
      </form>
    </div>
  </div>


   <script type="text/javascript">
    var otop   = document.getElementById("top");
    var oxie   = document.getElementById("xie");
    var otitle = document.getElementById("title");
    var oget   = document.getElementById("get");
    var oword  = document.getElementById("word");
    var ospan  = document.getElementsByTagName("span");
    var number = document.getElementsByTagName("a");
    var eve    = 5; //每页的标题数量 可以任意更改
    var page   = Math.floor(number.length/eve);
    var curIndex = 0; 
    ospan[5].innerHTML=page+1;

      function owrite(){
             otop.style.display="none";
             oxie.style.display="block";    
      }

      function  oget1(){
        if(otitle.value==""||oword.value==""){ 
          alert("输入的标题或内容为空");
        }
           else{
           otop.style.display="block";
           oxie.style.display="none";
           alert("提交成功");
         }
      }

       function  ocancel(){
          otop.style.display="block";
           oxie.style.display="none";
           alert("取消提交");
      }
     // 验证标题内容为空
        function text(){
                   if(oword.value !="" && otitle.value != ""){
                      oget.disabled = false;
                   }
                   else{
                     oget.disabled = true;
                   }
            }  
     //  分页 
    function turn(index){
             if (index < 0 || index > page) {
               return ;
    }
         for (var k = 0 ; k < number.length ; k++){
           number[k].style.display = "none";
         }
          for (var i = index*eve , j = i + eve; i < j ; i++) {
          if (i > number.length) break;
        number[i].style.display="block"; 
          curIndex = index;
        ospan[4].innerHTML=index+1;
         }
      
    }
     // function next(){
     //   turn(curIndex+1);
     // }
     // function last(){
     //   turn(curIndex-1);
     // }
     // ospan[0].onclick = turn(0);
     // ospan[1].onclick = turn(curIndex+1);
     // ospan[2].onclick = turn(curIndex-1);
     ospan[3].onclick = function(){
          turn(page);
     }
     turn(0);
     window.onload=function()
   {
     var ht=document.documentElement.clientHeight;
     var oheight=document.getElementById("height");
     oheight.style.height=ht+"px";
   }
    
           
   </script>
</body>
	
</html>