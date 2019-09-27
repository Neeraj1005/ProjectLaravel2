<!DOCTYPE html>
<html>
<head>
	<title>Page Name - @yield('title')</title>
</head>
<body>

	@section('header')
	<div class="header">
		<h1>Header Part</h1>
	</div>
	@show

	<div class="content">
		@yield('content')		
	</div>
	
	@section('footer')
	<div class="footer">
		<h1>footer part</h1>
	</div>
	@show

</body>
<style type="">
	.header{
	background-color: antiquewhite;
	padding: 20px;
	text-align: center;
	}
	.content{
	height: 200px;
	background-color: #2c983c7a;
	padding: 20px;

	}
	.footer{
		background-color: antiquewhite;
	padding: 20px;
	text-align: center;
	position: 'center'
	bottom: 0
	}
	body{
		margin:0
	}
</style>
</html>