<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN">
<head>
	<title>郑轻考试管理系统</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css"/>
	<link href="/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
	<!---strat-slider-->
	<link rel="stylesheet" type="text/css" href="/Public/css/slider.css" />
	<link rel="stylesheet" href="/Public/Font-Awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="/Public/css/build.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/css/default.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/Customs.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/css/font-awesome.min.css"/>
	<link rel="icon" href="/favicon.ico">
</head>
<script>
    function two_char(n) {
        return n >= 10 ? n : "0" + n;
    }
    function time_fun() {
        var sec=0;
        setInterval(function () {
            sec++;
            document.getElementById("time").value = sec;
            var date = new Date(0, 0)
            date.setSeconds(sec);
            var h = date.getHours(), m = date.getMinutes(), s = date.getSeconds();
            document.getElementById("mytime").innerText = two_char(h) + ":" + two_char(m) + ":" + two_char(s);
        }, 1000);
    }
</script>
<body onload="<?php echo ($time); ?>">
	<!-- start header -->
	<div class="header_bg">
		<div class="wrap">
			<div class="header">
				<div class="logo">
					<a href="<?php echo U('Home/Index/index');?>"><img src="/Public/images/logo.png" alt=""/> </a>
				</div>
				<div class="social">
					<ul>
						<?php if(isset($_SESSION['logineduser'])): ?><li><a href="<?php echo U('');?>">欢迎你,<?php echo (session('logineduser')); ?>!</a></li>
							<li><a href="/Home/User/logout">注销</a></li>
							<?php else: ?>
							<li class="social-icons"><a href="#" data-toggle="modal" data-target="#login_register"></a></li><?php endif; ?>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<!-- start header -->
	<div class="header_btm">
		<div class="wrap">
			<div class="header_sub">
				<div class="h_menu">
					<ul>
						<li class="<?php echo ($ac_index); ?>"><a href="<?php echo U('Home/Index/index');?>">主页</a></li>
						<li class="<?php echo ($ac_about); ?>"><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
						<li class="<?php echo ($ac_custom); ?>"><a href="<?php echo U('Home/Index/custom');?>">客户</a></li>
						<li class="<?php echo ($ac_questionbank); ?>"><a href="<?php echo U('Home/Index/questionbank');?>">题库</a></li>
						<li class="<?php echo ($ac_resultbank); ?>"><a href="<?php echo U('Home/Index/resultbank');?>">结果</a></li>
						<li class="<?php echo ($ac_contact); ?>"><a href="<?php echo U('Home/Index/contact');?>">联系我们</a></li>
					</ul>
				</div>
				<div class="h_search">
					<form>
						<input type="text" value="" placeholder="search something...">
						<input type="submit" value="">
					</form>
				</div>
				<div class="menu">
					<ul>
						<li class="<?php echo ($ac_index); ?>"><a href="<?php echo U('Home/Index/index');?>">主页</a></li>
						<li class="<?php echo ($ac_about); ?>"><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
						<li class="<?php echo ($ac_custom); ?>"><a href="<?php echo U('Home/Index/custom');?>">客户</a></li>
						<li class="<?php echo ($ac_questionbank); ?>"><a href="<?php echo U('Home/Index/questionbank');?>">题库</a></li>
						<li class="<?php echo ($ac_contact); ?>"><a href="<?php echo U('Home/Index/contact');?>">联系我们</a></li>
					</ul>
				</div>
				<div class="search">
					<form action="/iphone/search.html">
						<input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text">
					</form>
				</div>
				<div class="sub-head">
					<ul>
						<li><a href="#" id="menu">Menu  <span></span></a></li>
						<li><a href="#" id="search">Search <span></span></a></li>
					</ul>
					<div class="clear"></div>
				</div>
				<script type="text/javascript">
					$(".menu, .search").hide();
					$("#menu").click(function(){
						$(".menu").toggle();
						$(".search").hide();
						$("#search").removeClass("active");
						$("#menu").toggleClass("active");
					});
					$("#search").click(function(){
						$(".search").toggle();
						$(".menu").hide();
						$("#menu").removeClass("active");
						$("#search").toggleClass("active");
						$(".text").focus();
					});
				</script>
				<script type="text/javascript" src="/Public/js/script.js"></script>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<!-- start slider -->
		<!-- start top_bg -->
	<div class="top_bg">
		<div class="wrap">
			<div class="top">
				<h2>contact us</h2>
			</div>
		</div>
	</div>
	<!-- start main -->
	<div class="wrap">
		<div class="main">
			<div class="contact">
				<div id="map-canvas"></div>
			</div>
			<div class="contact-form">
				<form method="post" action="contact-post.html">
					<div>
						<span><label>Name</label></span>
						<span><input name="userName" type="text" class="textbox"></span>
					</div>
					<div>
						<span><label>E-mail</label></span>
						<span><input name="userEmail" type="text" class="textbox"></span>
					</div>
					<div>
						<span><label>Mobile</label></span>
						<span><input name="userPhone" type="text" class="textbox"></span>
					</div>
					<div>
						<span><label>Subject</label></span>
						<span><textarea name="userMsg"> </textarea></span>
					</div>
					<div>
						<span><input type="submit" class="" value="Submit us"></span>
					</div>
				</form>
			</div>	
		</div>
	</div>
	<!-- start footer -->
	<div class="footer_bg">
		<div class="wrap">
			<div class="footer">
				<!-- start span_of_4 -->
				<div class="span_of_4">
					<div class="span1_of_4">
						<h4>本项目简介</h4>
						<p>此项目是由老师委托，并由个人完成。开始时间为</p>
						<ul class="f_nav1">
							<li class="timer"><a href="#">10-July 2016 </a></li>
						</ul>
						<p class="top">预计结束项目时间为</p>
						<ul class="f_nav1">
							<li class="timer"><a href="#">25-August 2016 </a></li>
						</ul>
					</div>
					<div class="span1_of_4">
						<h4>技术关键</h4>
						<p>本项目依旧采用<big>PHP</big>语言进行编写，同时建立在<big>Thinkphp</big>框架下进行的开发，在保证开发速度快的同时，避免一些常识性错误。 同时，编写好的网站源代码都依托于强大的 <big>Nginx</big>服务器软件上与<big>Mysql</big>世界用户量第一的数据库软件，但最核心的还是托付于开源的<big>linux</big>系统，这里采用的ubuntu14.04 LTS。</p>
					</div>
					<div class="span1_of_4">
						<h4>关于我们</h4>
						<p class="btm">大学生科技创业中心成立于2002年，是计算机与通信工程学院在郑州轻工业学院率先推出的大学生科技创业团队。我们通过技术指导、培训，参加项目建设使每位成员的实践能力、工作态度、合作精神、科技创新意识、激情创业能力等得到全面提高。</p>
					</div>
					<div class="span1_of_4">
						<h4>get in touch</h4>
						<p class="btm"></p>
						<p class="btm1 pin">zhoushan Zhengjiang, zh-CN</p>
						<p class="btm1 mail"><a href="mailto:zhangchao564265135@hotmail.com">info(at)zhangchao564265135@hotmail.com </a></p>
						<p class="call">188-5839-5625</p>
						<p style="padding-left:30px;"><a href="<?php echo U('Dashboard/Index/index');?>">进入后台</a></p>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- start footer -->
	<div class="footer_bg1">
		<div class="wrap">
			<div class="footer1">
				<!-- scroll_top_btn -->
				<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
				<!--end scroll_top_btn -->
				<div class="social">
					<ul>
						<?php if(isset($_SESSION['logineduser'])): ?><li><a href="<?php echo U('');?>">欢迎你,<?php echo (session('logineduser')); ?>!</a></li>
							<li><a href="/Home/User/logout">注销</a></li>
							<?php else: ?>
							<li class="social-icons"><a href="#" data-toggle="modal" data-target="#login_register"></a></li><?php endif; ?>
					</ul>
				</div>
				|
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="login_register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">登录</h4>
				</div>
				<div class="modal-body">
					<form role="form" action="<?php echo U('Home/User/login');?>" method="post">
						<div class="form-group">
							<input type="text" class="form-control input-lg" id="eustunum" name="ustunum" placeholder="学号">
						</div>
						<div class="form-group">
							<input type="password" class="form-control input-lg" id="eupwd" name="upwd" placeholder="密码">
						</div>
						<a href="#" class="pull-left" id="forgot-password">Forgot Your Password?</a>
						<div class="pull-right">
							<button type="submit" class="btn btn-lg btn-config">Log In</button>
						</div>
					</form>
				</div>
				<div class="modal-footer" style="border-top-color:white;"></div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="/Public/js/jquery.cslider.js"></script>
<script type="text/javascript">
	$(function() {

		$('#da-slider').cslider({
			autoplay	: true,
			bgincrement	: 450
		});

	});
</script>
<!---//strat-slider-->
<!-- start top_js_button -->
<script type="text/javascript" src="/Public/js/move-top.js"></script>
<script type="text/javascript" src="/Public/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
		});
	});
</script>
<script type="text/javascript" src="/Public/js/jquery.flexisel.js"></script>
<script type="text/javascript" src="/Public/js/jquery.autosize.min.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo1").flexisel();
		$("#flexiselDemo2").flexisel({
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint:480,
					visibleItems: 1
				},
				landscape: {
					changePoint:640,
					visibleItems: 2
				},
				tablet: {
					changePoint:768,
					visibleItems: 3
				}
			}
		});
		$("#flexiselDemo3").flexisel({
			visibleItems: 5,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint:480,
					visibleItems: 1
				},
				landscape: {
					changePoint:640,
					visibleItems: 2
				},
				tablet: {
					changePoint:768,
					visibleItems: 3
				}
			}
		});

	});
	$(document).ready(function() {
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
		};
		$().UItoTop({ easingType: 'easeOutQuart' });

	});
	jQuery(document).ready(function(){
		jQuery('img').each(function(){
			var error = false;
			if (!this.complete) {
				error = true;
			}

			if (typeof this.naturalWidth != "undefined" && this.naturalWidth == 0) {
				error = true;
			}
			if(error){
				$(this).bind('error.replaceSrc',function(){
					this.src = "/Public/images/Nopic.png";
					$(this).unbind('error.replaceSrc');
				}).trigger('load');
			}
		});
		$('textarea[class*=autosize]').autosize({append: "\n"});
		$('form.form-group').submit(function(e){
			var nullcount = 0;
			var strs = '';
			var rccount = $('p.rccount').length;
			nullcount += rccount;
			// $("[type='radio']").each(function(){
			// 	if($(this).is(':checked')) {
			// 		strs += '1';
			// 	}
			// 	else{
			// 		strs += '0';
			// 	}
			// 	strs += $(this).attr('name');
			// })
			// $("[type='checkbox']").each(function(){
			// 	if($(this).is(':checked')) {
			// 		strs += '1';
			// 	}
			// 	else{
			// 		strs += '0';
			// 	}
			// 	strs += $(this).attr('name');
			// })
			$('input:radio:checked').each(function(){
				if(!$(this).attr('checked')){
					nullcount--;
				}
			})
			$('input:checkbox:checked').each(function(){
				if(!$(this).attr('checked')){
					nullcount--;
				}
			})
			$('form.form-group input').each(function(){
				if($(this).val()==''){
					nullcount++;
				}
			});
			$('form.form-group textarea').each(function(){
				if($(this).val()==''){
					nullcount++;
				}
			});
			if(nullcount>0){
				alert('Please Input something'+nullcount+'\n'+strs);
				return false;
			}
			
		});
		// $('#formToConfirm').click(function(){
		// 	$('input').each(function(){
		// 		if($(this).val()==''){
		// 			alert('Please Input something');
		// 			return false;
		// 		}
		// 	});
		// 	$('textarea').each(function(){
		// 		if($(this).val()==''){
		// 			alert('Please Input something');
		// 			return false;
		// 		}
		// 	});
		// });
		
	});

</script>
</html>