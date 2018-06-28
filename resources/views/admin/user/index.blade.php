{{--继承adminmuban.admin视图--}}
@extends('adminmuban.admin')
{{--标题部分--}}
@section('title','index')
{{--主部分--}}
@section('main')
<h1>后台admin</h1>
<a type="button" href="/admin/create">添加</a>
<a type="button" href="/admin/edit">修改</a>
@endsection

@component('adminmuban.alert')
    <strong>Whoops!</strong> Something went wrong!
@endcomponent