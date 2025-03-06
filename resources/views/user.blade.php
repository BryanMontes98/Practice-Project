@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Daftar Pengguna</h3>
                    {{ $datos[0] }} <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
