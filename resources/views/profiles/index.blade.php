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
            @can('update', $user->profile)
            <a href="/p/create">Add New Post</a>
            @endcan
            
            
        </div>
         @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile </a>
         @endcan

            <div class="d-flex">
            <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
        <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
        <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>    
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
        <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100">
            </a>
        </div>
        @endforeach
         
    </div>
</div>
@endsection
