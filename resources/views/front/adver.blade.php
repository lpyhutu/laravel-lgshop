<link rel="stylesheet" href="{{ asset('css/front/gonggao.css') }}">
@extends('layouts/frontMOuldTwo'){{--调用模板--}}
@section('title',"乐GO公告")
@section('main')
<!-- 标题 -->
<h3>{{$ob[0]->title}}</h3>
<!-- 内容 -->
<p>{{$ob[0]->content}}</p>
@endsection