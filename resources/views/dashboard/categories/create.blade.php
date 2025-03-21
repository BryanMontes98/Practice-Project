@extends('dashboard.master')


@section('content')
    <div class="container text-center mt-4 mb-4">
        <h2>Create a new category</h2>
    </div>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('category.store') }}" method="post">

        @csrf

        <div class="form-group">
            <div class="card w-50 mx-auto">
                <div class="card-body">
                    <h2 class="w-100 text-center">Formulary Posts</h2><br>
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
@endsection
<br>

@section('morecontent')
@endsection
