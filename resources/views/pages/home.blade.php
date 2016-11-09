@extends('layout')
@section('title','| Blog cá nhân của Thâm David')

@section('pageTitle')
    Blog cá nhân của Thâm David
    <br><span class="knowledge">< .net, jquery, json, php, sql server ...  /></span>
@stop
@include('partials._siteheading')
@section('content')

@foreach($post->all() as $pt)
    <div class="post-preview">
    <a href="/posts/{{$pt->id}}">
        <h2 class="post-title">
            {{ $pt->title }}
        </h2>
        <h3 class="post-subtitle">
            {{ $pt->body }}
        </h3>
    </a>
    <p class="post-meta">Đăng bởi 
    <a href="#"> Admin</a> vào lúc {{ date(' G:i d/m/Y',strtotime($pt->created_at))}}</p>
</div>
<hr>
@endforeach

<ul class="paginationn">
        {!! $post->links(); !!}
</ul>
@stop