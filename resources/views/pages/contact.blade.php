@extends('layout')
@section('title','| Liên hệ')
@section('pageTitle','Liên hệ với tôi - Thâm David')
@include('partials._siteheading')
@section('content')
<p>
Bạn hãy nhập đầy đủ thông tin ở mẫu bên dưới. Tôi sẽ phản hồi lại cho bạn trong vòng 24 tiếng đồng hồ.
</p>

<form name="sentMessage" id="contactForm" novalidate>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Họ tên</label>
            <input type="text" class="form-control" placeholder="họ và tên" id="name" required data-validation-required-message="Vui lòng nhập họ tên.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Email </label>
            <input type="email" class="form-control" placeholder="email" id="email" required data-validation-required-message="Vui lòng nhập email.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Số điện thoại</label>
            <input type="tel" class="form-control" placeholder="số điện thoại" id="phone" required data-validation-required-message="Vui lòng nhập số điện thoại.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Nội dung</label>
            <textarea rows="5" class="form-control" placeholder="nội dung tin nhắn" id="message" required data-validation-required-message="Vui lòng nhập nội dung."></textarea>
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <br>
    <div id="success"></div>
    <div class="row">
        <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-default">Gửi</button>
        </div>
    </div>
</form>
@stop