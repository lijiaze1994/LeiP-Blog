<?php if (!defined('THINK_PATH')) exit();?><!--    //                    _ooOoo_
		//         	         o8888888o
		//			         88" . "88
		// 			         (| -_- |)
		//                    O\ = /0
		//		         _____/"---"\_____
		//		            ' \\| |// '
		//		        /  \\||| : |||//  \
		//		      /  _||||| -:- |||||-  \
		//               | | \\\ - /// | |
		//             | \_| ''\---/'' | |
		//		        \ .-\__ '-' ___/-. /
		//           ___'. .' /--.--\  '. .'___
		//	       ."" '< '.__\_<|>_/___.'  >'"".
		//	      | | : '- \'.;\ _ /';.'/ - ' : | |
		//         \  \ '-. \_ _\ /_ _ / .-' / /
		//    ===='-.____'-.__\_____/___.-'____.-'====
		//		 		      '=---='
		//    ..........................................
		//             佛祖保佑     永无BUG -->
<!DOCTYPE html>
<html>
<head>
	<title>-----</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/Public/home/css/index.css?12w25">
	<link rel="stylesheet" type="text/css" href="/Public/home/css/page.css">
</head>
<body>	
	<div class="top">
		<header>
			<div class="nav">
				<h1>Lee By HTML5 up</h1>
				<ul class="nav-ul">
					<a href="/home/articlelist"><li class="home">Home</li></a>
					<a href="#" style="color: #ffffff">
						<li class="top-li-xia">菜单
							<div class="erji">
								<ul class="erji-ul">
									<li class="sanjiao"></li>
										<a href="h5.html"><li class="erji-li erji-li1">HTML5/CSS3</li></a>
										<a href="js.html"><li class="erji-li">JS实例</li></a>
										<a href="php.html"><li class="erji-li">PHP</li></a>
										<a href="linux.html"><li class="erji-li">Linux</li></a>
										<a href="link.html"><li class="erji-li">联系</li></a> 
										<a href="about.html"><li class="erji-li erji-li6">关于我</li></a>
								</ul>
							</div>
						</li>		
					</a>
					<a href="#"><li class="top-li-btn">顶部</li></a>
					<?php if(empty($_SESSION['username'])): else: ?>
					<a href="/Login/dealLogout"><li class="top-li-btn out"><?php echo ($_SESSION['username']['username']); ?>,注销登录</li></a><?php endif; ?>
				</ul>
			</div>
		</header>
		<div class="center">
			<div class="logo"></div>
			<ul class="cen-btn">
				<?php if(empty($_SESSION['username'])): ?><a href="/Login/index"><li class="center-li-white">登录</li></a>
				<a href="about.html"><li class="center-li-more">About me</li></a><?php endif; ?>
			</ul>
		</div>
	</div>
		<section>
			<ul class="section-ul">
				<?php if(is_array($articlelist)): foreach($articlelist as $key=>$vo): ?><li class="section-li bc">
						<a href="/articledetail/<?php echo ($vo['id']); ?>">
							<div class="section-li-img">					
									<img class="scl-i" src="<?php echo ($vo['cover']); ?>">							
							</div>
						</a>
						<div class="section-li-text">
							<p>
								<h2>
									<a class="scl-ha" href="/articledetail/<?php echo ($vo['id']); ?>"><?php echo ($vo['title']); ?></a>
								</h2>
								<a class="scl-pa" href="/articledetail/<?php echo ($vo['id']); ?>"><?php echo ($vo['desc']); ?></a>
							</p>
						</div>
					</li><?php endforeach; endif; ?>			
			
			
			</ul>
			<div class="pu_page mtm" >
          		  <?php echo ($page); ?>
            </div>
		</section>
		<footer>
			<div class="footer-center">
				<h2>正在使用测试版</h2>
				<p class="ft-p">Life is fine and enjoyable, yet you must learn to enjoy your fine life.</p>
				<form  class="form"  action="/home/articlelike" method="get" name="searchForm">
					<div class="search">
						<input class="search-input" type="text" name="search" value placeholder="Search">
					</div>
					<a href="javascript:void(0);" onclick="javascript:document.searchForm.submit();">
						<div class="f-btn" >
							<p>Skip</p>
						</div>
					</a>
				</form>
			</div>
			<div class="foot-img">
				<ul>
					<a href="https://github.com/lijiaze1994" title="Github"><li class="foot-img-li1"></li></a>
					<a href="https://weibo.com/5935977551/profile?topnav=1&wvr=6&is_all=1" title="新浪微博"><li class="foot-img-li2"></li></a>
					<a href="javascript:void(0)" title="微信"><li class="foot-img-li3">
						<div class="erweima">
							<img src="/Public/home/images/weixinerweima.jpg">
						</div>
					</li></a>
					<a href="javascript:void(0)" title="联系电话"><li class="foot-img-li4"></li></a>
					<a href="http://www.renren.com/897660114/profile" title="人人"><li class="foot-img-li5"></li></a>
				</ul>
			</div>
		</footer>
</body>
</html>