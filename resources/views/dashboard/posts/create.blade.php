@extends('dashboard.master')
<br>
@section('content')
    <br><button type="button" class="btn btn-info ms-5"><a href="{{ route('post.index') }}" class="text-decoration-none text-light">Back</a></button>
@endsection

@section('morecontent')

    @include('dashboard.fragment._errors-form')

    <form action=" {{ route('post.store') }} " method="post">

        @include('dashboard.fragment._post-form')

    </form><br>

@endsection
