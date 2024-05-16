@php
    use Illuminate\Support\Facades\Route;
@endphp

<header class="mb-5">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                    <a class="nav-link" href=" {{ route('comics.index') }} ">Comics</a>
                </div>
            </div>
        </div>
    </nav>
</header>
