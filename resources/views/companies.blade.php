<!DOCTYPE html>
<html>
<head>
	<title>Paginate</title>
	<style type="text/css">
		.page-item{
			display: inline-block;
			padding: 10px;
		}
	</style>
</head>
<body>
	<div>
		@foreach($data as $item)
		<li>{{$item->name}}</li>
		@endforeach
	</div>
	<div>
		{{$data}}
	</div>
</body>
</html>