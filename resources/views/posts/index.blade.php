@extends('layout')

@section('pageTitle','Danh sách bài viết')
@section('title','| Danh sách bài viết')
@include('partials._siteheading')
@section('content')
<a href="{{route('posts.create')}}" class="btn btn-sm btn-success btn-bottom-spacing">Thêm mới</a>

@section('style')
{!! Html::style("/css/modal.css")!!}
@stop
@include('modal')
<div class="table-responsive">
    <table class="table table-bordered table-fixed" data-toggle="dataTable" data-form="deleteForm">
        <thead>
            <tr>
                <th>ID</th>
                <th style="width: 255px">Tiêu đề</th>
                <th>Ngày đăng</th>
                <th>Ngày cập nhật</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
           @foreach($posts as $pt)
           <tr>
            <td>{{ $pt->id }}</td>
            <td><a href="{{ route('single.blog',$pt->slug) }}">{{$pt->title}}</a></td>
            <td>{{ date('d/m/Y',strtotime($pt->created_at)) }}</td>
            <td>{{ date('d/m/Y',strtotime($pt->updated_at)) }}</td>
            <td class="text-center">
                <a href="{{ route('posts.show',$pt->id) }}" title="Xem bài viết">
                    <i class="fa fa-eye text-success"></i>
                </a>|
                {{ Html::linkRoute('posts.edit',"",$pt->id,
                    ['class'=>'fa fa-edit text-success',
                    'title'=>'Chỉnh sửa bài viết']) }}

                {!! Form::model($pt,['route'=>['posts.destroy',$pt->id],'method'=>'delete',
                'class' =>'form-inline form-delete'])!!}
                {!! Form::hidden('id', $pt->id) !!}
                {!! Form::submit('Xóa', ['class' => 'btn btn-xs btn-danger delete', 'name' => 'delete_modal']) !!}
                {!! Form::close()!!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<ul class="paginationn">
        {!! $posts->links(); !!}
</ul>
@stop
@section('jquery')
{!! Html::script("/js/deleteConfirm.js")!!}
{!! Html::script("/js/alert-box.js")!!}
@stop
