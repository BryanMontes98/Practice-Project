@extends('dashboard.master')

@section('content')

    <div class="bg-white dark:bg-gray-800 shadow-sm">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 bg-white">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight w-5/6">
                {{ __('Category') }}
            </h2>
        </div>
    </div>

    <div class="container">

        <div class="flex flex-col items-center mx-auto w-75 mt-4">
            <div class="title-category">
                <h2>Table Category</h2>
            </div>
        </div>

        @session('success')
            <div class="alert alert-success w-50 m-auto mb-2 mt-4 text-center" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="container-btn-volver">
            <button type="button" class="btn btn-lg mb-3"><a href="{{ route('category.create') }}"
                    class="text-decoration-none">Create</a></button>
        </div>

        <div class="table-responsive">
            <table class="table text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Created_at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>
                                <a href="{{ route('category.show', $category->id) }}" class="btn btn-info">Show</a>
                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('category.destroy', $category->id) }}" method="post"
                                    style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="paginate">
            {{ $categories->links() }}
        </div>
    </div>


@endsection
