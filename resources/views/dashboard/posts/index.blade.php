@extends('dashboard.master')

@section('content')

    <div class="w-screen bg-white dark:bg-gray-800 shadow-sm">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 bg-white">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight w-5/6">
                {{ __('Post') }}
            </h2>
        </div>
    </div>

    <div class="container">

        <div class="flex flex-col items-center mx-auto w-75 mt-4">
            <div class="title-category">
                <h2>Table Posts</h2>
            </div>
        </div>


        <div class="container-btn-volver">
            <button type="button" class="btn btn-lg mb-3"><a href="{{ route('post.create') }}"
                    class="text-decoration-none">Create</a></button>
        </div>

        @include('dashboard.fragment._errors-form')

        @session('success')
            <div class="alert alert-success w-50 m-auto mb-4 text-center" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Posted</th>
                        <th>Category</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->title }}</td>
                            <td>{{ $p->posted }}</td>
                            <td>{{ $p->category->title }}</td>
                            <td>{{ $p->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-primary"><a href="{{ route('post.show', $p->id) }}"
                                        class="text-decoration-none">View</a></button>
                                <button type="button" class="btn btn-warning"><a href="{{ route('post.edit', $p->id) }}"
                                        class="text-decoration-none">Editar</a></button>
                                <form action="{{ route('post.destroy', $p->id) }}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <div class="paginate">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
