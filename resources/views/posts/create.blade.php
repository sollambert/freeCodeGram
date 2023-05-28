@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <form id="post-form"
                method="POST"
                action="/p"
                enctype="multipart/form-data"
                >
                @csrf
                <div class="row">
                    <h1>Add New Post</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label text-md-end">
                        {{ __('Caption') }}
                    </label>
                    <div class="col-md-6">
                        <input id="caption"
                            type="text"
                            class="form-control @error('caption') is-invalid @enderror"
                            name="caption"
                            value="{{ old('caption') }}"
                            required autocomplete="caption" autofocus/>

                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="column">
                    <label for="image" class="col-md-4 col-form-label text-md-end">
                        Post Image
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
                    <button class="btn btn-primary">Add New Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
