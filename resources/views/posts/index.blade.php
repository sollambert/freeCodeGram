@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/p/{{ $post->id }}">
                    <img style="width: 50vw" src="/storage/{{$post->image}}" alt="">
                </a>
            </div>
            <div class="row pt-2 pb-4">
                <div class="col-6 offset-3">
                    <div>
                        <p>
                            <span>
                                <a class="pe-2 text-dark" href="/profile/{{$post->user->id}}" class="fw-bold">
                                    {{$post->user->username}}
                                </a>
                                {{$post->caption}}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{  $posts->links() }}
        </div>
    </div>
</div>
@endsection
