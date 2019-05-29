<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>登录dfd</title>
		<style type="text/css">
			.index{width: 100%;height: 1380px; }
			.head{width: 99.9%; height:280px; border: 1px solid black;}
			.head1{width:99.9%; height: 46px; border:1px solid black ;}
			.head1a{width:25%; height: 26px; float: right; text-align: center; margin-top: 5px;}
			.head1a a{color: black;text-decoration: none;}
			.head1a a:hover{color: red;}
			.head2{width:99.9%; height: 150px; border:1px solid black ;}
			.head2a{width:30%; height: 120px;  float: left; text-align: right; margin-left: 80px; margin-top: 20px;}
			.head2b{width: 50%; height: 50px;  float: left; margin-top: 50px; margin-left: 50px;}
			.head3{width: 99.9%; height:80px; border: 1px solid black; background-color: tomato;}
			.head3 ul {list-style: none; margin-top: 5px;}
			.head3 ul li{width: 19%; height: 50px; float: left;  text-align: center;}
			.head3 a{text-decoration: none; color: black;}
			.head3 a:hover{color: red;}
			
			.body{width: 99.9%; height: 1000px;  margin-top: 5px;}
			.body1{width: 20%; height:998px ; border: 1px solid black; float: left; margin-left: 5px;background-color: gray;color: white;}
			.body1 ul li{width: 98%; height: 100px; margin-left: 50px;}
			.body2{width: 79%; height:998px ; border: 1px solid black;float: left; margin-left: 3px; background-color: wheat;}
			.denglu{width: 50%; height: 500px;  margin: 0px auto; text-align: center;}
			.denglu form{margin-left: 40px;}
			.denglu form tr{line-height: 60px; }
			
			.footer{width: 99.9%;height: 85px; border: 1px solid black;margin-top: 5px;text-align: center;}
			.footer1{width: 99.9%;height: 30px;}
			.footer2{width: 99.9%;height: 50px; }
		</style>
	</head>
	<body>
		<div class="index">
			
		<div class="head">
			<div class="head1">
				<div class="head1a">亲,请先注册,<a href="zhuce.php">免费注册</a></div>
			</div>
			<div class="head2">
				<div class="head2a">
					<img src="img/logobig.png">
				</div>
				<div class="head2b">
					<input type="text" name="sosuo" style="width: 70%; height: 40px;"/>
					<input type="submit" value="搜索" style="width: 16%; height:46px;" />
				</div>
			</div>
			<div class="head3">
				<ul>
					<li><h2><a href="index.php">首页</a></h2></li>
					<li><h2><a href="denglu.php">登录</a></h2></li>
					<li><h2><a href="zhuce.php">注册</a></h2></li>
					<li><h2><a href="shangpinliebiao.php">商品</a></h2></li>
					<li><h2><a href="gowuche.php">购物车</a></h2></li>
				</ul>
			</div>
		</div>
		
		<div class="body">
			<div class="body1">
				<ul>
					<li>点心/蛋糕 ></li>
					<li>饼干/膨化 ></li>
					<li>熟食/肉类 ></li>
					<li>素食/卤味 ></li>
					<li>坚果/炒货 ></li>
					<li>糖果/密线 ></li>
					<li>巧克力  ></li>
				    <li>海味/河鲜 ></li>
				    <li>花茶/果茶 ></li>
				    <li>名牌/礼包 ></li>
				</ul>
			</div>
			<div class="body2">
				<div class="denglu">
					 <form style="width: 80%; height: 898px; action="denglu.php" method="post" enctype="multipart/form-data"">
				 	<table>
				 		<tr>
						<td></td><td>&nbsp;&nbsp;&nbsp;<h2>登&nbsp;&nbsp;录&nbsp;&nbsp;页</h2></td>
					</tr>
				 		<tr>
				 			<td>账号:</td><td><input type="text" name="name" /></td>
				 		</tr>
				 		<tr>
				 			<td>密码:</td><td><input type="password" name="pwd" /></td>
				 		</tr>
				 		<tr style="height: 30px;">
						<td>验证码：</td><td><input type="text" name="code" style="height: 15px;"/></td>
						<td>
							<img src="code.php" onclick="this.src='code.php?nocache='+Math.random()" title="点击换一张" alt="点击换一张" style="height: 27px;" /></td>
					    </tr>
					    <tr>
					    	<td></td><td><input type="submit" name="submit" value="确定登录" /></td>
					    </tr>
				 	</table>
				 </form>
				</div>
			</div>
		</div>
		
		<div class="footer">
			<div class="footer1">
				<a>&nbsp;恒旺科技     </a>|<a>&nbsp;商城首页    </a>|<a>&nbsp;支付宝   </a>|<a>&nbsp;物流   </a>
			    <hr />
			</div>
			<div class="footer2">
				<a>&nbsp; 关于恒旺 </a><a>合作伙伴 </a><a>&nbsp;联系我们 </a><a>&nbsp;网站地图 </a><a>&nbsp;@2015-2025 hengwang.com 版权所有</a>
			</div>
		</div>
		</div>
	</body>
</html>
