@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <form id="post-form"
                method="POST"
                action="/profile/{{$user->id}}"
                enctype="multipart/form-data"
                >
                @csrf
                @method('PUT')

                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-end">
                        {{ __('Title') }}
                    </label>
                    <div class="col-md-6">
                        <input id="title"
                            type="text"
                            class="form-control @error('title') is-invalid @enderror"
                            name="title"
                            value="{{ old('title') ?? $user->profile->title }}"
                            required autocomplete="title" autofocus/>

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-end">
                        {{ __('Description') }}
                    </label>
                    <div class="col-md-6">
                        <input id="description"
                            type="text"
                            class="form-control @error('description') is-invalid @enderror"
                            name="description"
                            value="{{ old('description') ?? $user->profile->description  }}"
                            required autocomplete="description" autofocus/>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label text-md-end">
                        {{ __('Url') }}
                    </label>
                    <div class="col-md-6">
                        <input id="url"
                            type="text"
                            class="form-control @error('url') is-invalid @enderror"
                            name="url"
                            value="{{ old('url') ?? $user->profile->url }}"
                            required autocomplete="url" autofocus/>

                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="column">
                    <label for="image" class="pe-3 col-md-4 col-form-label text-md-end">
                        Avatar
                    </label>
                    <input type="file"
                        class="form-control-file ms-2"
                        id="image"
                        name="image">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <button class="btn btn-primary">Submit Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
