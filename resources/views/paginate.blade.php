@include('frame.frame')
<html>
<head>

    <meta charset="utf-8">
</head>
<body>
<fieldset class="layui-elem-field">
    <div>
        <div class="layui-field-box layui-form">
            <table class="layui-table admin-table">
                {{--<tr>--}}
                    {{--<th>name</th>--}}
                    {{--<th>age</th>--}}
                {{--</tr>--}}
                {{--@foreach($user as $item)--}}
                    {{--<tr>--}}
                        {{--<td>{{@$item->name}}</td>--}}
                        {{--<td>{{@$item->age}}</td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                <tr>
                    <th>orderno</th>
                    <th>price</th>
                </tr>
                @foreach($order as $item)
                    <tr>
                        <td>{{@$item->orderno}}</td>
                        <td>{{@$item->price}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div id="paged" class="page">
{{--        {{$order->appends(['price'=>99])->links()}}--}}
{{--        {{$order->appends(['price'=>99])->render()}}--}}

        {{ $order->fragment('foo')->links() }}
    </div>
</fieldset>
</body>
</html>