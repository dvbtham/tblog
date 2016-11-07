@extends('layout')

@section('title','| Chi tiết bài viết')
@section('pageTitle')
    {{ $post->title }}
@stop
@section('content')
    <p>{{ $post->body }}</p>
@stop
