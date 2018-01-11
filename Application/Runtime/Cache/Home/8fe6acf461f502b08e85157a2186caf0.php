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
				<form action="/trans/index.php/home/owner_self_center/register" method="POST" ><!-- <?php echo U('Login/regiser');?> -->
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
											<a class="tab active" data-tab="1" onclick="changeTab(this)">全部<i class="pe-7s-right-arrow"></i></a>
											<a class="tab" data-tab="2" onclick="changeTab(this)">待选司机<i class="pe-7s-right-arrow"></i></a>
											<a class="tab" data-tab="3" onclick="changeTab(this)">查看物流状态<i class="pe-7s-right-arrow"></i></a>
											<a class="tab" data-tab="4" onclick="changeTab(this)">已完成待收货<i class="pe-7s-right-arrow"></i></a>
											<a class="tab" data-tab="5" onclick="changeTab(this)">已完成<i class="pe-7s-right-arrow"></i></a>
										</div>
									</div> <!-- end .sidebar-widget -->
								</div> 
							</div> 
							<div class="col-md-8">
								<div class="row products" id="selfCenterContainer">
									
									
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
      </div>
    </div>
  </div>
</div>

<!--选择司机Modal -->
<div class="modal fade" id="selectDriverModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">选择司机</h4>
      </div>
      <div class="modal-body">
        <div class="container" style="width:100%!important">
			<div class="box">
				<form  class="add-listing-form light-inputs">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">报名司机 :</span>
							<select name="taskDriverSelect" id="taskDriverSelect" onchange="changeDriver(this)">	    	
								
							</select>
						</div> <!-- end .input-group -->
						<span class="help-block">一旦确认不能修改，谨慎操作；您也可以先打电话了解一下情况哦！</span>
					</div> <!-- end .form-group -->
					<div id="driverCarContainer">
						
					</div>
				</form>
			</div> <!-- end .box -->
		</div> <!-- end .container -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary" id="affirmCarry"  onclick="affirmDriver(this)">确定</button>
      </div>
    </div>
  </div>
</div>

<!--物流状态Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">当前状态</h4>
      </div>
      <div class="modal-body">
        <div class="container" style="width:100%!important">
			<div class="box">
				<form  class="add-listing-form light-inputs">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">当前状态 :</span>
							<input name="taskDriverSelect" id="statusInput"/>
						</div> <!-- end .input-group -->
						<span class="help-block">物流状态可能会有时间差，您也可以先打电话了解一下情况哦！</span>
					</div> <!-- end .form-group -->
				</form>
			</div> <!-- end .box -->
		</div> <!-- end .container -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>


<script id="selfCenterTemplate" type="text/x-dot-template">
	{{ for(var x in it) { }}
		<div class="col-sm-6">
			<div class="product">
				<img src="http://139.199.172.116:80/trans/{{=it[x].task_pic1}}" class="img-responsive">
				<div class="overlay"></div>
				<div class="content">
					<h3><a href="">{{=it[x].task_title}}</a></h3>
					<p>￥ {{=it[x].task_price}}</p>
				</div>
				<div class="product-label"><span>{{=it[x].add_time}}</span></div>
				<a data-taskId="{{=it[x].task_id}}" data-toggle="modal" data-target="#myModal" onclick="getTaskDetail(this)" class="button">查看详情</a>
			</div>
		</div>
	{{ }}}
</script>

<!-- 选择司机Template -->
<script id="selectDriverTemplate" type="text/x-dot-template">
	{{ for(var x in it) { }}
		<div class="col-sm-6">
			<div class="product">
				<img src="http://139.199.172.116:80/trans/{{=it[x].task_pic1}}" class="img-responsive">
				<div class="overlay"></div>
				<div class="content">
					<h3><a href="">{{=it[x].task_title}}</a></h3>
					<p>￥ {{=it[x].task_price}}</p>
				</div>
				<div class="product-label"><span>{{=it[x].add_time}}</span></div>
				<a data-taskId="{{=it[x].task_id}}" data-toggle="modal" data-target="#selectDriverModal" onclick="getTaskDriver(this)" class="button">选择司机</a>
			</div>
		</div>
	{{ }}}
</script>

<!-- 物流状态Template -->
<script id="statusTemplate" type="text/x-dot-template">
	{{ for(var x in it) { }}
		<div class="col-sm-6">
			<div class="product">
				<img src="http://139.199.172.116:80/trans/{{=it[x].task_pic1}}" class="img-responsive">
				<div class="overlay"></div>
				<div class="content">
					<h3><a href="">{{=it[x].task_title}}</a></h3>
					<p>￥ {{=it[x].task_price}}</p>
				</div>
				<div class="product-label"><span>{{=it[x].add_time}}</span></div>
				<a data-taskId="{{=it[x].task_id}}" data-toggle="modal" data-target="#statusModal" onclick="getTaskStatus(this)" class="button">查看物流状态</a>
			</div>
		</div>
	{{ }}}
</script>

<script  id="carTemplate" type="text/x-dot-template">
	{{ for(var x in it) { }}
	<div class="form-group">
		<input type="text" placeholder="联系方式" value="{{=it[x].driver_tel}}" disabled="true" name="name">
	</div>
	<div class="col-sm-6">
		<div class="product">
			<img src="http://139.199.172.116:80/trans{{=it[x].car_pic}}"  class="img-responsive" ><!--http:139.199.172.116:80/transport{{=it[x].task_pic1}}-->
			<div class="overlay"></div>
			<div class="content">
				<h3><a href="">{{=it[x].car_no}}</a></h3>
				<p>车长（m）:{{=it[x].car_length}}</p>
				<p>车宽（m）:{{=it[x].car_width}}</p>
				<p>载重（kg）{{=it[x].car_weight}}</p>
			</div>
		</div>
	</div>
	{{ }}}

</script>

<!-- 确认收货 Template -->
<script  id="affirmGetTemplate" type="text/x-dot-template">
	{{ for(var x in it) { }}
		<div class="col-sm-6">
			<div class="product">
				<img src="http://139.199.172.116:80/trans/{{=it[x].task_pic1}}" class="img-responsive">
				<div class="overlay"></div>
				<div class="content">
					<h3><a href="">{{=it[x].task_title}}</a></h3>
					<p>￥ {{=it[x].task_price}}</p>
				</div>
				<div class="product-label"><span>{{=it[x].add_time}}</span></div>
				<a data-taskId="{{=it[x].task_id}}" onclick="affrimGet(this)" class="button">确认收货</a>
			</div>
		</div>
	{{ }}}
</script>

<!-- 已完成 状态为6 Template -->
<script  id="doneTemplate" type="text/x-dot-template">
	{{ for(var x in it) { }}
		<div class="col-sm-6">
			<div class="product">
				<img src="http://139.199.172.116:80/trans/{{=it[x].task_pic1}}" class="img-responsive">
				<div class="overlay"></div>
				<div class="content">
					<h3><a href="">{{=it[x].task_title}}</a></h3>
					<p>￥ {{=it[x].task_price}}</p>
				</div>
				<div class="product-label"><span>{{=it[x].add_time}}</span></div>
				<a data-taskId="{{=it[x].task_id}}" data-toggle="modal" data-target="#myModal" onclick="getTaskDetail(this)" class="button">查看详情</a>
			</div>
		</div>
	{{ }}}
</script>

<script type="text/javascript">
	var driverObj;
	window.onload=function(){
		getTaskList(1);
	}

	//change选项卡
	function changeTab(el){
		var objects = $(".tab")
		for (var i = 0; i < objects.length; i++) {
			$(objects[i]).removeClass("active");
		}
		$(el).addClass("active");
		var tabId = $(el).attr("data-tab");
		document.getElementById("selfCenterContainer").innerHTML = "加载中";
		getTaskList(tabId);
		
	}

	function getTaskList(tabId){
		$.ajax({
			url:"/trans/index.php/home/owner_self_center/getMyTask?tabId="+tabId,
			method:"POST",
			dataType:"json",
			success:function(res){
				if (tabId == 1) {
					//全部任务
					var selfCenterTemplate = doT.template(document.getElementById("selfCenterTemplate").innerHTML);
					document.getElementById("selfCenterContainer").innerHTML = selfCenterTemplate(res);
				}else if (tabId == 2) {
					//选择司机
					var selectDriverTemplate = doT.template(document.getElementById("selectDriverTemplate").innerHTML);
					document.getElementById("selfCenterContainer").innerHTML = selectDriverTemplate(res);
				}else if (tabId == 3) {
					//查看物流状态
					var statusTemplate = doT.template(document.getElementById("statusTemplate").innerHTML);
					document.getElementById("selfCenterContainer").innerHTML = statusTemplate(res);
				}else if (tabId == 4) {
					var affirmGetTemplate = doT.template(document.getElementById("affirmGetTemplate").innerHTML);
					document.getElementById("selfCenterContainer").innerHTML = affirmGetTemplate(res);
				}else if (tabId == 5) {
					var doneTemplate = doT.template(document.getElementById("doneTemplate").innerHTML);
					document.getElementById("selfCenterContainer").innerHTML = doneTemplate(res);
				}

			}
		})
	}

	//获取任务详情
	function getTaskDetail(el){
		var id = $(el).attr("data-taskId");
		if (!id) {
			alert("出错了！");
			return ;
		}
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

	//获取当前任务的报名司机
	function getTaskDriver(el){
		$("#affirmCarry").attr("data-taskId",'')
		$("#taskDriverSelect").html("")
		var id = $(el).attr("data-taskId");
		if (!id) {
			alert("出错了！");
			return ;
		}
		$("#affirmCarry").attr("data-taskId",id)
		$.ajax({
           url:"getTaskDriver?taskId="+id,
           type:"GET",
           dataType:"JSON",
           success:function(data){
           		if (data.length==0) {
           			swal({ 
					  title: "当前运输还没有司机报名！", 
					  text: "", 
					  type: "warning",
					  showCancelButton: false, 
					  confirmButtonColor: "#DD6B55",
					  confirmButtonText: "确定", 
					  closeOnConfirm: true, 
					},
					function(isConfirm){ 
					  if (isConfirm) { 
					    	$("#selectDriverModal").modal('hide');
					  } 
					});
           			return ;
           		}
           		var option='';
           		driverObj = data;
	       		for(var i in data){
	       			option +="<option value='"+data[i]["driver_id"]+"' data-index='"+i+"'>"+data[i]["driver_name"]+"</option>"
	       		}
	       		var obj = new Array();
				obj[0] = driverObj[0]
	       		var carTemplate = doT.template(document.getElementById("carTemplate").innerHTML);
				document.getElementById("driverCarContainer").innerHTML = carTemplate(obj);
                $("#taskDriverSelect").html(option)
               
           }      
   		});
	}

	//切换司机相对应的联系方式及所报名的车辆
	function changeDriver(el){
		var index = $("#taskDriverSelect option:selected").attr("data-index")
		console.log(driverObj[index])
		//选择司机
		var obj = new Array();
		obj[0] = driverObj[index]
		console.log(obj)
		var carTemplate = doT.template(document.getElementById("carTemplate").innerHTML);
		document.getElementById("driverCarContainer").innerHTML = carTemplate(obj);
	}

	//为某个任务添加司机
	function affirmDriver(el){
		var taskId = $("#affirmCarry").attr("data-taskId");
		var driverId = $("#taskDriverSelect").val();
		if (!taskId) {
			alert("出错了！");
			return ;
		}
		if (!driverId) {
			alert("您还没有选择司机");
			return ;
		}
		swal({ 
		  	title: "提示", 
		  	text: "您确定要承运嘛？", 
		  	type: "info", 
		  	showCancelButton: true, 
		  	closeOnConfirm: true,
		},
		function(res){ 
			if (res == true) {
				$.ajax({
		           url:"affirmDriver?taskId="+taskId+"&driverId="+driverId,
		           type:"GET",
		           dataType:"text",
		           success:function(data){
		           		if (data == "success") {
		           			swal({ 
								  title: "选择司机成功！", 
								  text: "", 
								  type: "success",
								  showCancelButton: false, 
								  confirmButtonColor: "#DD6B55",
								  confirmButtonText: "确定", 
								  closeOnConfirm: true, 
								},
								function(isConfirm){ 
								  if (isConfirm) { 
								    	location.reload() 
								  } 
								});
		  				}else if (data == "haveAffirm") {
							alert("您已为该次运输选择了司机！")
		  				}else if(data == "fail"){
		           			alert("选择司机，请重试！")
		  				}
		  				else if (data == "nologinIn"){
		  					alert("您还未登录！")
		  				}
		               
		           }      
		   		});
		  	}else{
		  		swal.close();
		  	}
		});
		
	}

	function getTaskStatus(el){
		$("#statusInput").val("")
		var id = $(el).attr("data-taskId");
		if (!id) {
			alert("出错了！");
			return ;
		}
		$.ajax({
           url:"getTaskStatus?taskId="+id,
           type:"GET",
           dataType:"JSON",
           success:function(data){
           		var html;
           		switch(data[0]["status"]){
           			case "1": 
           				html = "司机待发货";
           				break;
           			case "3": 
           				html = "运输中";
           				break;
           			case "4": 
           				html = "已完成";
           				break;
           			case "5": 
           				html = "已删除";
           				break; 
           		}
           		console.log(html)
           		$("#statusInput").val(html)
               
           }      
   		});
	}

	function affrimGet(el){
		var taskId = $(el).attr("data-taskId");
		swal({ 
		  title: "请输入您对司机的评价",
		  text: "<input type='text' id='commentInput' placeholder='您的每一次评论都可以为您带来更好的服务' style='text-align:center;border:1px solid #f7f7f7'>", 
		  html: true, 
		  type: "info", 
		  showCancelButton: false, 
		  closeOnConfirm: false,
		},function(res){ 
			  if (res == true) { 
			  		var comment = $("#commentInput").val()
			    	$.ajax({
			           url:"affirmGet?taskId="+taskId+"&comment="+comment,
			           type:"GET",
			           dataType:"text",
			           success:function(data){
			           		if (data == "success") {
			           			swal({ 
								  title: "收货成功，薪金已帮您打至司机账户！", 
								  text: "", 
								  type: "success",
								  showCancelButton: false, 
								  confirmButtonColor: "#DD6B55",
								  confirmButtonText: "确定", 
								  closeOnConfirm: true, 
								},
								function(isConfirm){ 
								  if (isConfirm) { 
								    	location.reload() 
								  } 
								});
			  				}else if (data == "haveAffirm") {
								alert("您已为该次运输选择了司机！")
			  				}else if(data == "fail"){
			           			alert("收货失败，请重试！")
			  				}
			  				else if (data == "nologinIn"){
			  					alert("您还未登录！")
			  				}
			               
			           }      
			   		});
			  } 
		});
	}
</script>
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
			<form name="addCarForm" enctype="Multipart/form-data" action="/trans/index.php/home/owner_self_center/addCar" method="post" id="addCarForm" class="add-listing-form light-inputs">
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