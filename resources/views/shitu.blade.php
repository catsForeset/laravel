<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>shitu</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
	@if($weight>100)
	<h1>fat</h1>
	@elseif($weight>=80 && $weight<=100)
	<h1>middle</h1>
	@else
	<h1>slim</h1>
	@endif
	<hr>
	@for($i=0;$i<=10;$i++)
		<h2>{{$i}}</h2>
	@endfor
</body>
</html>
