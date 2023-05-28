@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img class="rounded-circle p-5 w-100" src="{{$user->profile->profileImage()}}" alt=""/>
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <h1>{{ $user->username }}</h1>
                    @if($user->id != auth()->user()->id)
                        <follow-button user-id="{{$user->id}}" follows="{{ $follows }}"></follow-button>
                    @endif
                </div>    
                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pe-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pe-5"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                <div class="pe-5"><strong>{{ $user->following->count() }}</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
        </div>
    </div>
    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img class="w-100" src="/storage/{{ $post->image }}" alt="">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
