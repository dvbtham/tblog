@extends('layout')
@section('stylesheet')
   {!! Html::style("/css/parsley.css")!!}
@stop

@section('title','| Tạo mới bài viết')
@section('pageTitle','Thêm mới bài viết')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            {!! Form::open(['route' => 'posts.store','data-parsley-validate' => '']) !!}

                {{Form::label('title','Tiêu đề: ')}}
                {{Form::text('title',null,['class'=>'form-control','placeholder'=>'nhập tiêu đề','required' =>'','data-parsley-maxlength'=>'250','data-parsley-minlength'=>'6'])}}

                {{Form::label('body','Nội dung: ')}}
                {{Form::textarea('body',null,['class'=>'form-control','placeholder' =>'nhập nội dung bài viết','required' =>'Bạn bắt buộc phải nhập nội dung.','data-parsley-minlength'=>'6'])}}
                <br>
                {{Form::submit('Hoàn tất',['class'=>'btn btn-success'])}}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('jquery')
    {!! Html::script("/js/parsley.min.js")!!}
@stop