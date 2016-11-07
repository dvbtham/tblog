@extends('layout')

@section('pageTitle','Danh sách bài viết')
@section('title','| Danh sách bài viết')

@section('content')
<button class="btn btn-sm btn-success btn-bottom-spacing">
    <a href="{{route('posts.create')}}">Thêm mới</a>
</button>

<div class="table-responsive">
    <table class="table table-bordered">
        <th>Mã bài viết</th>
        <th style="width: 255px">Tiêu đề</th>
        <th>Ngày đăng</th>
        <th>Ngày cập nhật</th>
        <th>Thao tác</th>
        <tbody>
           @foreach($posts as $pt)
           <tr>
            <td>{{ $pt->id }}</td>
            <td><a href="/posts/{{$pt->id}}">{{$pt->title}}</a></td>
            <td>{{ date('d/m/Y',strtotime($pt->created_at)) }}</td>
            <td>{{ date('d/m/Y',strtotime($pt->updated_at)) }}</td>
            <td class="text-center">
                <a href="/posts/{{$pt->id}}" title="Xem bài viết">
                    <i class="fa fa-eye text-success"></i>
                </a>|
                <a href="" title="Chỉnh sửa bài viết">
                    <i class="fa fa-edit text-success"></i>
                </a>|
                <a href="" title="Xóa bài viết">
                    <i class="fa fa-trash text-danger"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@stop
