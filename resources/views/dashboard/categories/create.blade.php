@extends('dashboard.master')


@section('content')

    <div class="container">

        <div class="mt-3 mb-3">
            <button type="button" class="btn btn-secondary btn-lg"><a href="{{ route('category.index') }}" class="text-decoration-none text-white">Back</a></button>
        </div>

        @session('key')
            <h1>{{ session('key') }}</h1>
        @endsession

        @include('dashboard.fragment._errors-form')

        <form action="{{ route('category.store') }}" method="post">

            @csrf

            <div class="form-group">
                <div class="card mx-auto">
                    <div class="card-body">
                        <h2 class="w-100 text-center">Create a new category</h2><br>
                        <div class="form-group d-flex">
                            <div class="col-6 text-center">
                                <label for="">Title</label><br>
                                <input type="text" name="title"><br><br>
                            </div>
                            <div class="col-6 text-center">
                                <label for="">Slug</label><br>
                                <input type="text" name="slug"><br><br>
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit" value="Send" class="btn btn-success"><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
<br>

@section('morecontent')
@endsection
