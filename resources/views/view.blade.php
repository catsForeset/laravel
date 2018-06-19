<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>view</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
    {{--<div>view {{$name}}</div>--}}
    {{--<div>share {{$key}}</div>--}}
{{--<div>response two params in with():{{$a}},{{$b}}</div>--}}

{{--        <div>{{$name}},{{$b}}</div>--}}
    {{--等价于--}}
    <div>
        <?php //echo $name; ?>
        <?php //echo $b ?>
    </div>


    {{substr(strtoupper(md5($pass)),10,2)}}
    <hr>
    {{--数据不存在，使用默认值--}}
    {{$pass1 or '数据不存在'}}
    <hr>
    {{--输出html会转化为实体,要用{{!!  !!}}界定符--}}
    {{$html}}
    {!! $html !!}
</body>
</html>
