@extends('dashboard.master')


@section('content')
    <h2>crear una nueva categoria</h2>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('category.store') }}" method="post">

        @csrf

        <label for="">Title</label>
        <input type="text" name="title"><br><br>

        <label for="">Slug</label>
        <input type="text" name="slug"><br><br>

        <input type="submit" value="enviar"><br><br>

    </form>
@endsection


@section('morecontent')
@endsection
