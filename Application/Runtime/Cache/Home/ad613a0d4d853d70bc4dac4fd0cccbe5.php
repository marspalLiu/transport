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

		<div class="page-title" style="background-image: url('/trans/Public/images/background16.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/background16.jpg*/;">
			<div class="inner">
				<h2>个人中心</h2>
				<p>You can see the tasks of you</p>
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		<div class="section boxed-section light">
			<div class="inner">
				<div class="container">
					<div class="box transparent">
						<div class="row">
							<div class="col-md-4">
								<div class="shop-sidebar">
									<!-- <div class="sidebar-widget">
										<select>
											<option>Default sorting</option>
											<option>High to Low</option>
										</select>
									</div> --> <!-- end .sidebar-widget -->
									<div class="sidebar-widget">
										<h5>功能表</h5>
										<form class="searchform">
											<input type="text" placeholder="Search there...">
											<button><i class="pe-7s-search"></i></button>
										</form>
									</div> <!-- end .sidebar-widget -->
									<div class="sidebar-widget">
										<h5>Product Categories</h5>
										<div class="categories">
											<a href="" class="active">所有任务<i class="pe-7s-right-arrow"></i></a>
											<a href="">申请中<i class="pe-7s-right-arrow"></i></a>
											<a href="">申请成功未处理<i class="pe-7s-right-arrow"></i></a>
											<a href="">运输中<i class="pe-7s-right-arrow"></i></a>
											<a href="">已完成<i class="pe-7s-right-arrow"></i></a>
											<!-- <a href="">Nightlife<i class="pe-7s-right-arrow"></i></a>
											<a href="">Visit<i class="pe-7s-right-arrow"></i></a>
											<a href="">Shop<i class="pe-7s-right-arrow"></i></a> -->
										</div>
									</div> <!-- end .sidebar-widget -->
									<!-- <div class="sidebar-widget text-center">
										<h5>Filter By Price</h5>
										<div class="price-slider"><div id="price-slider"></div></div>
										<div class="price-slider-value">Price:<span class="price">$<span id="price-min"></span></span>—<span class="price">$<span id="price-max"></span></span></div>
										<a href="" class="button">Filter</a>
									</div> --> <!-- end .sidebar-widget -->
									<!-- <div class="sidebar-widget">
										<h5>Feature Products</h5>
										<div class="featured-product clearfix">
											<a href=""><img src="/trans/Public/images/featured-product01.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/featured-product01.jpg" alt="image"></a>
											<div class="content">
												<p class="title"><a href="">Sweet Cupcakes</a></p>
												<p class="price">$9.00</p>
											</div>
										</div>
										<div class="featured-product clearfix">
											<a href=""><img src="/trans/Public/images/featured-product02.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/featured-product02.jpg" alt="image"></a>
											<div class="content">
												<p class="title"><a href="">Perfect Outfits</a></p>
												<p class="price">$79.00</p>
											</div> 
										</div> end .featured-product
										<div class="featured-product clearfix">
											<a href=""><img src="/trans/Public/images/featured-product03.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/featured-product03.jpg" alt="image"></a>
											<div class="content">
												<p class="title"><a href="">Perfect Hotel</a></p>
												<p class="price">$390.00</p>
											</div>
										</div>
										<div class="featured-product clearfix">
											<a href=""><img src="/trans/Public/images/featured-product04.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/featured-product04.jpg" alt="image"></a>
											<div class="content">
												<p class="title"><a href="">Helicopter Tour Ticket</a></p>
												<p class="price">$68.00</p>
											</div>
										</div>
									</div>  -->
								</div> 
							</div> 
							<div class="col-md-8">
								<div class="row products">
									<div class="col-sm-6">
										<div class="product">
											<img src="/trans/Public/images/product01.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/product01.jpg" alt="image" class="img-responsive">
											<div class="overlay"></div>
											<div class="content">
												<h3><a href="">Up to 39% OFF at Central Park Zoo.</a></h3>
												<p><span class="sale">$79.00</span>$39.00</p>
											</div>
											<div class="product-label"><span>Sale</span></div>
											<a href="" class="button">查看详情</a>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="product">
											<img src="/trans/Public/images/product02.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/product02.jpg" alt="image" class="img-responsive">
											<div class="overlay"></div>
											<div class="content">
												<h3><a href="">Combo Burgers</a></h3>
												<p>$68.00</p>
											</div> 
											<a href="" class="button">查看详情</a>
										</div> 
									</div> 
									<div class="col-sm-6">
										<div class="product">
											<img src="/trans/Public/images/product03.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/product03.jpg" alt="image" class="img-responsive">
											<div class="overlay"></div>
											<div class="content">
												<h3><a href="">Knockout Pool</a></h3>
												<p>$68.00</p>
											</div> 
											<a href="" class="button">查看详情</a>
										</div> 
									</div> 
									<div class="col-sm-6">
										<div class="product">
											<img src="/trans/Public/images/product04.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/product04.jpg" alt="image" class="img-responsive">
											<div class="overlay"></div>
											<div class="content">
												<h3><a href="">Helicopter Tour Ticket</a></h3>
												<p><span class="sale">$79.00</span>$39.00</p>
											</div> <!-- end .content -->
											<div class="product-label"><span>Out of Stock</span></div>
											<a href="" class="button">查看详情</a>
										</div> <!-- end .product -->
									</div> <!-- end .col-sm-6 -->
									<div class="col-sm-6">
										<div class="product">
											<img src="/trans/Public/images/product05.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/product05.jpg" alt="image" class="img-responsive">
											<div class="overlay"></div>
											<div class="content">
												<h3><a href="">Pretty Hotel</a></h3>
												<p>$68.00</p>
											</div> <!-- end .content -->
											<a href="" class="button">查看详情</a>
										</div> <!-- end .product -->
									</div> <!-- end .col-sm-6 -->
									<div class="col-sm-6">
										<div class="product">
											<img src="/trans/Public/images/product06.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/product06.jpg" alt="image" class="img-responsive">
											<div class="overlay"></div>
											<div class="content">
												<h3><a href="">Up to 40% Off at Pizza Restaurant.</a></h3>
												<p><span class="sale">$79.00</span>$39.00</p>
											</div> <!-- end .content -->
											<div class="product-label"><span>Sale</span></div>
											<a href="" class="button">查看详情</a>
										</div> <!-- end .product -->
									</div> <!-- end .col-sm-6 -->
									<div class="col-sm-6">
										<div class="product">
											<img src="/trans/Public/images/product07.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/product07.jpg" alt="image" class="img-responsive">
											<div class="overlay"></div>
											<div class="content">
												<h3><a href="">Perfect Fashion Shop</a></h3>
												<p>$390.00</p>
											</div> <!-- end .content -->
											<div class="product-label"><span>New</span></div>
											<a href="" class="button">查看详情</a>
										</div> <!-- end .product -->
									</div> <!-- end .col-sm-6 -->
									<div class="col-sm-6">
										<div class="product">
											<img src="/trans/Public/images/product08.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/product08.jpg" alt="image" class="img-responsive">
											<div class="overlay"></div>
											<div class="content">
												<h3><a href="">Paradise Cafe</a></h3>
												<p>$68.00</p>
											</div> <!-- end .content -->
											<a href="" class="button">查看详情</a>
										</div> <!-- end .product -->
									</div> <!-- end .col-sm-6 -->
									<div class="col-sm-6">
										<div class="product">
											<img src="/trans/Public/images/product07.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/product07.jpg" alt="image" class="img-responsive">
											<div class="overlay"></div>
											<div class="content">
												<h3><a href="">Perfect Fashion Shop</a></h3>
												<p>$390.00</p>
											</div> <!-- end .content -->
											<div class="product-label"><span>New</span></div>
											<a href="" class="button">查看详情</a>
										</div> <!-- end .product -->
									</div> <!-- end .col-sm-6 -->
									<div class="col-sm-6">
										<div class="product">
											<img src="/trans/Public/images/product08.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/product08.jpg" alt="image" class="img-responsive">
											<div class="overlay"></div>
											<div class="content">
												<h3><a href="">Paradise Cafe</a></h3>
												<p>$68.00</p>
											</div> <!-- end .content -->
											<a href="" class="button">查看详情</a>
										</div> <!-- end .product -->
									</div> <!-- end .col-sm-6 -->
								</div> <!-- end .row -->
							</div> <!-- end .col-md-8 -->
						</div> <!-- end .row -->
						<div class="text-center">
							<a href="" id="products-load-more" class="button">Load More</a>
						</div> <!-- end .blog-load-more -->
					</div> <!-- end .box -->
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