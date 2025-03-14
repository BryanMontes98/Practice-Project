@extends('dashboard.master')

@section('content')
    <h1>asd</h1>
@endsection

@section('morecontent')

    @include('dashboard.fragment._errors-form')

    <form action=" {{ route('post.store') }} " method="post">

        @csrf

        <label for="">Title</label>
        <input type="text" name="title"><br><br>

        <label for="">Slug</label>
        <input type="text" name="slug"><br><br>

        <label for="">Description</label>
        <textarea name="description"></textarea><br><br>

        <label for="">Content</label>
        <input type="text" name="content"><br><br>

        <label for="">Category</label>
        <select name="category_id">
            <option value="" selected disabled>Select an option</option>
            @foreach ($category as $category)
            {
                <option value="{{ $category->id }}"> {{ $category->title }} </option>
            }
            @endforeach
        </select><br><br>

        <label for="">Posted</label>
        <select name="posted">
            <option value="" selected disabled>Select an option</option>
            <option value="yes">Yes</option>
            <option value="not">Not</option>
        </select><br><br>

        <input type="submit" value="Enviar"><br><br>

    </form>
@endsection
