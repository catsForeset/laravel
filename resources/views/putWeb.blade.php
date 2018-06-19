<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>put</title>
    </head>
    <body>
        <form action="put" method="put">
            <p>
                {{csrf_field()}}
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
