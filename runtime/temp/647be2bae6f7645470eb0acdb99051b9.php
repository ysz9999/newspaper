<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"E:\www\ming\public/../application/index\view\index\index1.html";i:1528639213;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>About</title>
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="/static/index/images/favicon.ico">
		<link rel="shortcut icon" href="/static/index/images/favicon.ico" />
		<link rel="stylesheet" href="/static/index/css/touchTouch.css">
		<link rel="stylesheet" href="/static/index/css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Economica:700' rel='stylesheet' type='text/css'>
		<script src="/static/index/js/jquery.js"></script>
		<script src="/static/index/js/jquery-migrate-1.1.1.js"></script>
		<script src="/static/index/js/script.js"></script>
		<script src="/static/index/js/jquery.ui.totop.js"></script>
		<script src="/static/index/js/superfish.js"></script>
		<script src="/static/index/js/jquery.equalheights.js"></script>
		<script src="/static/index/js/jquery.mobilemenu.js"></script>
		<script src="/static/index/js/touchTouch.jquery.js"></script>
		<script src="/static/index/js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('.latest a.gal').touchTouch();
		})
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100//static/index/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="/static/index/js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="/static/index/css/ie.css">
		<![endif]-->
	</head>
	<body id="top">
<!--==============================header=================================-->
		<div class="main">
			<header>
				<div class="clear"></div>
				<div class="container_12">
					<div class="grid_12">
						<h1>
							<a href="index.html">
								<img src="/static/index/images/logo1.png" alt="Your Happy Family">
							</a>
						</h1>
					</div>
				</div>
			</header>
		</div>
		<div class="menu_block">
			<div class="container_12">
				<div class="grid_12">
					<nav class="horizontal-nav full-width horizontalNav-notprocessed">
						<ul class="sf-menu">
							<li><a href="index.html">Home</a></li>
							<li class="current"><a href="index-1.html">About</a></li>
							<li><a href="index2.html">Gallery</a></li>
							<li><a href="index3.html">Video</a></li>
							<li><a href="index4.html">Contacts</a></li>
						</ul>
					</nav>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="main">
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - December 30, 2013!</div>
				<div class="container_12">
					<div class="grid_4">
						<div class="box">
							<div class="inner maxheight">
						<p>		<h3><?php echo $list[0]['cname']; ?></h3></p>
								<img src="/static/index/images/page2_img.jpg" alt="" class="img_inner">
								<p>
									<strong class="col2"><a href="#"><?php echo $list[0]['address']; ?></a></strong>
								</p>
								<p>
									<?php echo $list[0]['email']; ?>
								</p>
								<?php echo $list[0]['miaoshu']; ?> <br>
								<a href="#" class="btn">More</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="box">
							<div class="inner maxheight">
								<h3><?php echo $list[1]['cname']; ?></h3>
								<div class="block1">
									<div class="count"><?php echo $list[1]['email']; ?></div>
									<div class="extra_wrapper">
										<p class="col2"><strong><a href="#"><?php echo $list[1]['address']; ?> </a></strong></p>
										<?php echo $list[1]['miaoshu']; ?>
									</div>
								</div>
								<div class="block1">
									<div class="count"><?php echo $list[2]['cname']; ?></div>
									<div class="extra_wrapper">
										<p class="col2"><strong><a href="#"><?php echo $list[2]['email']; ?> </a></strong></p>
										<?php echo $list[2]['address']; ?>
									</div>
								</div>
								<div class="block1">
									<div class="count"><?php echo $list[3]['cname']; ?></div>
									<div class="extra_wrapper">
										<p class="col2"><strong><a href="#"><?php echo $list[3]['email']; ?> </a></strong></p>
										<?php echo $list[3]['miaoshu']; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="box">
							<div class="inner maxheight">
								<h3>美女图片</h3>
								<div class="latest">
									<a href="/static/index/images/big1.jpg" class="gal"><img src="/static/index/images/page2_img1.jpg" alt=""></a>
									<a href="/static/index/images/big2.jpg" class="gal"><img src="/static/index/images/page2_img2.jpg" alt=""></a>
									<a href="/static/index/images/big3.jpg" class="gal"><img src="/static/index/images/page2_img3.jpg" alt=""></a>
									<a href="/static/index/images/big4.jpg" class="gal"><img src="/static/index/images/page2_img4.jpg" alt=""></a>
									<a href="/static/index/images/big5.jpg" class="gal"><img src="/static/index/images/page2_img5.jpg" alt=""></a>
									<a href="/static/index/images/big6.jpg" class="gal"><img src="/static/index/images/page2_img6.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_12">
						<div class="box1">
							<div class="inner">
								<blockquote>
									<p>Integer convallis orci vel mi laoreet, aterto ornare lorem consequat. Phasellus erat nisl, auctor vel velit sed, pharetramulo venenatis nulla. Vestibulum volutpilom at turpis ut massa commodo noloty </p>
									<div class="bq_bot"><span>Mark Brown</span>Client</div>
								</blockquote>
								<blockquote>
									<p>Integer convallis orci vel mi laoreet, aterto ornare lorem consequat. Phasellus erat nisl, auctor vel velit sed, pharetramulo venenatis nulla. Vestibulum volutpilom at turpis ut massa commodo noloty </p>
									<div class="bq_bot"><span>Elza Grey</span>Client</div>
								</blockquote>
								<blockquote>
									<p>Integer convallis orci vel mi laoreet, aterto ornare lorem consequat. Phasellus erat nisl, auctor vel velit sed, pharetramulo venenatis nulla. Vestibulum volutpilom at turpis ut massa commodo noloty </p>
									<div class="bq_bot"><span>Bred Wood</span>Client</div>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
<!--==============================footer=================================-->
			<footer>
				<div class="hor bg3"></div>
				<div class="container_12">
					<div class="grid_12">
						<div class="socials">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<div class="clear"></div>
						</div>
						<div class="copy">
							Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://www.xwcms.net">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
</body>
</html>