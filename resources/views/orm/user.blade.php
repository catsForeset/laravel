<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<center>
    <form action="/" method="post">
        {{csrf_field()}}
        <input type="text" name="search" />
        <input type="submit" name="submit" value="搜索" />
    </form>
</center>
<table border="1" width="800px" align="center">
    <th>id</th>
    <th>name</th>
    <th>pass</th>
    <th>status</th>
    <th>time</th>
    @foreach($data as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->pass}}</td>
            <td>{{$value->status}}</td>
            <td>{{$value->created_at}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>