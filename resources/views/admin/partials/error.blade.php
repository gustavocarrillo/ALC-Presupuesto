
@if(count($errors) > 0)
    <div class="alert alert-warning" role="alert">
        @foreach($errors->all() as $er)
            <p>{{ $er }}</p>
        @endforeach
    </div>
@endif