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
				<form action="/trans/index.php/Home/AddTask/register" method="POST" ><!-- <?php echo U('Login/regiser');?> -->
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

<script src="/trans/Public/lib/ckeditor/ckeditor.js"></script>
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
						<form action="/trans/index.php/Home/AddTask/addTaskFun" method="post" enctype="multipart/form-data" class="add-listing-form light-inputs">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">任务名称 :</span>
									<input type="text" name="task_title" placeholder="例如：运送一匹建材">
								</div> <!-- end .input-group -->
							</div> <!-- end .form-group -->
							<div class="form-group">              
							    <!-- <textarea name="task_describe" rows="4"></textarea> -->
							    <textarea id="TextArea1" name="task_describe"  placeholder="任务描述，越详细越好" cols="20" rows="2" class="ckeditor"></textarea>
							</div> <!-- end .form-group -->
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">选择分类 :</span>
									<select name="task_type">	    	
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
									<select name="task_start">	    	
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
									<select name="task_end">	    	
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
									<input type="text" name="task_require" placeholder="例如：易燃易爆需要小心、易碎物品轻拿轻放等。">
								</div> <!-- end .input-group -->
								<span class="help-block">可以根据到货后检查货物质量对司机进行申诉</span>
							</div> <!-- end .form-group -->
							<div class="form-group add_photo">
								<button onclick="getElementById('file').click()" type="button" class="button">上传图片</button>
								<input type="file" multiple="multiple" id="file" name='task_pic[]' style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" onchange="preview(this)" /><!--原来按钮的样式-->
								<span>4 Photos ( 570px × 400px)</span>
							</div> <!-- end .text-left .add_photo -->
							<div class="form-group photo_thumbnails">
								<img class="photo_preview_box" style="vertical-align:top;" id="preview1"></img>
								<img class="photo_preview_box" style="vertical-align:top;" id="preview2"></img>
								<img class="photo_preview_box" style="vertical-align:top;" id="preview3"></img>
								<img class="photo_preview_box" style="vertical-align:top;" id="preview4"></img>
							</div> <!-- end .form-group .photo_thumbnails -->
							<div class="form-group listing-hours">
								<div class="row">
									<div class="col-sm-4">
										<div class="input-group">
											<span class="input-group-addon">拉货日期 :</span>
											<input type="text" name="task_time" id="time" placeholder="2018-03-15">
										</div> <!-- end .input-group -->
									</div> <!-- end .col-sm-4 -->
									<div class="col-sm-4">
										<div class="input-group">
											<span class="input-group-addon">薪金 :</span>
											<input type="number" name="task_price">
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
							<div class="submit"><button type="submit" class="button" onclick="beforeSubmit()">提交任务</button></div>
						</form>
					</div> <!-- end .box -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
<script type="text/javascript">
	window.onload=function(){
		CKEDITOR.replace('TextArea1');
		$("#time").datetimepicker({
            format: 'yyyy-mm',
            minView:'month',
            language: 'zh-CN',
            autoclose:true,

        }).on("click",function(){
           $("#time").datetimepicker("setEndDate",$("#time").val())
        });
	}
	function preview(el){
		for (var i = 0; i < 4; i++) {
			$("#preview"+(i+1)).attr("src","");
		}
		var fileData = el.files
		
		if (fileData.length ==1) {
			var reader = new FileReader();   
	        reader.readAsDataURL(fileData[0]);   
	        reader.onload = function(e){   
	        	$("#preview1").attr("src",this.result);
	        	
   			}   

		}else if(fileData.length == 2){
			var reader1 = new FileReader();   
	        reader1.readAsDataURL(fileData[0]);   
	        reader1.onload = function(e){   
	        	$("#preview1").attr("src",this.result);
	        	
   			}  

   			var reader2 = new FileReader();   
	        reader2.readAsDataURL(fileData[1]);   
	        reader2.onload = function(e){   
	        	$("#preview2").attr("src",this.result);
	        	
   			}  


		}else if(fileData.length == 3){
			var reader1 = new FileReader();   
	        reader1.readAsDataURL(fileData[0]);   
	        reader1.onload = function(e){   
	        	$("#preview1").attr("src",this.result);
	        	
   			}  

   			var reader2 = new FileReader();   
	        reader2.readAsDataURL(fileData[1]);   
	        reader2.onload = function(e){   
	        	$("#preview2").attr("src",this.result);
	        	
   			}  

   			var reader3 = new FileReader();   
	        reader3.readAsDataURL(fileData[2]);   
	        reader3.onload = function(e){   
	        	$("#preview3").attr("src",this.result);
	        	
   			}

		}else if(fileData.length == 4){
			var reader1 = new FileReader();   
	        reader1.readAsDataURL(fileData[0]);   
	        reader1.onload = function(e){   
	        	$("#preview1").attr("src",this.result);
	        	
   			}  

   			var reader2 = new FileReader();   
	        reader2.readAsDataURL(fileData[1]);   
	        reader2.onload = function(e){   
	        	$("#preview2").attr("src",this.result);
	        	
   			}  

   			var reader3 = new FileReader();   
	        reader3.readAsDataURL(fileData[2]);   
	        reader3.onload = function(e){   
	        	$("#preview3").attr("src",this.result);
	        	
   			}

   			var reader4 = new FileReader();   
	        reader4.readAsDataURL(fileData[3]);   
	        reader4.onload = function(e){   
	        	$("#preview4").attr("src",this.result);
	        	
   			}
		}

        
    }
	function getObjectURL(file) {
	    var url = new Array() ; 
	    if (window.createObjectURL!=undefined) { // basic
	        url = window.createObjectURL(file) ;
	    } else if (window.URL!=undefined) { // mozilla(firefox)
	        url = window.URL.createObjectURL(file) ;
	    } else if (window.webkitURL!=undefined) { // webkit or chrome
	        url = window.webkitURL.createObjectURL(file) ;
	    }
	    return url ;
	}

	function beforeSubmit(){
		for (instance in CKEDITOR.instances)
            CKEDITOR.instances[instance].updateElement();
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