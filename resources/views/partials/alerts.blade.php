@if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning" role="alert">
        A simple danger alert—check it out!
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger" role="alert">
        A simple warning alert—check it out!
    </div>
@endif
