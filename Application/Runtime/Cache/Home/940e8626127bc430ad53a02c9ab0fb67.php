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
			
		<div class="page-title" style="background-image: url('/trans/Public/images/background04.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/background04.jpg*/;">
			<div class="inner">
				<p>Publish Task.</p>
				<h2>发布任务</h2>
				
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		<div class="section boxed-section light">
			<div class="inner">
				<div class="container">
					<div class="box">
						<form class="add-listing-form light-inputs">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">任务名称 :</span>
									<input type="text" placeholder="例如：运送一匹建材">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<!-- <div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">Tagline (optional) :</span>
									<input type="text" placeholder="e.g Vitae Labortis Restaurant">
								</div> 
							</div> -->
							<div class="form-group">              
							    <textarea placeholder="任务描述，越详细越好" rows="4"></textarea>
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">选择分类 :</span>
									<select>	    	
										<option value="" disabled selected>选择一个准确货物的分类</option>
										<option>设备制造</option>
										<option>运输</option>
										<option>仓储</option>
										<option>装饰包装</option>
										<option>配送</option>
										<option>信息服务</option>
									</select>
								</div> <!-- end .input-group -->
								<span class="help-block">分类必须要准确，如有运输触犯法律的货物，将会受到刑事处理</span>
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">起点 :</span>
									<select>	    	
											<option>北辰区</option>
											<option>红桥区</option>
											<option>南开区</option>
											<option>滨海新区</option>
											<option>西青区</option>
											<option>静海县</option>
									</select>
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">目的地 :</span>
									<select>	    	
											<option>北辰区</option>
											<option>红桥区</option>
											<option>南开区</option>
											<option>滨海新区</option>
											<option>西青区</option>
											<option>静海县</option>
									</select>
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">其他要求 :</span>
									<input type="text" placeholder="例如：易燃易爆需要小心、易碎物品轻拿轻放等。">
								</div> <!-- end .input-group -->
								<span class="help-block">可以根据到货后检查货物质量对司机进行申诉</span>
							</div> <!-- end .form-group -->
							<div class="form-group add_photo">
								<button onclick="getElementById('file').click()" type="button" class="button">上传图片</button>
								<input type="file" multiple="multiple" id="file" name='file' style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;"/><!--原来按钮的样式-->
								<span>4 Photos ( 570px × 400px)</span>
							</div> <!-- end .text-left .add_photo -->
							<div class="form-group photo_thumbnails">
								<div class="photo_preview_box"></div>
								<div class="photo_preview_box"></div>
								<div class="photo_preview_box"></div>
								<div class="photo_preview_box"></div>
							</div> <!-- end .form-group .photo_thumbnails -->
							<div class="form-group listing-hours">
								<div class="row">
									<div class="col-sm-4">
										<div class="input-group">
											<span class="input-group-addon">日期 :</span>
											<input type="text" placeholder="2018-03-15">
										</div> <!-- end .input-group -->
									</div> <!-- end .col-sm-4 -->
									<div class="col-sm-4">
										<div class="input-group">
											<span class="input-group-addon">具体时间 :</span>
											<input type="text">
										</div> <!-- end .input-group -->
									</div> <!-- end .col-sm-4 -->
									<!-- <div class="col-sm-4">
										<button type="button" class="button">Add Hours of Operation</button>
									</div> --> <!-- end .col-sm-4 -->
								</div> <!-- end .row -->
								<!-- <div class="row">
									<div class="col-sm-4">
										<div class="hours">Monday - Sunday</div>
									</div>
									<div class="col-sm-4">
										<div class="hours">07:00 am – 22:00 pm</div>
									</div> 
									<div class="col-sm-4">
										<a href="" class="remove"><i class="pe-7s-close-circle"></i></a>
									</div> 
								</div>  --><!-- end .row -->
							</div> <!-- end .form-group -->
							<div class="submit"><button type="submit" class="button">提交任务</button></div>
						</form>
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