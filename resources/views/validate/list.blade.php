<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>validate</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="validate/post" method="post">
            {{csrf_field()}}
            <p>
                name:
                <input type="text" name="name">
            </p>
            <p>
                pass:
                <input type="password" name="pass">
            </p>
            <p>
                email:
                <input type="text" name="email">
            </p>
            <p>
                tel:
                <input type="text" name="tel">
            </p>
            <p>
                <input type="submit" value="提交">
            </p>
        </form>
    </body>
</html>
