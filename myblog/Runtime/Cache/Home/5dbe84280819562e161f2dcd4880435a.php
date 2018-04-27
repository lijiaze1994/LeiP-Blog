<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>用户登录中心</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/Public/home/css/my.css?1">
</head>
<body>
	<div class="container">
		<div class="con">
			<div class="center">
				<form action="/Login/deallogin" method="post" >
					<input type="hidden" name="lasturl" value="<?php echo ($_SERVER['HTTP_REFERER']); ?>">
					<div class="form-header">
						<h2>用户登录中心</h2>
						<p>User Login Center</p>
					</div>
					<div class="form-text">
						<div class="form-ground">
							<input class="inp" type="text" name="username" placeholder="用户名"  >
						</div>
						<div class="form-ground">
							<input class="inp" type="password" name="password" placeholder="密码"  >
						</div>
						<div class="form-ground cord">
							<input class="y inp" type="text" name="verifycode" placeholder="验证码"  >
							<img class="code" src="/code?" onclick="this.src = this.src + Math.random();">
						</div>
						<div class="form-ground form-btn">
							<button class="btn" type="submit">立即登录</button>
						</div>
					</div>
				</form>
				<a class="a1" href="/Home/dealregister" style="margin-top:0px;">没有账号?立即注册</a>			
			</div>
		</div>
	</div>
</body>
</html>