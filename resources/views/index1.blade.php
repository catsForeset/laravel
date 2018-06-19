<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index1</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
	@foreach($data as $key=>$value)
		<h1>
			<span>{{$value->id}}</span>
            <span>{{$value->name}}</span>
            <span>{{$value->pass}}</span>
            @if($value->status==0)
            	<span>禁用</span>
            @elseif($value->status==10)
            	<span>正常</span>
            @endif
            <span>{{$value->time}}</span>

        </h1>
	@endforeach
</body>
</html>
