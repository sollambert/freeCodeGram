@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img style="width: 50vw" src="/storage/{{$post->image}}" alt="">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div>
                        <img class="w-100 rounded-circle me-3" style="max-width: 40px" src="{{$post->user->profile->profileImage()}}" alt="">
                    </div>
                    <div>
                        <a href="/profile{{$post->user->id}}" class="fw-bold text-dark">
                            {{$post->user->username}}
                        </a>
                        <a class="ps-3" href="#">Follow</a>
                    </div>
                </div>
                <hr>
                <p>
                    <span>
                        <a class="pe-2 text-dark" href="/profile{{$post->user->id}}" class="fw-bold">
                            {{$post->user->username}}
                        </a>
                        {{$post->caption}}
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
