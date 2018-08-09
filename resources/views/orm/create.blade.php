继承adminmuban.admin视图
@extends('adminmuban.admin')
标题部分
@section('title','orm create')
主部分
@section('main')
    <form method="post" action="/orm/user/create">
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <p>
            姓名：<input name="name" type="text">
        </p>
        <p>
            年龄：<input name="age" type="text">
        </p>
        <p>
            密码：<input name="pass" type="password">
        </p>
        <p>
            类型：
            <select name="status">
                <option value="1">正常</option>
                <option value="0">禁用</option>
            </select>
        </p>
        <p>
            <input type="submit" value="提交">
        </p>
    </form>
@endsection