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
				<form action="/trans/index.php/home/near_by/register" method="POST" ><!-- <?php echo U('Login/regiser');?> -->
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
						<!-- <form> -->
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
									<input type="start" name="start" id="start" placeholder="请输入起始位置">
										<!-- <select>
											<option>设备制造</option>
											<option>运输</option>
											<option>仓储</option>
											<option>装饰包装</option>
											<option>配送</option>
											<option>信息服务</option>
										</select> -->
									</div> <!-- end .form-group -->
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="form-group">
									<input type="end" name="end" id="end" placeholder="请输入目的地">
										<!-- <select>
											<option>北辰区</option>
											<option>红桥区</option>
											<option>南开区</option>
											<option>滨海新区</option>
											<option>西青区</option>
											<option>静海县</option>
										</select> -->
									</div> <!-- end .form-group -->
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="form-group">
									<button id="search" class="button" onclick="search()">搜索线路</button>
										<!-- <select>
											<option>北辰区</option>
											<option>红桥区</option>
											<option>南开区</option>
											<option>滨海新区</option>
											<option>西青区</option>
											<option>静海县</option>
										</select> -->
									</div> <!-- end .form-group -->
								</div> <!-- end .col-sm-4 -->
							</div> <!-- end .row -->
						<!-- </form> -->
					</div> <!-- end .directory-filters -->
					<div id="searchResultPanel1" style="border:1px solid #C0C0C0;width:150px;height:auto; display:none;"></div>
					<div id="searchResultPanel2" style="border:1px solid #C0C0C0;width:150px;height:auto; display:none;"></div>
					<!-- <div class="directory-tags">
						<div class="tag">Accepts Credit Cards<a href=""><i class="pe-7s-close"></i></a></div>
						<div class="tag">Parking Street<a href=""><i class="pe-7s-close"></i></a></div>
						<div class="tag">Wireless Internet<a href=""><i class="pe-7s-close"></i></a></div>
					</div> --> <!-- end .directory-tags -->
					<!-- <div class="directory-list-info">
						<p>下列为您筛选条件所筛选的结果：</p>
						<p class="results">79 条 - <a href="">Reset</a></p>
					</div> -->
					<div class="directory-list row" id="line">
						
					</div> <!-- end .directory-list -->
				</div> <!-- end .inner -->
			</div> <!-- end .right -->
		</div> <!-- end .section -->

		<!-- BaiDu maps -->
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=	kh7UFEyOR81HUvnaY81VFVxqGu0SimDa"></script>
		
		<!-- jQuery -->
		<script src="/trans/Public/js/jquery-3.1.0.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/jquery-3.1.0.min.js"></script>
		<!-- Bootstrap -->
		<script src="/trans/Public/js/bootstrap.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/bootstrap.min.js"></script>
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
			
			// function initialize_map() {
			// 	if ($('.map').length) {
			// 		var myLatLng = new google.maps.LatLng(117.065189,39.242459);
			// 		var mapOptions = {
			// 			zoom: 17,
			// 			center: myLatLng,
			// 			scrollwheel: false,
			// 			zoomControl: false,
			// 			scaleControl: false,
			// 			mapTypeControl: false,
			// 			streetViewControl: false
			// 		};
			// 		map = new google.maps.Map(document.getElementById('map'), mapOptions);
			// 	} else {
			// 		return false;
			// 	}

			// 	var marker1LatLng = new google.maps.LatLng(40.715756,-74.005339);
			// 	marker1 = new RichMarker({
			// 		position: marker1LatLng,
			// 		map: map,
			// 		draggable: false,
			// 		flat: true,
			// 		content: '<div class="marker-wrapper" id="marker1">' +
			// 			'<div class="marker"><div class="hover"></div><div class="inner"><img src="/trans/Public/images/directory-category-drink.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-drink.png*/ alt="icon"></div></div>' +
			// 			'<div class="directory-item">' +
			// 				'<img src="/trans/Public/images/directory-slider01.jpg"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider01.jpg*/ alt="bg" class="img-responsive">' +
			// 				'<div class="overlay"></div>' +
			// 				'<div class="rating">4.0</div>' +
			// 				'<div class="content">' +
			// 					'<h3><a href="">Not Just Coffee</a></h3>' +
			// 					'<div class="location"><img src="/trans/Public/images/directory-location.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png*/ alt="location">Thomas St , NewYork</div>' +
			// 				'</div> <!-- end .content -->' +
			// 			'</div> <!-- end .directory-item -->' +
			// 		'</div>'
			// 	});
			// 	google.maps.event.addListener(marker1, 'click', function() {
			// 		$('.marker-wrapper').removeClass('open');
			// 		$('#marker1').toggleClass('open');
			// 	});

			// 	var marker2LatLng = new google.maps.LatLng(40.716715,-74.003352);
			// 	marker2 = new RichMarker({
			// 		position: marker2LatLng,
			// 		map: map,
			// 		draggable: false,
			// 		flat: true,
			// 		content: '<div class="marker-wrapper" id="marker2">' +
			// 			'<div class="marker"><div class="hover"></div><div class="inner"><img src="/trans/Public/images/directory-category-dining.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-dining.png*/ alt="icon"></div></div>' +
			// 			'<div class="directory-item">' +
			// 				'<img src="/trans/Public/images/directory-slider02.jpg"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider02.jpg*/ alt="bg" class="img-responsive">' +
			// 				'<div class="overlay"></div>' +
			// 				'<div class="rating">4.0</div>' +
			// 				'<div class="content">' +
			// 					'<h3><a href="">Consequat Restaurant</a></h3>' +
			// 					'<div class="location"><img src="/trans/Public/images/directory-location.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png*/ alt="location">Leonard St , NewYork</div>' +
			// 				'</div> <!-- end .content -->' +
			// 			'</div> <!-- end .directory-item -->' +
			// 		'</div>'
			// 	});
			// 	google.maps.event.addListener(marker2, 'click', function() {
			// 		$('.marker-wrapper').removeClass('open');
			// 		$('#marker2').toggleClass('open');
			// 	});

			// 	var marker3LatLng = new google.maps.LatLng(40.716622,-74.007976);
			// 	marker3 = new RichMarker({
			// 		position: marker3LatLng,
			// 		map: map,
			// 		draggable: false,
			// 		flat: true,
			// 		content: '<div class="marker-wrapper" id="marker3">' +
			// 			'<div class="marker"><div class="hover"></div><div class="inner"><img src="/trans/Public/images/directory-category-food.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-food.png*/ alt="icon"></div></div>' +
			// 			'<div class="directory-item">' +
			// 				'<img src="/trans/Public/images/directory-slider04.jpg"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider04.jpg*/ alt="bg" class="img-responsive">' +
			// 				'<div class="overlay"></div>' +
			// 				'<div class="rating">4.0</div>' +
			// 				'<div class="content">' +
			// 					'<h3><a href="">Quisque Tinibus Hotel</a></h3>' +
			// 					'<div class="location"><img src="/trans/Public/images/directory-location.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png*/ alt="location">Knightsbridge 66</div>' +
			// 				'</div> <!-- end .content -->' +
			// 			'</div> <!-- end .directory-item -->' +
			// 		'</div>'
			// 	});
			// 	google.maps.event.addListener(marker3, 'click', function() {
			// 		$('.marker-wrapper').removeClass('open');
			// 		$('#marker3').toggleClass('open');
			// 	});

			// 	var marker4LatLng = new google.maps.LatLng(40.714898,-74.004500);
			// 	marker4 = new RichMarker({
			// 		position: marker4LatLng,
			// 		map: map,
			// 		draggable: false,
			// 		flat: true,
			// 		content: '<div class="marker-wrapper" id="marker4">' +
			// 			'<div class="marker"><div class="hover"></div><div class="inner"><img src="/trans/Public/images/directory-category-party.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-category-party.png*/ alt="icon"></div></div>' +
			// 			'<div class="directory-item">' +
			// 				'<img src="/trans/Public/images/directory-slider03.jpg"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-slider03.jpg*/ alt="bg" class="img-responsive">' +
			// 				'<div class="overlay"></div>' +
			// 				'<div class="rating">4.0</div>' +
			// 				'<div class="content">' +
			// 					'<h3><a href="">DJ Party</a></h3>' +
			// 					'<div class="location"><img src="/trans/Public/images/directory-location.png"/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/directory-location.png*/ alt="location">Knightsbridge 66</div>' +
			// 				'</div> <!-- end .content -->' +
			// 			'</div> <!-- end .directory-item -->' +
			// 		'</div>'
			// 	});
			// 	google.maps.event.addListener(marker4, 'click', function() {
			// 		$('.marker-wrapper').removeClass('open');
			// 		$('#marker4').toggleClass('open');
			// 	});

			// 	return false;
			// }
			// google.maps.event.addDomListener(window, 'load', initialize_map);
			var map;
			window.onload=function(){
				map = new BMap.Map("map");    
				var lon,lat;
				var geolocation = new BMap.Geolocation();
				geolocation.getCurrentPosition(function(r){
					if(this.getStatus() == BMAP_STATUS_SUCCESS){
						var mk = new BMap.Marker(r.point);
						map.addOverlay(mk);
						map.panTo(r.point);
						lon = r.point.lng;
						lat = r.point.lat
					}
					else {
						alert('failed'+this.getStatus());
					}        
				});
				var point = new BMap.Point(lon, lat);    
				map.centerAndZoom(point, 15);    
				map.addControl(new BMap.NavigationControl());    
				map.addControl(new BMap.ScaleControl());    
				map.addControl(new BMap.OverviewMapControl());    
				map.addControl(new BMap.MapTypeControl());    
				map.setCurrentCity("天津"); // 仅当设置城市信息时，MapTypeControl的切换功能才能可用 
			}

			function search(){
				var start = $("#start").val()
				var end   = $("#end").val()
				var driving = new BMap.DrivingRoute(map, {    
				    renderOptions: {    
				        map   : map,     
				        panel : "line",    
				        autoViewport: true    
				    }    
				});   
				driving.search(start, end);
			}

			function G(id) {
				return document.getElementById(id);
			}
			var ac = new BMap.Autocomplete(    //建立一个自动完成的对象
				{"input" : "start"
				,"location" : map
			});

			ac.addEventListener("onhighlight", function(e) {  //鼠标放在下拉列表上的事件
			var str = "";
				var _value = e.fromitem.value;
				var value = "";
				if (e.fromitem.index > -1) {
					value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
				}    
				str = "FromItem<br />index = " + e.fromitem.index + "<br />value = " + value;
				
				value = "";
				if (e.toitem.index > -1) {
					_value = e.toitem.value;
					value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
				}    
				str += "<br />ToItem<br />index = " + e.toitem.index + "<br />value = " + value;
				G("searchResultPanel1").innerHTML = str;
			});

			var myValue;
			ac.addEventListener("onconfirm", function(e) {    //鼠标点击下拉列表后的事件
			var _value = e.item.value;
				myValue = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
				G("searchResultPanel1").innerHTML ="onconfirm<br />index = " + e.item.index + "<br />myValue = " + myValue;
				
				setPlace();
			});

			var ac1 = new BMap.Autocomplete(    //建立一个自动完成的对象
				{"input" : "end"
				,"location" : map
			});

			ac1.addEventListener("onhighlight", function(e) {  //鼠标放在下拉列表上的事件
			var str = "";
				var _value = e.fromitem.value;
				var value = "";
				if (e.fromitem.index > -1) {
					value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
				}    
				str = "FromItem<br />index = " + e.fromitem.index + "<br />value = " + value;
				
				value = "";
				if (e.toitem.index > -1) {
					_value = e.toitem.value;
					value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
				}    
				str += "<br />ToItem<br />index = " + e.toitem.index + "<br />value = " + value;
				G("searchResultPanel2").innerHTML = str;
			});

			var myValue;
			ac1.addEventListener("onconfirm", function(e) {    //鼠标点击下拉列表后的事件
			var _value = e.item.value;
				myValue = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
				G("searchResultPanel2").innerHTML ="onconfirm<br />index = " + e.item.index + "<br />myValue = " + myValue;
				
				setPlace();
			});

			function setPlace(){
				map.clearOverlays();    //清除地图上所有覆盖物
				function myFun(){
					var pp = local.getResults().getPoi(0).point;    //获取第一个智能搜索的结果
					map.centerAndZoom(pp, 18);
					map.addOverlay(new BMap.Marker(pp));    //添加标注
				}
				var local = new BMap.LocalSearch(map, { //智能搜索
				  onSearchComplete: myFun
				});
				local.search(myValue);
			}

		</script>

	</body>
</html>