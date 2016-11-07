@extends('layout')
@section('title','| Blog cá nhân của Thâm David')
@section('pageTitle','Blog cá nhân của Thâm David')

@section('content')

@foreach($post as $pt)
    <div class="post-preview">
    <a href="/posts/{{$pt->id}}">
        <h2 class="post-title">
            {{ $pt->title }}
        </h2>
    </a>
    <p class="post-meta">Đăng bởi 
    <a href="#"> Admin</a> vào lúc {{ date(' G:i d/m/Y',strtotime($pt->created_at))}}</p>
</div>
<hr>
@endforeach

<ul class="pager">
    <li class="next">
        <a href="#">Bài viết cũ hơn &rarr;</a>
    </li>
</ul>
@stop