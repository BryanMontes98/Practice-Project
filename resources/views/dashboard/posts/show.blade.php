@extends('dashboard.master')
<br>
@section('content')
    <br><button type="button" class="btn btn-info ms-5"><a href="{{ route('post.index') }}"
            class="text-decoration-none text-light">Back</a></button>
@endsection

@section('morecontent')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <div><b class="fs-5">SHOW DATA: </b>{{ $post->title }}</div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="row col-6 p-2">
                                <div class="card p-3 ">
                                    <div><b>Title: </b> {{ $post->title }} .</div>
                                </div>
                                <div class="card p-3 ">
                                    <div><b>Content: </b> {{ $post->content }} .</div>
                                </div>
                                <div class="card p-3 ">
                                    <div><b>Description: </b> {{ $post->description }} .</div>
                                </div>
                                <div class="card p-3 ">
                                    <div><b>Posted: </b> {{ $post->posted }} .</div>
                                </div>
                                <div class="card p-3 ">
                                    <div><b>Create at: </b> {{ ucfirst($post->created_at->diffForHumans()); }} .</div>
                                </div>
                            </div>
                            <div class="mx-auto my-auto">
                                <img src="../../img/img-not-found.jpg" alt="{{ $post->title }}" width="200" height="200">
                                <div><b>Name image:</b> {{ $post->image ? $post->image : 'No image' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
