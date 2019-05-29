<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>购物车</title>
		<style type="text/css">
			.index{width: 100%;height: 1380px;}
			.head{width: 99.9%; height:280px; border: 1px solid black;}
			.head1{width:99.9%; height: 46px; border:1px solid black ;}
			.head1a{width:25%; height: 26px; float: right; text-align: center; margin-top: 5px;}
			.head1a a{color: black;text-decoration: none;}
			.head1a a:hover{color: red;}
			.head2{width:99.9%; height: 150px; border:1px solid black ;}
			.head2a{width:30%; height: 120px;  float: left; text-align: right; margin-left: 80px; margin-top: 20px;}
			.head2b{width: 50%; height: 50px;  float: left; margin-top: 50px; margin-left: 50px;}
			.head3{width: 99.9%; height:80px; border: 1px solid black;background-color: tomato;}
			.head3 ul {list-style: none; margin-top: 5px;}
			.head3 ul li{width: 19%; height: 50px; float: left;  text-align: center;}
			.head3 a{text-decoration: none; color: black;}
			.head3 a:hover{color: red;}
			
			.body{width: 99.6%; height: 1000px; margin-top: 5px;}
			.gwc{width: 99%; height: 220px; border: 2px solid black; margin-top: 22px; margin-left: 5px;}
			.one{width:99.9%; height: 218px; border: 1px solid black;}
			
			.one1{width: 99.9%; height: 32px;  border: 1px solid black;}
			.left1{width: 80%; height: 30px;  float: left;}
			.left1 h5{margin-top: 5px;}
			.left2{width: 18%; height: 30px;  float: left;}
			.one2{width: 99.9%; height: 150px;  border: 1px solid black;}
			.onea{width: 15%; height: 148px; border: 1px solid black; float: left;}
			.oneb{width: 84%; height: 148px;  float: left;margin-left: 5px;}
			
			.one3{width: 99.9%; height: 30px;  border: 1px solid black;}
			.one3 input {float:  right; margin-right: 50px; margin-top: 5px;}
			
			.three{width: 99.9%; height: 35px; border: 1px solid black;}
			.three input {margin-top: 5px; float: right; margin-right: 50px;}
			
			.footer{width: 99.9%;height: 75px; border: 1px solid black;text-align: center;}
			.footer1{width: 99.9%;height: 30px; border: 1px solid black;}
			.footer2{width: 99.9%;height: 40px; border: 1px solid black;}
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
			<div class="gwc">
				<div class="one">
				  <div class="one1">
				  	<div class="left1">
				  		<h5>新鲜水果>>></h5>
				  	</div>
				  	<div class="left2">
				  		2018-01-22-12:10:15
				  	</div>
				  </div> 
				  <div class="one2">
				  	<div class="onea"><img src="img/11.jpg" style="width: 195px; height: 148px;" /></div>
				  	<div class="oneb">
				  		<p>&nbsp;产品名称：&nbsp;红富士苹果</p>
				  	    <p>&nbsp;价格:&nbsp;12￥/斤</p>
				  	    <p>&nbsp;购买数量: - 1 +</p>
				  	    <p>&nbsp;销量: 1232 /件</p>
				  	</div>
				  </div>
				  <div class="one3"><input type="submit" value="立即购买" /></div>
				</div>
				
			</div>
			<div class="gwc">
				<div class="one">
				  <div class="one1">
				  	<div class="left1">
				  		<h5>海南之家>>></h5>
				  	</div>
				  	<div class="left2">
				  		2018-01-22-12:10:15
				  	</div>
				  </div> 
				  <div class="one2">
				  	<div class="onea"><img src="img/1_160x160.jpg" style="width: 195px; height: 148px;" /></div>
				  	<div class="oneb">
				  		<p>&nbsp;产品名称：&nbsp;羊毛风衣</p>
				  	    <p>&nbsp;价格:&nbsp;1288￥/件</p>
				  	    <p>&nbsp;购买数量: - 1 +</p>
				  	    <p>&nbsp;销量: 2000 /件</p>
				  	</div>
				  </div>
				  <div class="one3"><input type="submit" value="立即购买" /></div>
				</div>
			</div>
			<div class="gwc">
				<div class="one">
				  <div class="one1">
				  	<div class="left1">
				  		<h5>日常用品>>></h5>
				  	</div>
				  	<div class="left2">
				  		2018-01-22-12:10:15
				  	</div>
				  </div> 
				  <div class="one2">
				  	<div class="onea"><img src="img/blog03.jpg" style="width: 195px; height: 148px;" /></div>
				  	<div class="oneb">
				  		<p>&nbsp;产品名称：&nbsp;洗发水</p>
				  	    <p>&nbsp;价格:&nbsp;28￥/瓶</p>
				  	    <p>&nbsp;购买数量: - 1 +</p>
				  	    <p>&nbsp;销量: 1232 /瓶</p>
				  	</div>
				  </div>
				  <div class="one3"><input type="submit" value="立即购买" /></div>
				</div>
			</div>
			<div class="gwc">
				<div class="one">
				  <div class="one1">
				  	<div class="left1">
				  		<h5>周大福珠宝>>></h5>
				  	</div>
				  	<div class="left2">
				  		2018-01-22-12:10:15
				  	</div>
				  </div> 
				  <div class="one2">
				  	<div class="onea"><img src="img/0-item_pic.jpg_220x220.jpg" style="width: 195px; height: 148px;" /></div>
				  	<div class="oneb">
				  		<p>&nbsp;产品名称：&nbsp;情侣项链</p>
				  	    <p>&nbsp;售价:&nbsp;1314￥</p>
				  	    <p>&nbsp;购买数量: - 1 +</p>
				  	    <p>&nbsp;销量: 232 /件</p>
				  	</div>
				  </div>
				  <div class="one3"><input type="submit" value="立即购买" /></div>
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