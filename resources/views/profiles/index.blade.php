@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-3 p-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/WLE_Austria_Logo_%28no_text%29.svg/140px-WLE_Austria_Logo_%28no_text%29.svg.png" alt="" >
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row">
        <div class="col-4 pt-5">
            <img src="https://scontent-frx5-1.cdninstagram.com/vp/cf6fe8fe271eaaf3a3fe4f78027975c2/5D72BA40/t51.2885-15/sh0.08/e35/s640x640/59671261_300909900824870_753589034962477580_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com" alt="" class="w-100">
        </div>
        <div class="col-4 pt-5">
            <img src="https://scontent-frx5-1.cdninstagram.com/vp/b7eafaebf5629a9509c8cc0473595323/5D50F83D/t51.2885-15/e35/55764841_116118912682605_8460689535092889415_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com" alt="" class="w-100">
        </div>
        <div class="col-4 pt-5">
            <img src="https://scontent-frx5-1.cdninstagram.com/vp/ca593cb55e00a39ceb43bf19efd46f98/5D54361C/t51.2885-15/sh0.08/e35/s640x640/57244862_513269102746206_599322833260649013_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com" alt="" class="w-100">
        </div>
    </div>

</div>
@endsection
