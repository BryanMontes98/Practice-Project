@extends('dashboard.master')
<br>
@section('content')
    <br><button type="button" class="btn btn-info ms-5"><a href="{{ route('post.index') }}" class="text-decoration-none text-light">Back</a></button>
@endsection

@section('morecontent')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <h4 class="card-title text-center">Edit Post</h4>
                </div>
                <div class="d-flex mt-4 mb-4 p-4">
                    <div class="card-body col-6">
                        <div class="col-6">
                            <h4><b>Title:</b> {{ $post->title . '.' }}</h4>
                        </div>
                        <div class="col-6">
                            <h4><b>Content:</b> {{ $post->content . '.' }}</h4>
                        </div>
                        <div class="col-6">
                            <h4><b>Description:</b> {{ $post->description . '.' }}</h4>
                        </div>
                        <div class="col-6">
                            <h4><b>Posted:</b> {{ $post->posted . '.' }}</h4>
                        </div>
                    </div>
                    <div class="text-center col-6">
                        <div class="col-12 text-center">
                            <img src="{{ $post->image ? '../updates/posts/' . $post->image : '../img/img-not-found.jpg'}}" alt="{{ $post->title }}" width="200">
                            <h4><b>Title:</b> {{ $post->image ? $post->image . '.' : 'No Image' }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
