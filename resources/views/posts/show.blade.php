@extends('layout')

@section('title','| Chi tiết bài viết')
<header class="intro-header" style="background-image: url('/img/post-bg.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="post-heading">
					<h1>{{ $post->title }}</h1>
					<h2 class="subheading">Problems look mighty small from 150 miles up</h2>
					<span class="meta">Posted by 
						<a href="#">Admin</a>
						{{ date(' G:i d/m/Y',strtotime($post->created_at))}}</span>
					</div>
				</div>
			</div>
		</div>
	</header>
	@section('content')
	<p>{{ $post->body }}</p>
	@stop
