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
		
		<!-- sweatAlert -->
		<script src="/trans/Public/lib/sweetalert/sweetalert.min.js"></script>
   		<link rel="stylesheet" type="text/css" href="/trans/Public/lib/sweetalert/sweetalert.css">

   		<!-- doT.js -->
   		<script src="/trans/Public/js/doT.min.js"></script>

   		<!-- DateTime Picker-->
	    <link href="/trans/Public/lib/bootstrapDatetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	    <script src="/trans/Public/lib/bootstrapDatetimepicker/js/bootstrap-datetimepicker.min.js"></script>

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
						<?php if(strtoupper($_SESSION['userId']) != '' && strtoupper($_SESSION['type']) == '2'): ?><li class="menu-item-has-children">
								<a href="<?php echo U('AddTask/addTask');?>">发布任务</a>
								<ul>
									<li><a href="<?php echo U('AddTask/addTask');?>">发布任务</a></li>
								</ul>
							</li><?php endif; ?>
						
						<li class="menu-item-has-children">
							<a href="<?php echo U('TaskList/taskList');?>">全部信息</a>
							<ul>
								<li><a href="<?php echo U('TaskList/taskList');?>">全部信息</a></li>
							</ul>
						</li>
						<?php if(strtoupper($_SESSION['userId'])): ?><li class="menu-item-has-children">
								<a href="<?php echo U('SelfCenter/selfCenter');?>" >与我相关</a>
								<ul>
									<li><a href="<?php echo U('SelfCenter/selfCenter');?>">我的</a></li>
								</ul>
							</li><?php endif; ?>
						
					</ul>
				</nav> <!-- end .main-nav -->
				<a href="" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
			</div> <!-- end .navigation -->
			<?php if(strtoupper($_SESSION['userId']) == ''): ?><div class="right">
					<a href="#" class="button signup-open border" >没有账号？注册</a>
					<a href="#" class="button login-open" >登录</a>
				</div>
				<?php else: ?>
					<div class="right">
						<div class="user">
							<div class="avatar"><img src="/trans/Public/images/avatar04.jpg"></div>
							<?php echo (session('userName')); ?> <a href="<?php echo U('Index/loginOut');?>">注销</a>
						</div>
					</div><?php endif; ?>

			 <!-- end .left -->
		</header> <!-- end .header -->

		<div class="login-wrapper">
			<div class="login">
				<form action="<?php echo U('Index/login');?>" method="POST" >
					<div class="form-group">
						<input type="text" id="login_userName" name="account" placeholder="请输入您的用户名">
					</div> <!-- end .form-group -->
					<div class="form-group">
						<input type="password" id="login_password" name="password" placeholder="请输入您的密码">
					</div> <!-- end .form-group -->
					<div class="clearfix">
						<div class="checkbox" style="width:100%;height: 30px;">
							<div style="width: 50%;float: left;padding-left: 60px;">
								<label>
									<input type="radio" onchange="changeRadio(this)"  name="type" checked="true" value="1"> 司机
								</label>
							</div>
							<div style="width: 50%;float: right;padding-right: 60px;">
								<label>
									<input type="radio" onchange="changeRadio(this)"  name="type" value="2"> 货主
								</label>
							</div>
							
						</div>
						<!-- <a href="" class="lost-password">Lost your password ?</a> -->
					</div>
					<div class="clearfix">
						<div class="checkbox">
							<label>
								<input type="checkbox"> 记住密码
							</label>
						</div>
						<!-- <a href="" class="lost-password">Lost your password ?</a> -->
					</div> <!-- end .clearfix -->
					<div class="button-wrapper"><button type="submit" class="button" onclick="login()">登录</button></div>
					<div class="text-center">
						<p>还没有账号 ? <a href="" class="signup-open">前往注册</a></p>
					</div>
				</form>
			</div> <!-- end .login -->
		</div> <!-- end .login-wrapper -->

		<div class="signup-wrapper">
			<div class="signup">
				<form action="/trans/index.php/Home/Index/register" method="POST" ><!-- <?php echo U('Login/regiser');?> -->
					<div class="form-group">
						<label style="color: red;display: inline-block;">*</label><input type="text" placeholder="姓名" id="register_name" name="name">
					</div>
					<div class="form-group">
						<label style="color: red;display: inline-block;">*</label><input type="text" placeholder="用户名" id="register_userName" name="account">
					</div> <!-- end .form-group -->
					<div class="form-group">
						<label style="color: red;display: inline-block;">*</label><input type="password" placeholder="密码" id="regiser_password" name="password">
					</div> <!-- end .form-group -->
					<div class="form-group">
						<label style="color: red;display: inline-block;">*</label><input type="password" placeholder="确认密码" id="regiser_affirmPassword" name="affirmPassword">
					</div> <!-- end .form-group -->
					<div class="clearfix">
						<div class="checkbox" style="width:100%;height: 30px;">
							<div style="width: 50%;float: left;padding-left: 60px;">
								<label>
									<input type="radio" onchange="changeRadio(this)"  name="type" checked="true" value="1"> 司机
								</label>
							</div>
							<div style="width: 50%;float: right;padding-right: 60px;">
								<label>
									<input type="radio" onchange="changeRadio(this)"  name="type" value="2"> 货主
								</label>
							</div>
							
						</div>
						<!-- <a href="" class="lost-password">Lost your password ?</a> -->
					</div>
					<div id="master" hidden="">
            			<input id="tel1" class="form-control" type="text" placeholder="联系方式" name="tel">
            			<input id="address" class="form-control" type="text" placeholder="住址" name="add">
            		</div>
            		<div id="car">
            			<input id="tel2" class="form-control" type="text" placeholder="联系方式" name="tel">
            		</div>
					<div class="text-center">
						<p>完成后请及时对信息进行完善</p>
					</div> <!-- end .text-center -->
					<div class="button-wrapper"><button type="submit" class="button" onclick="register()">注册</button></div>
					<div class="text-center">
						<p>Already have an account? <a href="" class="login-open">Log in</a></p>
					</div>
				</form>
			</div> <!-- end .signup -->
		</div> <!-- end .signup-wrapper -->



		<!-- 登录注册登出方法 -->
		<script type="text/javascript">
			function changeRadio(el){
	    		var radioVal = $(el).val();
	    		clearForm();
	    		if (radioVal == 1) {
	    			$("#master").hide();
					$("#car").show();
				}else{
					$("#master").show();
					$("#car").hide();
				}
	    	}
	    	function clearForm(){
	    		$(':input','#registerForm')

			       .not(':button,:submit,:reset,:hidden,:radio')   //将myform表单中input元素type为button、submit、reset、hidden排除

			       .val('')  //将input元素的value设为空值

			       .removeAttr('checked')

			       .removeAttr('checked') // 如果任何radio/checkbox/select inputs有checked or selected 属性，将其移除
	    	}

			//根据任务名称、出发地、到达地、类别（时间超过的就不在显示）
			function search(){

			}
			window.alert = function(text){
			    swal("提示",text);
			}
			window.confirm=function(text,type){
			    swal("提示", text, type)
			}
			// 登录方法
			// function login(){
			// 	var login_userName= $("#login_userName").val();
			// 	var login_password = $("#login_password").val();
			// 	if(login_userName=='' || login_password==''){
			// 		alert("您还有信息未输入");
			// 		return false;
			// 	};
			// }

			//登出方法
			function loginOut(){

			}

			//注册方法
			// function register(){
			// 	var register_userName= $("#register_userName").val();
			// 	var register_password = $.trim($("#register_password").val());
			// 	var register_affirmPassword = $.trim($("#register_affirmPassword").val());
			// 	if(register_userName=='' || register_password=='' || register_affirmPassword == ''){
			// 		alert("您还有信息未输入");
			// 		return false;
			// 	};
			// 	if (register_password != register_affirmPassword) {
			// 		alert("两次密码输入不正确，请您检查一下！");
			// 		return false;
			// 	}
			// }
</script>

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
											<img src="/trans/Public/images/highlight-food.png">
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
					<h2 class="text-center">种类概况<small>Explore some of the best tips from around the city from our partners and friends.</small></h2>
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('images/category01.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category01.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon01.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon01.png" alt="icon">
									<span class="number" id="type1">8</span>
									<span class="title">设备制造</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('images/category02.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category02.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon02.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon02.png" alt="icon">
									<span class="number" id="type2">36</span>
									<span class="title">运输</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('images/category03.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category03.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon03.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon03.png" alt="icon">
									<span class="number" id="type3">26</span>
									<span class="title">仓储</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('images/category04.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category04.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon04.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon04.png" alt="icon">
									<span class="number" id="type4">16</span>
									<span class="title">装饰包装</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-sm-6">
							<a href="" class="category-box" style="background-image: url('images/category05.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category05.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon05.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon05.png" alt="icon">
									<span class="number" id="type5">12</span>
									<span class="title">配送</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-sm-6 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('images/category06.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category06.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon06.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon06.png" alt="icon">
									<span class="number" id="type6">4</span>
									<span class="title">信息服务</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('images/category07.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category07.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon07.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon07.png" alt="icon">
									<span class="number" id="type7">39</span>
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
					<div class="directory-slider" id="topTemplateContainer">
						<div class="directory-item">
									<img src="/trans/Public/images/directory-slider01.jpg" class="img-responsive">
									<div class="overlay"></div>
									<div class="rating">4.0</div>
									<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png"></a>
									<div class="content">
										<h3><a href="">{{=it[x].taskName}}</a></h3>
										<p>{{=it[x].price}}</p>
										<div class="location"><img src="/trans/Public/images/directory-location.png">{{=it[x].location}}</div>
									</div> <!-- end .content -->
									<div class="category">
										<a href=""><img src="/trans/Public/images/directory-category-food.png"></a>
										<a href=""><img src="/trans/Public/images/directory-category-drink.png"></a>
									</div> <!-- end .category -->
								</div> <!-- end .directory-item -->s
						
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
		
		<script type="text/javascript">
			window.onload = function(){
				//获取分类对应的各种数量
				// $.ajax({
				// 	url:"",
				// 	method:"POST",
				// 	data:"",
				// 	success:function(res){
				// 		for (var i = res.length - 1; i >= 0; i--) {
				// 			$("#type"+res[i]["type"]).text(res[i]["count"])
				// 		}
				// 	}
				// })

				//获取前十名的薪金
				$.ajax({
					url:"http://localhost:8081/",
					method:"POST",
					data:"",
					success:function(res){
						
						var topData = [{
							"taskName":"巴西咖啡豆10T",
							"price":"￥ 950.00",
							"location":"河北工业大学",
							"taskPic":"/trans/Public/images/directory-slider01.jpg"
						},{
							"taskName":"巴西咖啡豆10T",
							"price":"￥ 950.00",
							"location":"河北工业大学",
							"taskPic":"/trans/Public/images/directory-slider01.jpg"
						},{
							"taskName":"巴西咖啡豆10T",
							"price":"￥ 950.00",
							"location":"河北工业大学",
							"taskPic":"/trans/Public/images/directory-slider01.jpg"
						},{
							"taskName":"巴西咖啡豆10T",
							"price":"￥ 950.00",
							"location":"河北工业大学",
							"taskPic":"/trans/Public/images/directory-slider01.jpg"
						}];
						var topTemplate = doT.template(document.getElementById("topTemplate").innerHTML);
						document.getElementById("topTemplateContainer").innerHTML = topTemplate(topData);
						
				

					}
				})
			}
		</script>
		<!-- doT模板 -->
		<!-- <script id="topTemplate" type="text/x-dot-template">
			{{ for(var x in it) { }}
				<div class="directory-item">
					<img src="{{=it[x].taskPic}}" class="img-responsive">
					<div class="overlay"></div>
					<div class="rating">4.0</div>
					<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png"></a>
					<div class="content">
						<h3><a href="">{{=it[x].taskName}}</a></h3>
						<p>{{=it[x].price}}</p>
						<div class="location"><img src="/trans/Public/images/directory-location.png">{{=it[x].location}}</div>
					</div> 
					<div class="category">
						<a href=""><img src="/trans/Public/images/directory-category-food.png"></a>
						<a href=""><img src="/trans/Public/images/directory-category-drink.png"></a>
					</div> 
				</div>
			{{ }}}
		</script> -->
		
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