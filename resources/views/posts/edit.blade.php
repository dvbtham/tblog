@extends('layout')
@section('stylesheet')
   {!! Html::style("/css/parsley.css")!!}
@stop

@section('title','| Cập nhật bài viết')
@section('pageTitle')
    {{ $post->title }}
@stop
@include('partials._siteheading')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            {!! Form::model($post,['route' => ['posts.update',$post->id], 'method'=>'put']) !!}

                {{Form::label('title','Tiêu đề: ')}}
                {{Form::text('title',null,['class'=>'form-control','placeholder'=>'nhập tiêu đề','required' =>'','maxlength'=>'250','minlength'=>'6'])}}

                {{Form::label('slug','Slug: ')}}
                {{Form::text('slug',null,['class'=>'form-control','placeholder'=>'slug','required' =>'','maxlength'=>'250','minlength'=>'6'])}}

                {{Form::label('body','Nội dung: ')}}
                {{Form::textarea('body',null,['class'=>'form-control',
                'placeholder' =>'nhập nội dung bài viết',
                'required' =>'Bạn bắt buộc phải nhập nội dung.','minlength'=>'6'])}}
                <br>
                {{Form::submit('Hoàn tất',['class'=>'btn btn-success'])}}
                {{Html::linkRoute('posts.index','Hủy',null,['class'=>'btn btn-danger'])}}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('jquery')
    {!! Html::script("/js/parsley.min.js")!!}
@stop