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
    <a href="{{ route('single.blog',$pt->slug) }}">
        <h2 class="post-title">
            {{ $pt->title }}
        </h2>
        <h3 class="post-subtitle">
            {{ substr($pt->body ,0,150)}} {{ strlen($pt->body) > 150 ? "..." : ""}}
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