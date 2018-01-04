<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>天津物流信息科技有限公司</title>
		<link rel="short icon" type="image/x-icon" href="http://chuantu.biz/t6/195/1514986096x-1404795820.png">
		<!-- Bootstrap -->
		<link href="/trans/Public/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome Icons -->
		<link href="/trans/Public/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- PE Icon 7 Stoke -->
		<link href="/trans/Public/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css"  rel="stylesheet">
		<link href="/trans/Public/fonts/pe-icon-7-stroke/css/helper.css"  rel="stylesheet">
		<!-- PE Icon Social -->
		<link href="/trans/Public/fonts/pe-icon-social/css/pe-icon-social.css" rel="stylesheet">
		<link href="/trans/Public/fonts/pe-icon-social/css/helper.css"  rel="stylesheet">
		<!-- Quicksand Dash -->
		<link href="/trans/Public/fonts/quicksand-dash/stylesheet.css"  rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="/trans/Public/css/owl.carousel.css"  rel="stylesheet">
		<link href="/trans/Public/css/owl.theme.default.css"  rel="stylesheet">
		<!-- Sweet Alert -->
		<link href="/trans/Public/css/sweetalert.css" rel="stylesheet">
		<!-- Animate -->
		<link href="/trans/Public/css/animate.min.css"  rel="stylesheet">
		<!-- Nivo Lightbox -->
		<link href="/trans/Public/scripts/Nivo-Lightbox/nivo-lightbox.css"  rel="stylesheet">
		<link href="/trans/Public/scripts/Nivo-Lightbox/themes/default/default.css" rel="stylesheet">
		<!-- NoUISlider -->
		<link href="/trans/Public/css/jquery.nouislider.min.css"rel="stylesheet">
		<!-- Style.css -->
		<link href="/trans/Public/css/style.css" rel="stylesheet">
		<link href="/trans/Public/css/openlogin.css" rel="stylesheet">
		<script type="text/javascript" src="/trans/Public/js/openLogin.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="../../../../../../oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" tppabs="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="../../../../../../oss.maxcdn.com/respond/1.4.2/respond.min.js" tppabs="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
		
		<header class="header clearfix">
			<div class="left">
				<div class="logo"><a href="<?php echo U('Index/index');?>"><img src="/trans/Public/images/logo.png" style="width: 45px;height: auto" class="img-responsive"></a></div> <!-- end .logo -->
				<!-- <form class="header-search">
					<input type="text" placeholder="I’m searching for ...">
					<button type="submit"><i class="pe-7s-search"></i></button>
				</form> -->
			</div> <!-- end .left -->
			<div class="navigation clearfix">
				<nav class="main-nav">
					<ul class="list-unstyled">
						<li class="menu-item-has-children">
							<a href="<?php echo U('NearBy/nearBy');?>">附近10km的信息</a>
							<ul>
								<li><a href="<?php echo U('NearBy/nearBy');?>">附近的信息</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="<?php echo U('AddTask/addTask');?>">发布任务</a>
							<ul>
								<li><a href="<?php echo U('AddTask/addTask');?>">发布任务</a></li>
								</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="<?php echo U('TaskList/taskList');?>">全部信息</a>
							<ul>
								<li><a href="<?php echo U('TaskList/taskList');?>">全部信息</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="<?php echo U('SelfCenter/selfCenter');?>" >与我相关</a>
							<ul>
								<li><a href="<?php echo U('SelfCenter/selfCenter');?>">我的</a></li>
								<!-- <li><a href="shop-details.html" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/shop-details.html">Shop Details</a></li>
								<li><a href="shop-cart.html" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/shop-cart.html">Shop Cart</a></li> -->
							</ul>
						</li>
					</ul>
				</nav> <!-- end .main-nav -->
				<a href="" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
			</div> <!-- end .navigation -->
			<div class="right">
				<a href="#" class="button signup-open border" >没有账号？注册</a> <!-- data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();" -->
				<a href="#" class="button login-open" >登录</a><!-- data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" -->
			</div> <!-- end .left -->
		</header> <!-- end .header -->

<div class="login-wrapper">
			<div class="login">
				<form>
					<div class="form-group">
						<input type="text" placeholder="Username or Email Address *">
					</div> <!-- end .form-group -->
					<div class="form-group">
						<input type="text" placeholder="Password *">
					</div> <!-- end .form-group -->
					<div class="clearfix">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
						<a href="" class="lost-password">Lost your password ?</a>
					</div> <!-- end .clearfix -->
					<div class="button-wrapper"><button type="submit" class="button">Login</button></div>
					<div class="text-center">
						<p>Don't have an account ? <a href="" class="signup-open">Sign up</a></p>
						<!-- <div class="social">
							<p>Connect with Social Networks</p>
							<a href=""><img src="/trans/Public/images/facebook.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/facebook.png" alt="facebook"></a>
							<a href=""><img src="/trans/Public/images/twitter.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/twitter.png" alt="twitter"></a>
							<a href=""><img src="/trans/Public/images/google-plus.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/google-plus.png" alt="google plus"></a>
						</div> --> <!-- end .social -->
					</div>
				</form>
			</div> <!-- end .login -->
		</div> <!-- end .login-wrapper -->

		<div class="signup-wrapper">
			<div class="signup">
				<form>
					<div class="form-group">
						<label style="color: red;display: inline-block;">*</label><input type="text" placeholder="用户名">
					</div> <!-- end .form-group -->
					<div class="form-group">
						<label style="color: red;display: inline-block;">*</label><input type="password" placeholder="密码">
					</div> <!-- end .form-group -->
					<div class="text-center">
						<p>完成后请及时对信息进行完善</p>
					</div> <!-- end .text-center -->
					<div class="button-wrapper"><button type="submit" class="button">注册</button></div>
					<div class="text-center">
						<p>Already have an account? <a href="" class="login-open">Log in</a></p>
						<!-- <div class="social">
							<p>Connect with Social Networks</p>
							<a href=""><img src="/trans/Public/images/facebook.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/facebook.png" alt="facebook"></a>
							<a href=""><img src="/trans/Public/images/twitter.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/twitter.png" alt="twitter"></a>
							<a href=""><img src="/trans/Public/images/google-plus.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/google-plus.png" alt="google plus"></a>
						</div> --> <!-- end .social -->
					</div>
				</form>
			</div> <!-- end .signup -->
		</div> <!-- end .signup-wrapper -->
		<div class="responsive-menu">
			<a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<div class="section large transparent dark text-center" style="background-image: url('/trans/Public/images/background01.jpg');top: -140px">
			<div class="inner">
				<div class="container">
					<h1>天津市物流信息</h1>
					<p class="lead">您可以在这里输入信息进行筛选</p>
					<form>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" placeholder="请输入您感兴趣的">
								</div> <!-- end .form-group -->
							</div> <!-- end .col-sm-4 -->
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" placeholder="出发地点">
									<i class="pe-7s-world"></i>
								</div> <!-- end .form-group -->
							</div> <!-- end .col-sm-4 -->
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" placeholder="目的地点">
									<i class="pe-7s-world"></i>
								</div> <!-- end .form-group -->
							</div> <!-- end .col-sm-4 -->
							<!-- <div class="col-sm-4">
								<div class="form-group">
									<select>
										<option>水果</option>
										<option>蔬菜</option>
										<option>快递</option>
										<option>易燃易碎</option>
									</select>
								</div>
							</div> -->
						</div> <!-- end .row -->
						<button type="submit" class="button">搜索</button>
					</form>
					<div class="highlight-slider-wrapper">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<p class="lead">点击可根据分类筛选</p>
								<div class="highlight-slider">
									<div class="item">
										<a href="" class="icon">
											<img src="/trans/Public/images/highlight-food.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/highlight-food.png" alt="food">
											<div class="overlay">设备制造</div>
										</a> <!-- end .icon -->
									</div> <!-- end .item -->
									<div class="item">
										<a href="" class="icon">
											<img src="/trans/Public/images/highlight-lodging.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/highlight-lodging.png" alt="lodging">
											<div class="overlay">运输</div>
										</a> <!-- end .icon -->
									</div> <!-- end .item -->
									<div class="item">
										<a href="" class="icon">
											<img src="/trans/Public/images/highlight-culture.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/highlight-culture.png" alt="culture">
											<div class="overlay">仓储</div>
										</a> <!-- end .icon -->
									</div> <!-- end .item -->
									<div class="item">
										<a href="" class="icon">
											<img src="/trans/Public/images/highlight-shopping.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/highlight-shopping.png" alt="shopping">
											<div class="overlay">装饰包装</div>
										</a> <!-- end .icon -->
									</div> <!-- end .item -->
									<div class="item">
										<a href="" class="icon">
											<img src="/trans/Public/images/highlight-nightlife.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/highlight-nightlife.png" alt="nightlife">
											<div class="overlay">配送</div>
										</a> <!-- end .icon -->
									</div> <!-- end .item -->
									<div class="item">
										<a href="" class="icon">
											<img src="/trans/Public/images/highlight-drink.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/highlight-drink.png" alt="drink">
											<div class="overlay">信息服务</div>
										</a> <!-- end .icon -->
									</div> <!-- end .item -->
								</div> <!-- end .highlight-slider -->
							</div> <!-- end .col-md-8 -->
						</div> <!-- end .row -->
					</div> <!-- end .highlight-slider-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section light">
			<div class="inner">
				<div class="container">
					<h2 class="text-center">种类概述<small>Explore some of the best tips from around the city from our partners and friends.</small></h2>
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('images/category01.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category01.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon01.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon01.png" alt="icon">
									<span class="number">8</span>
									<span class="title">设备制造</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('images/category02.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category02.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon02.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon02.png" alt="icon">
									<span class="number">36</span>
									<span class="title">运输</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('images/category03.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category03.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon03.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon03.png" alt="icon">
									<span class="number">26</span>
									<span class="title">仓储</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('images/category04.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category04.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon04.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon04.png" alt="icon">
									<span class="number">16</span>
									<span class="title">装饰包装</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-sm-6">
							<a href="" class="category-box" style="background-image: url('images/category05.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category05.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon05.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon05.png" alt="icon">
									<span class="number">12</span>
									<span class="title">配送</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-sm-6 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('images/category06.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category06.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon06.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon06.png" alt="icon">
									<span class="number">4</span>
									<span class="title">信息服务</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('images/category07.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category07.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon07.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon07.png" alt="icon">
									<span class="number">39</span>
									<span class="title">可重复利用的物资</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
					</div> <!-- end .row -->
					<div class="text-center">
						<a href="" class="button">查看全部物流信息</a>
					</div> <!-- end .text-center -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white">
			<div class="inner">
				<div class="container-fluid">
					<h2 class="text-center">薪金  TOP10<small>下列的任务为薪金排行的前十，快来参观参观吧！</small></h2>
					<div class="directory-slider">
						<div class="directory-item">
							<img src="/trans/Public/images/directory-slider01.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider01.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="">巴西咖啡豆</a></h3>
								<p>5T，￥999,00</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png" alt="location">天津市 , 河北工业大学</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href=""><img src="/trans/Public/images/directory-category-food.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-food.png" alt="food"></a>
								<a href=""><img src="/trans/Public/images/directory-category-drink.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-drink.png" alt="drink"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="/trans/Public/images/directory-slider01.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider01.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="">巴西咖啡豆</a></h3>
								<p>5T，￥999,00</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png" alt="location">天津市 , 河北工业大学</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href=""><img src="/trans/Public/images/directory-category-food.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-food.png" alt="food"></a>
								<a href=""><img src="/trans/Public/images/directory-category-drink.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-drink.png" alt="drink"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="/trans/Public/images/directory-slider01.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider01.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="">巴西咖啡豆</a></h3>
								<p>5T，￥999,00</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png" alt="location">天津市 , 河北工业大学</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href=""><img src="/trans/Public/images/directory-category-food.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-food.png" alt="food"></a>
								<a href=""><img src="/trans/Public/images/directory-category-drink.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-drink.png" alt="drink"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="/trans/Public/images/directory-slider01.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider01.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="">巴西咖啡豆</a></h3>
								<p>5T，￥999,00</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png" alt="location">天津市 , 河北工业大学</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href=""><img src="/trans/Public/images/directory-category-food.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-food.png" alt="food"></a>
								<a href=""><img src="/trans/Public/images/directory-category-drink.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-drink.png" alt="drink"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="/trans/Public/images/directory-slider01.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider01.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="">巴西咖啡豆</a></h3>
								<p>5T，￥999,00</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png" alt="location">天津市 , 河北工业大学</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href=""><img src="/trans/Public/images/directory-category-food.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-food.png" alt="food"></a>
								<a href=""><img src="/trans/Public/images/directory-category-drink.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-drink.png" alt="drink"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="/trans/Public/images/directory-slider02.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider02.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="">Nunc Restaurant</a></h3>
								<p>Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png" alt="location">Leonard St , NewYork</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href=""><img src="/trans/Public/images/directory-category-dining.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-dining.png" alt="dining"></a>
								<a href=""><img src="/trans/Public/images/directory-category-wine.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-wine.png" alt="wine"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="/trans/Public/images/directory-slider03.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider03.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="">DJ Party</a></h3>
								<p>Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png" alt="location">Knightsbridge 66</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href=""><img src="/trans/Public/images/directory-category-party.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-party.png" alt="party"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item">
							<img src="/trans/Public/images/directory-slider04.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider04.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="">Quisque Tinibus Hotel</a></h3>
								<p>Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png" alt="location">Knightsbridge 66</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href=""><img src="/trans/Public/images/directory-category-hotel.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-hotel.png" alt="hotel"></a>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
					</div> <!-- end .directory-slider -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section light transparent" style="background-image: url('images/background02.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/background02.jpg*/;">
			<div class="inner">
				<div class="container">
					<h2 class="text-center">How it Works<small>Discover how EXploreCity can you help you find everything you want.</small></h2>
					<div class="row">
						<div class="col-sm-4">
							<div class="services">
								<img src="/trans/Public/images/services-icon01.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/services-icon01.png" alt="icon" class="img-responsive center-block">
								<h3>Choose<br>What To Do</h3>
								<p>Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do some shopping?</p>
								<div class="process"><i class="pe-7s-angle-right-circle"></i></div>
							</div> <!-- end .services -->
						</div> <!-- end .col-sm-4 -->
						<div class="col-sm-4">
							<div class="services">
								<img src="/trans/Public/images/services-icon02.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/services-icon02.png" alt="icon" class="img-responsive center-block">
								<h3>Find<br>What You Want</h3>
								<p>Search and filter hundreds of listings, read reviews, explore photos and find the perfect spot.</p>
								<div class="process"><i class="pe-7s-angle-right-circle"></i></div>
							</div> <!-- end .services -->
						</div> <!-- end .col-sm-4 -->
						<div class="col-sm-4">
							<div class="services">
								<img src="/trans/Public/images/services-icon03.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/services-icon03.png" alt="icon" class="img-responsive center-block">
								<h3>Explore<br>Amazing Places</h3>
								<p>Go and have a good time or even make a booking directly from the listing page. All of those, thanks to ExploreCity!</p>
							</div> <!-- end .services -->
						</div> <!-- end .col-sm-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section dark">
			<div class="inner">
				<div class="container">
					<h2 class="text-center">Share Your Experience<small>Browse the latest articles and tips from our blog.</small></h2>
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="blog-post quote">
								<img src="/trans/Public/images/blog-post01.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post01.jpg" alt="image" class="img-responsive">
								<div class="overlay"></div>
								<div class="avatar"><img src="/trans/Public/images/blog-author01.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author01.jpg" alt="author"></div>
								<div class="type"><img src="/trans/Public/images/blog-category-quote.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-category-quote.png" alt="quote"></div>
								<div class="content">
									<p>By Quam Lobortis</p>
									<h3><a href="">“Sed ut perspiciatis unde omnis iste ... ”</a></h3>
									<div class="meta">July 09, 2016 - <a href="">Food</a></div>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-md-4 -->
						<div class="col-md-4 col-sm-6">
							<div class="blog-post gallery">
								<div class="blog-gallery">
									<div><img src="/trans/Public/images/blog-post02.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post02.jpg" alt="image" class="img-responsive"></div>
									<div><img src="/trans/Public/images/blog-post02.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post02.jpg" alt="image" class="img-responsive"></div>
									<div><img src="/trans/Public/images/blog-post02.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post02.jpg" alt="image" class="img-responsive"></div>
								</div> <!-- end .blog-gallery -->
								<div class="overlay"></div>
								<div class="avatar"><img src="/trans/Public/images/blog-author02.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author02.jpg" alt="author"></div>
								<div class="type"><img src="/trans/Public/images/blog-category-gallery.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-category-gallery.png" alt="gallery"></div>
								<div class="content">
									<p>By Nam Jacinia</p>
									<h3><a href="">Central Park Bike Rentals</a></h3>
									<div class="meta">July 07, 2016 - <a href="">Sales</a> , <a href="">Tips</a></div>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-md-4 -->
						<div class="col-md-4 col-sm-6">
							<div class="blog-post video">
								<img src="/trans/Public/images/blog-post03.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post03.jpg" alt="image" class="img-responsive">
								<div class="overlay"></div>
								<div class="avatar"><img src="/trans/Public/images/blog-author03.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author03.jpg" alt="author"></div>
								<div class="type"><img src="/trans/Public/images/blog-category-video.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-category-video.png" alt="video"></div>
								<div class="content">
									<a href="" class="play-video"><i class="pe-7s-play"></i></a>
									<p>By Proin Mattis</p>
									<h3><a href="">Nightlife at NewYork</a></h3>
									<div class="meta">July 03, 2016 - <a href="">Nightlife</a></div>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-md-4 -->
					</div> <!-- end .row -->
					<div class="blog-view-more"><a href="" class="button">View All</a></div>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section light">
			<div class="inner">
				<div class="container">
					<h2 class="text-center">Our Newsletter<small>Get an extra 39% off for next your holiday</small></h2>
					<form action="https://johneyboy.us7.list-manage.com/subscribe/post-json?u=3210d74dbf054134a29daf97c&id=50ad235761&c=?" method="get" id="mc-embedded-subscribe-form" class="newsletter-form">
						<input type="email" id="mce-EMAIL" name="EMAIL" placeholder="YourEmail@domain.com">
						<button type="submit" id="mc-embedded-subscribe" name="subscribe" class="button">Subscribe</button>
					</form>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
		
<footer class="footer">
			<div class="top">
				<div class="left">
					<div class="logo"><a href="<?php echo U('Index/index');?>" style="width: 45px;height: auto;" ><img src="/trans/Public/images/logo.png" class="img-responsive"></a></div> <!-- end .logo -->
				</div> <!-- end .left -->
				<div class="social-icons">
					<a href=""><i class="pe-so-facebook"></i></a>
					<a href=""><i class="pe-so-twitter"></i></a>
					<a href=""><i class="pe-so-vimeo"></i></a>
					<a href=""><i class="pe-so-tripadvisor"></i></a>
					<a href=""><i class="pe-so-instagram"></i></a>
					<a href=""><i class="pe-so-google-plus"></i></a>
				</div>
				<!-- <div class="right">Proudly Made in Viet Nam<a href="">+84 968796789</a></div> --> <!-- end .left -->
			</div> <!-- end .top -->
			<div class="bottom">Copyright &copy; 2018. All Rights Reserved By <a href="">天津物流信息科技有限公司</a></div>
		</footer> <!-- end .footer -->

		

		<!-- jQuery -->
		<script src="/trans/Public/js/jquery-3.1.0.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/jquery-3.1.0.min.js"></script>
		<!-- Bootstrap -->
		<script src="/trans/Public/js/bootstrap.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/bootstrap.min.js"></script>
		<!-- google maps -->
		<script src="../../../../../../ditu.google.cn/maps/api/js-key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8.js" tppabs="http://ditu.google.cn/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8"></script>
		<!-- rich marker -->
		<script src="/trans/Public/js/richmarker.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/richmarker.js"></script>
		<!-- Owl Carousel -->
		<script src="/trans/Public/js/owl.carousel.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/owl.carousel.min.js"></script>
		<!-- Countdown -->
		<script src="/trans/Public/js/countdown.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/countdown.js"></script>
		<!-- Sweet Alert -->
		<script src="/trans/Public/js/sweetalert.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/sweetalert.min.js"></script>
		<!-- Nivo Lightbox -->
		<script src="/trans/Public/scripts/Nivo-Lightbox/nivo-lightbox.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/scripts/Nivo-Lightbox/nivo-lightbox.min.js"></script>
		<!-- NoUISlider -->
		<script src="/trans/Public/js/jquery.nouislider.all.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/jquery.nouislider.all.min.js"></script>
		<!-- Scripts.js -->
		<script src="/trans/Public/js/scripts.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/scripts.js"></script>

	</body>
</html>