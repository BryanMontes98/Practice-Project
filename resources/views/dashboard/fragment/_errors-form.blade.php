@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="alert alert-warning w-50 mx-auto">
            {{ $e }}
        </div>
    @endforeach
@endif
