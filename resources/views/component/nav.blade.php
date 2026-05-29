<nav class="navbar navbar-expand-lg custom-navbar sticky-top">
    <div class="container py-2">
        <a class="navbar-brand brand-mark-wrap" href="">
            <span class="brand-mark">SM</span>
            <span class="brand-text">Student Manager</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 nav-links">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('student') }}">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('classes') }}">Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-2 nav-actions">
                <a class="btn btn-outline-light btn-sm nav-btn" href="#login">Login</a>
                <a class="btn btn-light btn-sm nav-btn nav-btn-primary" href="#register">Get Started</a>
            </div>
        </div>
    </div>
</nav>