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

		<div class="fullscreen-section">
			<div class="left">
				<div id="map" class="map"></div>
			</div> <!-- end .left -->
			<div class="right">
				<div class="inner">
					<div class="directory-filters">
						<form>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<select>
											<option>设备制造</option>
											<option>运输</option>
											<option>仓储</option>
											<option>装饰包装</option>
											<option>配送</option>
											<option>信息服务</option>
										</select>
									</div> <!-- end .form-group -->
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="form-group">
										<select>
											<option>北辰区</option>
											<option>红桥区</option>
											<option>南开区</option>
											<option>滨海新区</option>
											<option>西青区</option>
											<option>静海县</option>
										</select>
									</div> <!-- end .form-group -->
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="form-group">
										<select>
											<option>北辰区</option>
											<option>红桥区</option>
											<option>南开区</option>
											<option>滨海新区</option>
											<option>西青区</option>
											<option>静海县</option>
										</select>
									</div> <!-- end .form-group -->
								</div> <!-- end .col-sm-4 -->
							</div> <!-- end .row -->
						</form>
					</div> <!-- end .directory-filters -->
					<!-- <div class="directory-tags">
						<div class="tag">Accepts Credit Cards<a href=""><i class="pe-7s-close"></i></a></div>
						<div class="tag">Parking Street<a href=""><i class="pe-7s-close"></i></a></div>
						<div class="tag">Wireless Internet<a href=""><i class="pe-7s-close"></i></a></div>
					</div> --> <!-- end .directory-tags -->
					<div class="directory-list-info">
						<p>下列为您筛选条件所筛选的结果：</p>
						<p class="results">79 条 - <a href="">Reset</a></p>
					</div>
					<div class="directory-list row">
						<div class="col-sm-6">
							<div class="directory-item">
								<img src="/trans/Public/images/directory-slider01.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider01.jpg" alt="bg" class="img-responsive">
								<div class="overlay"></div>
								<div class="rating">4.0</div>
								<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-heart.png" alt="wishlist"></a>
								<div class="content">
									<h3><a href="">Not Just Coffee</a></h3>
									<p>Suspendisse tristique orci justo</p>
									<div class="location"><img src="/trans/Public/images/directory-location.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png" alt="location">Thomas St , NewYork</div>
								</div> <!-- end .content -->
								<div class="category">
									<a href=""><img src="/trans/Public/images/directory-category-food.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-food.png" alt="food"></a>
									<a href=""><img src="/trans/Public/images/directory-category-drink.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-drink.png" alt="drink"></a>
								</div> <!-- end .category -->
							</div> <!-- end .directory-item -->
						</div> <!-- end .col-sm-6 -->
						<div class="col-sm-6">
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
						</div> <!-- end .col-sm-6 -->
						<div class="col-sm-6">
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
						</div> <!-- end .col-sm-6 -->
						<div class="col-sm-6">
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
						</div> <!-- end .col-sm-6 -->
					</div> <!-- end .directory-list -->
				</div> <!-- end .inner -->
			</div> <!-- end .right -->
		</div> <!-- end .section -->

		<!-- jQuery -->
		<script src="/trans/Public/js/jquery-3.1.0.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/jquery-3.1.0.min.js"></script>
		<!-- Bootstrap -->
		<script src="/trans/Public/js/bootstrap.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/bootstrap.min.js"></script>
		<!-- google maps -->
		<script src="/trans/Public/lib/ditu.google.cn/maps/api/js-key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8.js" ></script>
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

		<script>

			/*==========  Map  ==========*/
			var map;
			function initialize_map() {
				if ($('.map').length) {
					var myLatLng = new google.maps.LatLng(40.716269,-74.004566);
					var mapOptions = {
						zoom: 17,
						center: myLatLng,
						scrollwheel: false,
						zoomControl: false,
						scaleControl: false,
						mapTypeControl: false,
						streetViewControl: false
					};
					map = new google.maps.Map(document.getElementById('map'), mapOptions);
				} else {
					return false;
				}

				var marker1LatLng = new google.maps.LatLng(40.715756,-74.005339);
				marker1 = new RichMarker({
					position: marker1LatLng,
					map: map,
					draggable: false,
					flat: true,
					content: '<div class="marker-wrapper" id="marker1">' +
						'<div class="marker"><div class="hover"></div><div class="inner"><img src="/trans/Public/images/directory-category-drink.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-drink.png*/ alt="icon"></div></div>' +
						'<div class="directory-item">' +
							'<img src="/trans/Public/images/directory-slider01.jpg"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider01.jpg*/ alt="bg" class="img-responsive">' +
							'<div class="overlay"></div>' +
							'<div class="rating">4.0</div>' +
							'<div class="content">' +
								'<h3><a href="">Not Just Coffee</a></h3>' +
								'<div class="location"><img src="/trans/Public/images/directory-location.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png*/ alt="location">Thomas St , NewYork</div>' +
							'</div> <!-- end .content -->' +
						'</div> <!-- end .directory-item -->' +
					'</div>'
				});
				google.maps.event.addListener(marker1, 'click', function() {
					$('.marker-wrapper').removeClass('open');
					$('#marker1').toggleClass('open');
				});

				var marker2LatLng = new google.maps.LatLng(40.716715,-74.003352);
				marker2 = new RichMarker({
					position: marker2LatLng,
					map: map,
					draggable: false,
					flat: true,
					content: '<div class="marker-wrapper" id="marker2">' +
						'<div class="marker"><div class="hover"></div><div class="inner"><img src="/trans/Public/images/directory-category-dining.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-dining.png*/ alt="icon"></div></div>' +
						'<div class="directory-item">' +
							'<img src="/trans/Public/images/directory-slider02.jpg"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider02.jpg*/ alt="bg" class="img-responsive">' +
							'<div class="overlay"></div>' +
							'<div class="rating">4.0</div>' +
							'<div class="content">' +
								'<h3><a href="">Consequat Restaurant</a></h3>' +
								'<div class="location"><img src="/trans/Public/images/directory-location.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png*/ alt="location">Leonard St , NewYork</div>' +
							'</div> <!-- end .content -->' +
						'</div> <!-- end .directory-item -->' +
					'</div>'
				});
				google.maps.event.addListener(marker2, 'click', function() {
					$('.marker-wrapper').removeClass('open');
					$('#marker2').toggleClass('open');
				});

				var marker3LatLng = new google.maps.LatLng(40.716622,-74.007976);
				marker3 = new RichMarker({
					position: marker3LatLng,
					map: map,
					draggable: false,
					flat: true,
					content: '<div class="marker-wrapper" id="marker3">' +
						'<div class="marker"><div class="hover"></div><div class="inner"><img src="/trans/Public/images/directory-category-food.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-food.png*/ alt="icon"></div></div>' +
						'<div class="directory-item">' +
							'<img src="/trans/Public/images/directory-slider04.jpg"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider04.jpg*/ alt="bg" class="img-responsive">' +
							'<div class="overlay"></div>' +
							'<div class="rating">4.0</div>' +
							'<div class="content">' +
								'<h3><a href="">Quisque Tinibus Hotel</a></h3>' +
								'<div class="location"><img src="/trans/Public/images/directory-location.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png*/ alt="location">Knightsbridge 66</div>' +
							'</div> <!-- end .content -->' +
						'</div> <!-- end .directory-item -->' +
					'</div>'
				});
				google.maps.event.addListener(marker3, 'click', function() {
					$('.marker-wrapper').removeClass('open');
					$('#marker3').toggleClass('open');
				});

				var marker4LatLng = new google.maps.LatLng(40.714898,-74.004500);
				marker4 = new RichMarker({
					position: marker4LatLng,
					map: map,
					draggable: false,
					flat: true,
					content: '<div class="marker-wrapper" id="marker4">' +
						'<div class="marker"><div class="hover"></div><div class="inner"><img src="/trans/Public/images/directory-category-party.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-party.png*/ alt="icon"></div></div>' +
						'<div class="directory-item">' +
							'<img src="/trans/Public/images/directory-slider03.jpg"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider03.jpg*/ alt="bg" class="img-responsive">' +
							'<div class="overlay"></div>' +
							'<div class="rating">4.0</div>' +
							'<div class="content">' +
								'<h3><a href="">DJ Party</a></h3>' +
								'<div class="location"><img src="/trans/Public/images/directory-location.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png*/ alt="location">Knightsbridge 66</div>' +
							'</div> <!-- end .content -->' +
						'</div> <!-- end .directory-item -->' +
					'</div>'
				});
				google.maps.event.addListener(marker4, 'click', function() {
					$('.marker-wrapper').removeClass('open');
					$('#marker4').toggleClass('open');
				});

				return false;
			}
			google.maps.event.addDomListener(window, 'load', initialize_map);

		</script>

	</body>
</html>