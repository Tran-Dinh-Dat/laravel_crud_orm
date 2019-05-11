@extends('layout.app')
@section('title')
    Home
@endsection
@section('content')
<div class="jumbotron">
    <div class="container">
        <h2>Chào mn!</h2>
        <p>Crud Basic</p>
        <p>
            <a href="{{url('products')}}" class="btn btn-primary btn-sm">Xem Thêm</a>
        </p>
    </div>
</div>
@endsection