<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>longin</title>
    </head>
    <body>
        <form action="check" method="post">
            <p>
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                User:
                <input type="text" name="user"/>
            </p>
            <p>
                Pass:
                <input type="password" name="pass"/>
            </p>
            <p>
                <input type="submit" value="提交" />
                <input type="reset" value="重置" />
            </p>
        </form>
    </body>
</html>
