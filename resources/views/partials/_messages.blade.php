@if (Session::has('success'))
    <div class="alert alert-success alert-global" role="alert">
        <strong>Success:</strong> {{Session::get('success')}}
    </div>
@endif

@if (count($errors) > 0)

    <div class="alert alert-danger alert-global" role="alert">
        <strong>Errors:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

{{-- Password Reset Flash --}}
@if (session('status'))
    <div class="alert alert-success alert-global">
        {{ session('status') }}
    </div>
@endif
{{----}}
