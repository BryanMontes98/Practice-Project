@extends('dashboard.master')
<br>
@section('content')
    <br><button type="button" class="btn btn-info ms-5"><a href="{{ route('post.index') }}" class="text-decoration-none text-light">Back</a></button>
@endsection

@section('morecontent')

    @include('dashboard.fragment._errors-form')

    <form action=" {{ route('post.update', $post->id) }} " method="post">

        @method('PATCH')
        @csrf

        <div class="form-group">
            <div class="card w-50 mx-auto">
                <div class="card-body">
                    <h2 class="w-100 text-center">Formulario Posts Edit</h2><br>
                    <div class="form-group d-flex">
                        <div class="col-6 text-center">
                            <label for="">Title</label><br>
                            <input type="text" name="title" class="col-8" value="{{ $post->title }}"><br><br>
                        </div>
                        <div class="col-6 text-center">
                            <label for="">Slug</label><br>
                            <input type="text" name="slug" class="col-8" value="{{ $post->slug }}"><br><br>
                        </div>
                    </div>

                    <div class="form-group d-flex">
                        <div class="col-6 text-center">
                            <label for="">Description</label><br>
                            <textarea name="description" class="col-8">{{ $post->description }}</textarea><br><br>
                        </div>
                        <div class="col-6 text-center">
                            <label for="">Content</label><br>
                            <input type="text" name="content" class="col-8" value="{{ $post->content }}"><br><br>
                        </div>
                    </div>

                    <div class="form-group d-flex">
                        <div class="col-6 text-center">
                            <label for="">Category</label><br>
                            <select name="category_id" class="col-8">
                                <option value="{{ ($post->category->id) ? $post->category->id : '' }}">{{ $post->category->title }}</option>
                                @foreach ($category as $category)
                                    {
                                    <option value="{{ $category->id }}"> {{ $category->title }} </option>
                                    }
                                @endforeach
                            </select><br><br>
                        </div>
                        <div class="col-6 text-center">
                            <label for="">Posted</label><br>
                            <select name="posted" class="col-8">
                                <option value="{{ ($post->posted) ? $post->posted : '' }}"> {{ $post->posted }} </option>
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
