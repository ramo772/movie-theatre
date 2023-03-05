<div class="mx-2">
    @if (session('message'))
        <div class="alert alert-dark alert-dismissible fade show mt-2 " role="alert">
            <p style="color:white">{{ session('message') }}</p>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show pe-5" role="alert">
            <b>{{ session('error') }}</b>
        </div>
    @endif
    @if ($errors->any())
        <div id="alert" class="alert alert-danger alert-dismissible fade show mt-2 px-2">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<script>

    setTimeout(function() {
    $('.alert').fadeOut('fast');
}, 3000); // <-- time in milliseconds
</script>
