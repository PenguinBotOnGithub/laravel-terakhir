<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Bjirrrr</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/students">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/classes">Classes</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/extracurricular">Extracurricular</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
            </ul>

            @auth
                <div class="d-flex">
                    <ul class="navbar-nav collapse navbar-collapse">
                        <li class="nav-item">
                            <a href="/dashboard">Hello, {{ auth()->user()->name }}</a>
                        </li>
                        <li class="nav-item ms-3">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a class="btn btn-primary" type="button" href="/login">Login</a>
            @endauth
        </div>
    </div>
</nav>
