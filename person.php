<!doctype html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
	<title>个人资料</title>
	<link rel="stylesheet" href="person.css">
  </head>
  <body>
	<div class="main" id="height">
			<div class="top">

				<div class="user"> 用户名的基本资料       
          <a class="btn"  id="btn"> 修改</a>
				</div>

				<div id="change" class="change">
            <form method="POST" action="personget.php">
              <div class="user"> 姓名:
                        <span class="cont" ></span>
                      <input type="text" placeholder="请输入姓名" onblur="test();" name="name">
              </div>
              <div class="user"> 性别: 
                   	  	<span class="cont" ></span>
                        <select name="sex">
                        	<option value ="男">男</option>
                          <option value ="女">女</option>
                        </select>
              </div>
              <div class="user"> 血型: 
                   	  	<span class="cont"></span>
                        <select name="bloodtype">
                        	<option value ="A">A</option>
                          <option value ="B">B</option>
                          <option value ="AB">AB</option>
                          <option value ="O">O</option>
                          <option value ="其他">其他</option>
                        </select>
              </div>
<!--               <div class="user"> 生日: 
                   	  	<span class="cont"></span>
                       <input type="text" placeholder="请输入生日" onblur="test();" name="birthday">
              </div> -->
              <div class="user"> 星座: 
                   	  	<span class="cont"></span>
                        <select name="constellation">
                        	<option value ="白羊座">白羊座</option>
                          <option value ="金牛座">金牛座</option>
                          <option value ="双子座">双子座</option>
                          <option value ="巨蟹座">巨蟹座</option>
                          <option value ="狮子座">狮子座</option>
                          <option value ="处女座">处女座</option>
                          <option value ="天秤座">天秤座</option>
                          <option value ="天蝎座">天蝎座</option>
                          <option value ="射手座">射手座</option>
                          <option value ="摩羯座">摩羯座</option>
                          <option value ="水瓶座">水瓶座</option>
                          <option value ="双鱼座">双鱼座</option>
                        </select>
           	  </div>
          	  <div class="user"> 职业: 
                   	  	<span class="cont"></span>
                        <input type="text" placeholder="请输入职业" onblur="test();" name="work">
          	  </div>
           	  <input type="submit"  value="确认修改"  class="sure" disabled="disabled" >
            </form>
				</div>
			  <div id="change1">
          <?php include"personshow.php" ?>
          <?php foreach($person as $key => $value) {?>
          <div>姓名:
              <span class="cont"><?php echo $value['name']?></span>
          </div>
			   	<div >性别:   
				    <span class="cont"><?php echo $value['sex']?></span> 
				  </div> 
				  <div  >血型:    
				    <span class="cont"><?php echo $value['bloodtype']?></span>
				  </div> 
<!-- 				  <div  >生日:    
				    <span class="cont"><?php echo $value['birthday']?></span>
				  </div>  -->
				  <div  >星座:    
				    <span class="cont"><?php echo $value['constellation']?></span>
				  </div> 
				  <div  >职业:    
				    <span class="cont"><?php echo $value['work']?></span>
				  </div> 
          <?php } ?>
			  </div>
			</div>
	</div>
	<script type="text/javascript">
		var obtn     = document.getElementById("btn");
		var ochange  = document.getElementById("change");
		var ochange1 = document.getElementById("change1");
		var oinput   = document.getElementsByTagName("input");

		btn.onclick  = function() {
		 	ochange.style.display = "block";
		 	ochange1.style.display = "none";	
		 }

		function test() {
        if(oinput[0].value !="" &&oinput[1].value !=""){
            oinput[2].disabled = false;
          }else{
                oinput[2].disabled = true;
              }
		 }

		oinput[2].onclick = function() {
		 	alert("修改成功");
		 	ochange.style.display = "none";
		 	ochange1.style.display = "block";
		 }

		window.onload = function() {
     var ht=document.documentElement.clientHeight;
     var oheight=document.getElementById("height");
     oheight.style.height=ht+"px";
     }
	</script>
	</body>
</html>