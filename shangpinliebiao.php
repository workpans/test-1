<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>商品列表</title>
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
			
			.body{width: 99.9%; height: 1000px;margin-top: 5px;}
			.sp1{width: 99.9%;height: 245px; border: 2px solid black;margin-top: 2px;}
			.lieming1{width: 99.9%; height:40px; border: 1px solid black;margin-top: 1px; background-color:yellow;}
			.lieming2{width: 99.9%; height:40px; border: 1px solid black;margin-top: 1px; background-color:blueviolet;}
			.lieming3{width: 99.9%; height:40px; border: 1px solid black;margin-top: 1px; background-color:crimson;}
			.lieming4{width: 99.9%; height:40px; border: 1px solid black;margin-top: 1px; background-color:aquamarine;}
			.lieming1 h4{text-align: center;margin-top: 6px;}
			.lieming2 h4{text-align: center;margin-top: 6px;}
			.lieming3 h4{text-align: center;margin-top: 6px;}
			.lieming4 h4{text-align: center;margin-top: 6px;}
			.body1{width: 99.9%; height: 200px; border: 1px solid black;}
			.img1{width: 15%; height: 198px; border: 1px solid black; float: left; margin-left: 18px;}
			
			.footer{width: 99.9%;height: 85px; border: 1px solid black; margin-top: 5px;text-align: center;}
			.footer1{width: 99.9%;height: 30px; }
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
			<div class="sp1">
				<div class="lieming1">
					<h4>日常用品</h4>
				</div>
				<div class="body1">
					<div class="img1">
					   <img src="img/blog03.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/blog03.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/blog03.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/blog03.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/blog03.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/blog03.jpg" style="width: 196px;"/>
					</div>
					
				</div>
			</div>
			<div class="sp1">
				<div class="lieming2">
					<h4>水果区</h4>
				</div>
				<div class="body1">
					<div class="img1">
					   <img src="img/4.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/4.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/4.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/4.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/4.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/4.jpg" style="width: 196px;"/>
					</div>
					
				</div>
			</div>
			<div class="sp1">
				<div class="lieming3">
					<h4>日常服装</h4>
				</div>
				<div class="body1">
					<div class="img1">
					   <img src="img/1_160x160.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/1_160x160.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/1_160x160.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/1_160x160.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/1_160x160.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/1_160x160.jpg" style="width: 196px;"/>
					</div>
				</div>
			</div>
			<div class="sp1">
				<div class="lieming4">
					<h4>珠宝区</h4>
				</div>
				<div class="body1">
					<div class="img1">
					   <img src="img/0-item_pic.jpg_220x220.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/0-item_pic.jpg_220x220.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/0-item_pic.jpg_220x220.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/0-item_pic.jpg_220x220.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/0-item_pic.jpg_220x220.jpg" style="width: 196px;"/>
					</div>
					<div class="img1">
					   <img src="img/0-item_pic.jpg_220x220.jpg" style="width: 196px;"/>
					</div>d
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