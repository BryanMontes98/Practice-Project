@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="alert">
            {{ $e }}
        </div>
    @endforeach
@endif
