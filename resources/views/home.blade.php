@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img class="rounded-circle p-5" src="/images/profilepicture.jpeg" alt=""/>
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">freecodecamp.org</div>
            <div>We're a global community of millions of people learning to code together.
LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/</div>
            <a href="#">www.freecodecamp.org</a>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img class="w-100 h-100" src="/images/dummypost.jpeg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100 h-100" src="/images/dummypost.jpeg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100 h-100" src="/images/dummypost.jpeg" alt="">
        </div>
    </div>
</div>
@endsection
