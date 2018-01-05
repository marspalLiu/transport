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
						<!-- <?php if(strtoupper($_SESSION['userId']) != '' && strtoupper($_SESSION['role']) == '1'): ?>-->
						<!--<?php endif; ?> -->
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
						<!-- <?php if(strtoupper($_SESSION['userId']) != ''): ?>-->
						<!--<?php endif; ?> -->
							<li class="menu-item-has-children">
								<a href="<?php echo U('SelfCenter/selfCenter');?>" >与我相关</a>
								<ul>
									<li><a href="<?php echo U('SelfCenter/selfCenter');?>">我的</a></li>
								</ul>
							</li>
						
						
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
							Angelbi88 . <a href="">注销</a>
						</div>
					</div><?php endif; ?>

			 <!-- end .left -->
		</header> <!-- end .header -->

		<div class="login-wrapper">
			<div class="login">
				<form action="<?php echo U('Login/regiser');?>" method="POST" >
					<div class="form-group">
						<input type="text" id="login_userName" name="userName" placeholder="请输入您的用户名">
					</div> <!-- end .form-group -->
					<div class="form-group">
						<input type="text" id="login_password" name="password" placeholder="请输入您的密码">
					</div> <!-- end .form-group -->
					<div class="clearfix">
						<div class="checkbox">
							<label>
								<input type="checkbox"> 记住密码
							</label>
						</div>
						<!-- <a href="" class="lost-password">Lost your password ?</a> -->
					</div> <!-- end .clearfix -->
					<div class="button-wrapper"><button type="button" class="button" onclick="login()">登录</button></div>
					<div class="text-center">
						<p>还没有账号 ? <a href="" class="signup-open">前往注册</a></p>
					</div>
				</form>
			</div> <!-- end .login -->
		</div> <!-- end .login-wrapper -->

		<div class="signup-wrapper">
			<div class="signup">
				<form action="/trans/index.php/Home/TaskList/register" method="POST" ><!-- <?php echo U('Login/regiser');?> -->
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
		
		<div class="page-title" style="background-image: url('/trans/Public/images/background14.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/background14.jpg*/;">
			<div class="inner">
				<h2>所有信息全在这里 </h2>
				<p>All the information here.</p>
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->

		<div class="section boxed-section light">
			<div class="inner">
				<div class="container">
					<div class="box transparent blog-grid">					
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="blog-post image">
									<img src="/trans/Public/images/blog-post05.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post05.jpg" alt="image" class="img-responsive">
									<div class="overlay"></div>
									<div class="avatar"><img src="/trans/Public/images/blog-author04.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author04.jpg" alt="author"></div>
									<div class="content">
										<p>By Sagittis Tempor</p>
										<h3><a href="">Etiquette tips for travellers.</a></h3>
										<div class="meta">July 09, 2016 - <a href="">承运</a></div>
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
										<div class="meta">July 07, 2016 - <a href="">承运</a></div>
									</div> <!-- end .content -->
								</div> <!-- end .blog-post -->
							</div> <!-- end .col-md-4 -->
							<div class="col-md-4 col-sm-6">
								<div class="blog-post image">
									<img src="/trans/Public/images/blog-post04.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post04.jpg" alt="image" class="img-responsive">
									<div class="overlay"></div>
									<div class="avatar"><img src="/trans/Public/images/blog-author05.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author05.jpg" alt="author"></div>
									<div class="content">										
										<p>By Vehicula Tincidunt</p>
										<h3><a href="">The Modern Art of Coffee</a></h3>
										<div class="meta">July 03, 2016 - <a href="">承运</a></div>
									</div> <!-- end .content -->
								</div> <!-- end .blog-post -->
							</div> <!-- end .col-md-4 -->
						</div> <!-- end .row -->
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
								<div class="blog-post image">
									<img src="/trans/Public/images/blog-post07.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post07.jpg" alt="image" class="img-responsive">
									<div class="overlay"></div>
									<div class="avatar"><img src="/trans/Public/images/blog-author06.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author06.jpg" alt="author"></div>	
									<div class="content">
										<p>By Nulla Facilisi</p>
										<h3><a href="">The Famous Streets of NewYork</a></h3>
										<div class="meta">July 09, 2016 - <a href="">Tips</a></div>
									</div> <!-- end .content -->
								</div> <!-- end .blog-post -->
							</div> <!-- end .col-md-4 -->
							<div class="col-md-4 col-sm-6">
								<div class="blog-post image">
									<img src="/trans/Public/images/blog-post06.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post06.jpg" alt="image" class="img-responsive">
									<div class="overlay"></div>
									<div class="avatar"><img src="/trans/Public/images/blog-author07.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author07.jpg" alt="author"></div>
									<div class="content">
										<p>By Fusce Vehicula</p>
										<h3><a href="">Top 15 Romantic Date Ideas </a></h3>
										<div class="meta">July 03, 2016 - <a href="">承运</a></div>
									</div> <!-- end .content -->
								</div> <!-- end .blog-post -->
							</div> <!-- end .col-md-4 -->
						</div> <!-- end .row -->
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="blog-post image">
									<img src="/trans/Public/images/blog-post08.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post08.jpg" alt="image" class="img-responsive">
									<div class="overlay"></div>
									<div class="avatar"><img src="/trans/Public/images/blog-author08.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author08.jpg" alt="author"></div>
									<div class="content">
										<p>By Justo Congue</p>
										<h3><a href="">Top 15 Hotel at NewYork</a></h3>
										<div class="meta">July 09, 2016 - <a href="">承运</a></div>
									</div> <!-- end .content -->
								</div> <!-- end .blog-post -->
							</div> <!-- end .col-md-4 -->
							<div class="col-md-4 col-sm-6">
								<div class="blog-post image">
									<img src="/trans/Public/images/blog-post09.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post09.jpg" alt="image" class="img-responsive">
									<div class="overlay"></div>
									<div class="avatar"><img src="/trans/Public/images/blog-author09.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author09.jpg" alt="author"></div>
									<div class="content">
										<p>By Ornare Suscipit</p>
										<h3><a href="">Statue of Liberty and Ellis Island Tour</a></h3>
										<div class="meta">July 09, 2016 - <a href="">Culture</a></div>
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
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="blog-post image">
									<img src="/trans/Public/images/blog-post05.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post05.jpg" alt="image" class="img-responsive">
									<div class="overlay"></div>
									<div class="avatar"><img src="/trans/Public/images/blog-author01.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author01.jpg" alt="author"></div>
									<div class="content">
										<p>By Sagittis Tempor</p>
										<h3><a href="">Etiquette tips for travellers.</a></h3>
										<div class="meta">July 09, 2016 - <a href="">承运</a></div>
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
										<div class="meta">July 07, 2016 - <a href="">承运</a></div>
									</div> <!-- end .content -->
								</div> <!-- end .blog-post -->
							</div> <!-- end .col-md-4 -->
							<div class="col-md-4 col-sm-6">
								<div class="blog-post image">
									<img src="/trans/Public/images/blog-post04.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post04.jpg" alt="image" class="img-responsive">
									<div class="overlay"></div>
									<div class="avatar"><img src="/trans/Public/images/blog-author03.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author03.jpg" alt="author"></div>
									<div class="content">										
										<p>By Vehicula Tincidunt</p>
										<h3><a href="">The Modern Art of Coffee</a></h3>
										<div class="meta">July 03, 2016 - <a href="">承运</a></div>
									</div> <!-- end .content -->
								</div> <!-- end .blog-post -->
							</div> <!-- end .col-md-4 -->
						</div> <!-- end .row -->
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
								<div class="blog-post image">
									<img src="/trans/Public/images/blog-post07.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post07.jpg" alt="image" class="img-responsive">
									<div class="overlay"></div>
									<div class="avatar"><img src="/trans/Public/images/blog-author02.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author02.jpg" alt="author"></div>	
									<div class="content">
										<p>By Nulla Facilisi</p>
										<h3><a href="">The Famous Streets of NewYork</a></h3>
										<div class="meta">July 09, 2016 - <a href="">Tips</a></div>
									</div> <!-- end .content -->
								</div> <!-- end .blog-post -->
							</div> <!-- end .col-md-4 -->
							<div class="col-md-4 col-sm-6">
								<div class="blog-post image">
									<img src="/trans/Public/images/blog-post06.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post06.jpg" alt="image" class="img-responsive">
									<div class="overlay"></div>
									<div class="avatar"><img src="/trans/Public/images/blog-author03.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author03.jpg" alt="author"></div>
									<div class="content">
										<p>By Fusce Vehicula</p>
										<h3><a href="">Top 15 Romantic Date Ideas </a></h3>
										<div class="meta">July 03, 2016 - <a href="">承运</a></div>
									</div> <!-- end .content -->
								</div> <!-- end .blog-post -->
							</div> <!-- end .col-md-4 -->
						</div> <!-- end .row -->
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="blog-post image">
									<img src="/trans/Public/images/blog-post08.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post08.jpg" alt="image" class="img-responsive">
									<div class="overlay"></div>
									<div class="avatar"><img src="/trans/Public/images/blog-author01.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author01.jpg" alt="author"></div>
									<div class="content">
										<p>By Justo Congue</p>
										<h3><a href="">Top 15 Hotel at NewYork</a></h3>
										<div class="meta">July 09, 2016 - <a href="">承运</a></div>
									</div> <!-- end .content -->
								</div> <!-- end .blog-post -->
							</div> <!-- end .col-md-4 -->
							<div class="col-md-4 col-sm-6">
								<div class="blog-post image">
									<img src="/trans/Public/images/blog-post09.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-post09.jpg" alt="image" class="img-responsive">
									<div class="overlay"></div>
									<div class="avatar"><img src="/trans/Public/images/blog-author02.jpg" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/blog-author02.jpg" alt="author"></div>
									<div class="content">
										<p>By Ornare Suscipit</p>
										<h3><a href="">Statue of Liberty and Ellis Island Tour</a></h3>
										<div class="meta">July 09, 2016 - <a href="">Culture</a></div>
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
										<div class="meta">July 03, 2016 - <a href="">承运</a></div>
									</div> <!-- end .content -->
								</div> <!-- end .blog-post -->
							</div> <!-- end .col-md-4 -->
						</div> <!-- end .row -->
						<div class="text-center">
							<a href="" id="blog-load-more" class="button">LOAD MORE</a>
						</div> <!-- end .blog-load-more -->
					</div> <!-- end .box -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
		<script type="text/javascript">
			window.onload=function(){
				$.ajax({
					url:"/trans/index.php/Home/TaskList/TaskList/getTaskList",
					method:"get",
					dataType:"json",
					success:function(res){
						console.log(res)
					}
				})
			}
		</script>

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