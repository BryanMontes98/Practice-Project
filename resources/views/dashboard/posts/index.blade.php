@extends('dashboard.master')

@section('content')
@endsection

<br>

@section('morecontent')
<br><br>

<div class="container">
    <button type="button" class="btn btn-success btn-lg mb-3"><a href="{{ route('post.create'); }}" class="text-decoration-none" style="color: #fff">Crear</a></button>

        @include('dashboard.fragment._errors-form')

        @session('success')
        <div class="alert alert-success w-50 m-auto mb-4 text-center" role="alert">
            {{ $value }}
        </div>
        @endsession

        <table class="table mx-auto">
            <thead class="table-dark text-center">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Posted</th>
                    <th>Category</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($posts as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->title }}</td>
                        <td>{{ $p->posted }}</td>
                        <td>{{ $p->category->title }}</td>
                        <td>{{ $p->created_at }}</td>
                        <td>
                            <button type="button" class="btn btn-primary"><a href="{{ route('post.show', $p->id); }}" class="text-decoration-none" style="color: #fff">View</a></button>
                            <button type="button" class="btn btn-warning"><a href="{{ route('post.edit', $p->id); }}" class="text-decoration-none" style="color: #fff">Editar</a></button>
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
        <br>
        <div class="w-100 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
</div>
@endsection

