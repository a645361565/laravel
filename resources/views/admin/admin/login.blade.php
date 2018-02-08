<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('admins')}}/style/css/ch-ui.admin.css">
	<link rel="stylesheet" href="{{asset('admins')}}/sstyle/font/css/font-awesome.min.css">
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h2>欢迎使用XX管理平台</h2>
		<div class="form" style="width:248px;">
			@if(count($errors)>0)
				@foreach($errors->all() as $error)
					<p style="color:red;text-align: left;">{{$error}}</p>
				@endforeach
			@endif
			<form action="{{url('admin/login_check')}}" method="post">
				{{csrf_field()}}
				<ul>
					<li>
					<input type="text" name="username" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="password" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
                    <li>
						<input type="text" class="code" name="code"/>
						<span><i class="fa fa-check-square-o"></i></span>
						<img src="{{captcha_src()}}" id="showcaptcha" style="cursor: pointer;">
					</li>
					<li>
						<input type="checkbox" name="remember" id="online" value="1">
						<label for="remember">请保留我这次的登录信息。</label>
					</li>
					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
			</form>
			<p><a href="#">返回首页</a> &copy; 2016 Powered by <a href="http://www.abc.com" target="_blank">http://www.abc.com</a></p>
		</div>
	</div>
</body>
<script src="{{asset('admins')}}/style/js/jquery.js"></script>
<script type="text/javascript">
	$(function () {
		$('#showcaptcha').click(function () {
			$(this).attr('src','{{captcha_src()}}/'+Math.random());
		});
	});
</script>
</html>