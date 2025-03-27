@extends('dashboard.master')

@section('content')
    <div class="container">

        <div class="mt-2 mb-3">
            <button type="button" class="btn btn-secondary btn-lg"><a href="{{ route('category.index') }}" class="text-decoration-none text-white">Back</a></button>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <div><b class="fs-5">SHOW DATA: </b>{{ $category->title }}</div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="row col-6 p-2">
                                <div class="card p-3 ">
                                    <div><b>Title:</b> {{ $category->title }}</div>
                                </div>
                                <div class="card p-3 ">
                                    <div><b>Slug:</b> {{ $category->slug }}</div>
                                </div>
                                <div class="card p-3 ">
                                    <div><b>Create at:</b> {{ $category->created_at }}</div>
                                </div>
                            </div>
                            <div class="col-6 text-center">
                                <img src="../img/img-not-found.jpg" alt="{{ $category->title }}" width="200" height="200">
                                <div><b>Name image:</b> {{ $category->image ? $category->image : 'No image' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                            @endsection
