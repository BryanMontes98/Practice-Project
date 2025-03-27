@extends('dashboard.master')


@section('content')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">

        @csrf
        @method('PATCH')
        <div class="container">


            <div class=" w-50 mb-3">
                <button type="button" class="btn btn-secondary btn-lg"><a href="{{ route('category.index') }}" class="text-decoration-none text-white">Back</a></button>
            </div>
            <div class="card mx-auto">
                <div class="card-body">
                    <div class="container text-center mt-4 mb-4">
                        <h2>Edit category</h2>
                    </div>
                    <div class="form-group d-flex justify-content-around">
                        <div class="col-5 text-center">
                            <label for="">Title</label><br>
                            <input type="text" name="title" class="form-control" value="{{ $category->title }}"><br><br>
                        </div>
                        <div class="col-5 text-center">
                            <label for="">Slug</label><br>
                            <input type="text" name="slug" class="form-control" value="{{ $category->slug }}"><br><br>
                        </div>
                    </div>

                    <div class="form-group d-flex justify-content-around">
                        <div class="col-6 text-center mb-4">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Send" class="btn btn-success btn-lg"><br><br>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
<br>

@section('morecontent')
@endsection
