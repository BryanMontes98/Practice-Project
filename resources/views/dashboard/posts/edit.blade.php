@extends('dashboard.master')
<br>
@section('content')
    <br><button type="button" class="btn btn-info ms-5"><a href="{{ route('post.index') }}" class="text-decoration-none text-light">Back</a></button>
@endsection

@section('morecontent')

    @include('dashboard.fragment._errors-form')

    <form action=" {{ route('post.update', $post->id) }} " method="post" enctype="multipart/form-data">

        @method('PATCH')
        @include('dashboard.fragment._post-form', ['task' => 'edit'])

    </form><br>

@endsection
