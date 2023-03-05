<div class="mx-2">
@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show mt-2 " role="alert">
        <h4 class="alert-heading">{{ session('message') }}</h4>
    </div>
    <hr />

@endif
@if (session('error'))
    <div class="alert alert-light   pe-5" role="alert">
        <b>{{ session('error') }}</b>
    </div>
    <hr />

@endif
@if ($errors->any())
    <div class="alert alert-light   mt-2 px-2">
        {{-- <p><b>Please fix these errors.</b></p> --}}
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <hr />

@endif
</div>
