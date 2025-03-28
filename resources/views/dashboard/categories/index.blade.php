@extends('dashboard.master')

@section('content')

    @session('success')
        <div class="alert alert-success w-50 m-auto mb-4 text-center" role="alert">
            {{ $value }}
        </div>
    @endsession

    <div class="container">

        <div class="text-center mt-3 mb-3">
            <h2>Index category</h2>
        </div>

        <div class="mb-3 text-center">
            <button type="button" class="btn btn-success btn-lg"><a href="{{ route('category.create') }}"
                    class="text-decoration-none text-white">Create</a></button>
        </div>


        <table class="table table-striped text-center">
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
        {{ $categories->links() }}
    </div>


@endsection
