<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>validate</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style>
            .error_label{
                color: red;
            }
        </style>
    </head>
    <body>
    {{--@if($errors->any())--}}
        {{--<div class="alert alert-danger">--}}
            {{--<ul>--}}
                {{--@foreach($errors->all() as $error)--}}
                    {{--<li>{{$error}}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--@endif--}}

        <form action="validate/post" method="post">
            {{csrf_field()}}
            <p>
                name:
                <input type="text" name="name">
                <label class="error_label">{{$errors->first('name')}}</label>
            </p>
            <p>
                pass:
                <input type="password" name="pass">
                <label class="error_label">{{$errors->first('pass')}}</label>
            </p>
            <p>
                email:
                <input type="text" name="email">
                <label class="error_label">{{$errors->first('email')}}</label>
            </p>
            <p>
                tel:
                <input type="text" name="tel">
                <label class="error_label">{{$errors->first('tel')}}</label>
            </p>
            <p>
                time_confirmation:
                <input type="text" name="time_confirmation">
                <label class="error_label">{{$errors->first('time_confirmation')}}</label>
            </p>
            <p>
                time:
                <input type="text" name="time">
                <label class="error_label">{{$errors->first('time')}}</label>
            </p>
            <p>
                end_time:
                <input type="text" name="end_time">
                <label class="error_label">{{$errors->first('end_time')}}</label>
            </p>
            <p>
                <input type="submit" value="提交">
            </p>
        </form>
    </body>
</html>
