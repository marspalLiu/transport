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
		<link href="/trans/Public/css/jquery.nouislider.min.css" rel="stylesheet">
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
	    <style type="text/css">

	    	/*.photo_preview_box{
	    		display: none;
	    	}*/
	    </style>
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
							<a href="<?php echo U('NearBy/nearBy');?>">地图查询</a>
							<ul>
								<li><a href="<?php echo U('NearBy/nearBy');?>">地图查询</a></li>
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
						<?php if(strtoupper($_SESSION['userId']) && strtoupper($_SESSION['type']) == '1'): ?><li class="menu-item-has-children">
								<a href="<?php echo U('SelfCenter/selfCenter');?>" >与我相关</a>
								<ul>
									<li><a href="<?php echo U('SelfCenter/selfCenter');?>">司机中心</a></li>
								</ul>
							</li><?php endif; ?>
						<?php if(strtoupper($_SESSION['userId']) && strtoupper($_SESSION['type']) == '2'): ?><li class="menu-item-has-children">
								<a href="<?php echo U('OwnerSelfCenter/ownerSelfCenter');?>" >与我相关</a>
								<ul>
									<li><a href="<?php echo U('OwnerSelfCenter/ownerSelfCenter');?>">货主中心</a></li>
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
							<?php echo (session('userName')); ?> 余额：<a href="javascript:void(0)" style="color: blue" onclick="getAccount()">XXX元</a> <a href="<?php echo U('Index/loginOut');?>">注销</a>
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
				<form action="/trans/index.php/home/index/register" method="POST" ><!-- <?php echo U('Login/regiser');?> -->
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
					<input id="tel1" class="form-control" type="text" placeholder="联系方式" name="tel">
					<div id="master" hidden="">
            			<input id="address" class="form-control" type="text" placeholder="住址" name="add">
            		</div>
            		<div id="car">
            			
            		</div>
					<div class="text-center">
						<p>完成后请及时对信息进行完善</p>
					</div> <!-- end .text-center -->
					<div class="button-wrapper"><button type="submit" class="button">注册</button></div>
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
			    swal("提示", text, type,function(res){
			    	return res;
			    })
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

			//获取当前账户的余额
			function getAccount(){
				$.ajax({
					url:"../Index/getAccount",
					method:"get",
					dataType:"text",
					success:function(res){
						console.log(res)
						swal({ 
						  title: "当前账户余额", 
						  text: "<h3>"+res+"元</h3>", 
						  timer: 2000, 
						  showConfirmButton: false,
						  html:true 
						});
					}
				})
				
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

<style type="text/css">
	.affirmTask{
		background: #fff!important;color: #646e7b;font-size: 15px;text-align: center;width: 140px;height: 40px;line-height: 40px;border-radius: 30px;padding: 0px 10px
	}
	.owl-item{
		display: none
	}
</style>
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
									<input type="text" id="task_title1" name="task_title" placeholder="请输入您感兴趣的">
								</div> <!-- end .form-group -->
							</div> <!-- end .col-sm-4 -->
							<div class="col-sm-4">
								<div class="form-group">
									<!-- <input type="text" placeholder="出发地点"> -->
									<select id="task_start1">
										<option value="0">请选择</option>
										<option value="北辰区">北辰区</option>
										<option value="北辰区">北辰区</option>
										<option value="红桥区">红桥区</option>
										<option value="南开区">南开区</option>
										<option value="滨海新区">滨海新区</option>
										<option value="西青区">西青区</option>
										<option value="静海县">静海县</option>
									</select>
									<i class="pe-7s-world"></i>
								</div> <!-- end .form-group -->
							</div> <!-- end .col-sm-4 -->
							<div class="col-sm-4">
								<div class="form-group">
									<!-- <input type="text" placeholder="目的地点"> -->
									<select id="task_end1">
										<option value="0">请选择</option>
										<option value="北辰区">北辰区</option>
										<option value="红桥区">红桥区</option>
										<option value="南开区">南开区</option>
										<option value="滨海新区">滨海新区</option>
										<option value="西青区">西青区</option>
										<option value="静海县">静海县</option>
									</select>
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
						<button type="button" class="button" onclick="search(this)">搜索</button>
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
							<a href="" class="category-box" style="background-image: url('/trans/Public/images/category01.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category01.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon01.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon01.png" alt="icon">
									<span class="number" id="type1">8</span>
									<span class="title">设备制造</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('/trans/Public/images/category02.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category02.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon02.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon02.png" alt="icon">
									<span class="number" id="type2">36</span>
									<span class="title">运输</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('/trans/Public/images/category03.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category03.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon03.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon03.png" alt="icon">
									<span class="number" id="type3">26</span>
									<span class="title">仓储</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('/trans/Public/images/category04.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category04.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon04.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon04.png" alt="icon">
									<span class="number" id="type4">16</span>
									<span class="title">装饰包装</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-sm-6">
							<a href="" class="category-box" style="background-image: url('/trans/Public/images/category05.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category05.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon05.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon05.png" alt="icon">
									<span class="number" id="type5">12</span>
									<span class="title">配送</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-sm-6 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('/trans/Public/images/category06.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category06.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon06.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon06.png" alt="icon">
									<span class="number" id="type6">4</span>
									<span class="title">信息服务</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
						<div class="col-md-3 col-sm-6">
							<a href="" class="category-box" style="background-image: url('/trans/Public/images/category07.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category07.jpg*/;">
								<div class="inner">
									<img src="/trans/Public/images/category-icon07.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/category-icon07.png" alt="icon">
									<span class="number" id="type7">39</span>
									<span class="title">可重复利用的物资</span>
								</div> <!-- end .inner -->
							</a> <!-- end .category-box -->
						</div> <!-- end .col-md-3 -->
					</div> <!-- end .row -->
					<div class="text-center">
						<a href="#" onclick="openAllTask()" class="button">查看全部物流信息</a>
					</div> <!-- end .text-center -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white">
			<div class="inner">
				<div class="container-fluid">
					<h2 class="text-center">薪金  TOP10<small>下列的任务为薪金排行的前十，快来参观参观吧！</small></h2>
					<div class="directory-slider" id="topTemplateContainer">
						<div class="directory-item" id="top1"  data-taskId="" data-toggle="modal" data-target="#myModal" onclick="getTaskDetail(this)">
							<img id="top1_pic1" src="/trans/Public/images/directory-slider02.jpg" class="img-responsive">
							<div class="overlay"></div>
							<!-- <div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" ></a> -->
							<div class="content">
								<h3><a href="" id="top1_title">Not Just Coffee</a></h3>
								<p id="top1_describe">Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" ><span id="top1_start">Thomas St , NewYork</span></div>
								
							</div> <!-- end .content -->
							<div class="category">
								<div  class="affirmTask">
									￥ <span id="top1_price"></span> - 承运
								</div>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item" id="top2" data-taskId="" data-toggle="modal" data-target="#myModal" onclick="getTaskDetail(this)">
							<img id="top2_pic1" src="/trans/Public/images/directory-slider02.jpg" class="img-responsive">
							<div class="overlay"></div>
							<!-- <div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" ></a> -->
							<div class="content">
								<h3><a href="" id="top2_title">Not Just Coffee</a></h3>
								<p id="top1_describe">Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" ><span id="top2_start">Thomas St , NewYork</span></div>
								
							</div> <!-- end .content -->
							<div class="category">
								<div  class="affirmTask">
									￥ <span id="top2_price"></span> - 承运
								</div>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item" id="top3" data-taskId="" data-toggle="modal" data-target="#myModal" onclick="getTaskDetail(this)">
							<img id="top3_pic1" src="/trans/Public/images/directory-slider02.jpg" class="img-responsive">
							<div class="overlay"></div>
							<!-- <div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" ></a> -->
							<div class="content">
								<h3><a href="" id="top3_title">Not Just Coffee</a></h3>
								<p id="top3_describe">Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" ><span id="top3_start">Thomas St , NewYork</span></div>
								
							</div> <!-- end .content -->
							<div class="category">
								<div  class="affirmTask">
									￥ <span id="top3_price"></span> - 承运
								</div>
							</div> <!-- end .category -->
						</div> <!-- end .directory-item -->
						<div class="directory-item" id="top4" data-taskId="" data-toggle="modal" data-target="#myModal" onclick="getTaskDetail(this)">
							<img id="top4_pic1" src="/trans/Public/images/directory-slider02.jpg" class="img-responsive">
							<div class="overlay"></div>
							<!-- <div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" ></a> -->
							<div class="content">
								<h3><a href="" id="top4_title">Not Just Coffee</a></h3>
								<p id="top4_describe">Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" ><span id="top4_start">Thomas St , NewYork</span></div>
								
							</div> <!-- end .content -->
							<div class="category">
								<div  class="affirmTask">
									￥ <span id="top4_price"></span> - 承运
								</div>
							</div> <!-- end .category -->
						</div>
						<div class="directory-item" id="top5" data-taskId="" data-toggle="modal" data-target="#myModal" onclick="getTaskDetail(this)">
							<img id="top5_pic1" src="/trans/Public/images/directory-slider02.jpg" class="img-responsive">
							<div class="overlay"></div>
							<!-- <div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" ></a> -->
							<div class="content">
								<h3><a href="" id="top5_title">Not Just Coffee</a></h3>
								<p id="top5_describe">Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" ><span id="top5_start">Thomas St , NewYork</span></div>
								
							</div> <!-- end .content -->
							<div class="category">
								<div  class="affirmTask">
									￥ <span id="top5_price"></span> - 承运
								</div>
							</div> <!-- end .category -->
						</div>
						<div class="directory-item" id="top6" data-taskId="" data-toggle="modal" data-target="#myModal" onclick="getTaskDetail(this)">
							<img id="top6_pic1" src="/trans/Public/images/directory-slider02.jpg" class="img-responsive">
							<div class="overlay"></div>
							<!-- <div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" ></a> -->
							<div class="content">
								<h3><a href="" id="top6_title">Not Just Coffee</a></h3>
								<p id="top6_describe">Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" ><span id="top6_start">Thomas St , NewYork</span></div>
								
							</div> <!-- end .content -->
							<div class="category">
								<div  class="affirmTask">
									￥ <span id="top6_price"></span> - 承运
								</div>
							</div> <!-- end .category -->
						</div>
						<div class="directory-item" id="top7" data-taskId="" data-toggle="modal" data-target="#myModal" onclick="getTaskDetail(this)">
							<img id="top7_pic1" src="/trans/Public/images/directory-slider02.jpg" class="img-responsive">
							<div class="overlay"></div>
							<!-- <div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" ></a> -->
							<div class="content">
								<h3><a href="" id="top7_title">Not Just Coffee</a></h3>
								<p id="top7_describe">Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" ><span id="top7_start">Thomas St , NewYork</span></div>
								
							</div> <!-- end .content -->
							<div class="category">
								<div  class="affirmTask">
									￥ <span id="top7_price"></span> - 承运
								</div>
							</div> <!-- end .category -->
						</div>
						<div class="directory-item" id="top8" data-taskId="" data-toggle="modal" data-target="#myModal" onclick="getTaskDetail(this)">
							<img id="top8_pic1" src="/trans/Public/images/directory-slider02.jpg" class="img-responsive">
							<div class="overlay"></div>
							<!-- <div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" ></a> -->
							<div class="content">
								<h3><a href="" id="top8_title">Not Just Coffee</a></h3>
								<p id="top8_describe">Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" ><span id="top8_start">Thomas St , NewYork</span></div>
								
							</div> <!-- end .content -->
							<div class="category">
								<div  class="affirmTask">
									￥ <span id="top8_price"></span> - 承运
								</div>
							</div> <!-- end .category -->
						</div>
						<div class="directory-item" id="top9" data-taskId="" data-toggle="modal" data-target="#myModal" onclick="getTaskDetail(this)">
							<img id="top9_pic1" src="/trans/Public/images/directory-slider02.jpg" class="img-responsive">
							<div class="overlay"></div>
							<!-- <div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" ></a> -->
							<div class="content">
								<h3><a href="" id="top9_title">Not Just Coffee</a></h3>
								<p id="top9_describe">Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" ><span id="top9_start">Thomas St , NewYork</span></div>
								
							</div> <!-- end .content -->
							<div class="category">
								<div  class="affirmTask">
									￥ <span id="top9_price"></span> - 承运
								</div>
							</div> <!-- end .category -->
						</div>
						<div class="directory-item" id="top10" data-taskId="" data-toggle="modal" data-target="#myModal" onclick="getTaskDetail(this)">
							<img id="top10_pic1" src="/trans/Public/images/directory-slider02.jpg" class="img-responsive">
							<div class="overlay"></div>
							<!-- <div class="rating">4.0</div>
							<a href="" class="wishlist"><img src="/trans/Public/images/directory-heart.png" ></a> -->
							<div class="content">
								<h3><a href="" id="top10_title">Not Just Coffee</a></h3>
								<p id="top10_describe">Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" ><span id="top10_start">Thomas St , NewYork</span></div>
								
							</div> <!-- end .content -->
							<div class="category">
								<div  class="affirmTask">
									￥ <span id="top10_price"></span> - 承运
								</div>
							</div> <!-- end .category -->
						</div>
						
					</div> <!-- end .directory-slider -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section light transparent" style="background-image: url('/trans/Public/images/background02.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/background02.jpg*/;">
			<div class="inner">
				<div class="container">
					<h2 class="text-center">我们提供的<small>There are what we can offer to you.</small></h2>
					<div class="row">
						<div class="col-sm-4">
							<div class="services">
								<img src="/trans/Public/images/services-icon01.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/services-icon01.png" alt="icon" class="img-responsive center-block">
								<h3>集中的<br>物流信息</h3>
								<p>物流信息全在这里，司机不必忙于寻找运输机会</p>
								<div class="process"><i class="pe-7s-angle-right-circle"></i></div>
							</div> <!-- end .services -->
						</div> <!-- end .col-sm-4 -->
						<div class="col-sm-4">
							<div class="services">
								<img src="/trans/Public/images/services-icon02.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/services-icon02.png" alt="icon" class="img-responsive center-block">
								<h3>安全的<br>交易环境</h3>
								<p>实名认证的用户，您不用再猜测对方的真实性</p>
								<div class="process"><i class="pe-7s-angle-right-circle"></i></div>
							</div> <!-- end .services -->
						</div> <!-- end .col-sm-4 -->
						<div class="col-sm-4">
							<div class="services">
								<img src="/trans/Public/images/services-icon03.png" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/services-icon03.png" alt="icon" class="img-responsive center-block">
								<h3>零中间<br>商费用</h3>
								<p>本平台只作为信息提供平台，承诺不在交易中收取任何费用!</p>
							</div> <!-- end .services -->
						</div> <!-- end .col-sm-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		

		<!-- 任务详情Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
		      </div>
		      <div class="modal-body">
		        <div class="container" style="width:100%!important">
					<div class="box">
						<form  class="add-listing-form light-inputs">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">任务名称 :</span>
									<input type="text" id="task_title" name="task_title" disabled="true" placeholder="例如：运送一匹建材">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">              
							    <!-- <textarea name="task_describe" rows="4"></textarea> -->
							    <!-- <textarea id="TextArea1" name="task_describe"  placeholder="任务描述，越详细越好" cols="20" rows="2" disabled="true"></textarea> -->
							    <div style="width: 100%;height: auto;background:#f1f2f6;font-size:14px;line-height:48px;padding:5px 10px" id="task_describe"></div>
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">选择分类 :</span>
									<select name="task_type" id="task_type" disabled="true">	    	
										<option value="1">设备制造</option>
										<option value="2">运输</option>
										<option value="3">仓储</option>
										<option value="4">装饰包装</option>
										<option value="5">配送</option>
										<option value="6">信息服务</option>
									</select>
								</div> <!-- end .input-group -->
								<span class="help-block">分类必须要准确，如有运输触犯法律的货物，将会受到刑事处理</span>
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">起点 :</span>
									<select name="task_start" id="task_start" disabled="true">	    	
											<option value="北辰区">北辰区</option>
											<option value="红桥区">红桥区</option>
											<option value="南开区">南开区</option>
											<option value="滨海新区">滨海新区</option>
											<option value="西青区">西青区</option>
											<option value="静海县">静海县</option>
									</select>
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">目的地 :</span>
									<select name="task_end" id="task_end" disabled="true">	    	
											<option value="北辰区">北辰区</option>
											<option value="红桥区">红桥区</option>
											<option value="南开区">南开区</option>
											<option value="滨海新区">滨海新区</option>
											<option value="西青区">西青区</option>
											<option value="静海县">静海县</option>
									</select>
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">其他要求 :</span>
									<input type="text" name="task_require" id="task_require" disabled="true" placeholder="例如：易燃易爆需要小心、易碎物品轻拿轻放等。">
								</div> <!-- end .input-group -->
								<span class="help-block">可以根据到货后检查货物质量对司机进行申诉</span>
							</div> <!-- end .form-group -->
							<div class="form-group photo_thumbnails">
								<img class="photo_preview_box" style="vertical-align:top;width: 45%;" id="preview1"></img>
								<img class="photo_preview_box" style="vertical-align:top;width: 45%;" id="preview2"></img>
								<img class="photo_preview_box" style="vertical-align:top;width: 45%;" id="preview3"></img>
								<img class="photo_preview_box" style="vertical-align:top;width: 45%;" id="preview4"></img>
							</div> <!-- end .form-group .photo_thumbnails -->
							<div class="form-group listing-hours">
								<div class="row">
									<div class="col-sm-4" style="width: 50%">
										<div class="input-group">
											<span class="input-group-addon">拉货日期 :</span>
											<input type="text" name="task_time" id="task_time" disabled="true" placeholder="2018-03-15">
										</div> <!-- end .input-group -->
									</div> <!-- end .col-sm-4 -->
									<div class="col-sm-4" style="width: 50%">
										<div class="input-group">
											<span class="input-group-addon">薪金 :</span>
											<input type="number" id="task_price" name="task_price" disabled="true">
										</div> <!-- end .input-group -->
									</div> <!-- end .col-sm-4 -->
								</div> <!-- end .row -->
							</div> <!-- end .form-group -->
						</form>
					</div> <!-- end .box -->
				</div> <!-- end .container -->
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
		        <button type="button" class="btn btn-primary" id="affirmCarry"  onclick="affirmCarry(this)">确认承运</button>
		      </div>
		    </div>
		  </div>
		</div>
		<script type="text/javascript">
			window.onload = function(){
				//获取前十名的薪金
				$.ajax({
					url:"/trans/index.php/home/index/getTopPriceTask",
					method:"POST",
					data:"",
					dataType:"json",
					success:function(res){
						console.log()
							
						for (var i = 0; i < res.length; i++) {
							$("#top"+(i+1)).parent().css("display","block")
							$("#top"+(i+1)).attr("data-taskId",res[i]["task_id"])
							$("#top"+(i+1)+"_pic1").attr("src","http://139.199.172.116:80/trans/"+res[i]["task_pic1"])
							$("#top"+(i+1)+"_title").text(res[i]["task_title"])
							$("#top"+(i+1)+"_describe").html(res[i]["task_describe"])
							$("#top"+(i+1)+"_price").text(res[i]["task_price"])
							$("#top"+(i+1)+"_start").text(res[i]["task_start"])
						}
					}
				})

				if ( window.clipboardData ) {  
	                $('.copy_btn').click(function() {  
	                    window.clipboardData.setData("Text", $(this).prev('input').val());  
	                    alert('复制成功！');  
	                });  
	            } else {  
	                $(".copy_btn").zclip({  
	                    path:'http://img3.job1001.com/js/ZeroClipboard/ZeroClipboard.swf',  
	                    copy:function(){return $(this).prev('input').val();},  
	                    afterCopy:function(){alert('复制成功！');}  
	                });  
	            } 
			}


			function getTaskDetail(el){
				$("#affirmCarry").attr("data-taskId",'')
				var id = $(el).attr("data-taskId");
				if (!id) {
					alert("出错了！");
					return ;
				}
				$("#affirmCarry").attr("data-taskId",id)
				$.ajax({
		           url:"../TaskList/getTaskDetail?taskId="+id,
		           type:"GET",
		           dataType:"JSON",
		           success:function(data){
		           		for(var i in data[0]){
		           			$("#"+i).val(data[0][i])
		           		}
		               $("#myModalLabel").text(data[0].task_title)
		               for (var i = 0; i < 4; i++) {
		               		if (data[0]["task_pic"+(i+1)]) {
		               			$("#preview"+(i+1)).attr("src","http://139.199.172.116:80/trans/"+data[0]["task_pic"+(i+1)])
		               		}else{
		               			$("#preview"+(i+1)).attr("style","display:none")
		               		}
		               		
		               }
		               var html = (data[0].task_describe);
		               document.getElementById("task_describe").innerHTML = html;
		           }      
		   		});
			}

			function affirmCarry(el){
				var taskId = $("#affirmCarry").attr("data-taskId")
				if (!taskId) {
					alert("出错了！");
					return ;
				}
				swal({ 
				  title: "提示", 
				  text: "您确定要承运嘛？", 
				  type: "info", 
				  showCancelButton: true, 
				  closeOnConfirm: false,
				},
				function(res){ 
					if (res == true) {
				  		$.ajax({
				           url:"../TaskList/affirmCarry?taskId="+taskId,
				           type:"GET",
				           dataType:"text",
				           success:function(data){
				           		if (data == "success") {
				           			swal("报名成功！")
				  				}else if (data == "haveAffirm") {
									swal("您已报过名！")
				  				}else if(data == "fail"){
				           			swal("报名失败，请重试！")
				  				}
				  				else if (data == "nologinIn"){
				  					swal("您还未登录！")
				  				}
				           }     
				   		});
					}else{
				  		swal.close();
				  	}
				});
			}

			function search(el){
				var task_title = $("#task_title1").val();
				var task_start = $("#task_start1").val();
				var task_end   = $("#task_end1").val();
				// var html = "<?php echo U('TaskList/taskList?task_title="+task_title+"&task_start="+task_start+"&task_end="+task_end+"');?>";
				var html = "<?php echo U('TaskList/taskList');?>?task_title="+task_title+"&task_start="+task_start+"&task_end="+task_end;
				location.assign(html);
			}

			function openAllTask(){
				var html = "<?php echo U('TaskList/taskList');?>";
				location.assign(html);
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
	<!-- <div class="top"> -->
		<!-- <div class="left">
			<div class="logo"><a href="<?php echo U('Index/index');?>" style="width: 45px;height: auto;" ><img src="/trans/Public/images/logo.png" class="img-responsive"></a></div>
		</div> -->
		<!-- <div class="social-icons">
			<a href=""><i class="pe-so-facebook"></i></a>
			<a href=""><i class="pe-so-twitter"></i></a>
			<a href=""><i class="pe-so-vimeo"></i></a>
			<a href=""><i class="pe-so-tripadvisor"></i></a>
			<a href=""><i class="pe-so-instagram"></i></a>
			<a href=""><i class="pe-so-google-plus"></i></a>
		</div> -->
		<!-- <div class="right">Proudly Made in Viet Nam<a href="">+84 968796789</a></div> --> <!-- end .left -->
	<!-- </div> --> <!-- end .top -->
	<div class="bottom">Copyright &copy; 2018. All Rights Reserved By <a href="">天津物流信息科技有限公司</a></div>
</footer> <!-- end .footer -->

<!-- 添加车辆modal -->
<div class="modal fade"  id="add_car_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" style="text-align: left" id="header">添加车辆</h4>
			</div>
			<div class="modal-body" style"padding-bottom: 0px">
			<form name="addCarForm" enctype="Multipart/form-data" action="/trans/index.php/home/index/addCar" method="post" id="addCarForm" class="add-listing-form light-inputs">
				<div class="row" >
					<div class="col-md-2">
						<h6>车牌号</h6>
					</div>
					<div class="col-md-10">
						<input type="text" name="id" class="form-control" id="id"  >
						<label class="control-label message"></label>
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-2">
						<h6>载重（kg)</h6>
					</div>
					<div class="col-md-10">
						<input type="text" name="weight" class="form-control"  id="weight" >
						<label class="control-label message"></label>
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-2">
						<h6>车长（m）</h6>
					</div>
					<div class="col-md-10">
						<input type="text" name="length" class="form-control" id="length"  >
						<label class="control-label message"></label>
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-2">
						<h6>车宽（m）</h6>
					</div>
					<div class="col-md-10">
						<input type="text" class="form-control" name="width" id="width"  >
						<label class="control-label message"></label>
					</div>
				</div>
				<div class="form-group add_photo">
					<button onclick="getElementById('file').click()" type="button" class="button">上传图片</button>
					<input type="file" multiple="multiple" id="file" name='car_pic' style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" onchange="preview(this)" /><!--原来按钮的样式-->
					<span>1 Photo</span>
				</div> <!-- end .text-left .add_photo -->
			

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal" id="close">关闭</button>
			<button type="submit" class="btn btn-primary" id="save">添加</button>
		</div>
		</form>
	</div>
</div>


<!-- jQuery -->
<script src="/trans/Public/js/jquery-3.1.0.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="http://img3.job1001.com/js/ZeroClipboard/jquery.zclip.min.js"></script> 
		
<!-- Bootstrap -->
<script src="/trans/Public/js/bootstrap.min.js" tppabs="http://view.jqueryfuns.·com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/bootstrap.min.js"></script>

<!-- BaiDu maps -->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=	kh7UFEyOR81HUvnaY81VFVxqGu0SimDa"></script>
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