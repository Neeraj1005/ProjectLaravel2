<!DOCTYPE html>
<html>
<head>
	<title>blade engine</title>
</head>
<body>
	<div>
		<!--{{$data['name']}}-->
		<!--@if($data['name']=='john')
		Hi! this is john carter
		@elseif($data['name']=='neo')
		Hi! this mssg from matrix
		@else
		Go to HEll!
		@endif-->
		<div>
			@foreach($data as $item)
			<!--<li>{{$item}}</li>-->
			<li>{!!$item!!}</li>
			@endforeach
		</div>
	</div>


<!--for json show this will get you in inspect in your browser mode-->
<script>
	var a = @json($data);
	console.log('php code in js',a)
</script>


</body>
</html>