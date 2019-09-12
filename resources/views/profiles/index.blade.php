@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fyyc3-1.fna.fbcdn.net/vp/d67866dfdab8b3c2ce0dd8f6dbd2a778/5E077EC3/t51.2885-15/e35/s150x150/58986771_2241173636143194_4566704359460022013_n.jpg?_nc_ht=instagram.fyyc3-1.fna.fbcdn.net&_nc_cat=106" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{$user->username}}</h1>
            <a href="">Add New Post</a>
        </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
        <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
        <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>    
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fyyc3-1.fna.fbcdn.net/vp/89985b402ceb2ccaaa16b6d435a702fb/5DF7B44F/t51.2885-15/sh0.08/e35/c9.0.732.732a/s640x640/67691728_433750673884849_8685861146630972849_n.jpg?_nc_ht=instagram.fyyc3-1.fna.fbcdn.net&_nc_cat=101" class="w-100">
        </div>
        <div class="col-4"> 
            <img src="https://instagram.fyyc3-1.fna.fbcdn.net/vp/e8f6877f2789aaad2bd6ef34469ebcde/5DF4CE66/t51.2885-15/sh0.08/e35/c1.0.747.747/s640x640/60581454_869432733405043_458079974647968282_n.jpg?_nc_ht=instagram.fyyc3-1.fna.fbcdn.net&_nc_cat=107" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fyyc3-1.fna.fbcdn.net/vp/89985b402ceb2ccaaa16b6d435a702fb/5DF7B44F/t51.2885-15/sh0.08/e35/c9.0.732.732a/s640x640/67691728_433750673884849_8685861146630972849_n.jpg?_nc_ht=instagram.fyyc3-1.fna.fbcdn.net&_nc_cat=101" class="w-100">
        </div>
    </div>
</div>
@endsection
