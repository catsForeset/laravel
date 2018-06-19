<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>注册</title>
    </head>
    <body>
        <?php
                if(is_object($errors)){

                }else{
                    echo "<h1>$errors</h1>";
                }
        ?>
        <form action="insert" method="post">
            <p>
                {{csrf_field()}}
                Name:
                <input type="text" name="name" value="{{old('name')}}"/>
            </p>
            <p>
                Pass:
                <input type="password" name="pass"/>
            </p>
            <p>
                repass:
                <input type="password" name="repass"/>
            </p>
            <p>
                tel:
                <input type="text" name="tel" value="{{old('tel')}}"/>
            </p>
            <p>
                email:
                <input type="text" name="email" value="{{old('email')}}"/>
            </p>
            <p>
                <input type="submit" value="提交" />
                <input type="reset" value="重置" />
            </p>
        </form>
    </body>
</html>
