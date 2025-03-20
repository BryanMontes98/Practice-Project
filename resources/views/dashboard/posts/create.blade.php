@extends('dashboard.master')
<br>
@section('content')
    <br><button type="button" class="btn btn-info ms-5"><a href="{{ route('post.index') }}" class="text-decoration-none text-light">Back</a></button>
@endsection

@section('morecontent')

    @include('dashboard.fragment._errors-form')

    <form action=" {{ route('post.store') }} " method="post">

        @csrf

        <div class="form-group">
            <div class="card w-50 mx-auto">
                <div class="card-body">
                    <h2 class="w-100 text-center">Formulario Posts</h2><br>
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

                    <div class="form-group d-flex">
                        <div class="col-6 text-center">
                            <label for="">Description</label><br>
                            <textarea name="description"></textarea><br><br>
                        </div>
                        <div class="col-6 text-center">
                            <label for="">Content</label><br>
                            <input type="text" name="content"><br><br>
                        </div>
                    </div>

                    <div class="form-group d-flex">
                        <div class="col-6 text-center">
                            <label for="">Category</label><br>
                            <select name="category_id">
                                <option value="" selected disabled>Select an option</option>
                                @foreach ($category as $category)
                                    {
                                    <option value="{{ $category->id }}"> {{ $category->title }} </option>
                                    }
                                @endforeach
                            </select><br><br>
                        </div>
                        <div class="col-6 text-center">
                            <label for="">Posted</label><br>
                            <select name="posted">
                                <option value="" selected disabled>Select an option</option>
                                <option value="yes">Yes</option>
                                <option value="not">Not</option>
                            </select><br><br>
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Enviar" class="btn btn-success"><br><br>
                    </div>

                </div>
            </div>
        </div>
    </form><br>

@endsection
