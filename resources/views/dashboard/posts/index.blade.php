@extends('dashboard.master')

@section('content')
@endsection

<br>

@section('morecontent')
<br><br>

    <button type="button" class="btn btn-success ms-5"><a href="{{ route('post.create'); }}" class="text-decoration-none" style="color: #fff">Crear</a></button>

    @include('dashboard.fragment._errors-form')

    <table class="table w-75 mx-auto">
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
                        <button type="button" class="btn btn-danger"><a href="{{ route('post.destroy', $p->id) }}" class="text-decoration-none" style="color: #fff">Eliminar</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    {{ $posts->links() }}
@endsection

